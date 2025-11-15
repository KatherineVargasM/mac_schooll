function ajax_buscar_ciclos(vldato)
{
    var fd= new FormData();
    fd.append('valor', vldato);
    $.ajax({
        type: 'POST',
        url: '../php/buscar_ciclos.php',
        data:fd,
        cache:false,
        contentType:false,
        processData:false
    })
    .done(function(data){
        $("#tabla").html(data);
    })
    .fail(function ()
    {
        alert("Error al procesar la informacion");
    });
    return false;
}

function ajax_eli_ciclo(vldato) {
    $("#txt_codigo").val(vldato);
    
    var fd = new FormData();
    fd.append('codigo', vldato);
    $.ajax({
        type: 'POST',
        url: '../php/cargardatos.php',
        data: fd,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function (data) {
            var datos = JSON.parse(data);
            $("#txt_nombre").val(datos.v_nombre);
            $("#txt_observ").val(datos.v_observ);
            })
        .fail(function () {
            alert("error al procesar la informacion");
        });
    return false;
}


function ajax_buscar_asignaturas(vldato)
{
    var fd= new FormData();
    fd.append('valor', vldato);
    $.ajax({
        type: 'POST',
        url: '../php/buscar_asignaturas.php', 
        data:fd,
        cache:false,
        contentType:false,
        processData:false
    })
    
    .done(function(data){
        $("#contenedor_tabla").html(data);
    })


    .fail(function ()
    {
        alert("Error al procesar la informacion");
    });
    return false;
}

function ajax_eli_asignatura(vldato) {
    $("#txt_codigo").val(vldato);
    
    var fd = new FormData();
    fd.append('codigo', vldato);
    $.ajax({
        type: 'POST',
        url: '../php/cargardatos.php', 
        data: fd,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function (data) {
            var datos = JSON.parse(data);
            $("#txt_nombre").val(datos.v_nombre);
            $("#txt_observ").val(datos.v_observ);
            })
        .fail(function () {
            alert("error al procesar la informacion");
        });
    return false;
}