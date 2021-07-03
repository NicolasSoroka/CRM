<?php
require "../globals/database.php";
$db = Database::getInstance();

if (isset($_GET['id_lead'])) $id_lead = $db->escape($_GET['id_lead']);

$db->query("DELETE FROM `assigned` WHERE `id_lead` = '$id_lead' LIMIT 1");
?>