<?php

include '../../../login/verificar_sesion3n_mixto.php';
require_once("../../../conexion/conexion.php");

class clase_ciclos
{
    private $db;
    public $vl_id;
    public $vl_nombre;
    public $vl_observacion;
    
    public function __construct()
    {
        $this->vl_id="";
        $this->vl_nombre="";
        $this->vl_observacion="";
        $this->db = (new Conexion())->getConexion();
    }
   
    public function _consultartodo($valor){
        if($valor=='')
        {
            $dmlsentencia="select * from kvm_ciclo";
        }
        else
        {
            $dmlsentencia="select * from kvm_ciclo where CIC_NOMB like '%".$valor."%'";
        }
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }
   
    public function _consultarcodigo($valor){
        $dmlsentencia="SELECT * FROM kvm_ciclo WHERE CIC_CODI = " .$valor;
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }
    
    public function _insertar($vl_nombre, $vl_observacion)
    {
        $dmlsentencia = "INSERT INTO kvm_ciclo (CIC_NOMB, CIC_OBSERV)
                        VALUES ('" . $vl_nombre . "', '" . $vl_observacion . "')";
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }
 
    public function _eliminar($valor)
    {
        $dmlsentencia = "DELETE FROM kvm_ciclo WHERE CIC_CODI = " . $valor;
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }
 
    public function _actualizar($nombre, $observ, $id)
    {
        $dmlsentencia = "UPDATE kvm_ciclo
                        SET CIC_NOMB = '" . $nombre . "',
                            CIC_OBSERV = '" . $observ . "'
                        WHERE CIC_CODI = " . $id;
        $registros = $this->db->query($dmlsentencia);
        return $registros;
    }
 
}
?>
