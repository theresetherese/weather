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
	
	/*
	 * GETTERS & SETTERS
	 */
	public function getFromTime(){
		return $this->fromTime;
	}

	public function setFromTime($_fromTime){
		$this->fromTime = $_fromTime;
	}

	public function getToTime(){
		return $this->toTime;
	}

	public function setToTime($_toTime){
		$this->toTime = $_toTime;
	}
	
	public function getPeriod(){
		return $this->period;
	}

	public function setPeriod($_period){
		$this->period = $_period;
	}

	public function getSymbol(){
		return $this->symbol;
	}

	public function setSymbol($_symbol){
		$this->symbol = $_symbol;
	}
	
	public function getSymbolName(){
		return $this->symbolName;
	}

	public function setSymbolName($_symbolName){
		$this->symbolName = $_symbolName;
	}

	public function getTemperature(){
		return $this->temperature;
	}

	public function setTemperature($_temperature){
		$this->temperature = $_temperature;
	}
}