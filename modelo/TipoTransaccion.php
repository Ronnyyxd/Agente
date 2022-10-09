<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class TipoTransaccion extends Modelo {
    private $_idTipoTransaccion;
    private $_Transaccion;
    private $_tabla="TipoTransaccion";
    private $_bd;
    public function __construct($idTipoTransaccion=null,$Transaccion=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idTipoTransaccion = $idTipoTransaccion;
        $this->_Transaccion= $Transaccion;
}
public function leer(){
    $sql ="SELECT * FROM ". $this->_tabla .";";
    return $this->_bd->ejecutar($sql);
}
public function leerUno(){
    $sql= "SELECT * FROM ". $this->_tabla
        . " WHERE idTipoTransaccion=".$this->_idTipoTransaccion;
    return $this->_bd->ejecutar($sql); 
}
public function eliminar(){
    $sql= "Delete FROM ". $this->_tabla
    . " WHERE idTipoTransaccion=".$this->_idTipoTransaccion;
    return $this->_bd->ejecutar($sql); 
}
public function editar(){
    $sql ="UPDATE ". $this->_tabla
        . " SET Transaccion='".$this->_Transaccion."'"
        ." WHERE idTipoTransaccion=".$this->_idTipoTransaccion;
    return $this->_bd->ejecutar($sql);
}
public function nuevo(){
    $sql = "INSERT INTO ". $this->_tabla
        ." (idTipoTransaccion, Transaccion) VALUES (".
            $this->_idTipoTransaccion .",'". $this->_Transaccion ."'"
        .");";
    return $this->_bd->ejecutar($sql);
    }
}