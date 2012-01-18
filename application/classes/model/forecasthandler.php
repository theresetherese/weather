<?php defined('SYSPATH') or die('No direct script access.');

class Model_Forecasthandler extends Model
{
	/*
	 * Call forecastmodel to collect xml
	 * Return xml or false
	 */
	
    public function get_xml(Location $location)
    {
     	try
     	{
	     	//Create instance of forecastmodel
	     	$forecastmodel = Model::factory('forecastmodel');
			
			//Get xml from model
			$forecastXML = $forecastmodel->get_xml($location);
			
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
		catch (Exception $e)
		{
			Kohana::$log->add(Log::ERROR, $e->getMessage());
			return false;
		}
    }
	
	/*
	 * Parse xml into forecast objects, a five day prognosis
	 */ 
	public function get_default_forecast_objects($xml)
	{
		try{
			$simplexml = simplexml_load_string($xml);
			
			//Collect all time entries
			$times = $simplexml->xpath('//time');
			
			//The date five days from now
			$fivedays = date('Y-m-d', strtotime('+5 days'));
			
			//Array to contain forecastobjects
			$fObjects = array();
			
			//Loop through all time entries
			foreach($times as $t)
			{
				$fromtime = strtotime($t['from']);
	
				//Proceed if time is within five days
				if($fromtime < strtotime($fivedays))
				{
					//Create objects
					$default = new Forecast_Default();
					$default->fromTime = $fromtime;
					$default->toTime = strtotime($t['to']);
					$default->period = $t['period'];
					$default->symbol = $t->symbol['number'];
					$default->symbolName = $t->symbol['name'];
					$default->temperature = $t->temperature['value'];
					
					//Push object to array
					array_push($fObjects, $default);
				}
			}
			
			return $fObjects;
		}
		catch(Exception $e)
		{
			Kohana::$log->add(Log::ERROR, $e->getMessage());
			return false;
		}
    }

	/*
	 * Parse xml into a detailed forecast object
	 */ 
	public function get_detailed_forecast_object($xml, $date, $period)
	{
		try
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
					$detailed = new Forecast_Detailed();
					$detailed->fromTime = $fromtime;
					$detailed->toTime = strtotime($t['to']);
					$detailed->period = $t['period'];
					$detailed->symbol = $t->symbol['number'];
					$detailed->symbolName = $t->symbol['name'];
					$detailed->temperature = $t->temperature['value'];
					$detailed->precipitation = $t->precipitation['value'];
					$detailed->pressure = $t->pressure['value'];
					$detailed->windDirection = $t->windDirection['name'];
					$detailed->windDirectionDeg = $t->windDirection['deg'];
					$detailed->windSpeed = $t->windSpeed['mps'];
					
					return $detailed;
				}
			}
		}
		catch(Request_Exception $e)
		{
			Kohana::$log->add(Log::ERROR, $e->getMessage());
			return false;
		}
	}
}