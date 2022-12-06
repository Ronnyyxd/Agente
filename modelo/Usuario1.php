<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class Usuario1 extends Modelo {
    private $_Id_Usuario;
    private $_DNI;
    private $_nombre;
    private $_idTipoUsuario;
    private $_tabla="Usuario";
    private $_bd;
    public function __construct($Id_Usuario=null,$DNI=null,$nombre=null,$idTipoUsuario=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_Id_Usuario = $Id_Usuario;
        $this->_DNI = $DNI;
        $this->_nombre = $nombre;
        $this->_idTipoUsuario = $idTipoUsuario;
}
public function leer(){
    $sql ="SELECT * FROM ". $this->_tabla .";";
    return $this->_bd->ejecutar($sql);
}
public function leerUno(){
    $sql= "SELECT * FROM ". $this->_tabla
        . " WHERE Id_Usuario=".$this->_Id_Usuario;
    return $this->_bd->ejecutar($sql); 
}
public function eliminar(){
    $sql= "Delete FROM ". $this->_tabla
    . " WHERE Id_Usuario=".$this->_Id_Usuario;
    return $this->_bd->ejecutar($sql); 
}
public function editar(){
    $sql ="UPDATE ". $this->_tabla
        . " SET DNI='".$this->_DNI."', nombre='".$this->_nombre
        . "', idTipoUsuario='".$this->_idTipoUsuario ."'"
        ." WHERE Id_Usuario=".$this->_Id_Usuario;
    return $this->_bd->ejecutar($sql);
}
public function nuevo(){
    $sql = "INSERT INTO ". $this->_tabla
        ." (Id_Usuario, DNI, nombre, idTipoUsuario) VALUES ('".
            $this->_Id_Usuario ."','". $this->_DNI ."','"
            .$this->_nombre ."','".$this->_idTipoUsuario ."'"
        .");";
        #var_dump($sql);exit();
    return $this->_bd->ejecutar($sql);
    }
}