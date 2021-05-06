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
    <form id="form">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-2 col-form-label">Nombre y apellido</label>
                <div class="col-4">
                    <input class="form-control" type="text" id="name" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-search-input" class="col-2 col-form-label">Telefono</label>
                <div class="col-4">
                    <input class="form-control" type="search" id="phone" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-email-input" class="col-2 col-form-label">Email</label>
                <div class="col-4">
                    <input class="form-control" type="email" id="email" />
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleSelectd" class="col-2 col-form-label">Pais</label>
                <div class="col-4">
                    <select class="form-control" id="country">
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
                            <input type="radio" checked="checked" name="radio" value="Whatsapp"/>
                            <span></span>
                            Whatsapp
                        </label>
                        <label class="radio">
                            <input type="radio" name="radio" value="Telefono"/>
                            <span></span>
                            Telefono
                        </label>
                        <label class="radio">
                            <input type="radio" name="radio" value="Email"/>
                            <span></span>
                            Email
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-url-input" class="col-2 col-form-label">Curso de interes</label>
                <div class="col-4">
                    <input class="form-control" type="text" id="course" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-time-input" class="col-2 col-form-label">Horario de preferencia</label>
                <div class="col-4">
                    <input class="form-control" type="time" id="contactTime" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">Detalle adicional</label>
                <div class="col-10">
                    <textarea class="col-6 form-control" id="detail" rows="3"></textarea>
                </div>
            </div>

                <div class="row">
                    <div class="col-6">
                        <button type="button" onclick="newLead()" class="btn btn-primary mr-2">Crear lead</button>
                    </div>
                </div>
        </div>
    </form>
</div>
<!--end::Card-->

<script>
        function newLead() {
            Swal.fire({
                title: "Esta por cargar un nuevo lead",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Cargar",
                cancelButtonText: "Cancelar",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                   var info = {
                        'phone': $('#phone').val(),
                        'email' : $('#email').val(),
                        'name' : $('#name').val(),
                        'contactMethod' : $("input[type='radio'][name='radio']:checked").val(),
                        'contactTime' : $('#contactTime').val(),
                        'course' : $('#course').val(),
                        'detail' : $('#detail').val(),
                        'country' : $('#country').val()
                    }

                    $.ajax({
                        type: 'get',
                        url: './functions/addNewLead.php',
                        data: info,
                        success: function(response) {
                            Swal.fire({
                                text: "Alta realizada con exito!",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 2000
                            })
                            $('#phone').val("");
                            $('#email').val("");
                            $('#name').val("");
                            $('#contactMethod').val("");
                            $('#contactTime').val("");
                            $('#country').val("")
                            $('#detail').val("")
                            $('#course').val("")
                        }
                    });
                }
            })
        }
    </script>