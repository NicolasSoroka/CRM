<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
	<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Details-->
		<div class="d-flex align-items-center flex-wrap mr-2">
			<!--begin::Title-->
			<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Nuevo lead (Whatsapp)</h5>
			<!--end::Title-->
		</div>
		<!--end::Details-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<!--begin::Button-->
			<!-- <a href="#" class="btn btn-danger font-weight-bold">Volver</a> -->
			<!--end::Button-->
		</div>
		<!--end::Toolbar-->
	</div>
</div>
<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
	<!--begin::Form-->
	<form>
		<div class="card-body">
			<div class="form-group row">
				<label class="col-1 col-form-label">Detalle</label>
				<div class="col-11">
					<textarea class="col-6 form-control" id="detail" rows="9"></textarea>
				</div>
			</div>

			<?php if ($userData[0]['access'] == 0) { ?>
				<input type="hidden" id="testigo" value="1">
				<div class="form-group row">
					<label class="col-1 col-form-label">Asignar a</label>
					<div class="col-4">
						<select class="form-control" id="userSelect">
							<option selected disabled>-- Seleccione vendedor --</option>
							<?php foreach ($users as $user) { ?>
								<option value="<?= $user['id'] ?>"><?= $user['name'] . ' ' . $user['lastname'] ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			<?php } ?>

			<div class="form-row mt-4">
				<div class="col-6">
					<button type="button" onclick="newLead()" class="btn btn-primary mr-2">Cargar lead</button>
				</div>
			</div>
		</div>
	</form>
</div>
<!--end::Card-->

<script>
	function newLead() {
		Swal.fire({
			title: "Esta por cargar un nuevo lead",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Cargar",
			cancelButtonText: "Cancelar",
			reverseButtons: true
		}).then(function(result) {
			if (result.value) {
				var info = {
					'detail': $('#detail').val(),
					'created_by' : '<?=$userId?>'
				}
				$.ajax({
					type: 'get',
					url: './functions/addNewLead.php',
					data: info,
					success: function(response) {
						let lead_id = JSON.parse(response);
						var info = {
							'user_id': $('#userSelect').val(),
							'lead_id': lead_id
						}
						let ok = $('#testigo').val();
						if (ok == 1) {
							$.ajax({
								type: 'get',
								url: './functions/assignById.php',
								data: info,
								success: function(response) {
									Swal.fire({
										text: "ok!",
										icon: "success",
										buttonsStyling: false,
										showConfirmButton: false,
										timer: 2000
									})
								}
							});
						}
						$('#detail').val("")
					}
				});
			}
		})
	}
</script>