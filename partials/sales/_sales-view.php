<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Ventas</h5>
            <input class="mt-2 mb-2 mr-5" type="date" id="date-from" />
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">al</h5>
            <input class="mt-2 mb-2 mr-5" type="date" id="date-to" />
            <h5 class="ml-2 text-dark font-weight-bold mt-2 mb-2 mr-5">Filtrar por vendedor</h5>
            <select id="user-filter">
                <option value="0" selected>Todos</option>
                <?php
                foreach ($users as $user) { ?>
                    <option value="<?= $user['id'] ?>"><?= $user['name'] . ' ' . $user['lastname'] ?></option>
                <?php } ?>
            </select>
            <button class="ml-5 btn btn-sm btn-success" onclick="searchDate()">Buscar
                <span class="svg-icon svg-icon-white svg-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                </span>
            </button>
        </div>
    </div>
</div>
<!--begin::Table-->
<table class="table table-hover">
    <thead>
        <tr>
            <th class="text-center" scope="col">Numero</th>
            <th class="text-center" scope="col">Pais</th>
            <th class="text-center" scope="col">Vendedor</th>
            <th class="text-center" scope="col">Fecha de venta</th>
            <th class="text-center" scope="col">Alumno</th>
            <th class="text-center" scope="col">Curso vendido</th>
            <th class="text-center" scope="col">Monto bruto</th>
            <th class="text-center" scope="col">Monto neto</th>
            <th class="text-center" scope="col">Comprobante</th>
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
                    <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $sale['name'] . ' ' . $sale['lastname'] ?></label>
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
                    <span class="mt-2 label label-secondary label-inline"><?= $sale['total_amount'] ?></span>
                </td>
                <td class="text-center align-middle" data-toggle="modal" data-target="#modalNeto<?= $sale['id'] ?>" style="cursor: pointer;">
                    <span id='net_price_input<?= $sale['id'] ?>' class="mt-2 label label-secondary label-inline"><?= $sale['net_price'] ? '$ ' . $sale['net_price'] : 'No establecido' ?></span>
                </td>
                <!-- Modal valor neto-->
                <div class="modal fade" id="modalNeto<?= $sale['id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Valor neto de la venta</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Ingrese valor neto</label>
                                    <input type="number" class="form-control" id="netValue<?= $sale['id'] ?>" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-light-primary font-weight-bold" data-dismiss="modal" data-toggle="modal" data-target="#modalNeto<?= $sale['id'] ?>" onclick="updateNetValue(<?= $sale['id'] ?>)">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Modal valor neto-->
                <td class="text-center align-middle" data-toggle="modal" data-target="#modalPdf<?= $sale['id'] ?>" style="cursor: pointer;">
                    <?php if ($sale['proof_payment'] == 0) {
                        echo '<span class="svg-icon svg-icon-danger svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
                            </g>
                        </svg></span>';
                    } else {
                        echo '<span class="svg-icon svg-icon-success svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                        </svg></span>';
                    } ?>
                    </span>
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

                <!-- Modal comprobante-->
                <div class="modal fade" id="modalPdf<?= $sale['id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Comprobante de pago</h5>
                            </div>
                            <div class="modal-body">
                                <object data="./comprobantes/<?= $sale['id'] ?>/<?= $sale['id'] ?>.jpg" type="image/jpg" width="100%" height="400px">
                                    <p>Parece que tu navegador no permite visualizar el documento.
                                        Puedes descargarlo del siguiente link <a href="#">Click aqui para descargar</a></p>
                                </object>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-light-primary font-weight-bold" data-dismiss="modal" data-toggle="modal" data-target="#modalUpload<?= $sale['id'] ?>">Cargar nuevo</button>
                                <button type="submit" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Modal comprobante-->

                <!-- Modal carga_comprobante-->
                <div class="modal fade" id="modalUpload<?= $sale['id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cargar comprobante - UNICAMENTE ARCHIVOS .jpg</h5>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="btn btn-warning" for="my-file-selector">
                                            <input type="file" id="fileToUpload<?= $sale['id'] ?>">
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-light-primary font-weight-bold" data-dismiss="modal" onclick="upload(<?= $sale['id'] ?>)">Cargar</button>
                                <button type="submit" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Modal carga_comprobante-->
            </tr>
        <?php } ?>
    </tbody>
</table>
<!--end::Table-->

<script>
    <?php
    $sales_js = json_encode($sales);
    echo "let leads_array = " . $sales_js . ";\n";
    ?>

    function updateNetValue(id) {
        let value = $('#netValue' + id).val();
        $.ajax({
            type: 'get',
            url: './functions/updateNetValue.php',
            data: {
                value,
                id
            },
            success: function(response) {
                $('#net_price_input' + id).text('$ ' + value);
            }
        });
    }

    function search() {
        let searchValue = $('#searchValue').val().toLowerCase();
        let optValue = $('#searchOpt').val();

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
            if (optValue === 'salesusername') {
                (lead['userlastname'].toLowerCase().includes(searchValue)) ? $('#tr' + lead['id']).show(): $('#tr' + lead['id']).hide();
            }
        });
    }

    function upload(id) {
        let file_data = $('#fileToUpload' + id).prop('files')[0];
        let id_lead = id;
        let form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('id_lead', id_lead);
        $.ajax({
            url: './functions/proofPaymentUpload.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            id_lead,
            type: 'post',
            success: function(response) {
                Swal.fire({
                    title: "Comprobante cargado",
                    icon: "success",
                    timer: 2000,
                    showConfirmButton: false,
                }).then(function() {
                    location.reload();
                })
            }
        })
    }

    function searchDate() {
        let dateFrom = $('#date-from').val();
        let dateTo = $('#date-to').val();

        if (dateTo === '') {
            alert('Ingrese una fecha limite.');
            return;
        }
        if (dateTo < dateFrom) {
            alert('La fecha limite no puede ser anterior a la inicial.');
            return;
        }
        let userSelected = $('#user-filter').val();

        leads_array.forEach(lead => {
            if (lead['user_id'] === userSelected || userSelected === '0') {
                if (lead['sale_date'] >= dateFrom && lead['sale_date'] <= dateTo) {
                    $('#' + lead['id']).show();
                } else {
                    $('#' + lead['id']).hide();
                }
            } else {
                return;
            }

        });
    }
</script>