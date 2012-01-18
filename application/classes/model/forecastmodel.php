<?php defined('SYSPATH') or die('No direct script access.');

class Model_Forecastmodel extends Model
{
    public function get_xml($country, $region, $city)
    {
    	/*
		 * TODO Validate country, region and city before adding them to url
		 */
		
		$country = rawurlencode($country);
		$region = rawurlencode($region);
		$city = rawurlencode($city);
     	$url = "http://www.yr.no/place/$country/$region/$city/forecast.xml";   	
		
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
			/*
			 * TODO Ordentligt felmeddelande
			 */	
			return false;
		}
    }
}