<?php
    $to      = 'sorokanicolas@gmail.com';
    $subject = 'Problema CRM';
    $message = $_GET['message'];
    $headers = 'From: escuelasiade - CRM';

    mail($to, $subject, $message, $headers);
?>