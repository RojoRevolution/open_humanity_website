<?php

if ($_POST['submit']) {
    if(!$_POST['name']) {
        $error="Please enter your name";
    }
    if(!$_POST['email']) {
        $error="Please enter your email";
    }
    if(!$_POST['message']) {
        $error="Please enter a message";
    }
    if ($error) {
        $result="Error in the form";
    } else {
        mail("adyingswan@gmail.com", "Contact Message", "Name: ".$_POST['name']."
        Email: ".$_POST['email']."
        Message: ".$_POST["message"]);
        
        {
            $result="Thank you we'll be in touch shortly";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test form</title>
</head>
<body>
    <?php echo $result;?>
    <form action="./mail.php" method="post">
        <input type="text" name="name" placeholder="Your name">
        <input type="email" name="email" placeholder="Your email address">
        <input type="text" name="message" placeholder="Your message">
        <button type="submit" value="submit">Submit</button>
    </form>
</body>
</html>