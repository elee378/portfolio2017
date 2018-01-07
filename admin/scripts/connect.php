<?php
	//This file will connect us to the databse
<<<<<<< HEAD
	$url = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_portfolio";
=======
	$user = "root";
	$pass = "";
	//$pass = "root"; for macs
	$url = "localhost";
	$db = "db_movies";
>>>>>>> f2812082149c42d8e5ce89d2531a454e468b41d3

	$link = mysqli_connect($url, $user, $pass, $db);
	//for mac also add "8889"
	
	//check connection type
	if(mysqli_connect_errno()){
		printf("Connect Failed: %s\n", mysqli_connect_error());
		exit();
	}
?>