<?php
require "../globals/database.php";
$db = Database::getInstance();

$value = $db->escape($_GET['value']);
$id_lead = $db->escape($_GET['id']);

if (isset($_GET['value'])) {
    $db->query("UPDATE `leads` SET `net_price` = '$value' WHERE id = '$id_lead' LIMIT 1");
}
?>