<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Generar pagos</h5>
            <!--end::Title-->
        </div>
        <!--end::Details-->
    </div>
</div>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin::Invoice-->
                    <div class="row justify-content-center pt-8 px-8 pt-md-27 px-md-0">
                        <div class="col-md-9">
                            <!-- begin: Invoice header-->
                            <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                <h1 class="display-4 font-weight-boldest mb-10">Recibo compra cursos IADE</h1>
                                <div class="d-flex flex-column align-items-md-end px-0">
                                    <!--begin::Logo-->
                                    <a href="#" class="brand-logo">
                                        <img alt="Logo" class="max-h-80px" src="assets/media/logos/logo_load.png" />
                                    </a>
                                    <!--end::Logo-->
                                    <span class="mt-3 d-flex flex-column align-items-md-end font-size-h5 font-weight-bold text-muted">
                                        <span>Direccion calle 1231, CABA</span>
                                        <span>Argentina</span>
                                    </span>
                                </div>
                            </div>
                            <!--end: Invoice header-->
                            <!--begin: Invoice body-->
                            <div class="row border-bottom pb-10">
                                <div class="col-md-9 py-md-10 pr-md-10">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="pt-1 pb-9 pl-0 font-weight-bolder text-muted font-size-lg text-uppercase">Descripcion</th>
                                                    <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">Valor</th>
                                                    <th class="pt-1 pb-9 text-right pr-0 font-weight-bolder text-muted font-size-lg text-uppercase">Cantidad</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="font-weight-bolder font-size-lg">
                                                    <td class="border-top-0 pl-0 pt-7 d-flex align-items-center">
                                                        <span class="navi-icon mr-2">
                                                            <i class="fa fa-genderless text-danger font-size-h2"></i>
                                                        </span>Curso de Bobinado
                                                    </td>
                                                    <td class="text-right pt-7">$8000</td>
                                                    <td class="text-right pt-7">1</td>
                                                </tr>
                                                <tr class="font-weight-bolder border-bottom-0 font-size-lg">
                                                    <td class="border-top-0 pl-0 py-4 d-flex align-items-center">
                                                        <span class="navi-icon mr-2">
                                                            <i class="fa fa-genderless text-success font-size-h2"></i>
                                                        </span>Curso de Mecanica Integral
                                                    </td>
                                                    <td class="border-top-0 text-right py-4">$8000</td>
                                                    <td class="border-top-0 text-right py-4">3</td>
                                                </tr>
                                                <tr class="font-weight-bolder border-bottom-0 font-size-lg">
                                                    <td class="border-top-0 pl-0 py-4 d-flex align-items-center">
                                                        <span class="navi-icon mr-2">
                                                            <i class="fa fa-genderless text-primary font-size-h2"></i>
                                                        </span>Curso de Refrigeracion Industrial
                                                    </td>
                                                    <td class="border-top-0 text-right py-4">$8000</td>
                                                    <td class="border-top-0 text-right py-4">2</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border-bottom w-100 mt-7 mb-13"></div>
                                </div>
                                <div class="col-md-3 border-left-md pl-md-10 py-md-10 text-right">
                                    <!--begin::Total Amount-->
                                    <div class="font-size-h4 font-weight-bolder text-muted mb-3">TOTAL</div>
                                    <div class="font-size-h1 font-weight-boldest">$48.000,00</div>
                                    <div class="text-muted font-weight-bold mb-16">IVA incluido</div>
                                    <!--end::Total Amount-->
                                    <div class="border-bottom w-100 mb-16"></div>
                                    <!--begin::Invoice No-->
                                    <div class="text-dark-50 font-size-lg font-weight-bold mb-3">FACTURA N</div>
                                    <div class="font-size-lg font-weight-bold mb-10">000001</div>
                                    <!--end::Invoice No-->
                                    <!--begin::Invoice Date-->
                                    <div class="text-dark-50 font-size-lg font-weight-bold mb-3">FECHA</div>
                                    <div class="font-size-lg font-weight-bold">3 de Febrero, 2021</div>
                                    <!--end::Invoice Date-->
                                </div>
                            </div>
                            <!--end: Invoice body-->
                        </div>
                    </div>
                    <!-- begin: Invoice action-->
                    <div class="row justify-content-center py-8 px-8 py-md-28 px-md-0">
                        <div class="col-md-9">
                            <div class="d-flex font-size-sm flex-wrap">
                                <button type="button" class="btn btn-primary font-weight-bolder py-4 mr-3 mr-sm-14 my-1" onclick="window.print();">Imprimir factura</button>
                                <button type="button" class="btn btn-light-primary font-weight-bolder mr-3 my-1">Descargar</button>
                                <button type="button" class="btn btn-light-primary font-weight-bolder mr-3 my-1" data-toggle="modal" data-target="#emailModal">Enviar por correo</button>
                                <button type="button" class="btn btn-dark font-weight-bolder ml-sm-auto my-1" data-toggle="modal" data-target="#staticBackdrop">Crear factura</button>
                            </div>
                        </div>
                    </div>
                    <!-- end: Invoice action-->
                    <!--end::Invoice-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<!-- Modal-->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Generar pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col ml-5">
                        <img alt="Logo" class="max-h-80px" src="assets/media/logos/mercadopago.jpg" onclick="swalfire();" data-dismiss="modal" />
                    </div>
                    <div class="col">
                        <img alt="Logo" class="max-h-90px" src="assets/media/logos/transferencia.jpg" onclick="swalfire();" data-dismiss="modal" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->

<!-- Modal-->
<div class="modal fade" id="emailModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Envio de factura por email</h5>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Email del cliente:</label>
                    <div class="col-lg-9 col-xl-9">
                        <div class="input-group input-group-solid input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control form-control-solid form-control-lg" name="email" value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-light-primary font-weight-bold" data-dismiss="modal" onclick="swalfireMail();">Enviar</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->

<script>
    function swalfire() {
        Swal.fire({
            title: "Pago generado!",
            text: "Puede verlo en la seccion Historial de ventas",
            icon: "success",
            buttonsStyling: true,
            showConfirmButton: true,
        })
    }

    function swalfireMail() {
        Swal.fire({
            title: "Recibo enviado!",
            icon: "success",
            buttonsStyling: false,
            showConfirmButton: false,
            timer: 1500
        })
    }
</script>