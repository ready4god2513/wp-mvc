<?php
/**
*	
*	Provides some helper functions for rendering theme mustache partials
*	
**/

class MvcRenderer extends MvcHelper {

	var $m; //m is for mustache...
	private $data; 

	// set template file location as the view folder in this plugin by default. 
	// TODO: wanted to make JCPLUGINS_PATH.'app/views/' be the default $views_path but php wasn't liking the CONST.'string'  for some reason.
	function __construct($data, $views_path)
	{
		$mustache_options['loader'] = new Mustache_Loader_FilesystemLoader($views_path);
		$this->m = new Mustache_Engine($mustache_options);
		$this->data = $data;
	}

	// allows for setting data after initializing
	function setData($data)
	{
		$this->data = $data;

		return $this;
	}

	// returns rendered html as string
	function render($template)
	{
		return $this->m->render($template, $this->data);
	}
}


?>