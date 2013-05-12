<?php

$wordpress_path = getenv('WPMVC_WORDPRESS_PATH');
$wordpress_path = $wordpress_path ? rtrim($wordpress_path, '/').'/' : dirname(__FILE__).'/../../../../';

//needed for running on command line
if(!isset($_SERVER['HTTP_HOST'])){
	$_SERVER = array(
		"HTTP_HOST" => "jc.dev",
		"SERVER_NAME" => "jc.dev",
		"REQUEST_URI" => "/",
		"REQUEST_METHOD" => "GET"
	);
}

require_once $wordpress_path.'wp-load.php';

$shell = new MvcShellDispatcher($argv);

echo "\n";

?>