<?php
ini_set('display_errors',1);
    error_reporting(E_ALL);
include './admin/scripts/connect.php';

	require_once("./admin/scripts/config.php");
	// define variables and set to empty values
	if(isset($_POST['name'])){
		//
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$direct = "./thankyou.php";

		if($name != ""){
			$sendMail = submitMessage($name, $email, $message, $direct);
			//echo "Email is empty";
		}
	}

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
	<!-- Title and Meta Tags -->
	<meta charset="utf-8">
	<title>Eric Lee Media | Graphic and Web Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
	<!-- CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/fontawesome.css">		

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Montserrat" rel="stylesheet">
</head>
  
<body>

<?php
include("includes/header.html");
?>

<?php
include("includes/about.html");
?>

<?php
include("includes/portfolio.php");
?>

<?php
include("contact.php");
?>

<!-- SCRIPTS -->
<script src="js/contentObject.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</body>
	
</html>
