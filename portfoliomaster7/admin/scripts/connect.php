<?php
	//This file will connect us to the databse
	$url = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_port";

	$link = mysqli_connect($url, $user, $pass, $db);
	
	//check connection type
	if(mysqli_connect_errno()){
		printf("Connect Failed: %s\n", mysqli_connect_error());
		exit();
	}
?>