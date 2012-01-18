<?php defined('SYSPATH') or die('No direct script access.');

/*
 * Calls forecasthandler for xml-data based on request parameters.
 * Responds with detailed or default view for forecasts.
 */

class Controller_Search extends Controller {
		
	
	/*
	 * Check if the request contains coordinates or a searh query
	 * Call search_query() or search_geo()
	 */	
	public function action_index()
	{
		try
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
				throw new HTTP_Exception_400(Kohana::message('search', 'coords_or_query'));
			}
		}
		catch(Exception $e)
		{
			Kohana::$log->add(Log::ERROR, $e->getMessage());
			$this->response->status(400);
			$this->response->body($e->getMessage());
		}
	}	
	
	/*
	 * Get locations based on the search query
	 * Respond with view of search results
	 */
	public function search_query()
	{		
		$templocation = new Location();
		$templocation->city = $this->request->param('city');
		$page = $this->request->param('page');
		$json = $this->request->param('json');
		
		if(strlen($templocation->city) === 0)
		{
			$this->response->status(400);
			$this->response->body('Verify that your search query only contains letters and try again.');
		}
		else
		{
			$xml = $this->cache($templocation, $page);
			
			$searchhandler = Model::factory('searchhandler');
			if($locations = $searchhandler->create_location_object_from_query($xml))
			{
				if(is_null($json) OR empty($json))
				{	
					$view = View::factory('search/results');
					$view->locations = $locations;
					$view->pageNr = $page;
					$view->query = $templocation->city;
					
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
	}
	
	/*
	 * Get location based on coordinates
	 * Respond with string County/Region/City
	 */
	public function search_geo()
	{
		$templocation = new Location();	
		$templocation->lat = $this->request->query('lat');
		$templocation->long = $this->request->query('long');
		$json = $this->request->param('json');
		
		$xml = $this->cache($templocation);
		$searchhandler = Model::factory('searchhandler');
		
		if($location = $searchhandler->create_location_object_from_coords($xml))
		{
			if(is_null($json) OR empty($json))
			{	
				$city = $location->city;
				$region = $location->region;
				$country = $location->country;
				
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
	
	/*
	 * Check if search query or coordinates exists in cache
	 * Get xml from cache or send to handler and perform a new request to Geonames
	 */
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
		
		$lat = $location->lat;
		$long = $location->long;
		$city = $location->city;

		if (is_array($page) OR is_null($page))
		{
			$page = 0;
		}

		//Check for cached xml
		if ($xml = $memcache->get($city . "_" . $page, FALSE))
		{			
		    return $xml;
		}
		else if($xml = $memcache->get("$lat,$long", FALSE))
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
				$memcache->set($city . "_" . $page, $xml, $week);
			}
			else if(!is_null($lat) AND !is_null($long))
			{
				$memcache->set("$lat,$long", $xml, $week);
			}
			
			return $xml;
		}
	}
	
	/*
	 * Create JSON from a single location
	 */
	public function createGeoJson(Location $l)
	{
		$tempArray = array();	
		$tempArray['city'] = $l->city;
		$tempArray['region'] = $l->region;
		$tempArray['country'] = $l->country;
		$tempArray['latitude'] = $l->lat;
		$tempArray['longitude'] = $l->long;
		
		return json_encode($tempArray);
	}
	
	/*
	 * Create JSON of multiple locations
	 */
	public function createQueryJson($locations)
	{
		$jsonObjects = array();
		$tempArray = array();
		
		foreach ($locations as $l) {
			$tempArray = array();	
			$tempArray['city'] = $l->city;
			$tempArray['region'] = $l->region;
			$tempArray['country'] = $l->country;
			$tempArray['latitude'] = $l->lat;
			$tempArray['longitude'] = $l->long;
			
			array_push($jsonObjects, $tempArray);
		}
		
		return json_encode($jsonObjects);
	}

}