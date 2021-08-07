<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
	<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<div class="d-flex align-items-center flex-wrap mr-2">
			<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Ventas de <?= $sales[0]['name'] . ' ' . $sales[0]['lastname'] ?></h5>
		</div>
	</div>
</div>
<div class="d-flex flex-column-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-xxl-4">
				<div class="card card-custom bg-dark card-stretch gutter-b">
					<div class="card-header border-0 pt-6 mb-2">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label font-weight-bold font-size-h4 text-light mb-3">Datos de hoy</span>
						</h3>
					</div>
					<div class="card-body pt-2">
						<div class="table-responsive">
							<table class="table table-borderless mb-0">
								<tbody>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-success">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-success svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																	<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Ventas concretadas</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id="today-sales"></td>
									</tr>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-secondary">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-secondary svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																	<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																	<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
																	<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Datos solicitados</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id="today-leads"></td>
									</tr>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-warning">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-dark svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1" />
																	<path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Bruto acumulado</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id="today-gross"></td>
									</tr>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-warning">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-success svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1" />
																	<path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Neto acumulado</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id="today-net"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-xxl-4">
				<div class="card card-custom bg-dark card-stretch gutter-b">
					<div class="card-header border-0 pt-6 mb-2">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label font-weight-bold font-size-h4 text-white mb-3">Ventas de la semana</span>
						</h3>
					</div>
					<div class="card-body pt-2">
						<div class="table-responsive">
							<table class="table table-borderless mb-0">
								<tbody>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-success">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-success svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																	<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Ventas concretadas</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id='week-sales'></td>
									</tr>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-secondary">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-secondary svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																	<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																	<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
																	<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Datos solicitados</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id='week-leads'></td>
									</tr>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-warning">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-dark svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1" />
																	<path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Bruto acumulado</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id='week-gross'></td>
									</tr>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-warning">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-success svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1" />
																	<path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Neto acumulado</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id="week-net"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-xxl-4">
				<div class="card bg-dark card-custom card-stretch gutter-b">
					<div class="card-header border-0 pt-6 mb-2">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label font-weight-bold font-size-h4 text-white mb-3">Ventas del mes</span>
						</h3>
					</div>
					<div class="card-body pt-2">
						<div class="table-responsive">
							<table class="table table-borderless mb-0">
								<tbody>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-success">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-success svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																	<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Ventas concretadas</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id="month-sales"></td>
									</tr>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-secondary">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-secondary svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																	<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																	<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
																	<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Datos solicitados</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id="month-leads"></td>
									</tr>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-warning">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-dark svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1" />
																	<path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Bruto acumulado</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id="month-gross"></td>
									</tr>
									<tr>
										<td class="w-40px align-middle pb-6 pl-0 pr-2">
											<div class="symbol symbol-40 symbol-light-warning">
												<span class="symbol-label">
													<span class="svg-icon menu-icon">
														<span class="svg-icon svg-icon-success svg-icon-2x">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1" />
																	<rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1" />
																	<path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000" />
																</g>
															</svg>
														</span>
													</span>
												</span>
											</div>
										</td>
										<td class="font-size-lg font-weight-bolder text-white text-muted align-middle w-150px pb-6">Neto acumulado</td>
										<td class="font-weight-bolder font-size-lg text-white text-right align-middle pb-6" id="month-net"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card card-custom card-stretch gutter-b">
					<div class="card-body">
						<div class="tab-content">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th class="text-center" scope="col">Numero</th>
											<th class="text-center" scope="col">Pais</th>
											<th class="text-center" scope="col">Fecha de venta</th>
											<th class="text-center" scope="col">Alumno</th>
											<th class="text-center" scope="col">Curso vendido</th>
											<th class="text-center" scope="col">Monto bruto</th>
											<th class="text-center" scope="col">Monto neto</th>
											<th class="text-center" scope="col">Ver detalle</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($sales as $sale) { ?>
											<tr id="<?= $sale['id'] ?>">
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
													<?php
													$str = $sale['sale_date'];
													$date = DateTime::createFromFormat("Y-m-d", $str);
													echo '<span class="font-weight-bolder font-weight-500 label label-secondary label-inline">' . $date->format("d/m - H:i") . '</span>';
													?>
												</td>
												<td class="text-center align-middle">
													<label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $sale['client_name'] . ' ' . $sale['client_lastname'] ?></label>
												</td>
												<td class="text-center align-middle">
													<label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $sale['course'] ?></label>
												</td>
												<td class="text-center align-middle">
													<span class="mt-2 label label-secondary font-weight-bolder label-inline font-size-lg"><?= $sale['total_amount'] ?></span>
												</td>
												<td class="text-center align-middle">
													<span id='net_price_input<?= $sale['id'] ?>' class="mt-2 font-weight-bolder font-size-lg label label-secondary label-inline"><?= $sale['net_price'] ? '$ ' . $sale['net_price'] : 'No establecido' ?></span>
												</td>
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
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	<?php
	$sales_js = json_encode($sales);
	echo "let leads_array = " . $sales_js . ";\n";
	?>

	let today = new Date();
	let dd = today.getDate();
	let mm = today.getMonth() + 1;
	let yyyy = today.getFullYear();
	if (dd < 10) dd = '0' + dd;
	if (mm < 10) mm = '0' + mm;
	today = yyyy + '-' + mm + '-' + dd;

	let todaySales = 0;
	let todayLeads = 0;
	let todayGross = 0;
	let todayNet = 0;

	let weeklySales = 0;
	let weeklyLeads = 0;
	let weeklyGross = 0;
	let weeklyNet = 0;

	let monthlySales = 0;
	let monthlyLeads = 0;
	let monthlyGross = 0;
	let monthlyNet = 0;

	var curr = new Date;
	var first = curr.getDate() - curr.getDay();
	var last = first + 6;

	var firstday = new Date(curr.setDate(first));
	var lastday = new Date(curr.setDate(last));

	dd = firstday.getDate();
	mm = firstday.getMonth() + 1;
	yyyy = firstday.getFullYear();
	if (dd < 10) dd = '0' + dd;
	if (mm < 10) mm = '0' + mm;
	firstday = yyyy + '-' + mm + '-' + dd;

	dd = lastday.getDate();
	mm = lastday.getMonth() + 1;
	yyyy = lastday.getFullYear();
	if (dd < 10) dd = '0' + dd;
	if (mm < 10) mm = '0' + mm;
	lastday = yyyy + '-' + mm + '-' + dd;

	leads_array.forEach(lead => {
		if (lead['sale_date'] === today) {
			todaySales++;
			todayGross = todayGross + parseInt(lead['total_amount']);
			todayNet = todayNet + parseInt(lead['net_price']);
		}

		if (lead['sale_date'] >= firstday && lead['sale_date'] <= lastday) {
			weeklySales++;
			weeklyGross = weeklyGross + parseInt(lead['total_amount']);
			weeklyNet = weeklyNet + parseInt(lead['net_price']);
		}

		let leadMonth = new Date(lead['sale_date']).getMonth() + 1;
		let currMonth = new Date().getMonth() + 1;

		if (leadMonth === currMonth) {
			monthlySales++;
			monthlyGross = monthlyGross + parseInt(lead['total_amount']);
			monthlyNet = monthlyNet + parseInt(lead['net_price']);
		}
	});

	document.getElementById("today-sales").innerHTML = todaySales;
	document.getElementById("today-leads").innerHTML = 'No establecido';
	document.getElementById("today-gross").innerHTML = '$' + todayGross;
	document.getElementById("today-net").innerHTML = '$' + todayNet;

	document.getElementById("week-sales").innerHTML = weeklySales;
	document.getElementById("week-leads").innerHTML = 'No establecido';
	document.getElementById("week-gross").innerHTML = '$' + weeklyGross;
	document.getElementById("week-net").innerHTML = '$' + weeklyNet;

	document.getElementById("month-sales").innerHTML = monthlySales;
	document.getElementById("month-leads").innerHTML = 'No establecido';
	document.getElementById("month-gross").innerHTML = '$' + monthlyGross;
	document.getElementById("month-net").innerHTML = '$' + monthlyNet;
</script>