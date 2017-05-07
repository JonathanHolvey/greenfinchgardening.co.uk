<?php
	$name = stripslashes($_POST["name"]);
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$subject = "Message from greenfinchgardening.co.uk";
	$message = $_POST["message"];

	$message .= "\n\nFrom: " . $name . "\nPhone: " . $phone . "\nEmail: ". $email;
	
	$to = "contact@greenfinchgardening.co.uk";
	$headers = "From: " . $name . " <" . $email . ">";
	
	if (mail($to, $subject, stripslashes($message), $headers))
		http_response_code(201);
	else
		http_response_code(400);

?>