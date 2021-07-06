<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mr-2">Editar lead</h5><span class="text-dark-75 font-weight-bolder label label-xl bg-transparent border border-dark label-inline font-size-xg"><?=$lead[0]['id']?></span>
                <!--end::Title-->
            </div>
            <!--end::Details-->
        </div>
    </div>
    <!--end::Subheader-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-5">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header h-auto py-4">
                            <div class="card-title">
                                <h3 class="card-label"><?=$lead[0]['name']?>
                                    <span class="d-block text-muted pt-2 font-size-sm"><b>Ingresado el <?=$lead[0]['date']?></b></span>
                                </h3>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-4">
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Pais:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" value="Argentina" />
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Telefono:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" value="1122223333" />
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Email:</label>
                                <div class="col-8">
                                    <input type="email" class="form-control" value="test@ejemplo.com" />
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Preferencia:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" value="Telefono" />
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Comentario:</label>
                                <div class="col-8">
                                    <textarea name="" id="" cols="30" rows="6">Me interesa el curso de blabla porque queria comenzar con blabla lorem</textarea>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Curso de interes:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" value="Curso de refrigeracion industrial" />
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Horario de contacto:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" value="Lunes, martes y jueves 18:30" />
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary font-weight-bold mr-2" onclick="swalfire();">Guardar cambios</a>
                        </div>
                        <!--end::Footer-->
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

<script>
    function swalfire() {
        Swal.fire({
            title: "Desea guardar los cambios?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Guardar",
            cancelButtonText: "Cancelar",
            reverseButtons: true
        }).then(function(result) {
            if (result.value) {
                Swal.fire({
                    text: "Datos actualizados",
                    icon: "success",
                    buttonsStyling: false,
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        });
    }
</script>