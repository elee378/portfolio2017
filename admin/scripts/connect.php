<?php
	//This file will connect us to the databse
	$user = "root";
	$pass = "";
	//$pass = "root"; for macs
	$url = "localhost";
	$db = "db_movies";

	$link = mysqli_connect($url, $user, $pass, $db);
	//for mac also add "8889"
	
	//check connection type
	if(mysqli_connect_errno()){
		printf("Connect Failed: %s\n", mysqli_connect_error());
		exit();
	}
?>