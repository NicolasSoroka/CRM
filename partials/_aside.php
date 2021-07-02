<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">

	<!--begin::Brand-->
	<div class="brand flex-column-auto" id="kt_brand">

		<!--begin::Logo-->
		<a href="index.php" class="brand-logo">
			<img alt="Logo" class="max-h-40px" src="assets/media/logos/logo_load.png" />
		</a>

		<!--end::Logo-->

		<!--begin::Toggle-->
		<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
			<span class="svg-icon svg-icon svg-icon-xl">

				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
						<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
					</g>
				</svg>

				<!--end::Svg Icon-->
			</span>
		</button>

		<!--end::Toolbar-->
	</div>

	<!--end::Brand-->

	<!--begin::Aside Menu-->
	<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

		<!--begin::Menu Container-->
		<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">


			<?php if ($userData[0]['access'] == 0) { ?>
				<!--begin::Menu Nav ADM-->
				<ul class="menu-nav">
					<li class="menu-section">
						<h4 class="menu-text">Menu Administrador</h4>
						<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
					</li>
					<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
						<a href="javascript:;" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">

								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<span class="svg-icon svg-icon-primary svg-icon-2x">
									<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Clipboard.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
											<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
											<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
											<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>

								<!--end::Svg Icon-->
							</span>
							<span class="menu-text">Datos</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="menu-submenu">
							<i class="menu-arrow"></i>
							<ul class="menu-subnav">
								<li class="menu-item menu-item-parent" aria-haspopup="true">
									<span class="menu-link">
										<span class="menu-text"></span>
									</span>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="?page=leads/_new-lead" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">Cargar nuevo</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="?page=leads/_assigned" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">Asignados</span> <span class="menu-label"></span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="?page=leads/_no-assigned" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">No asignados</span> <span class="menu-label"></span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
						<a href="javascript:;" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">

								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<span class="svg-icon svg-icon-primary svg-icon-2x">
									<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Contact1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
											<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 L7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>

								<!--end::Svg Icon-->
							</span>
							<span class="menu-text">Vendedores</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="menu-submenu">
							<i class="menu-arrow"></i>
							<ul class="menu-subnav">
								<li class="menu-item menu-item-parent" aria-haspopup="true">
									<span class="menu-link">
										<span class="menu-text"></span>
									</span>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="?page=users/_add-user" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">Alta</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="?page=users/_list-users" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">Listado de vendedores</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
						<a href="javascript:;" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">

								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<span class="svg-icon svg-icon-primary svg-icon-2x">
									<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Chart-bar1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
											<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
											<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
											<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>

								<!--end::Svg Icon-->
							</span>
							<span class="menu-text">Estadisticas</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="menu-submenu">
							<i class="menu-arrow"></i>
							<ul class="menu-subnav">
								<li class="menu-item menu-item-parent" aria-haspopup="true">
									<span class="menu-link">
										<span class="menu-text"></span>
									</span>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="?page=users/_add-user" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">Top ventas</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="custom/apps/inbox.html" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">Ganancia por fecha</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="?page=users/_sales-accu" class="menu-link">
										<i class="menu-bullet menu-bullet-line">
											<span></span>
										</i>
										<span class="menu-text">Ventas por vendedor</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=sales/_sales-pending" class="menu-link">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
								<span class="svg-icon svg-icon-primary svg-icon-2x">
									<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Wallet.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1" />
											<rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1" />
											<path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-text">Promesas de venta</span>
						</a>
					</li>

					<li class="menu-item" aria-haspopup="true">
						<a href="?page=sales/_sales-view" class="menu-link">
							<span class="svg-icon menu-icon">
								<span class="svg-icon svg-icon-primary svg-icon-2x">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
											<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
										</g>
									</svg>
								</span>
							</span>
							<span class="menu-text">Ventas</span>
						</a>
					</li>

					<!-- <li class="menu-item" aria-haspopup="true">
						<a href="?page=payment/_new-payment" class="menu-link">
							<span class="svg-icon menu-icon">
								<span class="svg-icon svg-icon-primary svg-icon-2x">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5" />
											<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) " x="3" y="3" width="18" height="7" rx="1" />
											<path d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z" fill="#000000" />
										</g>
									</svg>
								</span>
							</span>
							<span class="menu-text">Generar pagos</span>
						</a>
					</li> -->
					<!--end::Menu Nav ADM-->
				<?php } else { ?>
					<!--begin::Menu Nav USR-->
					<ul class="menu-nav">
						<li class="menu-section">
							<h4 class="menu-text">Menu Vendedor</h4>
							<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
						</li>
						<li class="menu-item" onclick="pedirLead();" aria-haspopup="true">
							<a href="#" class="menu-link">
								<span class="svg-icon menu-icon">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
									<span class="svg-icon svg-icon-primary svg-icon-2x">
										<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Navigation\Angle-double-up.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M8.2928955,10.2071068 C7.90237121,9.81658249 7.90237121,9.18341751 8.2928955,8.79289322 C8.6834198,8.40236893 9.31658478,8.40236893 9.70710907,8.79289322 L15.7071091,14.7928932 C16.085688,15.1714722 16.0989336,15.7810586 15.7371564,16.1757246 L10.2371564,22.1757246 C9.86396402,22.5828436 9.23139665,22.6103465 8.82427766,22.2371541 C8.41715867,21.8639617 8.38965574,21.2313944 8.76284815,20.8242754 L13.6158645,15.5300757 L8.2928955,10.2071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 15.500003) scale(-1, 1) rotate(-90.000000) translate(-12.000003, -15.500003) " />
												<path d="M6.70710678,12.2071104 C6.31658249,12.5976347 5.68341751,12.5976347 5.29289322,12.2071104 C4.90236893,11.8165861 4.90236893,11.1834211 5.29289322,10.7928968 L11.2928932,4.79289682 C11.6714722,4.41431789 12.2810586,4.40107226 12.6757246,4.76284946 L18.6757246,10.2628495 C19.0828436,10.6360419 19.1103465,11.2686092 18.7371541,11.6757282 C18.3639617,12.0828472 17.7313944,12.1103502 17.3242754,11.7371577 L12.0300757,6.88414142 L6.70710678,12.2071104 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(12.000003, 8.500003) scale(-1, 1) rotate(-360.000000) translate(-12.000003, -8.500003) " />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<!--end::Svg Icon-->
								</span>
								<!--end::Svg Icon-->
								</span>
								<span class="menu-text">Pedir datos</span>
							</a>
						</li>

						<!--end::Menu Nav USR-->
					<?php } ?>
					<li class="menu-item" aria-haspopup="true">
						<a href="?page=leads/_new-lead-wsp" class="menu-link">
							<span class="socicon-whatsapp icon-xl text-success mr-5 pt-1">
							</span>
							<span class="menu-text">Cargar Whatsapp</span>
						</a>
					</li>
					<li class="menu-item" aria-haspopup="true">
						<a href="./index.php" class="menu-link">
						<span class="svg-icon menu-icon">
							<span class="svg-icon svg-icon-primary svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
										<rect fill="#000000" x="11" y="7" width="2" height="8" rx="1" />
										<rect fill="#000000" x="11" y="16" width="2" height="2" rx="1" />
									</g>
								</svg>
							</span>
							</span>
							<span class="menu-text">Reportar un problema</span>
						</a>
					</li>
					</ul>
					<!-- Este UL cierra ambos menues, tanto ADM como USER -->
		</div>
		<!--end::Menu Container-->
	</div>

	<!--end::Aside Menu-->
</div>

<!--end::Aside-->


<script>
	function pedirLead() {
		$.ajax({
			type: 'get',
			url: './functions/leadRequest.php',
			success: function(response) {
				Swal.fire({
					text: "",
					icon: "success",
					buttonsStyling: false,
					showConfirmButton: false,
					timer: 2000
				})
				location.reload();
			}
		});
	}
</script>