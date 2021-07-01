<?php
require "../globals/database.php";
$db = Database::getInstance();

$lead_id = (isset($_GET['lead_id'])) ? $db->escape($_GET['lead_id']) : '';
$user_id = (isset($_GET['user_id'])) ? $db->escape($_GET['user_id']) : '';

$db->query("SELECT * FROM `assigned` WHERE `id_lead` = '$lead_id' LIMIT 1");
$result = $db->fetchAll();

if (count($result) > 0) {
    $db->query("UPDATE `assigned` SET `id_user` = $user_id, `status`= 'default', `time` = current_timestamp() WHERE `id_lead` = '$lead_id' LIMIT 1");
} else {
    $db->query("INSERT INTO `assigned`(`id_lead`, `id_user`, `status`) VALUES ('$lead_id', '$user_id', 'default') LIMIT 1");
}
?>