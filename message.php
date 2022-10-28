<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    if (!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $receiver = "codingnepalweb@gmail.com";
            $subject = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:  $massage\n\nRegards,\n$name";
            $sender = "From: $email";
            if(mail($receiver, $subject, $body, $sender)) {
                echo "Your Message has Been Sent!";
            } else {
                echo "Sorry, Failed to Send Your Message!";
            }
        } else {
            echo "Enter a Valid Email Address";
        }
    } else {
        echo "Email and Password Field is Required!";
    }
?>