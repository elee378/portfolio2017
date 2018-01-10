<?php
	//This file will connect us to the databse
	$url = "localhost";
	$user = "root";
	$pass = "root";
	$db = "db_port";

	$link = mysqli_connect($url, $user, $pass, $db);
	
	//check connection type
	if(mysqli_connect_errno()){
		printf("Connect Failed: %s\n", mysqli_connect_error());
		exit();
	}


	//TREVORS CODE EXAMPLE
	 //  if(isset($_GET['carModel'])) { //see if there's a parameter called carModel
  //   $car = $_GET['carModel'];

  //   $myQuery = "SELECT * FROM mainmodel WHERE model = '$car'";
  //   $result = mysqli_query($con, $myQuery);

  //   $row = mysqli_fetch_assoc($result);

  //   echo json_encode($row);
  // }

  // if(isset($_GET['getVideos'])) { //see if there's a parameter called carModel

  //   $myQuery = "SELECT * FROM video";
  //   $result = mysqli_query($con, $myQuery);

  //   $rows = array();

  //   while($row = mysqli_fetch_assoc($result)) {
  //     $rows[] = $row;
  //   }

  //   echo json_encode($rows);
  // }

?>