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
                <!--begin::Stats Widget 16-->
                <a href="#" class="card card-custom card-stretch gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-info svg-icon-3x ml-n1">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <div class="text-inverse-white font-weight-bolder font-size-h5 mb-2 mt-5">Shopping Cart</div>
                        <div class="font-weight-bold text-inverse-white font-size-sm">Lands, Houses, Ranchos, Farms</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Stats Widget 16-->
            </div>
            <div class="col-xl-4">
                <!--begin::Stats Widget 17-->
                <a href="#" class="card card-custom bg-info bg-hover-state-info card-stretch card-stretch gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <div class="text-inverse-info font-weight-bolder font-size-h5 mb-2 mt-5">Apartments</div>
                        <div class="font-weight-bold text-inverse-info font-size-sm">Flats, Shared Rooms, Duplex</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Stats Widget 17-->
            </div>
            <div class="col-xl-4">
                <!--begin::Stats Widget 18-->
                <a href="#" class="card card-custom bg-dark bg-hover-state-dark card-stretch gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <div class="text-inverse-dark font-weight-bolder font-size-h5 mb-2 mt-5">Sales Stats</div>
                        <div class="font-weight-bold text-inverse-dark font-size-sm">50% Increased for FY20</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Stats Widget 18-->
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3">
                <!--begin::Stats Widget 29-->
                <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-2x svg-icon-info">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"></path>
                                    <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">$5,209</span>
                        <span class="font-weight-bold text-muted font-size-sm">SAP UI Progress</span>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Stats Widget 29-->
            </div>
            <div class="col-xl-3">
                <!--begin::Stats Widget 30-->
                <div class="card card-custom bg-info card-stretch gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-2x svg-icon-white">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">2,044</span>
                        <span class="font-weight-bold text-white font-size-sm">New Customers</span>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Stats Widget 30-->
            </div>
            <div class="col-xl-3">
                <!--begin::Stats Widget 31-->
                <div class="card card-custom bg-danger card-stretch gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-2x svg-icon-white">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">$50,000</span>
                        <span class="font-weight-bold text-white font-size-sm">Milestone Reached</span>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Stats Widget 31-->
            </div>
            <div class="col-xl-3">
                <!--begin::Stats Widget 32-->
                <div class="card card-custom bg-dark card-stretch gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <span class="svg-icon svg-icon-2x svg-icon-white">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
                                    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block">23,508</span>
                        <span class="font-weight-bold text-white font-size-sm">Support Tickets</span>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Stats Widget 32-->
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
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Uso</th>
                                    <th class="text-center" scope="col">Pais</th>
                                    <th class="text-center" scope="col">Nombre</th>
                                    <th class="text-center" scope="col">Fecha de ingreso</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center" scope="col">Curso</th>
                                    <th class="text-center" scope="col">Llamar</th>
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
                                            <label class="font-weight-bold"><?= $lead['date'] ?></label>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php switch ($lead['label']) {
                                                case 7:
                                                    echo '<span class="mt-2 label label-primary label-inline">Promesa</span>';
                                                    break;
                                                case 6:
                                                    echo '<span class="mt-2 label label-warning label-inline">Interesado</span>';
                                                    break;
                                                case 5:
                                                    echo '<span class="mt-2 label label-info label-inline">Llamar luego</span>';
                                                    break;
                                                case 4:
                                                    echo '<span class="mt-2 label label-danger label-inline">No interesado</span>';
                                                    break;
                                                case 3:
                                                    echo '<span class="mt-2 label label-secondary label-inline">Vendido</span>';
                                                    break;
                                                case 1:
                                                    echo '<span class="mt-2 label label-dark label-inline">Nuevo</span>';
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
                                                echo '<span class="font-weight-bolder font-weight-500 label label-success label-inline">' . $date->format("d-m h:i") . '</span>';
                                            } else {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-danger label-inline">' . $date->format("d-m h:i") . '</span>';
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
                    <div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">
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
                                    <th class="text-center" scope="col">Llamar</th>
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
                                            <label class="font-weight-bold"><?= $lead['date'] ?></label>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php switch ($lead['label']) {
                                                case 7:
                                                    echo '<span class="mt-2 label label-primary label-inline">Promesa</span>';
                                                    break;
                                                case 6:
                                                    echo '<span class="mt-2 label label-warning label-inline">Interesado</span>';
                                                    break;
                                                case 5:
                                                    echo '<span class="mt-2 label label-info label-inline">Llamar luego</span>';
                                                    break;
                                                case 4:
                                                    echo '<span class="mt-2 label label-danger label-inline">No interesado</span>';
                                                    break;
                                                case 3:
                                                    echo '<span class="mt-2 label label-secondary label-inline">Vendido</span>';
                                                    break;
                                                case 1:
                                                    echo '<span class="mt-2 label label-success label-inline">Nuevo</span>';
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
                                                echo '<span class="font-weight-bolder font-weight-500 label label-success label-inline">' . $date->format("d-m h:i") . '</span>';
                                            } else {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-danger label-inline">' . $date->format("d-m h:i") . '</span>';
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
                    <div class="tab-pane fade" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
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
                                    <th class="text-center" scope="col">Llamar</th>
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
                                            <label class="font-weight-bold"><?= $lead['date'] ?></label>
                                        </td>
                                        <td class="text-center align-middle">
                                            <?php switch ($lead['label']) {
                                                case 7:
                                                    echo '<span class="mt-2 label label-primary label-inline">Promesa</span>';
                                                    break;
                                                case 6:
                                                    echo '<span class="mt-2 label label-warning label-inline">Interesado</span>';
                                                    break;
                                                case 5:
                                                    echo '<span class="mt-2 label label-info label-inline">Llamar luego</span>';
                                                    break;
                                                case 4:
                                                    echo '<span class="mt-2 label label-danger label-inline">No interesado</span>';
                                                    break;
                                                case 3:
                                                    echo '<span class="mt-2 label label-secondary label-inline">Vendido</span>';
                                                    break;
                                                case 1:
                                                    echo '<span class="mt-2 label label-success label-inline">Nuevo</span>';
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
                                                echo '<span class="font-weight-bolder font-weight-500 label label-success label-inline">' . $date->format("d-m h:i") . '</span>';
                                            } else {
                                                echo '<span class="font-weight-bolder font-weight-500 label label-danger label-inline">' . $date->format("d-m h:i") . '</span>';
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