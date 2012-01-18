<?php defined('SYSPATH') or die('No direct script access.');

class Model_Searchmodel extends Model
{
    public function get_location(Location $location, $page)
    {
     	if($location->lat AND $location->long)
     	{
     		$lat = $location->lat;
			$long = $location->long;	
     		$url = "http://api.geonames.org/findNearbyPlaceName?lat=$lat&lng=$long&username=ts222ay&style=FULL";   	
		}
		else if($location->city)
		{
			$maxRows = 10;
			$city = $location->city;
					
			if($page != 0)
			{
				$startFrom = $maxRows * $page;
				$url = "http://api.geonames.org/search?name=$city&maxRows=$maxRows&style=full&username=ts222ay&featureClass=P&startRow=$startFrom";
			}	
			else{
				$url = "http://api.geonames.org/search?name=$city&maxRows=$maxRows&style=full&username=ts222ay&featureClass=P";
			}
			
			
		}
		else{
			return false;
		}
		
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
				if($response->headers('Content-Type') === 'text/xml;charset=UTF-8')
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