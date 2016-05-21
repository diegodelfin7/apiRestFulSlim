<?php 
	require 'vendor/autoload.php';
	
	$app = new \Slim\Slim();
	
	$app->get('/', function(){
		$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
		echo json_encode($arr);
	});

	$app->get('/hello/:name', function ($name) {
		echo "Hello ". $name;
	});
	$app->run();
