<?php //Route controller
require "./globals/Database.php";
session_start();
$db = Database::getInstance();
$userId = $_SESSION['user']['id'];
$route = '_main.php';

//_ASSIGNED
if (isset($_GET['page'])) {
	if ($_GET['page'] == 'leads/_assigned') {
		$db->query("SELECT leads.country, leads.course, leads.id, leads.label, users.name, users.lastname, assigned.time
					FROM leads, users, assigned 
					WHERE assigned.id_lead = leads.id AND assigned.id_user = users.id AND leads.label <> 3 ORDER BY `assigned`.`time` ASC");
		$sales = $db->fetchAll();
		$db->getUsers();
		$users = $db->fetchAll();
	}
}

//NO-ASSIGNED
if (isset($_GET['page'])) {
	if ($_GET['page'] == 'leads/_no-assigned') {
		$db->query("SELECT leads.country, leads.course, leads.id, leads.date, leads.name, leads.label 
					FROM leads 
					WHERE id NOT IN (SELECT id_lead FROM assigned)");
		$sales = $db->fetchAll();
		$db->getUsers();
		$users = $db->fetchAll();
	}
}

//SALES-PENDING
if (isset($_GET['page'])) {
	if ($_GET['page'] == 'sales/_sales-pending') {
		$db->query("SELECT leads.*, users.name AS salesusername, users.lastname AS userlastname, users.id AS id_user
					FROM leads, users, assigned 
					WHERE assigned.id_lead = leads.id AND assigned.id_user = users.id AND leads.label = 7 ORDER BY `leads`.`contactDay` ASC");
		$sales = $db->fetchAll();
	}
}

//SALES-VIEW
if (isset($_GET['page'])) {
	if ($_GET['page'] == 'sales/_sales-view') {
		$db->query("SELECT sales.*, leads.total_amount, leads.country, leads.group_sale, users.name, users.lastname, leads.net_price, leads.total_amount, leads.course, leads.name AS client_name, leads.lastname AS client_lastname, leads.id AS id_sale
					FROM sales, leads, users
					where sales.id_lead = leads.id AND sales.id_user = users.id");
		$sales = $db->fetchAll();
	}
}

//datos del usuario
$db->query("SELECT * FROM users WHERE id = '$userId' LIMIT 1");
$userData = $db->fetchAll();

//leads asignados
if ($userData[0]['access'] == 1) {
	$db->query("SELECT *, assigned.status FROM leads LEFT JOIN assigned ON leads.id = assigned.id_lead WHERE assigned.id_user = '$userId'");
	$leads = $db->fetchAll();
}

//pedir datos
if (isset($_GET['lead'])) {
	if ($_GET['lead'] == 'ask') {
	}
}

//LIST-USERS
if (isset($_GET['page'])) {
	if ($_GET['page'] == 'users/_list-users') {
		$db->getUsers();
		$users = $db->fetchAll();
	}
}


//NEW LEAD WHATSAPP
if (isset($_GET['page'])) {
	if ($_GET['page'] == 'leads/_new-lead-wsp') {
		$route = 'leads/_new-lead-wsp.php';
		$db->getUsers();
		$users = $db->fetchAll();
	}
}

//LEAD DETAIL
if (isset($_GET['lead'])) {
	$route = 'leads/_lead-detail.php';
	$leadId = $_GET['lead'];
	$db->query("SELECT * FROM leads WHERE id = '$leadId'");
	$lead = $db->fetchAll();

	$db->query("SELECT * FROM messages WHERE id_lead = '$leadId'");
	$messages = $db->fetchAll();
} else {
	if (isset($_GET['page'])) $route = $_GET['page'] . '.php';
}

//_MAIN
if ($route == '_main.php') {
	// cantidad de promesas y monto bruto
	$db->query("SELECT count(`label`) AS `number_of_promises`, sum(`total_amount`) AS `amount_in_promises` FROM `leads` WHERE leads.label = 7 AND leads.contactDay = CURDATE()");
	$promises_stats = $db->fetchAll();

	//cantidad de leads
	$db->query("SELECT COUNT(*) AS total_leads FROM `leads`");
	$total_leads = $db->fetchAll();

	//cantidad de ventas
	$db->query("SELECT COUNT(*) AS total_sales FROM `sales`");
	$total_sales = $db->fetchAll();

	$db->getUsers();
	$users = $db->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Ventas IADE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

	<!--end::Fonts-->
	<!--begin::Page Vendors Styles(used by this page)-->
	<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Page Vendors Styles-->

	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Global Theme Styles-->

	<link href="assets/css/themes/layout/header/base/dark.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/layout/header/menu/dark.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />

	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<style>
		.dot {
			height: 15px;
			width: 15px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
		}

		.dot-ok {
			height: 15px;
			width: 15px;
			background-color: #32CD32;
			border-radius: 50%;
			display: inline-block;
		}
	</style>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="page-loading-enabled page-loading header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading">

	<?php //include("partials/_page-loader.php"); 
	?>

	<!--begin::Main-->
	<?php include("partials/_header-mobile.php") ?>
	<div class="d-flex flex-column flex-root">

		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">

			<?php include("partials/_aside.php") ?>

			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

				<?php include("partials/_header.php") ?>

				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!-- los subheaders se construyen en cada vista. -->
					<?php // include("partials/_subheader/subheader-v1.php") 
					?>

					<!--Content-->
					<?php include("partials/" . $route) ?>
				</div>
				<!--end::Content-->

				<?php include("partials/_footer.php") ?>
			</div>

			<!--end::Wrapper-->
		</div>

		<!--end::Page-->
	</div>

	<!--end::Main-->

	<?php

	include("partials/quick-user.php");
	/*
	include("partials/_extras/chat.php");

	include("partials/_extras/scrolltop.php");

	include("partials/_extras/offcanvas/demo-panel.php");
	*/
	?>

	<!--begin::Global Config(global config for global JS scripts)-->
	<script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1400
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#3699FF",
						"secondary": "#E5EAEE",
						"success": "#1BC5BD",
						"info": "#8950FC",
						"warning": "#FFA800",
						"danger": "#F64E60",
						"light": "#E4E6EF",
						"dark": "#181C32"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#E1F0FF",
						"secondary": "#EBEDF3",
						"success": "#C9F7F5",
						"info": "#EEE5FF",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#3F4254",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#EBEDF3",
					"gray-300": "#E4E6EF",
					"gray-400": "#D1D3E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#7E8299",
					"gray-700": "#5E6278",
					"gray-800": "#3F4254",
					"gray-900": "#181C32"
				}
			},
			"font-family": "Poppins"
		};
	</script>

	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>

	<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>

	<script src="assets/js/pages/widgets.js"></script>

</body>

<!--end::Body-->

</html>