<?php defined('SYSPATH') or die('No direct script access.');

/*
 * Calls forecasthandler for xml-data based on request parameters.
 * Responds with detailed or default view for forecasts.
 */

class Controller_Forecast extends Controller {
	
	public function action_index()
	{		
		//Create forecastehandler
		$fHandler = Model::factory('forecasthandler');
		
		//Retrieve request params
		$country = $this->request->param('country');
		$region = $this->request->param('region');
		$city = $this->request->param('city');
		$date = $this->request->param('date');
		$period = $this->request->param('period');
		$json = $this->request->param('json');
		
		//Control that city, region and country is returned correctly.
		if(!is_null($city) AND !is_null($region) AND !is_null($country))
		{
			//Check if data is cached, else request new data and cache it
			if($xml = $this->get_xml($country, $region, $city))
			{
				//If date and period is set, then call for a detailed forecast object
				if(!is_null($date) AND !is_null($period))
				{
					//Send xml to handler and create objects
					$fObjects = $fHandler->get_detailed_forecast_object($xml, $date, $period);
					/*
					 * TODO Check if fObject really contains the right objects
					 */
					
					if(is_null($json) OR empty($json))
					{
						//Create view
						$view = View::factory('forecast/detailedtable');
					}
					else 
					{
						$this->response->body($this->createDetailedJson($fObjects));
						return;
					}
				}
				//If only date or period is set, send error message 
				else if(!is_null($date) AND is_null($period) OR !is_null($period) AND is_null($date))
				{
					$this->response->status(400);
					$this->response->body('Can not find valid date and period in the url. Valid example: http://thisapp.com/sweden/kalmar/hultsfred/20120105/3');
					return;
				}
				//Call for a fiveday-forecast
				else
				{
					//Send xml to handler and create objects
					$fObjects = $fHandler->get_default_forecast_objects($xml);
					/*
					 * TODO Check if fObjects really contains the right objects
					 */
						
					if(is_null($json) OR empty($json))
					{
						//Create view
						$view = View::factory('forecast/defaulttable');
					}
					else 
					{
						$this->response->body($this->createDefaultJson($fObjects));
						return;
					}
				}
				
				//Bind forecastobjects and location to the view
				$view->forecasts = $fObjects;
				$view->country = $country;
				$view->region = $region;
				$view->city = $city;
		
				//Add view to template
				$this->response->status(200);
				$this->response->body($view);
				
			}
			//Send error message that data could not be retrieved 
			else 
			{
				$this->response->status(500);
				$this->response->body('Could not retrieve data.' );
	
			}
		}
		//Country, region or city is == null
		else
		{
			$this->response->status(400);
			$this->response->body('Can not find valid country, region and city in the url. Valid example: http://thisapp.com/sweden/kalmar/hultsfred/' );
		}
	}



	public function createDetailedJson(Forecast_Detailed $f){
		
		$tempArray = array();
		
		$tempArray['fromTime'] = (int)$f->getFromTime();
		$tempArray['toTime'] = (int)$f->getToTime();
		$tempArray['period'] = (int)$f->getPeriod();
		$tempArray['symbol'] = (int)$f->getSymbol();
		$tempArray['symbolName'] = (string)$f->getSymbolName();
		$tempArray['temperature'] = (int)$f->getTemperature();
		$tempArray['precipitation'] = (int)$f->getPrecipitation();
		$tempArray['windDirectionDegrees'] = (double)$f->getWindDirectionDeg();
		$tempArray['windDirection'] = (string)$f->getWindDirection();
		$tempArray['windSpeed'] = (double)$f->getWindSpeed();
		$tempArray['pressure'] = (double)$f->getPressure();
		
		return json_encode($tempArray);
			
	}
	
	public function createDefaultJson($fObjects){
		
		$jsonObjects = array();
		$tempArray = array();
		foreach ($fObjects as $f) {	
			$tempArray['fromTime'] = (int)$f->getFromTime();
			$tempArray['toTime'] = (int)$f->getToTime();
			$tempArray['period'] = (int)$f->getPeriod();
			$tempArray['symbol'] = (int)$f->getSymbol();
			$tempArray['symbolName'] = (string)$f->getSymbolName();
			$tempArray['temperature'] = (int)$f->getTemperature();
			
			array_push($jsonObjects, $tempArray);
		}
		return json_encode($jsonObjects);
			
	}



	public function get_xml($country, $region, $city)
	{
		// Check for the existance of the cache driver
		if(isset(Cache::$instances['file']))
		{
		     // Get the existing cache instance
		     $memcache = Cache::$instances['file'];
		}
		else
		{
		     // Get the cache driver instance
		     $memcache = Cache::instance('file');
		}
		
		//Check for cached xml
		if ($xml = Cache::instance('file')->get("$country/$region/$city", FALSE))
		{			
		    return $xml;
		}
		else
		{
		     $fHandler = Model::factory('forecasthandler');
			 $xml = $fHandler->get_xml($country, $region, $city);
			 
			 //Find out how many seconds until midnigt
			 $tomorrowMidnight = mktime(0, 0, 0, date('n'), date('j') + 1);
			 $now = time();
			 $seconds = $tomorrowMidnight - $now;
			 
			 Cache::instance('file')->set("$country/$region/$city", $xml, $seconds);
			 return $xml;
		}
	}

}
