<?php 

	define('INCLUDE_PATH', 'http://localhost/Blog/');
	define('INCLUDE_PATH_BLOG','http://localhost/Blog/blog/Views/pages/');
	
	require('vendor/autoload.php');
	$app = new blog\Application();

	$app->run();

?>