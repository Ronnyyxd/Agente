<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class cuentasUsuario extends Modelo {
    private $_idCuenta;
    private $_numero;
    private $_saldo;
    private $_Id_Usuario;
    private $_idBanco;
    private $_tabla="cuentasUsuario";
    private $_bd;
    public function __construct($idCuenta=null,$numero=null,$saldo=null, $Id_Usuario=null, $idBanco=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idCuenta = $idCuenta;
        $this->_numero= $numero;
        $this->_saldo= $saldo;
        $this->_Id_Usuario= $Id_Usuario;
        $this->_idBanco= $idBanco;
}
public function leer(){
    $sql ="SELECT * FROM ". $this->_tabla .";";
    return $this->_bd->ejecutar($sql);
}
public function leerUno(){
    $sql= "SELECT * FROM ". $this->_tabla
        . " WHERE idCuenta=".$this->_idCuenta;
    return $this->_bd->ejecutar($sql); 
}
public function eliminar(){
    $sql= "Delete FROM ". $this->_tabla
    . " WHERE idCuenta=".$this->_idCuenta;
    return $this->_bd->ejecutar($sql); 
}
public function editar(){
    $sql ="UPDATE ". $this->_tabla
        . " SET numero='".$this->_numero."', saldo=".$this->_saldo
        . ", Id_Usuario='".$this->_Id_Usuario ."'"
        . ", idBanco='".$this->_idBanco ."'"
        ." WHERE idCuenta=".$this->_idCuenta;
    return $this->_bd->ejecutar($sql);
}
public function nuevo(){
    $sql = "INSERT INTO ". $this->_tabla
        ." (idCuenta, numero, saldo, Id_Usuario, idBanco) VALUES (".
            $this->_idCuenta .",'". $this->_numero ."','"
            .$this->_saldo ."','".$this->_Id_Usuario ."','"
            .$this->_idBanco ."'"
        .");";
    return $this->_bd->ejecutar($sql);
    }
}