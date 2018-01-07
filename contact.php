<?php
	require_once("./admin/scripts/config.php");
	// define variables and set to empty values

	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$direct = "./thankyou.php";

		if($name === ""){
			$sendMail = submitMessage($name, $email, $message, $direct);
			echo "Email is empty";
		}else{
			echo "Name was filled out";
		}
	}
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
	<!-- Title and Meta Tags -->
	<meta charset="utf-8">
	<title>Eric Lee Media | Web and Graphic Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
	<!-- CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/fontawesome.css">
		
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Montserrat" rel="stylesheet">
</head>
  
<body>

<footer id="contact" class="content-section text-center">
	<div class="contact-section">
	<div class="container">
		<h2>Contact me here</h2>
		<p>Feel free to shoot me a message.</p>
		<div class="row">
			<div class="col-md-12 col-md-8">
				<form class="form-horizontal">
					<div class="form-group">
						<label>Name: </label><input name="name" type="text" size="21" maxlength="30" required/>
					</div>
					<div class="form-group">
						<label>Email: </label><input name="email" type="text" size="21" maxlength="30" required/>
					</div>
					<div class="form-group ">
						<label for="message">Message: </label><textarea name="message" required></textarea>
					</div>
					<input name="submit" type="submit" value="Send" />
				</form>
            </div>
        </div>
    </div>
    </div>
</footer>

<!-- SCRIPTS -->
<script src="js/contentObject.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
</body>
	
</html>