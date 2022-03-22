<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "adyingswan@gmail.com"
$subject = "New Web From Submission"

$headers = "FROM: ".$name. "\r\n" .
"CC: rojorevolution@gmail.com";

$txt = "Form submitted by ".$name ."\r\nEmail: " .$email ."\r\nMessage: " .$message;

if($email!=NULL) {
    mail($to, $subject, $txt, $headers)
}

header('Location:thankyou.php')

?>