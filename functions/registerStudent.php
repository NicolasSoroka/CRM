<?php
require '../globals/database_campus.php';
$db2 = Database_campus::getInstance();
require "../globals/database.php";
$db = Database::getInstance();

//Alta del usuario
$nombre = $db2->escape($_GET['name']);
$apellido = $db2->escape($_GET['lastname']);
$dni = $db2->escape($_GET['username']);
$pwd = sha1($dni);
$acceso = 3;
$telefono = $db2->escape($_GET['phone']);
$email = $db2->escape($_GET['email']);
$pais = $db2->escape($_GET['country']);
$installments = (($_GET['installments']) == 0) ? 1 : $db->escape($_GET['installments']);

//CREACION DE ALUMNO
$db2->query("INSERT INTO personas(`dni`, `password`, `nombre`, `apellido`, `acceso`, `telefono`, `email`, `foto`, `pais`) 
            VALUES ('$dni', '$pwd', '$nombre', '$apellido', '$acceso', '$telefono', '$email', './img/blank.png' , '$pais');");
$db2->query("SELECT MAX(id) FROM personas LIMIT 1");
$res = $db2->fetch();

//Asignacion de curso
$userId = $res['MAX(id)'];
$course = $db2->escape($_GET['course_id']);
$precio_bruto = $db2->escape($_GET['total_amount']);
$valor_cuota = $precio_bruto / $installments;
$pago = 0;
$cuotas_pagas = 0;
$presencial =  0;
$db2->query("SELECT cantidad_modulos FROM curso WHERE id_curso = '$course' LIMIT 1");
$temp = $db2->fetch();

$db2->query("INSERT INTO curso_p (`id_curso`, `id_persona`, `pago`, `cantidad_cuotas`, `cuotas_pagas`, `valor_cuota`, `presencial`) 
                            VALUES ('$course','$userId', '$pago', '$installments', '$cuotas_pagas', '$valor_cuota', '$presencial');");
?>