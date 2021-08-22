<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2">Footer</h5>
        </div>
    </div>
</div>
<div class="d-flex flex-column-fluid">
    <div class="container">

        <!--begin::Table-->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Titulo</th>
                    <th class="text-center" scope="col">Descripcion</th>
                    <th class="text-center" scope="col">Informacion</th>
                    <th class="text-center" scope="col">Imagen</th>
                    <th class="text-center" scope="col">Guardar</th>
                </tr>
            </thead>
            <tbody id="tbody-leads">
                <tr>
                    <td class="text-center align-middle">
                        <div class="form-group mb-1">
                            <textarea class="form-control" id="info_title_<?= $footer[0]['id'] ?>" rows="3"><?= $footer[0]['info_title'] ?></textarea>
                        </div>
                    </td>
                    <td class="text-center align-middle">
                        <div class="form-group mb-1">
                            <textarea class="form-control" id="info_description_<?= $footer[0]['id'] ?>" rows="3"><?= $footer[0]['info_description'] ?></textarea>
                        </div>
                    </td>
                    <td class="text-center align-middle">
                        <div class="form-group mb-1">
                            <textarea class="form-control" id="info_footer_<?= $footer[0]['id'] ?>" rows="3"><?= $footer[0]['info_footer'] ?></textarea>
                        </div>
                    </td>
                    <td class="text-center align-middle">
                        <div class="symbol symbol-100 symbol-light">
                            <label for="file-input<?= $footer[0]['id'] ?>">
                                <span class="symbol-label">
                                    <img src="./images/site_footer/<?= $footer[0]['imagen'] ?>" class="img-thumbnail" alt="" />
                                </span>
                            </label>
                        </div>
                        <form id="frmImage<?= $footer[0]['id'] ?>" onsubmit="return false">
                            <input type="file" name="image" accept=".png, .jpg, .jpeg" style="display: none;" id="file-input<?= $footer[0]['id'] ?>" onchange="uploadImage(<?= $footer[0]['id'] ?>)"">
							</form>
					</td>

                    <!-- Guardar -->
                    <td class=" text-center align-middle">
                            <button style="border: none; background-color: transparent;" onclick="saveItem(<?= $footer[0]['id'] ?>)">
                                <span class="svg-icon svg-icon-primary svg-icon-3x">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M17,4 L6,4 C4.79111111,4 4,4.7 4,6 L4,18 C4,19.3 4.79111111,20 6,20 L18,20 C19.2,20 20,19.3 20,18 L20,7.20710678 C20,7.07449854 19.9473216,6.94732158 19.8535534,6.85355339 L17,4 Z M17,11 L7,11 L7,4 L17,4 L17,11 Z" fill="#000000" fill-rule="nonzero" />
                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="5" rx="0.5" />
                                        </g>
                                    </svg>
                                </span>
                            </button>
                    </td>
                    <!-- Guardar -->
                </tr>
            </tbody>
        </table>
        <!--end::Table-->

        <!-- BOTONES -->
        <!--begin::Table-->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Boton</th>
                    <th class="text-center" scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($buttons as $button) { ?>
                    <tr>
                        <td class="text-center align-middle">
                            <div class="form-group mb-1">
                                <textarea class="form-control" id="button_<?= $button['id'] ?>" rows="3"><?= $button['button'] ?></textarea>
                            </div>
                        </td>
                        <td class="text-center align-middle">
                            <div class="form-group mb-1">
                                <textarea class="form-control" id="link_<?= $button['id'] ?>" rows="3"><?= $button['link'] ?></textarea>
                            </div>
                        </td>
                        <!-- Guardar -->
                        <td class=" text-center align-middle">
                            <button style="border: none; background-color: transparent;" onclick="saveItem(<?= $button['id'] ?>)">
                                <span class="svg-icon svg-icon-primary svg-icon-3x">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M17,4 L6,4 C4.79111111,4 4,4.7 4,6 L4,18 C4,19.3 4.79111111,20 6,20 L18,20 C19.2,20 20,19.3 20,18 L20,7.20710678 C20,7.07449854 19.9473216,6.94732158 19.8535534,6.85355339 L17,4 Z M17,11 L7,11 L7,4 L17,4 L17,11 Z" fill="#000000" fill-rule="nonzero" />
                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="5" rx="0.5" />
                                        </g>
                                    </svg>
                                </span>
                            </button>
                        </td>
                        <!-- Guardar -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!--end::Table-->

        <script>
            function saveItem(id) {
                $.ajax({
                    type: 'get',
                    url: './functions/builder.php',
                    data: {
                        item_id: id,
                        info_title: $('#info_title_' + id).val(),
                        info_description: $('#info_description_' + id).val(),
                        info_footer: $('#info_footer_' + id).val(),
                        button: $('#button_' + id).val(),
                        link: $('#link_' + id).val(),
                        function: 'save_footer_text'
                    },
                    success: function(response) {
                        location.reload();
                    }
                });
            }

            function uploadImage(id) {
                fetch(`./functions/builder.php?table=site_footer&function=save_image&item_id=${id}`, {
                    method: "POST",
                    body: new FormData(document.getElementById('frmImage' + id))
                }).then(function() {
                    location.reload();
                })
            }
        </script>
    </div>
</div>