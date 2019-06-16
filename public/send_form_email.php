<?php
    $name = $_POST['name'];
    $visitor_number = $_POST['number'];
    $visitor_mail = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'pastemailhere@gmail.com';
    $email_subject = 'Message from October website';

    $email_body = "User Name: $name.\n".
                  "User Number: $visitor_number.\n".
                  "User Email: $visitor_email.\n".
                  "User Message: $message.\n";

    $to = "pastemailhere@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to: $visitor_email \r\n";
    mail($to$email_subject,$email_body,$headers);
    header("Location: index.html";
?>
