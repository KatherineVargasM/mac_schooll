<?php

include '../../../login/verificar_sesion3n_mixto.php';
require_once("../../../conexion/conexion.php");

class clase_asignaturas
{
    private $db;
    public $vl_id;
    public $vl_nombre;
    public $vl_observacion;

    public function __construct()
    {
        $this->vl_id = "";
        $this->vl_nombre = "";
        $this->vl_observacion = "";
        $this->db = (new Conexion())->getConexion();
    }

    public function _consultartodo($valor)
    {
        if ($valor == '') {
            $dmlsentencia = "select * from kvm_asig";
        } 
        else 
        {
            $dmlsentencia = "select * from kvm_asig where ASIG_NOMBRE like '%" . $valor . "%'";
        }
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }

    public function _consultarcodigo($valor)
    {
        $dmlsentencia = "SELECT * FROM kvm_asig WHERE ASIG_CODIGO = " . $valor;
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }

    public function _insertar($vl_nombre, $vl_observacion)
    {
        $dmlsentencia = "INSERT INTO kvm_asig (ASIG_NOMBRE, ASIG_OBSERV)
                        VALUES ('" . $vl_nombre . "', '" . $vl_observacion . "')";
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }

    public function _eliminar($valor)
    {
        $dmlsentencia = "DELETE FROM kvm_asig WHERE ASIG_CODIGO = " . $valor;
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }

    public function _actualizar($nombre, $observ, $id)
    {
        $dmlsentencia = "UPDATE kvm_asig
                        SET ASIG_NOMBRE = '" . $nombre . "',
                            ASIG_OBSERV = '" . $observ . "'
                        WHERE ASIG_CODIGO = " . $id;
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }

}
?>