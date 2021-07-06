<?php
require "../globals/database.php";
$db = Database::getInstance();

if (isset($_GET['name'])) $name = $db->escape($_GET['name']);
if (isset($_GET['lastname'])) $lastname = $db->escape($_GET['lastname']);
if (isset($_GET['phone'])) $phone = $db->escape($_GET['phone']);
if (isset($_GET['email'])) $email = $db->escape($_GET['email']);
if (isset($_GET['id'])) $id = $db->escape($_GET['id']);
if (isset($_GET['img'])) $img = $db->escape($_GET['img']);
if (isset($_GET['country'])) $country = $db->escape($_GET['country']);
if (isset($_GET['password'])) $password = sha1($db->escape($_GET['password']));

$db->query("UPDATE `users` SET `password`= '$password', `name`= '$name',`lastname`='$lastname', `email`='$email', `phone`='$phone',`country`='$country' WHERE id = '$id'");