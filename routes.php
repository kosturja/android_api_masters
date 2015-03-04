<?php
//session_start();


$app->get('/', function(){
	$username = 'android';
	$password = 'android';
	$database = 'masters';
	$server = 'localhost';

    $link = mysqli_connect($server,$username,$password,$database);
		if(mysqli_connect_errno()){
			echo "Failed to connect";
		}
		echo "Connected successfully";
		echo '<br>';
// echo  mysqli_sqlstate($link);
	if($results = mysqli_query($link,"SELECT Name FROM menu")){
		while($row = mysqli_fetch_array($results)){
			print_r($row['Name']);
			echo '<br>';
		}
	}
	else{
		// echo "fail";
		echo  mysqli_sqlstate($link);
	}
});
// echo "hahah";
$app->get('/Test', function(){
	echo "Test Routes";
});

//The following handles any request to the /hello route
// echo "ajdlfadf";
$app->get('/upload', function() use ($app){
echo "upload test";
});

$app->get('/specials', function() use($app){
	// This route is for obtaining the daily specials

});
$app->get('/menu',function() use($app){
	// This route is for getting the menu pertaining to a restaurant

});

$app->get('/location/lat/long',function($lat,$long) use($app){
	echo $lat
	echo '<br>'
	echo $long

	
});

//The following handles any dynamic requests to the /hello/NAME routes (like /hello/world)



 //The following handles the POST requests sent to the /greet route



?>
