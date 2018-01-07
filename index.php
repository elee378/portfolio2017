<<<<<<< HEAD
<?php
include './admin/scripts/connect.php';

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
=======
<!DOCTYPE html>
<html lang="en-US" class="no-js">

>>>>>>> f2812082149c42d8e5ce89d2531a454e468b41d3
<head>
	<!-- Title and Meta Tags -->
	<meta charset="utf-8">
	<title>Eric Lee Media | Web and Graphic Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
	<!-- CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.css">
<<<<<<< HEAD
	<link rel="stylesheet" href="css/fontawesome.css">		
=======
	<link rel="stylesheet" href="css/fontawesome.css">
		
>>>>>>> f2812082149c42d8e5ce89d2531a454e468b41d3
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Montserrat" rel="stylesheet">
</head>
  
<body>

<?php
<<<<<<< HEAD
	$headerimg = "SELECT * FROM tbl_portfolio;";

	$result = mysqli_query($link, $headerimg);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo $row['portfolio_images'];
		}
	}
?>


<?php
=======
>>>>>>> f2812082149c42d8e5ce89d2531a454e468b41d3
include("includes/header.html");
?>

<?php
include("includes/about.html");
?>

<<<<<<< HEAD
<?php
include("includes/portfolio.html");
?>

<?php
include("contact.php");
?>
=======
<footer id="contact" class="content-section text-center">
	<div class="contact-section">
	<div class="container">
		<h2>Contact me here</h2>
		<p>Feel free to shoot me a message.</p>
		<div class="row">
			<div class="col-md-12 col-md-8">
				<form class="form-horizontal">
					<div class="form-group">
						<label>Name: </label><input name="name" type="text" size="21" maxlength="30" />
					</div>
					<div class="form-group">
						<label>Email: </label><input name="email" type="text" size="21" maxlength="30" />
					</div>
					<div class="form-group ">
						<label for="message">Message: </label><textarea name="message"></textarea>
					</div>
					<input name="submit" type="submit" value="Send" />
				</form>
            </div>
        </div>
    </div>
    </div>
</footer>
>>>>>>> f2812082149c42d8e5ce89d2531a454e468b41d3

<!-- SCRIPTS -->
<script src="js/contentObject.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
</body>
	
</html>
