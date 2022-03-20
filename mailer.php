<?php
include('includes/constant.php');
if(isset($_POST['submit'])){

	
	$sender_name = stripslashes($_POST["name"]);
	$sender_email = stripslashes($_POST["email"]);
	$sender_message = stripslashes($_POST["message"]);
	$sender_message = stripslashes($_POST["option"]);
	// $response = $_POST["g-recaptcha-response"];


	
	$encoding = "utf-8";
	$mail_subject = "Contact from Webform";
	$mail_to = $contact_email;

    // Preferences for Subject field
    $subject_preferences = array(
        "input-charset" => $encoding,
        "output-charset" => $encoding,
        "line-length" => 76,
        "line-break-chars" => "\r\n"
    );

    // Mail header
    $header = "Content-type: text/html; charset=".$encoding." \r\n";
    $header .= "From: ".$sender_name." <".$sender_email."> \r\n";
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-Transfer-Encoding: 8bit \r\n";
    $header .= "Date: ".date("r (T)")." \r\n";
	$header .= "X-Mailer: PHP". phpversion() ."\r\n";
    $header .= iconv_mime_encode("Subject", $mail_subject, $subject_preferences);

    // Send mail
    
	ob_start();
	include('../includes/email.php');
	$email_message = ob_get_contents();
	ob_end_clean();

	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => $secret_key,
		'response' => $_POST["g-recaptcha-response"]
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success=json_decode($verify);

	if ($captcha_success->success==false) {
		//echo "<p>You are a bot! Go away!</p>";
		//echo($email_message);
		
		//Create variable for failed Captcha 
		session_start();
		$_SESSION['captcha_error'] = 'Failed';
		
		//redirect back to form
		header('Location:contact-us/');
		
	} else if ($captcha_success->success==true) {
		//echo $captcha_success;
		//echo($sender_name);
		
		mail($mail_to, $mail_subject, $email_message, $header);
		session_start();
		session_destroy();
		
		//redirect to thank you page;
		header('Location:contact-us/thank-you.php');
		
		

	}

	mail($mail_to, $mail_subject, $email_message, $header);
	session_start();
	session_destroy();

	//redirect to thank you page;
	header('Location:contact-us/thank-you.php');

}


?>
