<?php
require "../globals/database.php";
$db = Database::getInstance();

$label = $db->escape($_GET['label']);
$message = $db->escape($_GET['message']);
$name = $db->escape($_GET['name']);
$lastname = $db->escape($_GET['lastname']);
$id_user = $db->escape($_GET['id_user']);
$id_lead = $db->escape($_GET['id_lead']);
$img = $db->escape($_GET['img']);
$sold = $db->escape($_GET['sold']);

if (isset($_GET['sold'])) {
    if ($_GET['sold'] === '1') {
        $db->query("UPDATE `leads` SET `label`= '$label' WHERE group_sale = '$id_lead'");
        $db->query("INSERT INTO `messages`(`text`, `id_user`, `id_lead`, `img`, `name`, `lastname`, `label`) VALUES ('$message','$id_user','$id_lead','$img','$name','$lastname', '$label')");
        $db->query("INSERT INTO `sales`(`id_user`, `id_lead`) VALUES ('$id_user', '$id_lead')");
    }
}
?>




