<?php
require_once("conexion.php");
class Venta extends Conexion{
    public function alta($fecha,$IDCliente,$total,$tipo_pago){
        $this->sentencia = "INSERT INTO venta VALUES (null,'$fecha','$IDCliente','$total','$tipo_pago')";
        $this->ejecutarSentencia();
    }
    public function baja ($id){
        $this->sentencia = "DELETE FROM venta WHERE IDventa=$id";
        $this->ejecutarSentencia();
    }
    public function consulta(){
        $this->sentencia = "SELECT * FROM venta";
        return $this->obtenerSentencia();
    }
    public function modificar($fecha,$IDCliente,$total,$tipo_pago,$id){
        $this->sentencia = "UPDATE venta SET fecha='$fecha',IDCliente='$IDCliente',total='$total',tipo_pago='$tipo_pago' WHERE IDventa='$id'";
        $this->ejecutarSentencia();
    }
    public function buscar($id){
        $this->sentencia = "SELECT * FROM venta WHERE IDventa=$id";
        return $this->obtenerSentencia();
    }
}
?>