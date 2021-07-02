<?php
require './globals/database_campus.php';
$db2 = Database_campus::getInstance();
$db2->query('SELECT nombre, id_curso FROM curso');
$courses_list = $db2->fetchAll();
?>

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
								<label class="col-4 col-form-label">Estado actual:</label>
								<div class="col-5">
									<?php switch ($lead['0']['label']) {
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
								</div>
							</div>
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
										<?php $str = $lead[0]['contactTime'];
										$date = DateTime::createFromFormat("H:i:s", $str);
										?>
										<span class="font-weight-bolder"><?= $date->format("h:i") ?></span>&#160;
									</span>
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
														<div class="timeline-media" style="margin-top: 15px;">
															<img alt="Pic" src="assets/profile/<?= $message['img'] ?>.jpg" />
														</div>
														<div class="timeline-content">
															<div class="d-flex align-items-center justify-content-between mb-3">
																<div class="mr-2">
																	<label class="text-dark-75 text-primary font-weight-bold"><?= $message['name'] . ' ' . $message['lastname'] ?></label>
																	<span><?= Date('d M H:i A', strtotime($message['time'])); ?></span>
																		<?php switch ($message['label']) {
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
			<div class="container" id="messageContainer">
				<div class="form-group row mt-5">
					<textarea class="form-control form-control-lg form-control-solid" id="messageArea" rows="3" placeholder="Escriba su mensaje"></textarea>
				</div>
				<div class="form-group row">
					<div class="col">
						<select class="form-control mb-4" id="selectState" onchange="comboChange(this)">
							<option selected disabled>-- Seleccione --</option>
							<?php if ($message['label'] !== '7') { ?>
								<option value="7">Promesa</option>
								<?php if ($message['label'] !== '6') { ?> <option value="6">Cuasi Promesa (Interesado)</option> <?php } ?>
								<option value="5">Llamar luego</option>
								<?php if ($message['label'] !== '4') { ?><option value="4" class="font-weight-bold text-danger">No interesado</option> <?php } ?>
							<?php } else { ?>
								<option value="5">Llamar luego</option>
								<option value="4" class="font-weight-bold text-danger">No interesado</option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<span class="col-6" id="contactTimeField" style="display: none;">
						<input class="form-control" type="datetime-local" id="datetime-call-later" />
					</span>
					<div class="col-6 text-right">
						<button href="#" class="btn btn-light-primary font-weight-bold" onclick="sendMessage('<?= $userData[0]['name'] ?>','<?= $userData[0]['lastname'] ?>','<?= $userData[0]['id'] ?>','<?= $lead[0]['id'] ?>','<?= $userData[0]['img'] ?>',
						'<?= $lead[0]['phone'] ?>','<?= $lead[0]['email'] ?>','<?= $lead[0]['country'] ?>','<?= $lead[0]['course_id'] ?>','<?= $lead[0]['course'] ?>');">Modificar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->

<!-- Modal carga datos-->
<div class="modal fade" id="modalUpdate" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
	<div class="card card-custom">
		<div class="card-header">
			<div class="card-title">
				<h3 class="card-label">Datos adicionales</h3>
			</div>
			<div class="card-toolbar">
				<ul class="nav nav-light-success nav-bold nav-pills" id="tabIndex">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#tab1">
							<span class="nav-icon"><i class="flaticon2-avatar"></i></span>
							<span class="nav-text">1</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="card-body">
			<div class="tab-content" id="modal-container">
				<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="container">
								<div class="card card-custom gutter-b example example-compact">
									<div class="card card-custom gutter-b example example-compact">
										<!--begin::Form-->
										<form>
											<div class="card-body">
												<div class="form-group row">
													<label class="col-2 col-form-label">Nombre</label>
													<div class="col-4">
														<input class="form-control" type="text" id="name1" required />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-2 col-form-label">Apellido</label>
													<div class="col-4">
														<input class="form-control" type="text" id="lastname1" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-2 col-form-label">Documento</label>
													<div class="col-4">
														<input class="form-control" type="text" id="username1" required />
													</div>
												</div>
												<div class="form-group row">
													<label for="example-search-input" class="col-2 col-form-label">Telefono</label>
													<div class="col-4">
														<input class="form-control" type="search" id="phone1" />
													</div>
												</div>
												<div class="form-group row">
													<label for="example-email-input" class="col-2 col-form-label">Email</label>
													<div class="col-4">
														<input class="form-control" type="email" id="email1" />
													</div>
												</div>
												<div class="form-group row">
													<label for="exampleSelectd" class="col-2 col-form-label">Pais</label>
													<div class="col-4">
														<select class="form-control" id="country1">
															<option selected disabled>-- Seleccione --</option>
															<option value="argentina">Argentina</option>
															<option value="chile">Chile</option>
															<option value="paraguay">Paraguay</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label for="example-url-input" class="col-2 col-form-label">Curso</label>
													<div class="col-6">
														<select class="form-control" id="course1">
															<option selected disabled>-- Seleccione --</option>
															<?php foreach ($courses_list as $course) { ?>
																<option value="<?= $course['id_curso'] ?>"><?= $course['nombre'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-2 col-form-label">Cantidad de cuotas</label>
													<div class="col-4">
														<input class="form-control" type="text" id="installments1" required numeric step="1" min="1" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-2 col-form-label">Valor bruto</label>
													<div class="col-4">
														<input class="form-control" type="text" id="total_amount1" numeric required />
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="text-right col-6">
					<button type="button" onclick="addSale()" class="btn btn-primary mr-2">Agregar persona</button>
					<button type="button" onclick="removeSale()" class="btn btn-danger mr-2">Quitar persona</button>
					<button type="button" onclick="finishPromise('<?= $userData[0]['id'] ?>','<?= $lead[0]['id'] ?>','<?= $userData[0]['img'] ?>')" class="btn btn-success mr-2">Finalizar promesa</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Modal carga datos-->

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

	function modalUpdate(user_info) {
		$("#modalUpdate").modal('show');
		$("#name1").val(user_info.name);
		$("#lastname1").val(user_info.lastname);
		$("#phone1").val(user_info.phone);
		$("#email1").val(user_info.email);
		$("#country1").val(user_info.country);
		$("#course1").val(user_info.course_id);
	}

	function sendMessage(name, lastname, id_user, id_lead, img, phone, email, country, course_id, course_name) {
		let select = $('#selectState').val();
		let text = $('#messageArea').val();
		let str = $('#datetime-call-later').val();
		let substrings = str.split('T');
		if ((select > 0) && (text.length > 20)) {
			var info = {
				'message': $('#messageArea').val(),
				'name': name,
				'lastname': lastname,
				'id_user': id_user,
				'id_lead': id_lead,
				'img': img,
				'label': select,
				'phone': phone,
				'email': email,
				'country': country,
				'course_id': course_id,
				'course_name': course_name,
				'contactDay': substrings[0],
				'contactTime': substrings[1]
			}

			if (select != 7) {
				$.ajax({
					type: 'get',
					url: './functions/changeLeadState.php',
					data: info,
					success: function(response) {
						$('#messageArea').val("");
						location.href = "./index.php";
					}
				});
			} else { //EN CASO DE PROMISE SE MUESTRA EL MODAL CON DATA DEL LEAD.
				var info = {
					'name': '<?= $lead[0]['name'] ?>',
					'lastname': '<?= $lead[0]['lastname'] ?>',
					'phone': '<?= $lead[0]['phone'] ?>',
					'email': '<?= $lead[0]['email'] ?>',
					'country': '<?= $lead[0]['country'] ?>',
					'course_id': '<?= $lead[0]['id'] ?>'
				}
				modalUpdate(info);
			}
		} else {
			swalfire();
		}
	}

	let counter = 1;

	function removeSale() {
		let count = $("#modal-container").children().length;
		if (count > 1) {
			$('#modal-container').children().last().remove();
			$('#tabIndex').children().last().remove();
			counter--;
		}
	}

	function addSale() {
		counter++;
		let modalContainer = $('#modal-container');
		modalContainer.append(`<div class="tab-pane fade" id="tab${counter}" role="tabpanel" aria-labelledby="tab${counter}">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="container">
								<div class="card card-custom gutter-b example example-compact">
									<div class="card card-custom gutter-b example example-compact">
										<!--begin::Form-->
										<form>
											<div class="card-body">
												<div class="form-group row">
													<label class="col-2 col-form-label">Nombre</label>
													<div class="col-4">
														<input class="form-control" type="text" id="name${counter}" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-2 col-form-label">Apellido</label>
													<div class="col-4">
														<input class="form-control" type="text" id="lastname${counter}" />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-2 col-form-label">Documento</label>
													<div class="col-4">
														<input class="form-control" type="text" id="username${counter}" required/>
													</div>
												</div>
												<div class="form-group row">
													<label for="example-search-input" class="col-2 col-form-label">Telefono</label>
													<div class="col-4">
														<input class="form-control" type="search" id="phone${counter}" />
													</div>
												</div>
												<div class="form-group row">
													<label for="example-email-input" class="col-2 col-form-label">Email</label>
													<div class="col-4">
														<input class="form-control" type="email" id="email${counter}" />
													</div>
												</div>
												<div class="form-group row">
													<label for="exampleSelectd" class="col-2 col-form-label">Pais</label>
													<div class="col-4">
														<select class="form-control" id="country${counter}">
															<option selected disabled>-- Seleccione --</option>
															<option value="argentina">Argentina</option>
															<option value="chile">Chile</option>
															<option value="paraguay">Paraguay</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label for="example-url-input" class="col-2 col-form-label">Curso</label>
													<div class="col-6">
														<select class="form-control" id="course${counter}">
															<option selected disabled>-- Seleccione --</option>
															<?php foreach ($courses_list as $course) { ?> 
																<option value = "<?= $course['id_curso'] ?>" > <?= $course['nombre'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-2 col-form-label">Cantidad de cuotas</label>
													<div class="col-4">
														<input class="form-control" type="text" id="installments${counter}" required numeric step="1" min="1"/>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-2 col-form-label">Valor bruto</label>
													<div class="col-4">
														<input class="form-control" type="text" id="total_amount${counter}" numeric required />
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div></div>`);

		let tabIndex = $('#tabIndex');
		tabIndex.append(`<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab${counter}">
						<span class="nav-icon"><i class="flaticon2-avatar"></i></span>
						<span class="nav-text">${counter}</span>
						</a>
						</li>`);
	}

	function finishPromise(id_user, id_lead, img) {
		let pointer = 2;
		counter--;
		let str = $('#datetime-call-later').val();
		let substrings = str.split('T');
		for (let i = counter; i > 0; i--) {
			var info = {
				'name': $(`#name${pointer}`).val(),
				'lastname': $(`#lastname${pointer}`).val(),
				'username': $(`#username${pointer}`).val(),
				'phone': $(`#phone${pointer}`).val(),
				'email': $(`#email${pointer}`).val(),
				'country': $(`#country${pointer}`).val(),
				'course_id': $(`#course${pointer}`).val(),
				'installments': $(`#installments${pointer}`).val(),
				'total_amount': $(`#total_amount${pointer}`).val(),
				'course_name': $(`#course${pointer}`).text(),
				'label': 7,
				'created_by': '<?= $userId ?>',
				'group_sale': id_lead,
				'contactDay': substrings[0],
				'contactTime': substrings[1]
			}
			pointer++;
			$.ajax({
				type: 'get',
				url: './functions/addNewLead.php',
				data: info,
				success: function(response) {
					Swal.fire({
						text: "Promesa creada con exito",
						icon: "success",
						buttonsStyling: false,
						showConfirmButton: false,
						timer: 2000
					})
				}
			});
		}

		var info = {
			'message': $('#messageArea').val(),
			'label': $('#selectState').val(),
			'name': $(`#name1`).val(),
			'lastname': $(`#lastname1`).val(),
			'username': $(`#username1`).val(),
			'id_user': id_user,
			'id_lead': id_lead,
			'img': img,
			'phone': $(`#phone1`).val(),
			'email': $(`#email1`).val(),
			'country': $(`#country1`).val(),
			'course_id': $(`#course1`).val(),
			'course_name': $(`#course1 option:selected`).text(),
			'installments': $(`#installments1`).val(),
			'total_amount': $(`#total_amount1`).val(),
			'group_sale': id_lead,
			'contactDay': substrings[0],
			'contactTime': substrings[1]
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
	}

	function comboChange(combo) {
		let combo_value = combo.value;
		if ((combo_value == 5) || (combo_value == 7)) {
			$('#contactTimeField').show();
		} else {
			$('#contactTimeField').hide();
		}
	}
</script>