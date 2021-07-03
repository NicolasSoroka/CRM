<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
	<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Details-->
		<div class="d-flex align-items-center flex-wrap mr-2">
			<!--begin::Title-->
			<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Leads asignados</h5>
			<input type="input" id="searchValue" placeholder="Buscar">
			<select id="searchOpt">
				<option value="" selected disabled>-- Seleccione --</option>
				<option value="course">Curso</option>
				<option value="name">Vendedor</option>
				<option value="country">Pais</option>
			</select>
			<button onclick="search()">Buscar
				<span class="svg-icon svg-icon-primary svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
				</span></button>
			<!--end::Title-->
		</div>
		<!--end::Details-->
	</div>
</div>

<!--begin::Table-->
<table class="table table-hover">
	<thead>
		<tr>
			<th class="text-center" scope="col">Numero</th>
			<th class="text-center" scope="col">Pais</th>
			<th class="text-center" scope="col">Vendedor</th>
			<th class="text-center" scope="col">Fecha de asignacion</th>
			<th class="text-center" scope="col">Curso de interes</th>
			<th class="text-center" scope="col">Estado</th>
			<th class="text-center" scope="col">Reasignar</th>
			<th class="text-center" scope="col">Ver detalle</th>
			<th class="text-center" scope="col">Eliminar</th>
		</tr>
	</thead>
	<tbody id="tbody-leads">
		<?php
		foreach ($sales as $sale) { ?>
			<tr id="tr<?= $sale['id'] ?>">
				<td class="text-center align-middle">
					<label class="text-dark-75 font-weight-bolder ml-2 label label-lg bg-transparent border border-dark label-inline font-size-lg"><?= $sale['id'] ?></label>
				</td>
				<td class="text-center align-middle">
					<div class="symbol symbol-50 symbol-light">
						<span class="symbol-label">
							<img src="assets/media/country/<?= $sale['country'] ?>.png" class="h-50 align-self-center" alt="" />
						</span>
					</div>
				</td>
				<td class="text-center align-middle">
					<label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $sale['name'] . ' ' . $sale['lastname'] ?></label>
				</td>
				<td class="text-center align-middle">
					<?php
					$str = $sale['time'];
					$date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
					echo '<span class="font-weight-bolder font-weight-500 label label-primary label-inline">' . $date->format("d/m - h:i") . '</span>';
					?>
				</td>
				<td class="text-center align-middle">
					<label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $sale['course'] ?></label>
				</td>
				<td class="text-center align-middle">
					<?php switch ($sale['label']) {
						case 8:
							echo '<span class="ml-2 label label-primary label-inline">Quasi Promesa</span>';
							break;
						case 7:
							echo '<span class="ml-2 label label-primary label-inline">Promesa</span>';
							break;
						case 6:
							echo '<span class="ml-2 label bg-transparent border border-dark label-inline">No contactado</span>';
							break;
						case 5:
							echo '<span class="ml-2 label bg-warning label-inline">Llamar luego</span>';
							break;
						case 4:
							echo '<span class="ml-2 label label-danger label-inline">No interesado</span>';
							break;
						case 3:
							echo '<span class="ml-2 label label-success label-inline">Vendido</span>';
							break;
						case 2:
							echo '<span class="ml-2 label label-info label-inline">Interesado</span>';
							break;
						case 1:
							echo '<span class="label bg-gray-300 label-inline">Nuevo<span class="pl-1 svg-icon svg-icon-warning svg-icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.3476862,4.32173209 11.9473121,4.11839309 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 Z" fill="#000000" />
								</g>
							</svg>
						</span></span>';
							break;
						case 0:
							echo '<span class="ml-2 label label-dark label-inline">No asignado</span>';
							break;
					} ?>
				</td>
				<td class="text-center align-middle" data-toggle="modal" data-target="#modal<?= $sale['id'] ?>" style="cursor: pointer;">
					<span class="svg-icon svg-icon-primary svg-icon-2x">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
					</span>
				</td>

				<!-- Asignar dato -->
				<div class="modal fade" id="modal<?= $sale['id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Asignar lead</h5>
							</div>
							<div class="modal-body">
								<?php if ($userData[0]['access'] == 0) { ?>
									<div class="form-group row">
										<label class="col-2 col-form-label">Asignar</label>
										<div class="col-7">
											<select class="form-control" id="assignOpt<?= $sale['id'] ?>">
												<option selected disabled>-- Seleccione vendedor --</option>
												<?php foreach ($users as $user) { ?>
													<option value="<?= $user['id'] ?>"><?= $user['name'] . ' ' . $user['lastname'] ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								<?php } ?>

								<div class="form-row mt-4">
									<div class="col-12 text-right">
										<button type="button" onclick="assign(<?= $sale['id'] ?>)" class="btn btn-primary mr-2">Asignar</button>
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-light-primary font-weight-bold" data-dismiss="modal" data-toggle="modal" data-target="#modalUpload">Cargar nuevo</button>
						<button type="submit" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
				<!-- Asignar dato -->

				<!-- Ver detalle -->
				<td class="text-center align-middle">
					<button style="border: none; background-color: transparent;" onclick="window.location='./index.php?lead=<?= $sale['id'] ?>'">
						<span class="svg-icon svg-icon-primary svg-icon-2x">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
									<rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
									<rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
								</g>
							</svg>
						</span>
					</button>
				</td>
				<!-- Ver detalle -->

				<!-- Eliminar dato -->
				<td class="text-center align-middle">
					<button style="border: none; background-color: transparent;" onclick="deleteLead(<?= $sale['id'] ?>)">
						<span class="svg-icon svg-icon-danger svg-icon-2x">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
									<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
								</g>
							</svg>
						</span>
					</button>
				</td>
				<!-- Eliminar dato -->
			</tr>
		<?php } ?>
	</tbody>
</table>
<!--end::Table-->

<script>
	<?php //array traido desde PHP pasado a JS para utilizar en el buscador
	$sales_js = json_encode($sales);
	echo "let leads_array = " . $sales_js . ";\n";
	?>

	function swalfire(text) {
		Swal.fire({
			text,
			icon: "warning",
			buttonsStyling: true,
			showConfirmButton: true,
			timer: 4000
		})
	}

	function search() {
		let searchValue = $('#searchValue').val().toLowerCase();
		let optValue = $('#searchOpt').val();

		switch (searchValue) {
			case 'no asignado':
				searchValue = 0;
				break;
			case 'nuevo':
				searchValue = 1;
				break;
			case 'interesado':
				searchValue = 2;
				break;
			case 'vendido':
				searchValue = 3;
				break;
			case 'no interesado':
				searchValue = 4;
				break;
			case 'llamar luego':
				searchValue = 5;
				break;
			case 'no contactado':
				searchValue = 6;
				break;
			case 'promesa':
				searchValue = 7;
				break;
		}

		leads_array.forEach(lead => {
			if (lead[optValue].toLowerCase().includes(searchValue)) {
				$('#tr' + lead['id']).show();
				return;
			} else {
				$('#tr' + lead['id']).hide();
			}
			if (optValue === 'name') {
				(lead['lastname'].toLowerCase().includes(searchValue)) ? $('#tr' + lead['id']).show(): $('#tr' + lead['id']).hide();
			}
		});
	}

	function assign(id) {
		let assignOpt = $('#assignOpt' + id).val();
		let info = {
			'lead_id': id,
			'user_id': assignOpt
		}

		$.ajax({
			type: 'get',
			url: './functions/assignById.php',
			data: info,
			success: function(response) {
				Swal.fire({
					text: "Lead asignado!",
					icon: "success",
					buttonsStyling: false,
					showConfirmButton: false,
					timer: 2000
				})
				location.reload();
			}
		});
	}

	function deleteLead(id) {
		Swal.fire({
			title: "Esta a punto de eliminar un lead",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Eliminar",
			cancelButtonText: "Cancelar",
			reverseButtons: true
		}).then(function(result) {
			let id_lead = id;
			if (result.value) {
				$.ajax({
					type: 'get',
					url: './functions/deleteLead.php',
					data: {id_lead},
					success: function(response) {
						location.reload();
					}
				});
			}
		});
	}
</script>