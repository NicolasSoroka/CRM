<?php
require "../globals/database.php";
$db = Database::getInstance();

$id_lead = $db->escape($_POST['id_lead']);
$uploaded_file = $_FILES['file']['tmp_name'];
$file_extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$file_with_extension = '/' . $id_lead . '.' . $file_extension;
$path = '../comprobantes/';

$check = scandir($path);
if (!in_array($id_lead, $check)) mkdir($path.$id_lead, 0777, true);

$final_path = $path . $id_lead . '/' . $id_lead . '.' . $file_extension;

if (move_uploaded_file($uploaded_file, $final_path)) {
    echo 'Saved successfully';
    $db->query("UPDATE `leads` SET `proof_payment`= 1 WHERE id = '$id_lead' LIMIT 1");
} else {
    echo 'Error uploading file';
}
?>