<?php
	$name = stripslashes($_POST["name"]);
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$subject = "Message from greenfinchgardening.co.uk";
	$message = stripslashes($_POST["message"] . "\n\n" . $phone);
	
	$to = "contact+gg@rocketchilli.com";
	$headers = "From: " . $name . " <" . $email . ">";
	
	if (mail($to, $subject, $message, $headers))
		http_response_code(201);
	else
		http_response_code(400);

?>