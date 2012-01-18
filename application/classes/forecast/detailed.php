<?php defined('SYSPATH') or die('No direct script access.');

class Forecast_Detailed extends Forecast_Default
{
    private $precipitation = NULL;
	private $windDirectionDeg = NULL;
	private $windDirection = "";
	private $windSpeed = NULL;
	private $pressure = NULL;
	
	
	public function __get($prop)
	{
		if(isset($prop))
		{	
			return $this->$prop;
		}
	}
	
	public function __set($prop, $value)
	{
		$this->$prop = HTML::chars($value);
	}
	
}