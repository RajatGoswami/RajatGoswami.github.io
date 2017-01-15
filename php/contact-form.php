<?php

if($_POST["submit"]) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "rajat.goswami@hotmail.com";

    // Form validation

    if(!$name) {
        $errMessage = "Please enter your name";
    }
    else if(!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errMessage = "Please enter a valid email address";
    }
    else if(!$message) {
        $errMessage = "Please provide a message";
    }

    // If no error exists, send the email

    if(!$errMessage) {
        if(mail ($to, $subject, $message)) {
            $resultMessage = "<p>Your email was sent successfully!</p>";
        }
        else {
            $resultMessage = "<p>There was in error in sending your message, please try again later"</p>
        }
    }
}

?>
