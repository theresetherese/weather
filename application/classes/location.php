<?php defined('SYSPATH') or die('No direct script access.');

class Location 
{
	private $city = NULL;
	private $region = NULL;
	private $country = NULL;
	private $lat = NULL;
	private $long = NULL;
	
	
	public function __get($prop)
	{
		if(isset($prop))
		{	
			return $this->$prop;
		}
	}
	
	public function __set($prop, $value)
	{
		$value = strip_tags($value);	
		$this->$prop = HTML::chars($value);
	}
}