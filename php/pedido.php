<?php
require_once("conexion.php");
class Pedido extends Conexion{
    public function alta($fecha,$IDcliente,$precio,$cantidad,$direccion,$IDproducto){
        $this->sentencia = "INSERT INTO pedido VALUES (null,'$fecha','$IDcliente','$precio','$cantidad','$direccion','$IDproducto')";
        $this->ejecutarSentencia();
    }
    public function baja ($id){
        $this->sentencia = "DELETE FROM pedido WHERE IDpedido=$id";
        $this->ejecutarSentencia();
    }
    public function consulta(){
        $this->sentencia = "SELECT * FROM pedido";
        return $this->obtenerSentencia();
    }

    public function modificar($fecha,$IDcliente,$precio,$cantidad,$direccion,$IDproducto,$id){
        $this->sentencia = "UPDATE pedido SET fecha='$fecha',IDcliente='$IDcliente',precio='$precio',
        cantidad='$cantidad', direccion='$direccion', IDproducto='$IDproducto' WHERE IDpedido='$id'";
        $this->ejecutarSentencia();
    }
    public function buscar($id){
        $this->sentencia = "SELECT * FROM pedido WHERE IDpedido=$id";
        return $this->obtenerSentencia();
    }
}
?>