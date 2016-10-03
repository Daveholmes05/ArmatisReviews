<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: Bob';
$to = 'bob@bobobob.com';
$subject = 'BANG';

$body = "From: $name/n Email: $email/n Message:/m $message";


if ($_POST['submit']) {
	/* Anything that goes in here is only performed if the form is submitted */
	if (mail ($to, $subject, $body, $from)) {
		echo '<p>Your message has been sent!</p>';
	} else {
		echo '<p>Something went wrong. Go back and try again</p>';
	}
}

?>