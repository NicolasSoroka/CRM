<?php
require "../globals/Database.php";
session_start();

if (!isset($_SESSION['logged_crm'])) {
    header("Location: ../login.php");
    exit;
}

$db = Database::getInstance();
$userId = $_SESSION['user']['id'];
$db->query("SELECT * FROM users WHERE id = '$userId'");
$userData = $db->fetchAll();
$route = '_main.php';

if (isset($_GET['page'])) {
	if ($_GET['page'] === 'banner') {
		$route = '_banner.php';
		$db->query("SELECT * FROM banner_caracteristicas");
		$banner_data = $db->fetchAll();
	}
}

if (isset($_GET['page'])) {
	if ($_GET['page'] === 'reviews') {
		$route = '_reviews.php';
		$db->query("SELECT * FROM card_reputation");
		$cards = $db->fetchAll();
	}
}

if (isset($_GET['page'])) {
	if ($_GET['page'] === 'certificaciones') {
		$route = '_certificaciones.php';
		$db->query("SELECT * FROM certificaciones");
		$certificaciones = $db->fetchAll();
	}
}

if (isset($_GET['page'])) {
	if ($_GET['page'] === 'componentes') {
		$route = '_site_components.php';
		$db->query("SELECT * FROM site_components");
		$components = $db->fetchAll();
	}
}

if (isset($_GET['page'])) {
	if ($_GET['page'] === 'footer') {
		$route = '_footer.php';
		$db->query("SELECT * FROM site_footer");
		$footer = $db->fetchAll();
		$db->query("SELECT * FROM site_footer_buttons");
		$buttons = $db->fetchAll();
	}
}



?>

<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Editor de sitio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

	<!--end::Fonts-->
	<!--begin::Page Vendors Styles(used by this page)-->
	<link href="../assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Page Vendors Styles-->

	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Global Theme Styles-->

	<link href="../assets/css/themes/layout/header/base/dark.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/themes/layout/header/menu/dark.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />

	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="../assets/media/logos/favicon.ico" />
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
	<?php include("_header-mobile.php") ?>
	<div class="d-flex flex-column flex-root">

		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">

			<?php include("_aside.php") ?>

			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

				<?php include("_header.php") ?>

				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!-- los subheaders se construyen en cada vista. -->
					<?php // include("_subheader/subheader-v1.php") 
					?>

					<!--Content-->
					<?php include('partials/'.$route) ?>
				</div>
				<!--end::Content-->

				<?php include("_footer.php") ?>
			</div>

			<!--end::Wrapper-->
		</div>

		<!--end::Page-->
	</div>

	<!--end::Main-->
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
	<script src="../assets/plugins/global/plugins.bundle.js"></script>
	<script src="../assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="../assets/js/scripts.bundle.js"></script>
	<script src="../assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="../assets/js/pages/widgets.js"></script>
</body>

<!--end::Body-->

</html>