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

    //SITE_INSTITUTIONAL
    case 'save_institutional_text':
        $title = (isset($_GET['title'])) ? $db->escape($_GET['title']) : 'Sin informacion';
        $subtitle1 = (isset($_GET['subtitle1'])) ? $db->escape($_GET['subtitle1']) : 'Sin informacion';
        $subtitle2 = (isset($_GET['subtitle2'])) ? $db->escape($_GET['subtitle2']) : 'Sin informacion';
        $subtitle3 = (isset($_GET['subtitle3'])) ? $db->escape($_GET['subtitle3']) : 'Sin informacion';
        $subtitle4 = (isset($_GET['subtitle4'])) ? $db->escape($_GET['subtitle4']) : 'Sin informacion';
        $db->query("UPDATE `site_institutional` SET `title`='$title', `subtitle1`='$subtitle1', `subtitle2`='$subtitle2', `subtitle3`='$subtitle3', `subtitle4`='$subtitle4'");
        exit;

    //SITE_MAIN
    case 'save_main_text':
        $caracteristica = (isset($_GET['caracteristica'])) ? $db->escape($_GET['caracteristica']) : 'Sin informacion';
        $main_title = (isset($_GET['main_title'])) ? $db->escape($_GET['main_title']) : 'Sin informacion';
        $main_information1 = (isset($_GET['main_information1'])) ? $db->escape($_GET['main_information1']) : 'Sin informacion';
        $main_information2 = (isset($_GET['main_information2'])) ? $db->escape($_GET['main_information2']) : 'Sin informacion';
        $main_information3 = (isset($_GET['main_information3'])) ? $db->escape($_GET['main_information3']) : 'Sin informacion';
        $main_button = (isset($_GET['main_button'])) ? $db->escape($_GET['main_button']) : 'Sin informacion';
        $main_button_link = (isset($_GET['main_button_link'])) ? $db->escape($_GET['main_button_link']) : 'Sin informacion';
        $db->query("UPDATE `site_main` SET `main_title`='$main_title', `main_information1`='$main_information1', `main_information2`='$main_information2', `main_information3`='$main_information3', `main_button`='$main_button', `main_button_link`='$main_button_link'");
        $db->query("UPDATE `site_main_caracteristicas` SET `caracteristica`='$caracteristica' WHERE id = '$item_id'");
        exit;

    case 'add_site_main_caracteristicas_item':
        $db->query("INSERT INTO `site_main_caracteristicas`(`caracteristica`, `imagen`) VALUES ('Nuevo valor', 'sin informacion')");
        exit;

    //NAVBAR
    case 'save_navbar_text':
        $button1 = (isset($_GET['button1'])) ? $db->escape($_GET['button1']) : 'Sin informacion';
        $button2 = (isset($_GET['button2'])) ? $db->escape($_GET['button2']) : 'Sin informacion';
        $button3 = (isset($_GET['button3'])) ? $db->escape($_GET['button3']) : 'Sin informacion';
        $button4 = (isset($_GET['button4'])) ? $db->escape($_GET['button4']) : 'Sin informacion';
        $button5 = (isset($_GET['button5'])) ? $db->escape($_GET['button5']) : 'Sin informacion';
        $button6 = (isset($_GET['button6'])) ? $db->escape($_GET['button6']) : 'Sin informacion';
        $button7 = (isset($_GET['button7'])) ? $db->escape($_GET['button7']) : 'Sin informacion';
        $db->query("UPDATE `site_navbar` SET `button1`='$button1',`button2`='$button2',`button3`='$button3',`button4`='$button4',`button5`='$button5',`button6`='$button6',`button7`='$button7'");
        exit;

    //SITE_SCHOOLS
    case 'add_school_item':
        $db->query("INSERT INTO `site_schools`(`name`, `link`) VALUES ('Nuevo item','Sin informacion')");
        exit;

    case 'save_school_text':
        $name = (isset($_GET['name'])) ? $db->escape($_GET['name']) : 'Sin informacion';
        $link = (isset($_GET['link'])) ? $db->escape($_GET['link']) : 'Sin informacion';
        $db->query("UPDATE `site_schools` SET `name`='$name',`link`='$link' WHERE id = '$item_id'");
        exit;

    //COURSES
    case 'add_course':
        $db->query("INSERT INTO `courses`(`description`, `title`, `content`, `international`, `nuevo`, `valoracion`, `precio`, `duracion`)
                    VALUES ('Curso nuevo', 'titulo', 'contenido', '0', '0', '5.0', '9999', '99.0')");
        exit;

    case 'save_course_text':
        $title = (isset($_GET['title'])) ? $db->escape($_GET['title']) : 'Sin informacion';
        $precio = (isset($_GET['precio'])) ? $db->escape($_GET['precio']) : 'Sin informacion';
        $duracion = (isset($_GET['duracion'])) ? $db->escape($_GET['duracion']) : 'Sin informacion';
        $valoracion = (isset($_GET['valoracion'])) ? $db->escape($_GET['valoracion']) : 'Sin informacion';
        $description = (isset($_GET['description'])) ? $db->escape($_GET['description']) : 'Sin informacion';
        $content = (isset($_GET['content'])) ? $db->escape($_GET['content']) : 'Sin informacion';
        $internacional = (isset($_GET['internacional'])) ? $db->escape($_GET['internacional']) : 'Sin informacion';
        $nuevo = (isset($_GET['nuevo'])) ? $db->escape($_GET['nuevo']) : 'Sin informacion';

        $db->query("UPDATE `courses` SET `description`='$description',`title`='$title',`content`='$content',`international`='$internacional',`nuevo`='$nuevo',`valoracion`='$valoracion',`precio`='$precio',`duracion`='$duracion' WHERE id = '$item_id'");
        exit;
}
?>