<?php
	header("Content-Type: application/json; charset=utf-8");
	$response = [];

	$name = stripslashes($_POST["name"]);
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$subject = "Message from greenfinchgardening.co.uk";
	$message = $_POST["message"];

	$message .= "\n\nFrom: " . $name . "\nPhone: " . $phone . "\nEmail: ". $email;
	
	$to = "contact@greenfinchgardening.co.uk";
	$headers = "From: " . $name . " <" . $email . ">";
	
	if (preg_match("/^staging\./", $_SERVER["HTTP_HOST"]))
		$to = "contact@rocketchilli.com";

	if (mail($to, $subject, stripslashes($message), $headers))
		$response["status"] = "success";
	else
		$response["status"] = "error";

	echo json_encode($response);
?>