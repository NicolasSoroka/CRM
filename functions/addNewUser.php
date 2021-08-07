<?php
require "../globals/database.php";
$db = Database::getInstance();

$username = $db->escape($_GET['username']);
$firstname = $db->escape($_GET['firstname']);
$lastname = "completar";
$country = "completar";
$phone = "completar";
$email = "completar";
$img = 'default';
$password = sha1($username);

$db->query("INSERT INTO `users` (`name`, `lastname`, `username`, `password`, `access`, `email`, `phone`, `country`, `disabled`, `img`) 
VALUES ('$firstname','$lastname','$username','$password','1','$email','$phone','$country','0','$img')");
?>