<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		// SECURITY 
		$name = strip_tags(htmlspecialchars($_POST['name'],ENT_QUOTES));
		$message = strip_tags(htmlspecialchars($_POST['message'],ENT_QUOTES));
		$email = strip_tags(htmlspecialchars($_POST['email'],ENT_QUOTES));
		// check empty fields 
		if(empty($_POST['name']) or empty($_POST['message']) or empty($_POST['email']) or !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
		{
			// bad request 400
			http_response_code(400);
			echo "Please complete the form and try again.";
			exit;
		}
		
		$to = "gaassis@gmail.com" ; // type your email
		$subject = "New message from $name";
		$content = "Name: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Subject: $subject\n\n";
        $content .= "Message:\n$message\n";
		$headers = "From: noreply@yourdomain.com\n"; // please change this email
		$headers .= "Reply-To: $email"; 
		 // Send
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // if send 
            http_response_code(200);
            echo "Great, Your message has been sent. thank you for contacting us";
        } else {
            // not send 500 
            http_response_code(500);
            echo "problem, please try again";
        }
	}
	else
	{
		http_response_code(403);
		echo "Please try again";
		exit;
		
	}
?>