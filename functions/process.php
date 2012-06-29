<?php
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
	$name = stripslashes(strip_tags($_POST['name']));
} else {$name = 'No name entered';}
if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
	$email = stripslashes(strip_tags($_POST['email']));
} else {$email = 'No email entered';}
if ((isset($_POST['subject'])) && (strlen(trim($_POST['subject'])) > 0)) {
	$subject = stripslashes(strip_tags($_POST['subject']));
} else {$subject = 'No subject entered';}
if ((isset($_POST['message'])) && (strlen(trim($_POST['message'])) > 0)) {
	$message = stripslashes(strip_tags($_POST['message']));
} else {$message = 'No message entered';}

$recipient = 'jerime.carpenter@gmail.com';
	mail($recipient, $subject, $message, "From: $email\r\nReply-To: $email\r\nX-Mailer: DT_formmail");

?>
