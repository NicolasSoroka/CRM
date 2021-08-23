<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2">Navbar</h5>
        </div>
    </div>
</div>
<div class="d-flex flex-column-fluid">
    <div class="container">
        <!--begin::Table-->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Logo</th>
                    <th class="text-center" scope="col">Boton 1</th>
                    <th class="text-center" scope="col">Boton 2</th>
                    <th class="text-center" scope="col">Boton 3</th>
                    <th class="text-center" scope="col">Boton 4</th>
                    <th class="text-center" scope="col">Boton 5</th>
                    <th class="text-center" scope="col">Boton 6</th>
                    <th class="text-center" scope="col">Boton 7</th>
                    <th class="text-center" scope="col">Guardar</th>
                </tr>
            </thead>
            <tbody id="tbody-leads">
                <?php
                foreach ($navbar as $item) { ?>
                    <tr id="<?= $item['id'] ?>">
                        <td class="text-center align-middle">
                            <div class="symbol symbol-100 symbol-light">
                                <label for="file-input<?= $item['id'] ?>">
                                    <span class="symbol-label">
                                        <img src="./images/site_navbar/<?= $item['imagen'] ?>" class="img-thumbnail" alt="" />
                                    </span>
                                </label>
                            </div>
                            <form id="frmImage<?= $item['id'] ?>" onsubmit="return false">
                                <input type="file" name="image" accept=".png, .jpg, .jpeg" style="display: none;" id="file-input<?= $item['id'] ?>" onchange="uploadImage(<?= $item['id'] ?>)">
							</form>
						</td>
                        <td class="text-center align-middle col-2">
                            <div class="form-group mb-1">
                                    <input class="form-control" type="text" id="button1" value="<?= $item['button1'] ?>"/>
                            </div>
                        </td>
                        <td class="text-center align-middle">
                            <div class="form-group mb-1">
                                    <input class="form-control" type="text" id="button2" value="<?= $item['button2'] ?>"/>
                            </div>
                        </td>
                        <td class="text-center align-middle">
                            <div class="form-group mb-1">
                                    <input class="form-control" type="text" id="button3" value="<?= $item['button3'] ?>"/>
                            </div>
                        </td>
                        <td class="text-center align-middle">
                            <div class="form-group mb-1">
                                    <input class="form-control" type="text" id="button4" value="<?= $item['button4'] ?>"/>
                            </div>
                        </td>
                        <td class="text-center align-middle">
                            <div class="form-group mb-1">
                                    <input class="form-control" type="text" id="button5" value="<?= $item['button5'] ?>"/>
                            </div>
                        </td>
                        <td class="text-center align-middle">
                            <div class="form-group mb-1">
                                    <input class="form-control" type="text" id="button6" value="<?= $item['button6'] ?>"/>
                            </div>
                        </td>
                        <td class="text-center align-middle">
                            <div class="form-group mb-1">
                                    <input class="form-control" type="text" id="button7" value="<?= $item['button7'] ?>"/>
                            </div>
                        </td>

						<!-- Guardar -->
						<td class=" text-center align-middle">
                                <button style="border: none; background-color: transparent;" onclick="saveItem(<?= $item['id'] ?>)">
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
                        button1: $('#button1').val(),
                        button2: $('#button2').val(),
                        button3: $('#button3').val(),
                        button4: $('#button4').val(),
                        button5: $('#button5').val(),
                        button6: $('#button6').val(),
                        button7: $('#button7').val(),
                        function: 'save_navbar_text'
                    },
                    success: function(response) {
                        location.reload();
                    }
                });
            }

            function uploadImage(id) {
                fetch(`./functions/builder.php?table=site_navbar&function=save_image&item_id=${id}`, {
                    method: "POST",
                    body: new FormData(document.getElementById('frmImage' + id))
                }).then(function() {
                    location.reload();
                })
            }
        </script>
    </div>
</div>