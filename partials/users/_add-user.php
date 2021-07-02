<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Alta usuario</h5>
            <!--end::Title-->
        </div>
        <!--end::Details-->
    </div>
</div>


    <!--begin::Card-->
    <div class="card card-custom card-transparent">
        <div class="card-body p-0">
            <!--begin::Card-->
            <div class="card card-custom card-shadowless rounded-top-0">
                <!--begin::Body-->
                <div class="card-body p-0">
                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                        <div class="col-10 col-10">
                            <!--begin::Wizard Form-->
                            <form class="form" id="form-new-user">
                                <div class="row justify-content-center">
                                    <div class="col-xl-9">
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-2 col-lg-3 col-form-label">Usuario</label>
                                            <div class="col-lg-9 col-xl-5">
                                                <input class="form-control form-control-solid form-control-lg" name="username" id="username" type="text" value="" />
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-2 col-lg-3 col-form-label">Nombre</label>
                                            <div class="col-lg-9 col-xl-5">
                                                <input class="form-control form-control-solid form-control-lg" name="firstname" id="firstname" type="text" value="" />
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-2 col-lg-3 col-form-label">Apellido</label>
                                            <div class="col-lg-9 col-xl-5">
                                                <input class="form-control form-control-solid form-control-lg" name="lastname" id="lastname" type="text" value="" />
                                            </div>
                                        </div>
                                        <!--end::Group-->

                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-2 col-lg-3 col-form-label">Telefono</label>
                                            <div class="col-lg-9 col-xl-5">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="phone" id="phone" placeholder="Telefono" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-2 col-lg-3 col-form-label">Email</label>
                                            <div class="col-lg-9 col-xl-5">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="email" id="email" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label for="exampleSelect1" class="col-xl-2 col-lg-3 col-form-label">Pais</label>
                                            <select class="form-control col-lg-9 col-xl-2" name='country' id="country">
                                                <option value="Argentina">Argentina</option>
                                                <option value="Chile">Chile</option>
                                                <option value="Paraguay">Paraguay</option>
                                            </select>
                                        </div>
                                        <!--end::Group-->
                                        <div class="form-group row">
                                            <button type="button" id="next-step" onclick="newUser();" class="btn btn-primary font-weight-bolder px-9 py-4">Dar de alta</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end::Wizard Form-->
                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
    </div>
    <!--end::Card-->
    <script>
        function newUser() {
            Swal.fire({
                title: "Esta por dar de alta un nuevo vendedor",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Dar de alta",
                cancelButtonText: "Cancelar",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    var info = {
                        'phone': $('#phone').val(),
                        'email': $('#email').val(),
                        'username': $('#username').val(),
                        'firstname': $('#firstname').val(),
                        'lastname': $('#lastname').val(),
                        'country': $('#country').val()
                    }
                    $.ajax({
                        type: 'get',
                        url: './functions/addNewUser.php',
                        data: info,
                        success: function(response) {
                            Swal.fire({
                                text: "Alta realizada con exito!",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 2000
                            })
                            location.reload();
                        }
                    });
                }
            })
        }
    </script>