<?php
require "../globals/database.php";
$db = Database::getInstance();

$state = $db->escape($_GET['state']);

$message = $db->escape($_GET['message']);
$name = $db->escape($_GET['name']);
$lastname = $db->escape($_GET['lastname']);
$id_user = $db->escape($_GET['id_user']);
$id_lead = $db->escape($_GET['id_lead']);
$img = $db->escape($_GET['img']);
$group_sale = $db->escape($_GET['group_sale']);

$db->query("UPDATE `leads` SET `label`= '$state', `group_sale`= '$group_sale' WHERE id = '$id_lead' LIMIT 1");
$db->query("INSERT INTO `messages`(`text`, `id_user`, `id_lead`, `img`, `name`, `lastname`, `label`) VALUES ('$message','$id_user','$id_lead','$img','$name','$lastname', '$state')");
?>