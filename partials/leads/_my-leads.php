<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
	<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Details-->
		<div class="d-flex align-items-center flex-wrap mr-2">
			<!--begin::Title-->
			<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Listado de leads asignados</h5>
			<!--end::Title-->
		</div>
		<!--end::Details-->
	</div>
</div>
<!--begin::List-->
<div class="flex-row-fluid lg-8 d-block" id="kt_inbox_list">
	<!--begin::Card-->
	<div class="card card-custom card-stretch">
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
							<span class="mt-2 mr-3 font-weight-bolder text-muted w-200px text-right" data-toggle="view"><em>Asignado el 4/3/20</em></span>
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
							<span class="mt-2 mr-3 font-weight-bolder text-muted w-200px text-right" data-toggle="view"><em>Asignado el 6/2/20</em></span>
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
				<button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancelar</button>
				<button type="button" onclick="swalfire();" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Asignar</button>
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