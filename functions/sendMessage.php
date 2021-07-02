<?php
require "../globals/database.php";
$db = Database::getInstance();

if (isset($_GET['message'])) $message = $db->escape($_GET['message']);
if (isset($_GET['id_user'])) $id_user = $db->escape($_GET['id_user']);

$db->query("INSERT INTO `direct_message`(`text`, `id_user`) VALUES ('$message' , '$id_user')");
?>