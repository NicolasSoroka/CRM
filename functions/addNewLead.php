<?php
require "../globals/database.php";
$db = Database::getInstance();

$detail = (isset($_GET['detail'])) ? $db->escape($_GET['detail']) : '';
$contactMethod = (isset($_GET['contactMethod'])) ? $db->escape($_GET['contactMethod']) : '';
$name = (isset($_GET['name'])) ? $db->escape($_GET['name']) : '';
$country = (isset($_GET['country'])) ? $db->escape($_GET['country']) : '';
$phone = (isset($_GET['phone'])) ? $db->escape($_GET['phone']) : '';
$email = (isset($_GET['email'])) ? $db->escape($_GET['email']) : '';
$contactTime = (isset($_GET['contactTime'])) ? $db->escape($_GET['contactTime']) : '';
$course = (isset($_GET['course'])) ? $db->escape($_GET['course']) : '';
$group_sale = (isset($_GET['group_sale'])) ? $db->escape($_GET['group_sale']) : 'NULL';
$course_id = (isset($_GET['course_id'])) ? $db->escape($_GET['course_id']) : 0;

$db->query("INSERT INTO `leads`(`phone`, `email`, `name`, `contactTime`, `detail`, `label`, `course`, `course_id`, `contactMethod`, `country`, `assigned`, `group_sale`) 
VALUES ('$phone', '$email', '$name', '$contactTime', '$detail', '1', '$course','$course_id', '$contactMethod', '$country', '0', $group_sale) LIMIT 1");

$db->query("SELECT MAX(id) from leads limit 1");
$res = $db->fetch();
echo json_encode($res['MAX(id)']);
?>