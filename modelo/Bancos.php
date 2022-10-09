<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class Bancos extends Modelo {
    private $_idBanco;
    private $_nombre;
    private $_tabla="Bancos";
    private $_bd;
    public function __construct($idBanco=null,$nombre=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idBanco = $idBanco;
        $this->_nombre = $nombre;
}
public function leer(){
    $sql ="SELECT * FROM ". $this->_tabla .";";
    return $this->_bd->ejecutar($sql);
}
public function leerUno(){
    $sql= "SELECT * FROM ". $this->_tabla
        . " WHERE idBanco=".$this->_idBanco;
    return $this->_bd->ejecutar($sql); 
}
public function eliminar(){
    $sql= "Delete FROM ". $this->_tabla
    . " WHERE idBanco=".$this->_idBanco;
    return $this->_bd->ejecutar($sql); 
}
public function editar(){
    $sql ="UPDATE ". $this->_tabla
        . " SET nombre='".$this->_nombre. "'"
        ." WHERE idBanco=".$this->_idBanco;
    return $this->_bd->ejecutar($sql);
}
public function nuevo(){
    $sql = "INSERT INTO ". $this->_tabla
        ." (idBanco, nombre) VALUES (".
            $this->_idBanco .",'". $this->_nombre ."'"
        .");";
    return $this->_bd->ejecutar($sql);
    }
}