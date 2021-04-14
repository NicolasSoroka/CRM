<?php
require "../globals/database.php";
$db = Database::getInstance();

if (isset($_POST['message'])) $mensaje = $db->escape($_POST['message']);
if (isset($_POST['id_user'])) $id_user = $db->escape($_POST['id_user']);

$db->query("INSERT INTO `messages`(`text`, `id_user`) VALUES ('$mensaje' , '$id_user')");
?>