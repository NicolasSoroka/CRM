<?php
require "../globals/database.php";
$db = Database::getInstance();

if (isset($_POST['loadFile'])) {
    $courseName = $_POST['course-name'];
    $directoryName = './cursos/' . $courseName;
    $examDirectory = $directoryName . '/' . 'exams/';
    $target_file = basename($_FILES["file"]["name"]);

    $doctype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($doctype == "php") {
        $fichero = $_FILES["file"]["tmp_name"];
        move_uploaded_file($_FILES["file"]["tmp_name"], $examDirectory . "exam.php");
        $_SESSION['mensaje'] = "Examen cargado con exito!";
        $_SESSION['msg_status'] = 1;
    } else {
        $_SESSION['mensaje'] = "Error al cargar el examen, revise el formato del archivo a subir.";
        $_SESSION['msg_status'] = 0;
    }
}
?>



<form>
    <div class="card-body">
        <div class="form-group row">
            <label class="col-form-label col-lg-3 col-sm-12 text-lg-right">Single File Upload</label>
            <div class="col-lg-4 col-md-9 col-sm-12">
                <div class="dropzone dropzone-default" id="kt_dropzone_1">
                    <div class="dropzone-msg dz-message needsclick">
                        <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                        <span class="dropzone-msg-desc">This is just a demo dropzone. Selected files are
                            <strong>not</strong>actually uploaded.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-4">
                <button type="reset" class="btn btn-light-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-primary">Cancel</button>
            </div>
        </div>
    </div>
</form>