<?php defined('SYSPATH') or die('No direct script access.');

class Model_Forecastmodel extends Model
{
    public function get_xml(Location $location)
    {
		$location->country = rawurlencode($location->country);
		$location->region = rawurlencode($location->region);
		$location->city = rawurlencode($location->city);
     	$url = "http://www.yr.no/place/$location->country/$location->region/$location->city/forecast.xml";   	
		
		try
		{
			//Create request instance	
			$request = Request::factory($url);
			
			//Execute request
			$response = $request->execute();

			//Response is ok if status === 200 or 304
			if($response->status() === 200 OR $response->status() === 304)
			{
				//Check the content-type, only xml is ok
				if($response->headers('Content-Type') === 'text/xml; charset=utf-8')
				{
					return $response;
				}
				//Response was not xml
				else
				{
					return false;	
				}
			}
			//Something with the request went wrong
			else 
			{
				return false;
			}
		}
		//Request could not be created or executed
		catch(Request_Exception $e)
		{
			Kohana::$log->add(Log::ERROR, $e->getMessage());
			return false;
		}
    }
}