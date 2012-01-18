<?php defined('SYSPATH') or die('No direct script access.');

class Model_Searchhandler extends Model
{
	/*
	 * Call forecastmodel to collect xml
	 * Return xml or false
	 */
	
    public function get_location($location, $page = NULL)
    {
     	//Create instance of forecastmodel
     	$searchmodel = Model::factory('searchmodel');
		
		//Get xml from model
		$searchXML = $searchmodel->get_location($location, $page);
		
		//Return false or xml
		if($searchXML === false)
		{
			return false;
		} 
		else
		{
			return $searchXML;
		}
    }
	
	public function create_location_object_from_coords($xml)
	{
		$simplexml = simplexml_load_string($xml);
		
		if($object = $simplexml->xpath('//geoname'))
		{
			return $this->setLocation($object);
		}
		return false;
	}
	
	public function create_location_object_from_query($xml)
	{
		$simplexml = simplexml_load_string($xml);
		$totalcount = $simplexml->xpath('totalResultsCount');
		
		if($totalcount > 0)
		{
			$objects = $simplexml->xpath('//geoname');
			$locations = array();
			foreach ($objects as $object) {
				$location = $this->setLocation($object);
				array_push($locations, $location);
			}
			return $locations;
		}
		else
		{
			return false;
		}
	}
	
	public function setLocation($object)
	{
		$location = new Location();
		$location->city = (string)$object[0]->name;
		$location->region = (string)$object[0]->adminName1;
		$location->country = (string)$object[0]->countryName;
		$location->lat = (float)$object[0]->lat;
		$location->long = (float)$object[0]->lng;
		
		return $location;
	}
}