<?php
require "../globals/database.php";
$db = Database::getInstance();

$lead_id = (isset($_GET['lead_id'])) ? $db->escape($_GET['lead_id']) : '';
$user_id = (isset($_GET['user_id'])) ? $db->escape($_GET['user_id']) : '';

$db->query("INSERT INTO `assigned`(`id_lead`, `id_user`, `status`) VALUES ('$lead_id', '$user_id', 'default') LIMIT 1");
?>