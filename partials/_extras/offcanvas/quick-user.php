<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
	<!--begin::Header-->
	<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
		<h3 class="font-weight-bold m-0">Perfil
		</h3>
		<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
			<i class="ki ki-close icon-xs text-muted"></i>
		</a>
	</div>

	<!--end::Header-->

	<!--begin::Content-->
	<div class="offcanvas-content pr-5 mr-n5">

		<!--begin::Header-->
		<div class="d-flex align-items-center mt-5">
			<div class="symbol symbol-100 mr-5">
				<div class="symbol-label" style="background-image:url('assets/profile/<?=$userData[0]['img']?>.jpg')"></div>
				<i class="symbol-badge bg-success"></i>
			</div>
			<div class="d-flex flex-column">
				<label class="font-weight-bold font-size-h5 text-dark-75 text-primary"><?=$userData[0]['name']?></label>
				<div class="text-muted mt-1">
					<?php if ($userData[0]['access'] == 1) { ?>Vendedor<?php } 
					else { ?>Administrador<?php } ?>
					</div>
				<div class="navi mt-2">
					<a href="#" class="navi-item">
						<span class="navi-link p-0 pb-2">
							<span class="navi-text text-muted text-primary"><?=$userData[0]['country']?></span>
						</span>
					</a>
					<a href="./functions/logout.php" class="btn btn-sm btn-light-danger font-weight-bolder py-2 px-5">Cerrar Sesion</a>
				</div>
			</div>
		</div>

		<!--end::Header-->

		<!--begin::Separator-->
		<div class="separator separator-dashed mt-8 mb-5"></div>

		<!--end::Separator-->

		<!--begin::Nav-->
		<div class="navi navi-spacer-x-0 p-0">

			<!--begin::Item-->
			<a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
				<div class="navi-link">
					<div class="symbol symbol-40 bg-light mr-3">
						<div class="symbol-label">
							<span class="svg-icon svg-icon-md svg-icon-success">

								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
										<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
									</g>
								</svg>

								<!--end::Svg Icon-->
							</span>
						</div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold">Mi perfil</div>
						<div class="text-muted">Edite su informacion personal
						</div>
					</div>
				</div>
			</a>

			<!--end:Item-->

		</div>

		<!--end::Nav-->

		<!--begin::Separator-->
		<div class="separator separator-dashed my-7"></div>

		<!--end::Separator-->

		<!--begin::Notifications-->
		<div>

			<!--begin:Heading-->
			<h5 class="mb-5">Mensaje del administrador</h5>

			<!--end:Heading-->

			<!--begin::Item-->
			<div class="d-flex align-items-center bg-light-primary rounded p-5 gutter-b">
				<span class="svg-icon svg-icon-primary mr-5">
					<span class="svg-icon svg-icon-lg">

						<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
						<span class="svg-icon svg-icon-primary svg-icon-3x">
							<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Info-circle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
									<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
									<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>

						<!--end::Svg Icon-->
					</span>
				</span>
				<div class="d-flex flex-column flex-grow-1 mr-2">
					<label class="font-weight-normal text-dark-75 text-primary font-size-lg mb-1">Esto es un mensaje personalizado</label>
					<span class="text-muted font-size-sm">Para traerle informacion importante a los vendedores</span>
				</div>
				<!-- <span class="font-weight-bolder text-warning py-1 font-size-lg">:)</span> -->
			</div>

			<!--end::Item-->

			<!--begin:Heading-->
			<h5 class="mb-5">Informacion importante</h5>

			<!--end:Heading-->

			<!--begin::Item-->
			<div class="d-flex align-items-center bg-light-success rounded p-5 gutter-b">
				<span class="svg-icon svg-icon-success mr-5">
					<span class="svg-icon svg-icon-lg">

						<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
						<span class="svg-icon svg-icon-primary svg-icon-3x">
							<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Info-circle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
									<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
									<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>

						<!--end::Svg Icon-->
					</span>
				</span>
				<div class="d-flex flex-column flex-grow-1 mr-2">
					<label class="font-weight-normal text-dark-75 text-primary font-size-lg mb-1">Esto es un mensaje personalizado</label>
					<span class="text-muted font-size-sm">Para traerle informacion importante a los vendedores</span>
				</div>
			</div>

			<!--end::Item-->

		</div>

		<!--end::Notifications-->
	</div>

	<!--end::Content-->
</div>

<!-- end::User Panel-->