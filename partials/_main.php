<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Menu principal</h5>
            <!--end::Title-->
        </div>
        <!--end::Details-->
    </div>
</div>
<!--end::Subheader-->

<!-- begin::Container-ADMIN-->
<?php if ($userData[0]['access'] == 0) { ?>
    <div class="container">
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-4">
                <!--begin::Mixed Widget 3-->
                <div class="card card-custom bg-gray-100 gutter-b card-stretch">
                    <!--begin::Header-->
                    <div class="card-header border-0 bg-primary-o-90 py-5">
                        <h3 class="card-title font-weight-bolder text-white">Stats ventas</h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div id="kt_mixed_widget_3_chart" class="card-rounded-bottom bg-primary-o-90" style="height: 300px"></div>
                        <!--end::Chart-->
                        <!--begin::Stats-->
                        <div class="card-spacer mt-n25">
                            <!--begin::Row-->
                            <div class="row m-0">

                                <div class="col bg-white px-6 py-8 rounded-xl mr-7 mb-7">
                                    <a href="#">
                                        <span class="svg-icon svg-icon-3x svg-icon-gray-500 d-block my-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Chart-bar2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" opacity="0.3" x="17" y="4" width="3" height="13" rx="1.5" />
                                                        <rect fill="#000000" opacity="0.3" x="12" y="9" width="3" height="8" rx="1.5" />
                                                        <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
                                                        <rect fill="#000000" opacity="0.3" x="7" y="11" width="3" height="6" rx="1.5" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <label class="text-dark font-weight-bold font-size-h6 mt-2">Ventas diarias</label>
                                    </a>
                                </div>

                                <a href="#">
                                    <div class="col bg-white px-6 py-8 rounded-xl mb-7">
                                        <span class="svg-icon svg-icon-3x svg-icon-gray-500 d-block my-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Chart-bar2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" opacity="0.3" x="17" y="4" width="3" height="13" rx="1.5" />
                                                        <rect fill="#000000" opacity="0.3" x="12" y="9" width="3" height="8" rx="1.5" />
                                                        <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
                                                        <rect fill="#000000" opacity="0.3" x="7" y="11" width="3" height="6" rx="1.5" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <label class="text-dark font-weight-bold font-size-h6 mt-2">Ventas semanales</label>
                                    </div>
                                </a>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row m-0">
                                <a href="#">
                                    <div class="col bg-white px-6 py-8 rounded-xl mr-7">
                                        <span class="svg-icon svg-icon-3x svg-icon-gray-500 d-block my-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Chart-bar2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" opacity="0.3" x="17" y="4" width="3" height="13" rx="1.5" />
                                                        <rect fill="#000000" opacity="0.3" x="12" y="9" width="3" height="8" rx="1.5" />
                                                        <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
                                                        <rect fill="#000000" opacity="0.3" x="7" y="11" width="3" height="6" rx="1.5" />
                                                    </g>
                                                </svg>
                                                <!--e   nd::Svg Icon-->
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <label class="text-dark font-weight-bold font-size-h6 mt-2">Ventas mensuales</label>
                                    </div>
                                </a>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 3-->
            </div>
        </div>
    </div>
    <!--end::Container-ADMIN -->


<?php } else { ?>
    <!-- begin::Container-USER-->
    <div class="container">
        <!--begin::Advance Table Widget 2-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <div class="card-toolbar">
                    <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_11_1">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_2">Promesas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_3">Llamar luego</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2 pb-0 mt-n3">
                <div class="tab-content mt-5" id="myTabTables11">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-borderless table-vertical-center">
                                <thead>
                                    <tr>
                                        <th class="p-0 w-40px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Leads TODOS -->
                                    <?php foreach ($leads as $lead) {
                                        if ($lead['label'] === '3') continue; ?>
                                        <tr>
                                            <form action="./index.php" method="post">
                                                <td class="pl-0 py-4">
                                                    <button class="btn-info" type="submit">Ver detalle</button>
                                                </td>
                                                <td class="pl-0 py-4">
                                                    <div class="symbol symbol-50 symbol-light">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/country/<?= $lead['country'] ?>.png" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="pl-0">
                                                    <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $lead['name'] ?></label>
                                                    <div>
                                                        <span class="font-weight-bolder">Fecha de ingreso: </span>
                                                        <label class="text-muted font-weight-bold text-primary"><?= $lead['date'] ?></label>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <span class="font-weight-bolder font-weight-500"><?= $lead['course'] ?></span>
                                                </td>
                                                <input type="hidden" name="lead" value="<?= $lead['id'] ?>">
                                            </form>
                                        </tr>
                                    <?php } ?>
                                    <!-- FIN LEAD TODOS -->
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-borderless table-vertical-center">
                                <thead>
                                    <tr>
                                        <th class="p-0 w-40px"></th>
                                        <th class="p-0 min-w-200px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--  LEAD promesas -->
                                    <?php foreach ($leads as $lead) {
                                        if ($lead['label'] !== '7') continue; ?>
                                        <tr>
                                            <form action="./index.php" method="post">
                                                <td class="pl-0 py-4">
                                                    <button class="btn-info" type="submit">Ver detalle</button>
                                                </td>
                                                <td class="pl-0 py-4">
                                                    <div class="symbol symbol-50 symbol-light">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/country/<?= $lead['country'] ?>.png" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="pl-0">
                                                    <a href="#" class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $lead['name'] ?></a>
                                                    <div>
                                                        <span class="font-weight-bolder">Fecha de ingreso: </span>
                                                        <label class="text-muted font-weight-bold text-hover-primary"><?= $lead['date'] ?></label>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <span class="font-weight-bolder font-weight-500"><?= $lead['course'] ?></span>
                                                </td>
                                            </form>
                                        </tr>
                                    <?php } ?>
                                    <!-- FIN LEAD promesas -->
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-borderless table-vertical-center">
                                <thead>
                                    <tr>
                                        <th class="p-0 w-40px"></th>
                                        <th class="p-0 min-w-200px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--  LEAD llamar luego -->
                                    <?php foreach ($leads as $lead) {
                                        if ($lead['label'] !== '5') continue; ?>
                                        <tr>
                                            <form action="./index.php" method="post">
                                                <td class="pl-0 py-4">
                                                    <button class="btn-info" type="submit">Ver detalle</button>
                                                </td>
                                                <td class="pl-0 py-4">
                                                    <div class="symbol symbol-50 symbol-light">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/country/<?= $lead['country'] ?>.png" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="pl-0">
                                                    <a href="#" class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $lead['name'] ?></a>
                                                    <div>
                                                        <span class="font-weight-bolder">Fecha de ingreso: </span>
                                                        <label class="text-muted font-weight-bold text-hover-primary"><?= $lead['date'] ?></label>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <span class="font-weight-bolder font-weight-500"><?= $lead['course'] ?></span>
                                                </td>
                                            </form>
                                        </tr>
                                    <?php } ?>
                                    <!-- FIN LEAD llamar luego -->
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Advance Table Widget 2-->
    </div>
    <!--end::Container-USER -->
<?php } ?>