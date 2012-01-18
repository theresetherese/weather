<?php defined('SYSPATH') or die('No direct script access.');

class Forecast_Detailed extends Forecast_Default
{
    private $precipitation = NULL;
	private $windDirectionDeg = NULL;
	private $windDirection = "";
	private $windSpeed = NULL;
	private $pressure = NULL;
	
	
	/*
	 * GETTERS & SETTERS
	 */
	
	public function getPrecipitation(){
		return $this->precipitation;
	}

	public function setPrecipitation($_precipitation){
		$this->precipitation = $_precipitation;
	}

	public function getWindDirection(){
		return $this->windDirection;
	}

	public function setWindDirection($_windDirection){
		$this->windDirection = $_windDirection;
	}

	public function getWindDirectionDeg(){
		return $this->windDirectionDeg;
	}

	public function setWindDirectionDeg($_windDirectionDeg){
		$this->windDirectionDeg = $_windDirectionDeg;
	}
	
	public function getWindSpeed(){
		return $this->windSpeed;
	}

	public function setWindSpeed($_windSpeed){
		$this->windSpeed = $_windSpeed;
	}

	public function getPressure(){
		return $this->pressure;
	}

	public function setPressure($_pressure){
		$this->pressure = $_pressure;
	}

	
}