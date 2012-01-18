<?php defined('SYSPATH') or die('No direct script access.');

class Model_Forecasthandler extends Model
{
	/*
	 * Call forecastmodel to collect xml
	 * Return xml or false
	 */
	
    public function get_xml($country, $region, $city)
    {
     	//Create instance of forecastmodel
     	$forecastmodel = Model::factory('forecastmodel');
		
		//Get xml from model
		$forecastXML = $forecastmodel->get_xml($country, $region, $city);
		
		//Return false or xml
		if($forecastXML === false)
		{
			return false;
		} 
		else
		{
			return $forecastXML;
		}
    }
	
	/*
	 * Parse xml into forecast objects, a five day prognosis
	 */ 
	public function get_default_forecast_objects($xml)
	{
		$simplexml = simplexml_load_string($xml);
		
		//Collect all time entries
		/*
		 * TODO Check if times is OK
		 */
		$times = $simplexml->xpath('//time');
		
		//The date five days from now
		$fivedays = date('Y-m-d', strtotime('+5 days'));
		
		//Array to contain forecastobjects
		$fObjects = array();
		
		//Loop through all time entries
		foreach($times as $t)
		{
			$fromtime = strtotime($t['from']);
			/*
			 * TODO Make sure fromtime is OK
			 */
			//Proceed if time is within five days
			if($fromtime < strtotime($fivedays))
			{
				//Create objects
				/*
				 * TODO Validate all values
				 */
				$default = new Forecast_Default();
				$default->setFromTime($fromtime);
				$default->setToTime(strtotime($t['to']));
				$default->setPeriod($t['period']);
				$default->setSymbol($t->symbol['number']);
				$default->setSymbolName($t->symbol['name']);
				$default->setTemperature($t->temperature['value']);
				
				//Push object to array
				array_push($fObjects, $default);
			}
		}
		
		return $fObjects;
	}

	/*
	 * Parse xml into a detailed forecast object
	 */ 
	public function get_detailed_forecast_object($xml, $date, $period)
	{
		$simplexml = simplexml_load_string($xml);
		
		//Collect all time entries
		/*
		 * TODO Check if times is OK
		 */
		$times = $simplexml->xpath('//time');

		//Loop through all time entries
		foreach($times as $t)
		{
			$fromtime = date('Ymd', strtotime($t['from']));
			
			if($fromtime === $date AND $t['period'] == $period)
			{
				//Create objects
				/*
				 * TODO Validate all values
				 * 		Constants!
				 */

				$detailed = new Forecast_Detailed();
				$detailed->setFromTime(strtotime($t['from']));
				$detailed->setToTime(strtotime($t['to']));
				$detailed->setPeriod($t['period']);
				$detailed->setSymbol($t->symbol['number']);
				$detailed->setSymbolName($t->symbol['name']);
				$detailed->setTemperature($t->temperature['value']);
				$detailed->setPrecipitation($t->precipitation['value']);
				$detailed->setPressure($t->pressure['value']);
				$detailed->setWindDirection($t->windDirection['name']);
				$detailed->setWindDirectionDeg($t->windDirection['deg']);
				$detailed->setWindSpeed($t->windSpeed['mps']);
				
				return $detailed;
			}
		}
	}
}