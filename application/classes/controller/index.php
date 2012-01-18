<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {
	public $template = 'template';
	
	public function before()
	{
		parent::before();
		
		if ($this->auto_render)
		{
			// Initialize empty values
			$this->template->title   = '';
			$this->template->content = '';
			
			$this->template->styles = array();
			$this->template->scripts = array();
		
		}
	}
	
	public function action_index()
	{
		
	}

	public function after()
	{
		if ($this->auto_render)
		{
			$styles = array(
				'media/css/style.css' => 'screen'
			);
			
			$scripts = array(
				'http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js',
				'media/js/search.js',
				'media/js/validator.js',
				'media/js/forecast.js',
				'media/js/favorites.js'
			);
		
			$this->template->styles = array_merge( $this->template->styles, $styles );
			$this->template->scripts = array_merge( $this->template->scripts, $scripts );
		}
		parent::after();
	}

}
