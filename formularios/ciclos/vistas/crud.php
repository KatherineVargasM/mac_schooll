<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CICLOS</title>
        <link href="../../../Libs/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="../../../Libs/bootstrap-5.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="../../../Libs/jquery.min.js"></script>
        <script src="../../../Libs/ajax.js"></script>
       
    </head>
    <body onload="ajax_buscar_ciclos('');">
        <div class="alert alert-light">
            <h2 class="text-primary">Gestión de Ciclos o Educación</h2>
            <button type="button" class="btn btn-success" onclick="abrirModalFormulario()">Nuevo</button>
            <button type="button" class="btn btn-success" onclick="reporte();">Reporte</button>
            <button type="button" class="btn btn-secondary" onclick="location.href='../../../admin.php'">← Volver al Panel Principal</button>
        </div>
        <div class="container alert alert-info col-5">
            <h3>Buscar</h3>
            <div class="row">
                <input type="text" class="form-control col-4" id="txt_buscar" name="txt_buscar" onkeyup="ajax_buscar_ciclos(this.value);">
             </div>
        </div>
        <table id="tabla" name="tabla" class="table table-bordered">
            <thead class='bg-primary text-light text-center'>
                <tr>
                    <th>#</th>
                    <th>CÓDIGO</th>
                    <th>NOMBRE</th>
                    <th>OBSERVACIÓN</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
        </table>
    </body>
 
    <!-- Modal para formulario -->
    <div class="modal fade" id="modalFormulario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFormularioLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header alert alert-info text-primary">
            <h5 class="modal-title" id="modalFormularioLabel">Nuevo Ciclo</h5>
            <!-- Sin botón de cerrar para evitar salida -->
        </div>
        <div class="modal-body" id="contenidoModal">
            <!-- Aquí se cargará el formulario por AJAX -->
            <div class="text-center">Cargando...</div>
        </div>
        </div>
    </div>
    </div>
    <script>
    function abrirModalFormulario() {
        // Cargar el contenido vía AJAX
        $("#contenidoModal").load("ingresar.php", function () {
            // Mostrar el modal cuando haya terminado de cargar
            var myModal = new bootstrap.Modal(document.getElementById('modalFormulario'));
            myModal.show();
        });
    }
    </script>
 
 
 
</html>