<?php defined('SYSPATH') or die('No direct script access.');

class Location 
{
	private $city = NULL;
	private $region = NULL;
	private $country = NULL;
	private $lat = NULL;
	private $long = NULL;
	
	
	public function getCity(){
		return $this->city;
	}

	public function setCity($_city){
		$this->city = $_city;
	}

	public function getRegion(){
		return $this->region;
	}

	public function setRegion($_region){
		$this->region = $_region;
	}

	public function getCountry(){
		return $this->country;
	}

	public function setCountry($_country){
		$this->country = $_country;
	}

	public function getLat(){
		return $this->lat;
	}

	public function setLat($_lat){
		$this->lat = $_lat;
	}

	public function getLong(){
		return $this->long;
	}

	public function setLong($_long){
		$this->long = $_long;
	}	
}