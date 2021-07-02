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
        <div class="row">
            <div class="col-xl-4">
                <div class="card card-custom bg-dark card-stretch gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                                </g>
                            </svg>
                        </span>
                        <div class="text-inverse-dark font-weight-bolder font-size-h5 mb-2 mt-5">$ <?= $promises_stats[0]['amount_in_promises']; ?></div>
                        <div class="font-weight-bold text-inverse-dark font-size-sm">Monto bruto diario estimado (<?= $promises_stats[0]['number_of_promises']; ?> promesas)</div>
                    </div>
                    <!--end::Body-->
                </div>
            </div>

            <div class="col-xl-4">

                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-danger svg-icon-3x ml-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </span>
                        <div class="text-inverse-white font-weight-bolder font-size-h5 mb-2 mt-5">#Nombre-usuario-top-ventas</div>
                        <div class="font-weight-bold text-inverse-white font-size-sm">TOP ventas semanal</div>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3">
                <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-2x svg-icon-info">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"></path>
                                    <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"><?= $total_leads[0]['total_leads']; ?></span>
                        <span class="font-weight-bold text-muted font-size-sm">Leads cargados</span>
                    </div>
                    <!--end::Body-->
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card card-custom bg-danger card-stretch gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-2x svg-icon-white">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"><?= $total_sales[0]['total_sales']; ?></span>
                        <span class="font-weight-bold text-white font-size-sm">Cursos vendidos</span>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-1 hover" onclick="refresh();" style="min-width: 105px;">
                <div class="card card-custom bg-success bg-hover-state-success justify-content-center align-self-center">
                    <div class="card-body">
                        <i class="flaticon2-refresh-button icon-2x text-dark"></i>
                    </div>
                </div>
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
                            <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#tab1">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab6">Nuevo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab5">Interesado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab2">Promesas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab3">Llamar luego</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab4">No contactado</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2 pb-0 mt-n3">
                <div class="tab-content mt-5" id="myTabTables11">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                        <!--begin::Table-->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Uso</th>
                                    <th class="text-center" scope="col">Pais</th>
                                    <th class="text-center" scope="col">Nombre</th>
                                    <th class="text-center" scope="col">Fecha de ingreso</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center" scope="col">Curso</th>
                                    <th class="text-center" scope="col">Horario de contacto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($leads as $lead) {
                                    if ($lead['label'] === '3') continue; ?>
                                    <tr onclick="window.location='./index.php?lead=<?= $lead['id'] ?>'" style="cursor: pointer;">
                                        <td class="text-center align-middle">
                                            <?php if ($lead['status'] == 'default') {
                                                echo '<span class="dot"></span>';
                                            } else {
                                                echo '<span class="dot-ok">';
                                            } ?>
                                            </span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="symbol symbol-50 symbol-light">
                                                <span class="symbol-label">
                                                    <img src="assets/media/country/<?= $lead['country'] ?>.png" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $lead['name'] ?></label>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['date'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            echo '<span class="font-weight-bolder font-weight-500 label label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            ?>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php switch ($lead['label']) {
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
                                        <td class="text-center align-middle">
                                            <span class="font-weight-bolder font-weight-500"><?= $lead['course'] ?></span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['contactDay'] . ' ' . $lead['contactTime'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            if ($lead['contactDay'] == '0000-00-00') {
                                                echo '<span class="font-weight-bolder font-weight-500">-</span>';
                                            } else if ((strtotime($lead['contactDay'] . ' ' . $lead['contactTime'])) - (strtotime(date('Y-m-d h:i'))) > 0) {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-success label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } else {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-danger label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2">
                        <!--begin::Table-->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Uso</th>
                                    <th class="text-center" scope="col">Pais</th>
                                    <th class="text-center" scope="col">Nombre</th>
                                    <th class="text-center" scope="col">Fecha de ingreso</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center" scope="col">Curso</th>
                                    <th class="text-center" scope="col">Horario de contacto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($leads as $lead) {
                                    if ($lead['label'] !== '7') continue; ?>
                                    <tr onclick="window.location='./index.php?lead=<?= $lead['id'] ?>'" style="cursor: pointer;">
                                        <td class="text-center align-middle">
                                            <?php if ($lead['status'] == 'default') {
                                                echo '<span class="dot"></span>';
                                            } else {
                                                echo '<span class="dot-ok">';
                                            } ?>
                                            </span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="symbol symbol-50 symbol-light">
                                                <span class="symbol-label">
                                                    <img src="assets/media/country/<?= $lead['country'] ?>.png" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $lead['name'] ?></label>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['date'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            echo '<span class="font-weight-bolder font-weight-500 label label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            ?>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php switch ($lead['label']) {
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
                                        <td class="text-center align-middle">
                                            <span class="font-weight-bolder font-weight-500"><?= $lead['course'] ?></span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['contactDay'] . ' ' . $lead['contactTime'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            if ($lead['contactDay'] == '0000-00-00') {
                                                echo '<span class="font-weight-bolder font-weight-500">-</span>';
                                            } else if ((strtotime($lead['contactDay'] . ' ' . $lead['contactTime'])) - (strtotime(date('Y-m-d h:i'))) > 0) {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-success label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } else {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-danger label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3">
                        <!--begin::Table-->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Uso</th>
                                    <th class="text-center" scope="col">Pais</th>
                                    <th class="text-center" scope="col">Nombre</th>
                                    <th class="text-center" scope="col">Fecha de ingreso</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center" scope="col">Curso</th>
                                    <th class="text-center" scope="col">Horario de contacto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($leads as $lead) {
                                    if ($lead['label'] !== '5') continue; ?>
                                    <tr onclick="window.location='./index.php?lead=<?= $lead['id'] ?>'" style="cursor: pointer;">
                                        <td class="text-center align-middle">
                                            <?php if ($lead['status'] == 'default') {
                                                echo '<span class="dot"></span>';
                                            } else {
                                                echo '<span class="dot-ok">';
                                            } ?>
                                            </span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="symbol symbol-50 symbol-light">
                                                <span class="symbol-label">
                                                    <img src="assets/media/country/<?= $lead['country'] ?>.png" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $lead['name'] ?></label>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['date'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            echo '<span class="font-weight-bolder font-weight-500 label label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            ?>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php switch ($lead['label']) {
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
                                        <td class="text-center align-middle">
                                            <span class="font-weight-bolder font-weight-500"><?= $lead['course'] ?></span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['contactDay'] . ' ' . $lead['contactTime'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            if ($lead['contactDay'] == '0000-00-00') {
                                                echo '<span class="font-weight-bolder font-weight-500">-</span>';
                                            } else if ((strtotime($lead['contactDay'] . ' ' . $lead['contactTime'])) - (strtotime(date('Y-m-d h:i'))) > 0) {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-success label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } else {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-danger label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4">
                        <!--begin::Table-->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Uso</th>
                                    <th class="text-center" scope="col">Pais</th>
                                    <th class="text-center" scope="col">Nombre</th>
                                    <th class="text-center" scope="col">Fecha de ingreso</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center" scope="col">Curso</th>
                                    <th class="text-center" scope="col">Horario de contacto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($leads as $lead) {
                                    if ($lead['label'] !== '6') continue; ?>
                                    <tr onclick="window.location='./index.php?lead=<?= $lead['id'] ?>'" style="cursor: pointer;">
                                        <td class="text-center align-middle">
                                            <?php if ($lead['status'] == 'default') {
                                                echo '<span class="dot"></span>';
                                            } else {
                                                echo '<span class="dot-ok">';
                                            } ?>
                                            </span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="symbol symbol-50 symbol-light">
                                                <span class="symbol-label">
                                                    <img src="assets/media/country/<?= $lead['country'] ?>.png" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $lead['name'] ?></label>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['date'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            echo '<span class="font-weight-bolder font-weight-500 label label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            ?>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php switch ($lead['label']) {
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
                                        <td class="text-center align-middle">
                                            <span class="font-weight-bolder font-weight-500"><?= $lead['course'] ?></span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['contactDay'] . ' ' . $lead['contactTime'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            if ($lead['contactDay'] == '0000-00-00') {
                                                echo '<span class="font-weight-bolder font-weight-500">-</span>';
                                            } else if ((strtotime($lead['contactDay'] . ' ' . $lead['contactTime'])) - (strtotime(date('Y-m-d h:i'))) > 0) {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-success label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } else {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-danger label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5">
                        <!--begin::Table-->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Uso</th>
                                    <th class="text-center" scope="col">Pais</th>
                                    <th class="text-center" scope="col">Nombre</th>
                                    <th class="text-center" scope="col">Fecha de ingreso</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center" scope="col">Curso</th>
                                    <th class="text-center" scope="col">Horario de contacto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($leads as $lead) {
                                    if ($lead['label'] !== '2') continue; ?>
                                    <tr onclick="window.location='./index.php?lead=<?= $lead['id'] ?>'" style="cursor: pointer;">
                                        <td class="text-center align-middle">
                                            <?php if ($lead['status'] == 'default') {
                                                echo '<span class="dot"></span>';
                                            } else {
                                                echo '<span class="dot-ok">';
                                            } ?>
                                            </span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="symbol symbol-50 symbol-light">
                                                <span class="symbol-label">
                                                    <img src="assets/media/country/<?= $lead['country'] ?>.png" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $lead['name'] ?></label>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['date'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            echo '<span class="font-weight-bolder font-weight-500 label label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            ?>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php switch ($lead['label']) {
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
                                        <td class="text-center align-middle">
                                            <span class="font-weight-bolder font-weight-500"><?= $lead['course'] ?></span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['contactDay'] . ' ' . $lead['contactTime'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            if ($lead['contactDay'] == '0000-00-00') {
                                                echo '<span class="font-weight-bolder font-weight-500">-</span>';
                                            } else if ((strtotime($lead['contactDay'] . ' ' . $lead['contactTime'])) - (strtotime(date('Y-m-d h:i'))) > 0) {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-success label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } else {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-danger label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6">
                        <!--begin::Table-->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Uso</th>
                                    <th class="text-center" scope="col">Pais</th>
                                    <th class="text-center" scope="col">Nombre</th>
                                    <th class="text-center" scope="col">Fecha de ingreso</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center" scope="col">Curso</th>
                                    <th class="text-center" scope="col">Horario de contacto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($leads as $lead) {
                                    if ($lead['label'] !== '1') continue; ?>
                                    <tr onclick="window.location='./index.php?lead=<?= $lead['id'] ?>'" style="cursor: pointer;">
                                        <td class="text-center align-middle">
                                            <?php if ($lead['status'] == 'default') {
                                                echo '<span class="dot"></span>';
                                            } else {
                                                echo '<span class="dot-ok">';
                                            } ?>
                                            </span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="symbol symbol-50 symbol-light">
                                                <span class="symbol-label">
                                                    <img src="assets/media/country/<?= $lead['country'] ?>.png" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $lead['name'] ?></label>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['date'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            echo '<span class="font-weight-bolder font-weight-500 label label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            ?>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php switch ($lead['label']) {
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
                                        <td class="text-center align-middle">
                                            <span class="font-weight-bolder font-weight-500"><?= $lead['course'] ?></span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php
                                            $str = $lead['contactDay'] . ' ' . $lead['contactTime'];
                                            $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                                            if ($lead['contactDay'] == '0000-00-00') {
                                                echo '<span class="font-weight-bolder font-weight-500">-</span>';
                                            } else if ((strtotime($lead['contactDay'] . ' ' . $lead['contactTime'])) - (strtotime(date('Y-m-d h:i'))) > 0) {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-success label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } else {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-danger label-inline">' . $date->format("d/m - H:i") . '</span>';
                                            } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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

<script>
    function refresh() {
        location.reload();
    }
</script>