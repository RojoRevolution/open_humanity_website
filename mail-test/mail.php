<?php

if ($_POST['submit']) {
    if(!$_POST['name']) {
        $error="Please enter your name";
    }
    if(!$_POST['email']) {
        $error="Please enter your email";
    }
}

?>