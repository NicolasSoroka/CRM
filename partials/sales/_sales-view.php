<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Historial de ventas</h5>
            <!--end::Title-->
        </div>
        <!--end::Details-->
    </div>
</div>
<!--begin::Body-->
<div class="card-body pt-0 pb-3">
    <!--begin::Table-->
    <div class="table-responsive">
        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
            <thead>
                <tr class="text-uppercase">
                    <th style="min-width: 80px">Fecha</th>
                    <th style="min-width: 200px">Nombre cliente</th>
                    <th style="min-width: 130px">Medio de pago</th>
                    <th style="min-width: 130px">Vendedor</th>
                    <th style="min-width: 120px">Valor</th>
                    <th style="min-width: 120px">Factura</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">20/2/2021</span>
                    </td>
                    <td class="pl-0 py-8">
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-50 flex-shrink-0 mr-4">
                                <div class="symbol-label" style="background-image: url('assets/media/country/arg.png')"></div>
                            </div>

                            <div>
                                <label class="text-dark-75 font-weight-bolder mb-1 font-size-lg">Carlos Santana</label>
                                <span class="text-muted font-weight-bold d-block">1122334455  carlos@santana.com</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="symbol symbol-50 flex-shrink-0 mr-4">
                            <div class="symbol-label" style="background-image: url('assets/media/logos/mercadopago.jpg')"></div>
                        </div>
                    </td>
                    <td>
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Vendedor 1</span>
                    </td>
                    <td>
                        <span class="label label-lg label-primary label-inline">$48000</span>
                    </td>
                    <td class="pr-0">
                        <i class="ml-4 far fa-file-pdf text-primary icon-3x" data-toggle="modal" data-target="#modalPdf"></i>
                    </td>
            </tbody>
        </table>
    </div>
    <!--end::Table-->
</div>
<!--end::Body-->

<!-- Modal-->
<div class="modal fade" id="modalPdf" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Visor de facturas</h5>
            </div>
            <div class="modal-body">
                <object data="recibos/venta_1.pdf" type="application/pdf" width="100%" height="800px">
                    <p>Parece que tu navegador no permite visualizar el documento.
                       Puedes descargarlo del siguiente link <a href="recibos/venta_1.pdf">Click aqui para descargar</a></p>
                </object>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->