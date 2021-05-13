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
$username = (isset($_GET['username'])) ? $db->escape($_GET['username']) : 999;
$phone = (isset($_GET['phone'])) ? $db->escape($_GET['phone']) : 999;
$email = (isset($_GET['email'])) ? $db->escape($_GET['email']) : 999;
$country = (isset($_GET['country'])) ? $db->escape($_GET['country']) : 'default';
$course_id = (isset($_GET['course_id'])) ? $db->escape($_GET['course_id']) : 999;
$group_sale = (isset($_GET['group_sale'])) ? $db->escape($_GET['group_sale']) : 999;

if (isset($_GET['group_sale'])) {
    $db->query("UPDATE `leads` SET 
                `name`= '$name',
                `lastname`= '$lastname',
                `username`= '$username',
                `phone`= '$phone',
                `email`= '$email',
                `country`= '$country',
                `course`= '',
                `course_id`= '$course_id',
                `label`= '$label',
                `group_sale`= '$group_sale'
                WHERE id = '$id_lead' LIMIT 1");
    $db->query("UPDATE `assigned` SET `status`= 'modified' WHERE id_lead = '$id_lead' LIMIT 1");
} else {
    $db->query("UPDATE `leads` SET `label`= '$label' WHERE id = '$id_lead' LIMIT 1");
    $db->query("UPDATE `assigned` SET `status`= 'modified' WHERE id_lead = '$id_lead' LIMIT 1");
}
$db->query("INSERT INTO `messages`(`text`, `id_user`, `id_lead`, `img`, `name`, `lastname`, `label`) VALUES ('$message','$id_user','$id_lead','$img','$name','$lastname', '$label')");
?>