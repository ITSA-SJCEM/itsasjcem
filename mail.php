<?php
//get data from form
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email= $_POST['email'];
	$message= $_POST['message'];

	$to = "itsa@sjcem.edu.in";

	$subject = "Mail From website";
	$txt ="First Name = ". $fname . "\r\n  Last Name = " . $lname . "\r\n  Email = " . $email . "\r\n Message =" . $message;

	$headers = "From: noreply@sjcem.edu.in" . "\r\n" .
	"CC: itsa@sjcem.edu.in";
	if($email!=NULL){
    mail($to,$subject,$txt,$headers);
	}
//redirect
	header("Location:contact.html");
?>