<?php defined('SYSPATH') or die('No direct script access.');

/*
 * Default forecast class. Forecast_Detailed extends this class. 
 * 
 */

class Forecast_Default
{
    //Members	
    private $fromTime = "";
	private $toTime = "";
	private $period = NULL;
    private $symbol = "";
	private $symbolName = "";
	private $temperature = NULL;
	
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