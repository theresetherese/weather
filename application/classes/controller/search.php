<?php defined('SYSPATH') or die('No direct script access.');

/*
 * Calls forecasthandler for xml-data based on request parameters.
 * Responds with detailed or default view for forecasts.
 */

class Controller_Search extends Controller {
		
	public function action_index()
	{
		if($this->request->query('lat') AND $this->request->query('long'))
		{
			$this->search_geo();
		}
		else if($this->request->param('city'))
		{
			$this->search_query();
		}
		else{
			$this->response->status(400);
			$this->response->body('A search must contain coords or a query.');
		}
	}	
	
	public function search_query()
	{		
		$templocation = new Location();
		$templocation->setCity($this->request->param('city'));
		$page = $this->request->param('page');
		$json = $this->request->param('json');
		
		$xml = $this->cache($templocation, $page);
		
		$searchhandler = Model::factory('searchhandler');
		if($locations = $searchhandler->create_location_object_from_query($xml))
		{
			if(is_null($json) OR empty($json))
			{	
				$view = View::factory('search/results');
				$view->locations = $locations;
				$view->pageNr = $page;
				$view->query = $templocation->getCity();
				
				$this->response->status(200);
				$this->response->body($view);
			}
			else
			{
				$this->response->body($this->createQueryJson($locations));
			}
		}
		else{
			$this->response->status(400);
			$this->response->body('The location could not be found.');
		}
	}
	
	public function search_geo()
	{
		$templocation = new Location();	
		$templocation->setLat($this->request->query('lat'));
		$templocation->setLong($this->request->query('long'));
		$json = $this->request->param('json');
		
		$xml = $this->cache($templocation);
		$searchhandler = Model::factory('searchhandler');
		
		if($location = $searchhandler->create_location_object_from_coords($xml))
		{
			if(is_null($json) OR empty($json))
			{	
				$city = $location->getCity();
				$region = $location->getRegion();
				$country = $location->getCountry();
				
				$this->response->status(200);
				$this->response->body("$country/$region/$city");
			}
			else
			{
				$this->response->body($this->createGeoJson($location));
			}
		}
		else{
			$this->response->status(400);
			$this->response->body('The location could not be found.');
		}
	}
	
	public function cache(Location $location, $page = NULL)
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
		
		$lat = $location->getLat();
		$long = $location->getLong();
		$city = $location->getCity();

		if (is_array($page) OR is_null($page))
		{
			$page = 0;
		}

		//Check for cached xml
		if ($xml = Cache::instance('file')->get($city . "_" . $page, FALSE))
		{			
		    return $xml;
		}
		else if($xml = Cache::instance('file')->get("$lat,$long", FALSE))
		{
			return $xml;
		}
		else
		{
			$searchhandler = Model::factory('searchhandler');
			$xml = $searchhandler->get_location($location, $page);
			
			//Find out how many seconds until midnigt
			$week = strtotime('+1 week');
			
			if(!is_null($city))
			{
				Cache::instance('file')->set($city . "_" . $page, $xml, $week);
			}
			else if(!is_null($lat) AND !is_null($long))
			{
				Cache::instance('file')->set("$lat,$long", $xml, $week);
			}
			
			return $xml;
		}
	}

	public function createGeoJson(Location $l)
	{
		$tempArray = array();	
		$tempArray['city'] = $l->getCity();
		$tempArray['region'] = $l->getRegion();
		$tempArray['country'] = $l->getCountry();
		$tempArray['latitude'] = $l->getLat();
		$tempArray['longitude'] = $l->getLong();
		
		return json_encode($tempArray);
	}
	
	public function createQueryJson($locations)
	{
		$jsonObjects = array();
		$tempArray = array();
		
		foreach ($locations as $l) {
			$tempArray['city'] = $l->getCity();
			$tempArray['region'] = $l->getRegion();
			$tempArray['country'] = $l->getCountry();
			$tempArray['latitude'] = $l->getLat();
			$tempArray['longitude'] = $l->getLong();
			
			array_push($jsonObjects, $tempArray);
		}
		
		return json_encode($jsonObjects);
	}

}