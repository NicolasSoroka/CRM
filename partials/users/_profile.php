<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Editar perfil</h5>
            <!--end::Title-->
        </div>
    </div>
</div>

<div class="flex-row-fluid mx-lg-8">
    <!--begin::Card-->
    <div class="card card-custom card-stretch">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">Informacion personal</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">Actualiza tus datos</span>
            </div>
            <div class="card-toolbar">
                <button type="reset" class="btn btn-primary mr-2" onclick="saveProfile(<?= $userData[0]['id'] ?>)">Guardar cambios</button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form class="form">
            <!--begin::Body-->
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-xl-1 col-lg-3 col-form-label">Foto</label>
                    <div class="col-lg-9 col-xl-3">
                        <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
                            <div class="image-input-wrapper" style="background-image:url('assets/profile/<?= $userData[0]['img'] ?>.jpg')"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Cambiar foto de perfil">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                            </label>
                        </div>
                        <span class="form-text text-muted">Formatos admitidos: png, jpg, jpeg.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-1 col-lg-3 col-form-label">Usuario</label>
                    <div class="col-lg-9 col-xl-3">
                        <input class="form-control form-control-lg form-control-solid" type="text" value="<?= $userData[0]['username'] ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-1 col-lg-3 col-form-label">Nombre</label>
                    <div class="col-lg-9 col-xl-3">
                        <input class="form-control form-control-lg form-control-solid" id="name" type="text" value="<?= $userData[0]['name'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-1 col-lg-3 col-form-label">Apellido</label>
                    <div class="col-lg-9 col-xl-3">
                        <input class="form-control form-control-lg form-control-solid" id="lastname" type="text" value="<?= $userData[0]['lastname'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleSelectd" class="col-1 col-form-label">Pais</label>
                    <div class="col-3">
                        <select class="form-control" id="country" value="<?= $userData[0]['country'] ?>">
                            <option disabled>-- Seleccione --</option>
                            <option <?php if ($userData[0]['country'] == 'Argentina') echo 'selected'; ?>>Argentina</option>
                            <option <?php if ($userData[0]['country'] == 'Chile') echo 'selected'; ?>>Chile</option>
                            <option <?php if ($userData[0]['country'] == 'Paraguay') echo 'selected'; ?>>Paraguay</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <label class="col-xl-1"></label>
                    <div class="col-lg-9 col-xl-3">
                        <h5 class="font-weight-bold mt-10 mb-6">Informacion de contacto</h5>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-1 col-lg-3 col-form-label">Telefono</label>
                    <div class="col-lg-9 col-xl-3">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-phone"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control form-control-lg form-control-solid" id="phone" value="<?= $userData[0]['phone'] ?>" placeholder="Ingrese su numero de telefono">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-1 col-lg-3 col-form-label">Email</label>
                    <div class="col-lg-9 col-xl-3">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control form-control-lg form-control-solid" id="email" value="<?= $userData[0]['email'] ?>" placeholder="Ingrese su direccion de email">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-1 col-lg-3 col-form-label">Cambiar contraseña</label>
                    <div class="col-lg-9 col-xl-3">
                        <input class="form-control form-control-lg form-control-solid font-weight-bold label-danger text-danger border border-danger" type="text" id="password">
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </form>
        <!--end::Form-->
    </div>
</div>


<script>
    function saveProfile(id) {
        let name = $('#name').val();
        let lastname = $('#lastname').val();
        let phone = $('#phone').val();
        let email = $('#email').val();
        let country = $('#country').val();
        let password = $('#password').val();

        let info = {
            'name': name,
            'lastname': lastname,
            'password': password,
            'phone': phone,
            'email': email,
            'country': country,
            'id': id
        }
        $.ajax({
            type: 'get',
            url: './functions/updateProfile.php',
            data: info,
            success: function(response) {
                Swal.fire({
                    text: "Datos actualizados",
                    icon: "success",
                    buttonsStyling: false,
                    showConfirmButton: false,
                    timer: 2000
                })
                location.reload();
            }
        });
    }
</script>