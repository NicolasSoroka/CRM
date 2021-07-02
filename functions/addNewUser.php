<?php
require "../globals/database.php";
$db = Database::getInstance();

$username = $db->escape($_GET['username']);
$firstname = $db->escape($_GET['firstname']);
$lastname = $db->escape($_GET['lastname']);
$country = $db->escape($_GET['country']);
$phone = $db->escape($_GET['phone']);
$email = $db->escape($_GET['email']);
$img = 'default';
$password = sha1($username);

$db->query("INSERT INTO `users`(`name`, `lastname`, `username`, `password`, `access`, `email`, `phone`, `country`, `disabled`, `img`) 
VALUES ('$firstname','$lastname','$username','$password','1','$email','$phone','$country','0','$img') LIMIT 1");
?>