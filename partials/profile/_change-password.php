<!--begin::Content-->
<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">Cambiar contraseña</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">Cambia la contraseña de tu cuenta</span>
            </div>
            <div class="card-toolbar">
                <button type="reset" class="btn btn-success mr-2">Guardar cambios</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form class="form">
            <div class="card-body">
                <!--begin::Alert-->
                <div class="alert alert-custom alert-light-warning fade show mb-10" role="alert">
                    <div class="alert-icon">
                        <span class="svg-icon svg-icon-3x svg-icon-warning">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                    <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                    <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <div class="alert-text font-weight-bold">La clave no puede tener menos de 7 caracteres,
                        <br />recuerda cambiarla periodicamente!
                    </div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="ki ki-close"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <!--end::Alert-->
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Contraseña actual</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="password" class="form-control form-control-lg form-control-solid mb-2" value="" placeholder="Contraseña actual" />
                        <a href="#" class="text-sm font-weight-bold">Olvidaste tu clave?</a>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Nueva contraseña</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="password" class="form-control form-control-lg form-control-solid" value="" placeholder="Ingresa nueva contraseña" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Confirma contraseña</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="password" class="form-control form-control-lg form-control-solid" value="" placeholder="Vuelve a ingresar la nueva contraseña" />
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
<!--end::Content-->