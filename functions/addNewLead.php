<?php
require "../globals/database.php";
$db = Database::getInstance();

$detail = $db->escape($_GET['detail']);
$name = $db->escape($_GET['name']);
$contactMethod = $db->escape($_GET['contactMethod']);
$country = $db->escape($_GET['country']);
$phone = $db->escape($_GET['phone']);
$email = $db->escape($_GET['email']);
$contactTime = $db->escape($_GET['contactTime']);
$course = $db->escape($_GET['course']);

$db->query("INSERT INTO `leads`(`phone`, `email`, `name`, `contactTime`, `detail`, `label`, `course`, `contactMethod`, `country`, `assigned`) 
VALUES ('$phone', '$email', '$name', '$contactTime', '$detail', '1', '$course', '$contactMethod', '$country', '0') LIMIT 1");
?>