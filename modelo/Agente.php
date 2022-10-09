<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class Agente extends Modelo {
    private $_idAgente;
    private $_NombreAgente;
    private $_direccion;
    private $_codigoEquipo;
    private $_tabla="Agente";
    private $_bd;
    public function __construct($idAgente=null,$NombreAgente=null,$direccion=null, $codigoEquipo=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idAgente = $idAgente;
        $this->_NombreAgente= $NombreAgente;
        $this->_direccion= $direccion;
        $this->_codigoEquipo= $codigoEquipo;
}
public function leer(){
    $sql ="SELECT * FROM ". $this->_tabla .";";
    return $this->_bd->ejecutar($sql);
}
public function leerUno(){
    $sql= "SELECT * FROM ". $this->_tabla
        . " WHERE idAgente=".$this->_idAgente;
    return $this->_bd->ejecutar($sql); 
}
public function eliminar(){
    $sql= "Delete FROM ". $this->_tabla
    . " WHERE idAgente=".$this->_idAgente;
    return $this->_bd->ejecutar($sql); 
}
public function editar(){
    $sql ="UPDATE ". $this->_tabla
        . " SET NombreAgente='".$this->_NombreAgente."', direccion='".$this->_direccion
        . "', codigoEquipo='".$this->_codigoEquipo ."'"
        ." WHERE idAgente=".$this->_idAgente;
    return $this->_bd->ejecutar($sql);
}
public function nuevo(){
    $sql = "INSERT INTO ". $this->_tabla
        ." (idAgente, NombreAgente, direccion, codigoEquipo) VALUES (".
            $this->_idAgente .",'". $this->_NombreAgente ."','"
            .$this->_direccion ."','".$this->_codigoEquipo ."'"
        .");";
    return $this->_bd->ejecutar($sql);
    }
}
