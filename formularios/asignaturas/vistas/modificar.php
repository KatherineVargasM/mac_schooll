<?php
require_once('../php/modelo.php');

$obj= new clase_asignaturas(); 
$row=$obj->_consultarcodigo($_GET['v_id']); 
$fila=$row->fetch();
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualización de datos</title>
        <link href="../../../Libs/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="../../../Libs/bootstrap-5.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="../../../Libs/jquery.min.js"></script>
        <script src="../../../Libs/ajax.js"></script>
    </head>
<body>
    <form action="../php/actualizar.php" method="post">
        <input type="text" hidden id="txt_codigo" name="txt_codigo" value="<?php echo $fila['ASIG_CODIGO'];?>"> 

        
        <div class="container">
            
            <div class="row mb-3">
                <label for="txt_nombre" class="col-sm-3 col-form-label">NOMBRE</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="txt_nombre" id="txt_nombre" maxlength="20" value="<?php echo $fila['ASIG_NOMBRE'];?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="txt_observacion" class="col-sm-3 col-form-label">OBSERVACION</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="txt_observacion" id="txt_observacion" maxlength="50" value="<?php echo $fila['ASIG_OBSERV'];?>" >
                </div>
            </div>

        </div>
            
            <div class="form-group row">
                <label class="col-12 text-center">
                    <button type="submit" class="btn btn-success">Guardar Registro</button>
                    <a href="../vistas/crud.php" class="btn btn-secondary">Cerrar</a>

                </label>
            </div>
        </div>
    </form>
</body>
</html>