<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class TipoUsuario extends Modelo {
    private $_idTipoUsuario;
    private $_tipo;
    private $_tabla="TipoUsuario";
    private $_bd;
    public function __construct($idTipoUsuario=null,$tipo=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idTipoUsuario = $idTipoUsuario;
        $this->_tipo= $tipo;
}
public function leer(){
    $sql ="SELECT * FROM ". $this->_tabla .";";
    return $this->_bd->ejecutar($sql);
}
public function leerUno(){
    $sql= "SELECT * FROM ". $this->_tabla
        . " WHERE idTipoUsuario=".$this->_idTipoUsuario;
    return $this->_bd->ejecutar($sql); 
}
public function eliminar(){
    $sql= "Delete FROM ". $this->_tabla
    . " WHERE idTipoUsuario=".$this->_idTipoUsuario;
    return $this->_bd->ejecutar($sql); 
}
public function editar(){
    $sql ="UPDATE ". $this->_tabla
        . " SET tipo='".$this->_tipo."'"
        ." WHERE idTipoUsuario=".$this->_idTipoUsuario;
    return $this->_bd->ejecutar($sql);
}
public function nuevo(){
    $sql = "INSERT INTO ". $this->_tabla
        ." (idTipoUsuario, tipo) VALUES (".
            $this->_idTipoUsuario .",'". $this->_tipo ."'"
        .");";
    return $this->_bd->ejecutar($sql);
    }
}