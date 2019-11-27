<?php 
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['Email'];
	$telephone = $_POST['telephone'];
	$describe = $_POST['describe'];
	$dropdown = $_POST['dropdown'];
	$formcontent = "From: $firstname $lastname \n Email: $email \n Product: $dropdown \n Telephone: $telephone \n Description: $describe";
	$recipient = "adisa.ahmed881@gmail.com";
	$subject = "NK & N Store";
	$mailheader = "From: $email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location: thankyou.html");
?>