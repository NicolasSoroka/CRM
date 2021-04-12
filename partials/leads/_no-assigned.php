<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Listado de leads no asignados</h5>
            <!--end::Title-->
        </div>
        <!--end::Details-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Button-->
            <a href="#" class="btn btn-danger font-weight-bold">Volver</a>
            <!--end::Button-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--begin::List-->
<div class="flex-row-fluid lg-8 d-block" id="kt_inbox_list">
	<!--begin::Card-->
	<div class="card card-custom card-stretch">
		<!--begin::Header-->
		<div class="card-header row row-marginless align-items-center flex-wrap py-5 h-auto">
			<!--begin::Search-->
			<div class="col-xxl-3 d-flex order-1 order-xxl-2 align-items-center justify-content-center">
				<div class="input-group input-group-lg input-group-solid">
					<input type="text" class="form-control pl-4" placeholder="Buscar..." />
					<div class="input-group-append">
						<span class="input-group-text pr-3">
							<span class="svg-icon svg-icon-lg">
								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</span>
					</div>
				</div>
			</div>
			<!--end::Search-->
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body table-responsive px-0">
			<div class="list list-hover min-w-500px" data-inbox="list">
				<!--begin::Item-->
				<div class="d-flex align-items-start list-item card-spacer-x py-3" data-inbox="message">
					<!--begin::Toolbar-->
					<div class="d-flex align-items-center">
						<!--begin::Author-->
						<div class="d-flex align-items-center flex-wrap w-xxl-200px mr-3 mt-4" data-toggle="view">
							<span class="symbol symbol-35 mr-3">
								<span class="symbol-label" style="background-image: url('assets/media/country/arg.png')"></span>
							</span>
							<a href="#" class="font-weight-bold text-dark-75 text-hover-primary">Nicolas Ejemplo</a>
						</div>
						<!--end::Author-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Info-->
					<div class="flex-grow-1 mr-2" data-toggle="view">
						<div>
							<span class="font-weight-bolder font-size-lg mr-2">Curso de refrigeracion industrial</span>
							<span class="mt-2 mr-3 font-weight-bolder text-muted w-200px text-right" data-toggle="view"><em>Cargado el 4/3/20</em></span>
						</div>
						<div class="mt-2">
							<form action="">
								<!-- aca pongo el id del lead -->
								<input type="hidden" value="#">
								<button type="button" class="btn-sm btn-primary mr-2" data-toggle="modal" data-target="#staticBackdrop">
									Asignar
								</button>
								<button type="submit" class="btn-sm btn-success mr-2">Editar</button>
							</form>
						</div>
					</div>
					<!--end::Info-->
				</div>
				<!--end::Item-->
				<!--begin::Item-->
				<div class="d-flex align-items-start list-item card-spacer-x py-3" data-inbox="message">
					<!--begin::Toolbar-->
					<div class="d-flex align-items-center">
						<!--begin::Author-->
						<div class="d-flex align-items-center flex-wrap w-xxl-200px mr-3 mt-4" data-toggle="view">
							<span class="symbol symbol-35 mr-3">
								<span class="symbol-label" style="background-image: url('assets/media/country/chile.png')"></span>
							</span>
							<a href="#" class="font-weight-bold text-dark-75 text-hover-primary">Laura Perez</a>
						</div>
						<!--end::Author-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Info-->
					<div class="flex-grow-1 mr-2" data-toggle="view">
						<div>
							<span class="font-weight-bolder font-size-lg mr-2">Curso de Mecanica integral</span>
							<span class="mt-2 mr-3 font-weight-bolder text-muted w-200px text-right" data-toggle="view"><em>Cargado el 6/2/20</em></span>
						</div>
						<div class="mt-2">
							<form action="">
								<!-- aca pongo el id del lead -->
								<input type="hidden" value="#">
								<button type="button" class="btn-sm btn-primary mr-2" data-toggle="modal" data-target="#staticBackdrop">
									Asignar
								</button>
								<button type="submit" class="btn-sm btn-success mr-2">Editar</button>
							</form>
						</div>
					</div>
					<!--end::Info-->
				</div>
				<!--end::Item-->
			</div>
		</div>
		<!--end::Body-->
	</div>
	<!--end::Card-->
</div>
<!--end::List-->

<!-- Modal-->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Asignar lead</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-10">
					<select class="form-control" id="exampleSelectd">
						<option selected disabled>-- Seleccione vendedor --</option>
						<option>Vendedor 1</option>
						<option>Vendedor 2</option>
						<option>Vendedor 3</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" onclick="swalfire();" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Asignar</button>
				<button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->
<script>
	function swalfire() {
		Swal.fire({
			title: "Lead asignado!",
			text: "El lead fue asignado a User",
			icon: "success",
			buttonsStyling: false,
			showConfirmButton: false,
			timer: 2000
		})
	}
</script>