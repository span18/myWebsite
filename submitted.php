<?php

	$name = "";
	$visitor_email = "";
	$mobile = "";
	$message = "";


if ($_POST) {

	$name = $_POST["username"];
	$visitor_email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$message = $_POST["message"];

	$error = false;

	} if ($error) {
		echo '<h2>Thank you '$_POST['name']' for your enquiry.</h2>';
}
?>