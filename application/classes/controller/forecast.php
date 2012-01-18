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
		$location = new Location();
		$location->country = $this->request->param('country');
		$location->region = $this->request->param('region');
		$location->city = $this->request->param('city');
		
		$date = $this->request->param('date');
		$period = $this->request->param('period');
		$json = $this->request->param('json');
		
		
		//Control that city, region and country is returned correctly.
		if(!is_null($location->city) AND !is_null($location->region) AND !is_null($location->country))
		{
			//Check if data is cached, else request new data and cache it
			if($xml = $this->get_xml($location))
			{
				//If date and period is set, then call for a detailed forecast object
				if(!is_null($date) AND !is_null($period))
				{
					//Send xml to handler and create objects
					$fObjects = $fHandler->get_detailed_forecast_object($xml, $date, $period);
					
					//Respond with an html view or JSON
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
					
					//Respond with an html view or JSON	
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
				$view->country = urldecode($location->country);
				$view->region = urldecode($location->region);
				$view->city = urldecode($location->city);
				
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
		//Country, region or city is null
		else
		{
			$this->response->status(400);
			$this->response->body('Can not find valid country, region and city in the url. Valid example: http://thisapp.com/sweden/kalmar/hultsfred/' );
		}
	}


	/*
	 * Create JSON from a detailed forecast-object
	 */
	public function createDetailedJson(Forecast_Detailed $f)
	{		
		$tempArray = array();
		
		$tempArray['fromTime'] = (int)$f->fromTime;
		$tempArray['toTime'] = (int)$f->toTime;
		$tempArray['period'] = (int)$f->period;
		$tempArray['symbol'] = (int)$f->symbol;
		$tempArray['symbolName'] = (string)$f->symbolName;
		$tempArray['temperature'] = (int)$f->temperature;
		$tempArray['precipitation'] = (int)$f->precipitation;
		$tempArray['windDirectionDegrees'] = (double)$f->windDirectionDeg;
		$tempArray['windDirection'] = (string)$f->windDirection;
		$tempArray['windSpeed'] = (double)$f->windSpeed;
		$tempArray['pressure'] = (double)$f->pressure;
		
		return json_encode($tempArray);
			
	}
	
	/*
	 * Create JSON from multiple forecast-objects
	 */
	public function createDefaultJson($fObjects)
	{		
		$jsonObjects = array();
		$tempArray = array();
		foreach ($fObjects as $f) {	
			$tempArray['fromTime'] = (int)$f->fromTime;
			$tempArray['toTime'] = (int)$f->toTime;
			$tempArray['period'] = (int)$f->period;
			$tempArray['symbol'] = (int)$f->symbol;
			$tempArray['symbolName'] = (string)$f->symbolName;
			$tempArray['temperature'] = (int)$f->temperature;
				
			array_push($jsonObjects, $tempArray);
		}
		return json_encode($jsonObjects);
			
	}
	
	/*
	 * Check if forecast is cached
	 * Retrieve xml from cache or call handler for a new request to YR.no
	 */
	public function get_xml(Location $location)
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
		if ($xml = $memcache->get("$location->country/$location->region/$location->city", FALSE))
		{
		    	
		    return $xml;
		}
		else
		{
		     $fHandler = Model::factory('forecasthandler');
			 $xml = $fHandler->get_xml($location);	
			 	
			 //Find out how many seconds until midnigt
			 $tomorrowMidnight = mktime(0, 0, 0, date('n'), date('j') + 1);
			 $now = time();
			 $seconds = $tomorrowMidnight - $now;
			 //Save in cache
			 $memcache->set("$location->country/$location->region/$location->city", $xml, $seconds);
			 return $xml;
		}
	}

}
