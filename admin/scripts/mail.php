<?php
<<<<<<< HEAD
=======

>>>>>>> f2812082149c42d8e5ce89d2531a454e468b41d3
	function redirect_to($location) {
		if($location !=NULL){
			header("Location: {$location}");
			exit;
		}
	}	

	function submitMessage($name, $email, $message, $direct) {
		$to = "ericjaelee@hotmail.com";
		$subj = "Message from ericleemedia.ca";
		$extra = "Reply-To:".$email;
		$msg = "Name: ".$name."\n\nEmail: ".$email."\n\nComments:".$message;
		//mail($to, $subject, $msg, $extra);
		$direct = $direct."?name={name}";
		redirect_to($direct);
	}
?>