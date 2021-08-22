<?php
require "../../globals/database.php";
$db = Database::getInstance();

$item_id = (isset($_GET['item_id'])) ? $db->escape($_GET['item_id']) : '0';
$function = (isset($_GET['function'])) ? $db->escape($_GET['function']) : '0';
$table = (isset($_GET['table'])) ? $db->escape($_GET['table']) : 0;

if ($item_id === 0 || $function === 0) exit;
switch ($function) {

    case 'delete_item':
        if ($table !== 0)
        $db->query("DELETE FROM `$table` WHERE id = '$item_id' LIMIT 1");
        exit;
        
        case 'save_image':
            if ($table !== 0) {
                $image = $item_id . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES['image']['tmp_name'], '../images/' . $table . '/'. $image))
                    $db->query("UPDATE `$table` SET `imagen`= '$image' WHERE id = '$item_id'");
            }
            exit;

    // BANNER FUNCTIONS (banner_caracteristicas)
    case 'save_banner_text':
        $banner_text = (isset($_GET['banner_text'])) ? $db->escape($_GET['banner_text']) : 'Sin informacion';
        $db->query("UPDATE `banner_caracteristicas` SET `caracteristica`= '$banner_text' WHERE id = '$item_id'");
        exit;

    case 'add_banner_item':
        $db->query("INSERT INTO `banner_caracteristicas`(`caracteristica`, `imagen`) VALUES ('Nuevo item', 'sin datos')");
        exit;

    //REVIEWS (card_reputation) 
    case 'add_review_item':
        $db->query("INSERT INTO `card_reputation`(`nombre`, `imagen`, `review`, `curso`) VALUES ('Nuevo item', 'sin datos', 'sin datos', 'sin datos')");
        exit;

    case 'save_card_text':
        $card_nombre = (isset($_GET['card_nombre'])) ? $db->escape($_GET['card_nombre']) : 'Sin informacion';
        $card_review = (isset($_GET['card_review'])) ? $db->escape($_GET['card_review']) : 'Sin informacion';
        $card_curso = (isset($_GET['card_curso'])) ? $db->escape($_GET['card_curso']) : 'Sin informacion';
        $db->query("UPDATE `card_reputation` SET `nombre`='$card_nombre', `review`= '$card_review', `curso`='$card_curso' WHERE id = '$item_id'");
        exit;

    //CERTIFICACIONES
    case 'save_certificacion' :
        $certificacion_text = (isset($_GET['certificacion_text'])) ? $db->escape($_GET['certificacion_text']) : 'Sin informacion';
        $db->query("UPDATE `certificaciones` SET `nombre`='$certificacion_text' WHERE id = '$item_id'");
        exit;

    case 'add_certificacion_item':
        $db->query("INSERT INTO `certificaciones`(`nombre`, `imagen`) VALUES ('Nuevo item', 'sin datos')");
        exit;

    //SITE_COMPONENTS
    case 'save_component_text' :
        $component_title = (isset($_GET['component_title'])) ? $db->escape($_GET['component_title']) : 'Sin informacion';
        $component_subtitle = (isset($_GET['component_subtitle'])) ? $db->escape($_GET['component_subtitle']) : 'Sin informacion';
        $component_content = (isset($_GET['component_content'])) ? $db->escape($_GET['component_content']) : 'Sin informacion';
        $db->query("UPDATE `site_components` SET `title`='$component_title', `subtitle`= '$component_subtitle', `content`='$component_content' WHERE id = '$item_id'");
        exit;

    case 'add_components_item':
        $db->query("INSERT INTO `site_components`(`title`, `subtitle`, `content`) VALUES ('Nuevo item', 'sin datos', 'sin datos')");
        exit;
    
    //FOOTER
    case 'save_footer_text': 
        $info_title = (isset($_GET['info_title'])) ? $db->escape($_GET['info_title']) : 'Sin informacion';
        $info_description = (isset($_GET['info_description'])) ? $db->escape($_GET['info_description']) : 'Sin informacion';
        $info_footer = (isset($_GET['info_footer'])) ? $db->escape($_GET['info_footer']) : 'Sin informacion';
        $button = (isset($_GET['button'])) ? $db->escape($_GET['button']) : 'Sin informacion';
        $link = (isset($_GET['link'])) ? $db->escape($_GET['link']) : 'Sin informacion';

        $db->query("UPDATE `site_footer` SET `info_title`='$info_title', `info_description`= '$info_description', `info_footer`='$info_footer' WHERE id = '$item_id'");
        $db->query("UPDATE `site_footer_buttons` SET `button`='$button',`link`='$link' WHERE id = '$item_id'");
        exit;


        
}
?>