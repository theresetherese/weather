<?php defined('SYSPATH') or die('No direct script access.');

class Model_Searchmodel extends Model
{
    public function get_location(Location $location, $page)
    {
     	if($location->getLat() AND $location->getLong())
     	{
     		$lat = $location->getLat();
			$long = $location->getLong();	
     		$url = "http://api.geonames.org/findNearbyPlaceName?lat=$lat&lng=$long&username=ts222ay&style=FULL";   	
		}
		else if($location->getCity())
		{
			$maxRows = 10;
			$city = $location->getCity();
					
			if($page != 0)
			{
				$startFrom = $maxRows * $page;
				$url = "http://api.geonames.org/search?q=$city&maxRows=$maxRows&style=full&username=ts222ay&featureClass=P&startRow=$startFrom";
			}	
			else{
				$url = "http://api.geonames.org/search?q=$city&maxRows=$maxRows&style=full&username=ts222ay&featureClass=P";
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
			/*
			 * TODO Ordentligt felmeddelande
			 */	
			return false;
		}
    }
}