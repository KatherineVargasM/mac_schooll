<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nueva Asignatura</title>
        <link href="../../../Libs/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="../../../bootstrap-5.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="../../../Libs/jquery.min.js"></script>
        <script src="../../../Libs/ajax.js"></script>
    </head>
<body>
    <form action="../php/controlador_insertar.php" method="post">

        <div class="container">

    <div class="row mb-3">
        <label for="txt_nombre" class="col-sm-3 col-form-label">NOMBRE</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="txt_nombre" id="txt_nombre" maxlength="20" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="txt_observacion" class="col-sm-3 col-form-label">OBSERVACIÓN</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="txt_observacion" id="txt_observacion" maxlength="50">
        </div>
    </div>

</div>
      
            <div class="form-group row">
                <label class="col-12 text-center">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="button" class="btn btn-secondary" onclick="location.href='crud.php'">Cerrar</button>
                </label>
            </div>

        </div>
    </form>
</body>
</html>