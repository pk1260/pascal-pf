<?php

if (isset($_POST['submit'])) {
    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email_from = filter_var($_POST['mail'],FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);

    $email_to = 'root@gmail.com';
    $headers = "From: " . $email_from;
    $txt = "You have recieved mail from: " . $name . ".\n\n" . $message;

    mail($email_to, $subject, $txt, $headers);
    header('Refresh: 2;' . url('/contact'));
}