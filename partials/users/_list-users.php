<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Listado de vendedores</h5>
                <!--end::Title-->
            </div>
            <!--end::Details-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">

                <!--begin::Col-->
                <?php
                foreach ($users as $user) {  ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <!--begin::User-->
                                <div class="d-flex align-items-end mb-7">
                                    <!--begin::Pic-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="assets/profile/<?=$user['img']?>.jpg" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><?= $user['name'] . ' ' . $user['lastname'] ?></a>
                                            <span class="text-muted font-weight-bold"><?php if ($user['access'] == 1) { ?>Vendedor<?php } 
					                            else { ?>Administrador<?php } ?></span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::User-->
                                <!--begin::Info-->
                                <div class="mb-20">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                        <a href="#" class="text-muted text-hover-primary"><?= $user['email'] ?></a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-cente my-1">
                                        <span class="text-dark-75 font-weight-bolder mr-2">Telefono:</span>
                                        <a href="#" class="text-muted text-hover-primary"><?= $user['phone'] ?></a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-dark-75 font-weight-bolder mr-2">Pais:</span>
                                        <span class="text-muted font-weight-bold"><?= $user['country'] ?></span>
                                    </div>
                                </div>
                                <!--end::Info-->
                                <a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4" data-toggle="modal" data-target="#modal<?= $user['id'] ?>">Enviar mensaje</a>

                                <!-- Modal-->
                                <div class="modal fade" id="modal<?= $user['id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal<?= $user['id'] ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Enviar mensaje a <?= $user['username'] ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                                                    <div class="container">
                                                        <form class="form">
                                                            <div class="form-group">
                                                                <textarea class="form-control form-control-lg form-control-solid" id="textArea<?= $user['id'] ?>" rows="5" placeholder="Escriba su mensaje"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancelar</button>
                                                <button type="button" onclick="sendMessage(<?= $user['id'] ?>);" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal-->
                                <?php if ($user['disabled'] == 1) { ?>
                                    <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4 mt-2" id="status<?= $user['id'] ?>" onclick="blockUser(<?= $user['id'] . ',' . $user['id'] ?>);">Usuario bloqueado</a>
                                <?php } else { ?>
                                    <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4 mt-2" id="status<?= $user['id'] ?>" onclick="blockUser(<?= $user['id'] . ',' . $user['id'] ?>);">Usuario habilitado</a>
                                <?php } ?>

                                <a href="#" class="btn btn-block btn-sm btn-light-info font-weight-bolder text-uppercase py-4" onclick="resetPassword(<?= $user['id'] ?>);">Restablecer clave</a>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                <?php
                } ?>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<script>
    function swalfire() {
        Swal.fire({
            text: "Mensaje enviado!",
            icon: "success",
            buttonsStyling: false,
            showConfirmButton: false,
            timer: 2000
        })
    }

    function sendMessage(id) {
        let msg = $('#textArea'+id).val();

        $.ajax({
            type: 'get',
            url: './functions/sendMessage.php',
            data: {
                message: msg,
                id_user: id
            },
            success: function(response) {
                swalfire();
            }
        });
    }

    function resetPassword(user) {
        $.ajax({
            type: 'get',
            url: './functions/resetPassword.php',
            data: {
                id_user: user
            },
            success: function(response) {
                Swal.fire({
                    text: "Contraseña reestablecida!",
                    icon: "success",
                    buttonsStyling: false,
                    showConfirmButton: false,
                })
            }
        });
    }

    function blockUser(id_user, id_status) {
        if (id_user) {
            $.ajax({
                type: 'get',
                url: './functions/blockUser.php',
                data: {
                    id: id_user
                },
                success: function(response) {
                    blocked = document.getElementById('status' + id_status);
                    if (blocked.classList.contains('btn-light-danger')) {
                        blocked.classList.remove('btn-light-danger');
                        blocked.classList.add('btn-light-success');
                        blocked.innerHTML = "Usuario habilitado";
                    } else {
                        blocked.classList.remove('btn-light-success');
                        blocked.classList.add('btn-light-danger');
                        blocked.innerHTML = "Usuario bloqueado";
                    }
                }
            });
        }


    }
</script>