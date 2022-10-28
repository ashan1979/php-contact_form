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
        } else {
            echo "Enter a Valid Email Address";
        }
    } else {
        echo "Email and Password Field is Required!";
    }
?>