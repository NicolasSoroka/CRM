<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Nuevo lead</h5>
            <!--end::Title-->
        </div>
        <!--end::Details-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Button-->
            <!-- <a href="#" class="btn btn-danger font-weight-bold">Volver</a> -->
            <!--end::Button-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <!--begin::Form-->
    <form>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-2 col-form-label">Nombre y apellido</label>
                <div class="col-4">
                    <input class="form-control" type="text" id="example-text-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-search-input" class="col-2 col-form-label">Telefono</label>
                <div class="col-4">
                    <input class="form-control" type="search" id="example-search-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-email-input" class="col-2 col-form-label">Email</label>
                <div class="col-4">
                    <input class="form-control" type="email" id="example-email-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleSelectd" class="col-2 col-form-label">Pais</label>
                <div class="col-4">
                    <select class="form-control" id="exampleSelectd">
                        <option selected disabled>-- Seleccione --</option>
                        <option>Argentina</option>
                        <option>Chile</option>
                        <option>Paraguay</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Medio de contacto preferido</label>
                <div class="col-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" checked="checked" name="radios4" />
                            <span></span>
                            Whatsapp
                        </label>
                        <label class="radio">
                            <input type="radio" name="radios4" />
                            <span></span>
                            Telefono
                        </label>
                        <label class="radio">
                            <input type="radio" name="radios4" />
                            <span></span>
                            Email
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-url-input" class="col-2 col-form-label">Curso de interes</label>
                <div class="col-4">
                    <input class="form-control" type="text" id="example-url-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-time-input" class="col-2 col-form-label">Horario de preferencia</label>
                <div class="col-4">
                    <input class="form-control" type="time" id="example-time-input" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Detalle adicional</label>
                <div class="col-10">
                    <textarea class="col-6 form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
            </div>

                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary mr-2">Crear lead</button>
                    </div>
                </div>
        </div>
    </form>
</div>
<!--end::Card-->