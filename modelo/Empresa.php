<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class Empresa extends Modelo {
    private $_idEmpresa;
    private $_Giro_rubro;
    private $_nroCuenta;
    private $_Nombre;
    private $_codigo;
    private $_tabla="Empresa";
    private $_bd;
    public function __construct($idEmpresa=null, $Giro_rubro=null, $nroCuenta=null, $Nombre=null,$codigo=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idEmpresa = $idEmpresa;
        $this->_Giro_rubro= $Giro_rubro;
        $this->_nroCuenta= $nroCuenta;
        $this->_Nombre= $Nombre;
        $this->_codigo= $codigo;
}
public function leer(){
    $sql ="SELECT * FROM ". $this->_tabla .";";
    return $this->_bd->ejecutar($sql);
}
public function leerUno(){
    $sql= "SELECT * FROM ". $this->_tabla
        . " WHERE idEmpresa=".$this->_idEmpresa;
    return $this->_bd->ejecutar($sql); 
}
public function eliminar(){
    $sql= "Delete FROM ". $this->_tabla
    . " WHERE idEmpresa=".$this->_idEmpresa;
    return $this->_bd->ejecutar($sql); 
}
public function editar(){
    $sql ="UPDATE ". $this->_tabla
        . " SET Giro_rubro='".$this->_Giro_rubro."', nroCuenta=".$this->_nroCuenta
        .", codigo='".$this->_codigo."'"
        . ", Nombre='".$this->_Nombre ."'"
        ." WHERE idEmpresa=".$this->_idEmpresa;
    return $this->_bd->ejecutar($sql);
}
public function nuevo(){
    $sql = "INSERT INTO ". $this->_tabla
        ." (idEmpresa, Giro_rubro, nroCuenta, Nombre, codigo) VALUES (".
            $this->_idEmpresa .",'". $this->_Giro_rubro ."','"
            .$this->_nroCuenta ."','".$this->_Nombre ."','"
            .$this->_codigo ."'"
        .");";
        #var_dump($sql);exit();
    return $this->_bd->ejecutar($sql);
    }
}