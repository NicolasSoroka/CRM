<?php
require "../../globals/database.php";
$db = Database::getInstance();

$item_id = (isset($_GET['item_id'])) ? $db->escape($_GET['item_id']) : '0';
$function = (isset($_GET['function'])) ? $db->escape($_GET['function']) : '0';

if ($item_id === 0 || $function === 0) exit;
switch ($function) {
    case 'delete_banner_item':
        $db->query("DELETE FROM `banner_caracteristicas` WHERE id = '$item_id' LIMIT 1");
        exit;

    case 'save_banner_text':
        $banner_text = (isset($_GET['banner_text'])) ? $db->escape($_GET['banner_text']) : 'Sin informacion';
        $db->query("UPDATE `banner_caracteristicas` SET `caracteristica`= '$banner_text' WHERE id = '$item_id'");
        exit;

    case 'save_banner_image':
        $image = $item_id . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        if (move_uploaded_file($_FILES['image']['tmp_name'], '../images/banner/'. $image))
            $db->query("UPDATE `banner_caracteristicas` SET `imagen`= '$image' WHERE id = '$item_id'");
        exit;

    case 'add_banner_item':
        $db->query("INSERT INTO `banner_caracteristicas`(`caracteristica`, `imagen`) VALUES ('Nuevo item', 'no-data')");
        exit;
}
?>