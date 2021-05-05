<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Details-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Detalle del dato</h5>
				<!--end::Title-->
			</div>
			<!--end::Details-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Row-->
			<div class="row">
				<div class="col-xl-4">

					<!--begin::Card-->
					<div class="card card-custom">
						<!--begin::Header-->
						<div class="card-header h-auto py-4">
							<div class="card-title">
								<h3 class="card-label"><?= $lead[0]['name'] ?>
									<span class="d-block text-muted pt-2 font-size-sm"><b>Ingresado el <?= $lead[0]['date'] ?></b></span>
								</h3>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-4">
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Pais:</label>
								<div class="col-8">
									<span class="form-control-plaintext font-weight-bolder"><?= $lead[0]['country'] ?></span>
								</div>
							</div>

							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Telefono:</label>
								<div class="col-8">
									<span class="form-control-plaintext font-weight-bolder"><?= $lead[0]['phone'] ?></span>
								</div>
							</div>
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Email:</label>
								<div class="col-8">
									<span class="form-control-plaintext font-weight-bolder">
										<?= $lead[0]['email'] ?>
									</span>
								</div>
							</div>
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Preferencia:</label>
								<div class="col-8">
									<span class="label label-dark label-inline mt-3">
										<?= $lead[0]['contactMethod'] ?>
									</span>
								</div>
							</div>
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Comentario:</label>
								<div class="col-8">
									<span class="form-control-plaintext">
										<span class="font-weight-bolder"><em><?= $lead[0]['detail'] ?></em></span>&#160;
								</div>
							</div>
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Curso de interes:</label>
								<div class="col-8">
									<span class="form-control-plaintext">
										<span class="font-weight-bolder"><?= $lead[0]['course'] ?></span>&#160;
								</div>
							</div>
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Horario de contacto:</label>
								<div class="col-8">
									<span class="form-control-plaintext">
										<span class="font-weight-bolder"><?= $lead[0]['contactTime'] ?></span>&#160;
								</div>
							</div>
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<!-- <div class="card-footer">
							<a href="#" class="btn btn-primary font-weight-bold mr-2">Actualizar estado</a>
						</div> -->
						<div class="card-footer">
							<a href="#" class="btn btn-primary font-weight-bold mr-2" data-toggle="modal" data-target="#modal">Actualizar estado</a>
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
				<div class="col-xl-8">
					<!--begin::Card-->
					<div class="card card-custom gutter-b">

						<!--begin::Body-->
						<div class="card-body px-0">
							<div class="tab-content pt-5">
								<!--begin::Tab Content-->
								<div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
									<div class="container">
										<!--begin::Timeline-->
										<?php foreach ($messages as $message) { ?>
											<div class="timeline timeline-3 mt-3">
												<div class="timeline-items">
													<div class="timeline-item">
														<div class="timeline-media">
															<img alt="Pic" src="assets/profile/<?= $message['img'] ?>.jpg" />
														</div>
														<div class="timeline-content">
															<div class="d-flex align-items-center justify-content-between mb-3">
																<div class="mr-2">
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold"><?= $message['name'] . ' ' . $message['lastname'] ?></a>
																</div>
															</div>
															<p class="p-0"><?= $message['text'] ?></p>
														</div>
													</div>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
								<!--end::Tab Content-->
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Card-->
				</div>
			</div>
			<!--end::Row-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->

<!-- Modal-->
<div class="modal fade" id="modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="container">
				<div class="form-group mt-5">
					<textarea class="form-control form-control-lg form-control-solid" id="messageArea" rows="3" placeholder="Escriba su mensaje"></textarea>
				</div>
				<div class="row">
					<div class="col text-right mb-5">
						<select class="form-control mb-4" id="selectState">
							<option selected disabled>-- Seleccione --</option>
							<option value="7">Promesa</option>
							<option value="6">Cuasi Promesa</option>
							<option value="5">Llamar luego</option>
							<option value="4" class="font-weight-bold text-danger">No interesado</option>
							<option value="3" class="font-weight-bold text-success">Vendido</option>
						</select>
						<div class="form-group row">
							<div class="col-lg-8 col-md-9 col-sm-12">
								<input class="form-control" id="kt_timepicker_1" readonly placeholder="Select time" type="text" />
							</div>
						</div>
						<button href="#" class="btn btn-light-primary font-weight-bold" onclick="sendMessage('<?= $userData[0]['name'] ?>','<?= $userData[0]['lastname'] ?>','<?= $userData[0]['id'] ?>','<?= $lead[0]['id'] ?>','<?= $userData[0]['img'] ?>');">Enviar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->


<script>
	function swalfire() {
		Swal.fire({
			text: "Debe elegir el estado y comentar el cambio (Minimo 20 caracteres)",
			icon: "warning",
			buttonsStyling: false,
			showConfirmButton: false,
			timer: 2000
		})
	}

	function sendMessage(name, lastname, id_user, id_lead, img) {
		let select = $('#selectState').val();
		let text = $('#messageArea').val();

		if ((select > 0) && (text.length > 20)) {
			//agregar que si el select da 5 (caso de llamar luego) seleccionar un horario en cual llamar
			var info = {
				'message': $('#messageArea').val(),
				'name': name,
				'lastname': lastname,
				'id_user': id_user,
				'id_lead': id_lead,
				'img': img,
				'state': select
			}

			$.ajax({
				type: 'get',
				url: './functions/changeLeadState.php',
				data: info,
				success: function(response) {
					$('#messageArea').val("");
					location.href = "./index.php";
				}
			});
		} else {
			swalfire();
		}
	}
</script>