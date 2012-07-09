<?php
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
	$name = stripslashes(strip_tags($_POST['name']));
	} 
if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
	$email = stripslashes(strip_tags($_POST['email']));
	} 
if ((isset($_POST['subject'])) && (strlen(trim($_POST['subject'])) > 0)) {
	$subject = stripslashes(strip_tags($_POST['subject']));
	} 
if ((isset($_POST['message'])) && (strlen(trim($_POST['message'])) > 0)) {
	$message = stripslashes(strip_tags($_POST['message']));
	} 
	
	$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nMessage:\n $message";
	$recipient = '';
	
	mail($recipient, $subject, $body, "From: $email\r\nReply-To: $email\r\nX-Mailer: DT_formmail");

?>