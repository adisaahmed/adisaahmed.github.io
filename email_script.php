<?php 
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$message = $_POST['message'];
	$formcontent = "From: $name \n Message: $message \n Email: $email";
	$recipient = "adisa.ahmed881@gmail.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location: thankyou.html");
?>