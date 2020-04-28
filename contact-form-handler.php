<?php
	
	$name = $_POST["username"];
	$visitor_email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$comments = $_POST["comments"];

	$email_from = "joe@bloggs";

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
					"User Mobile: $mobile.\n".
					"User Message: $comments.\n";

	$to = "dmjames04@yahoo.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-to: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");

?>

