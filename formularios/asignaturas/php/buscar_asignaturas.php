<?php
require_once("../php/modelo.php");
$mclase= new clase_asignaturas();
$registros=$mclase->_consultartodo($_POST['valor']);

echo "<table id='tabla' name='tabla' class='table table-bordered'>
        <thead class='bg-primary text-light text-center'>
            <tr>
                <th>#</th>
                <th>CÓDIGO</th>
                <th>ASIGNATURAS</th>
                <th>OBSERVACIÓN</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>";
 
    $f=1;
    while ($fila = $registros->fetch())
    {
        echo "<tr>
                <td>".$f."</td>
                <td>".$fila['ASIG_CODIGO']."</td>
                <td>".$fila['ASIG_NOMBRE']."</td>
                <td>".$fila['ASIG_OBSERV']."</td>
                <td class='text-center'><img src='../../../Src/imgs/edit.png' onclick='abrirModalModificar(".$fila['ASIG_CODIGO'].")' style='cursor: pointer;' title='Editar'></td>
                <td class='text-center'><img src='../../../Src/imgs/delete.png' onclick='ajax_eli_asignatura(".$fila['ASIG_CODIGO'].");' data-bs-toggle='modal' data-bs-target='#eliminar'></td>
            </tr>";
        $f++;
    }
 
echo "  </tbody>
      </table>";
?>