<?php
require_once("conexion.php");
class Compra extends Conexion{
    public function alta($fecha,$tipo_pago,$IDcliente,$total){
        $this->sentencia="INSERT INTO compra VALUES (null,'$fecha','$tipo_pago','$IDcliente','$total')";
        $this->ejecutarSentencia();
        
        public function eliminar ($id){
            $this->sentencia = "DELETE FROM compra WHERE IDcompra=$id";
            $this->ejecutarSentencia();
        }
        public function consulta(){
            $this->sentencia = "SELECT * FROM compra";
            return $this->obtenerSentencia();
        }
    }
}
?>