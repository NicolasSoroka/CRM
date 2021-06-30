<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Promesas de venta</h5>
            <input type="input" id="searchValue" placeholder="Buscar">
            <select id="searchOpt">
                <option value="" selected disabled>-- Seleccione --</option>
                <option value="name">Nombre</option>
                <option value="course">Curso</option>
                <option value="salesusername">Vendedor</option>
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
            <th class="text-center" scope="col">Pais</th>
            <th class="text-center" scope="col">Cierre</th>
            <th class="text-center" scope="col">Alumno</th>
            <th class="text-center" scope="col">Curso</th>
            <th class="text-center" scope="col">Vendedor</th>
            <th class="text-center" scope="col">Monto bruto</th>
            <th class="text-center" scope="col">Monto neto</th>
            <th class="text-center" scope="col">Comprobante</th>
            <th class="text-center" scope="col">Verificar</th>
        </tr>
    </thead>
    <tbody id="tbody-leads">
        <?php
        foreach ($sales as $sale) { ?>
            <tr id="tr<?= $sale['id'] ?>">
                <td class="text-center align-middle">
                    <div class="symbol symbol-50 symbol-light">
                        <span class="symbol-label">
                            <img src="assets/media/country/<?= $sale['country'] ?>.png" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                </td>
                <td class="text-center align-middle">
                    <?php
                    $str = $sale['contactDay'] . " " . $sale['contactTime'];
                    $date = DateTime::createFromFormat("Y-m-d H:i:s", $str);
                    if ($sale['contactDay'] == '0000-00-00') {
                        echo '<span class="font-weight-bolder font-weight-500">-</span>';
                    } else if ((strtotime($sale['contactDay'] . ' ' . $sale['contactTime'])) - (strtotime(date('Y-m-d h:i'))) > 0) {
                        echo '<span class="font-weight-bolder font-weight-500 label label-success label-inline">' . $date->format("d-m / h:i") . '</span>';
                    } else {
                        echo '<span class="font-weight-bolder font-weight-500 label label-danger label-inline">' . $date->format("d-m / h:i") . '</span>';
                    } ?>
                </td>
                <td class="text-center align-middle">
                    <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $sale['name'] . " " . $sale['lastname'] ?></label>
                </td>
                <td class="text-center align-middle">
                    <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $sale['course'] ?></label>
                </td>
                <td class="text-center align-middle">
                    <label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $sale['salesusername'] . ' ' . $sale['userlastname'] ?></label>
                </td>
                <td class="text-center align-middle">
                    <span class="mt-2 label label-secondary label-inline"><?= '$ ' . $sale['total_amount'] ?></span>
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
                                <button type="submit" class="btn btn-light-primary font-weight-bold" data-dismiss="modal" data-toggle="modal" data-target="#modalNeto<?= $sale['id'] ?>" onclick="updateNetValue(<?= $sale['id'] ?>)">Guardar</button>
                                <button type="submit" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Modal valor neto-->
                <td class="text-center align-middle" data-toggle="modal" data-target="#modalPdf" style="cursor: pointer;">
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
                    <button onclick="verify('<?= $sale['id'] ?>',<?= $sale['net_price'] ?>,'<?= $sale['proof_payment'] ?>','<?= $sale['name'] ?>','<?= $sale['lastname'] ?>','<?= $sale['username'] ?>','<?= $sale['phone'] ?>','<?= $sale['email'] ?>','<?= $sale['country'] ?>','<?= $sale['installments'] ?>','<?= $sale['total_amount'] ?>','<?= $sale['course_id'] ?>');">
                        <span class="svg-icon svg-icon-warning svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                    <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                    <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                </g>
                            </svg>
                        </span>
                    </button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!--end::Table-->

<!-- Modal comprobante-->
<div class="modal fade" id="modalPdf" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comprobante de pago</h5>
            </div>
            <div class="modal-body">
                <object data="recibos/venta_1.pdf" type="application/pdf" width="100%" height="400px">
                    <p>Parece que tu navegador no permite visualizar el documento.
                        Puedes descargarlo del siguiente link <a href="recibos/venta_1.pdf">Click aqui para descargar</a></p>
                </object>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-light-primary font-weight-bold" data-dismiss="modal" data-toggle="modal" data-target="#modalUpload">Cargar nuevo</button>
                <button type="submit" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal comprobante-->


<!-- Modal carga_comprobante-->
<div class="modal fade" id="modalUpload" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cargar comprobante</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="btn btn-warning" for="my-file-selector">
                            <input type="file" name="file" id="exampleInputFile">
                            <input type="hidden" value="<?= $curso ?>" name="dir_upload">
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cargar</button>
                <button type="submit" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal carga_comprobante-->

<script>
    <?php //array traido desde PHP pasado a JS para utilizar en el buscador
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

    function verify(id, net_value, proof_payment, name, lastname, username, phone, email, country, installments, total_amount, course_id) {
        if (net_value > 0 && proof_payment === '1') {

            let info = {
                'name': name,
                'lastname': lastname,
                'username': username,
                'phone': phone,
                'email': email,
                'country': country,
                'course_id': course_id,
                'installments': installments,
                'total_amount': total_amount
            }

            $.ajax({
                type: 'get',
                url: './functions/registerStudent.php',
                data: info,
                success: function(response) {
                    let lead_to_update = {
                        'id_lead': id,
                        'label': '3'
                    }

                    $.ajax({
                        type: 'get',
                        url: './functions/changeLeadState.php',
                        data: lead_to_update,
                        success: function(response) {
                            location.reload();
                        }
                    });
                }
            });
        } else {
            swalfire('Revise valor neto y comprobante.');
        }
    }

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
</script>