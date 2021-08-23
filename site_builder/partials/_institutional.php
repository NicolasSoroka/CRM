<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2">Institucional</h5>
        </div>
    </div>
</div>
<div class="d-flex flex-column-fluid">
    <div class="container">
        <!--begin::Table-->
        <table class="table table-hover">
            <tbody id="tbody-leads">
                <tr>
                    <td class="text-center align-middle">
                        <div class="form-group mb-1">
                            <textarea class="form-control" id="title" rows="3"><?= $institutional[0]['title'] ?></textarea>
                        </div>
                    </td>
                    <td class="text-center align-middle">
                        <div class="form-group mb-1">
                            <textarea class="form-control" id="subtitle1" rows="3"><?= $institutional[0]['subtitle1'] ?></textarea>
                        </div>
                    </td>
                    <td class="text-center align-middle">
                        <div class="form-group mb-1">
                            <textarea class="form-control" id="subtitle2" rows="3"><?= $institutional[0]['subtitle2'] ?></textarea>
                        </div>
                    </td>
                    <td class="text-center align-middle">
                        <div class="form-group mb-1">
                            <textarea class="form-control" id="subtitle3" rows="3"><?= $institutional[0]['subtitle3'] ?></textarea>
                        </div>
                    </td>
                    <td class="text-center align-middle">
                        <div class="form-group mb-1">
                            <textarea class="form-control" id="subtitle4" rows="3"><?= $institutional[0]['subtitle4'] ?></textarea>
                        </div>
                    </td>
                   
                    <!-- Guardar -->
                    <td class=" text-center align-middle">
                            <button style="border: none; background-color: transparent;" onclick="saveItem(1)">
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
        <script>
            function saveItem(id) {
                $.ajax({
                    type: 'get',
                    url: './functions/builder.php',
                    data: {
                        item_id: id,
                        title: $('#title').val(),
                        subtitle1: $('#subtitle1').val(),
                        subtitle2: $('#subtitle2').val(),
                        subtitle3: $('#subtitle3').val(),
                        subtitle4: $('#subtitle4').val(),
                        function: 'save_institutional_text'
                    },
                    success: function(response) {
                        location.reload();
                    }
                });
            }

        </script>
    </div>
</div>