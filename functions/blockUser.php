<?php
require "../globals/database.php";
$db = Database::getInstance();

if (isset($_GET['id'])) $id = $db->escape($_GET['id']);

$db->query("SELECT * FROM users WHERE id = '$id' LIMIT 1");
$user = $db->fetch();

if ($user['disabled'] == 0) {
    $db->query("UPDATE `users` SET `disabled`= 1  WHERE id = '$id' LIMIT 1");
}
else {
    $db->query("UPDATE `users` SET `disabled`= 0  WHERE id = '$id' LIMIT 1");
}
?>