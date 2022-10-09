<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class Voucher extends Modelo {
    private $_Id_voucher;
    private $_Fecha;
    private $_Hora;
    private $_Numero_operacion;
    private $_Importe_transaccion;
    private $_Cargo_fijo;
    private $_Mora;
    private $_Total_deuda;
    private $_Comision;
    private $_Total_pagar;
    private $_idEmpresa;
    private $_idAgente;
    private $_idTipoTransaccion;
    private $_idCuenta;
    private $_tabla="Voucher";
    private $_bd;
    public function __construct($Id_voucher=null,$Fecha=null,$Hora=null, 
                $Numero_operacion=null, $Importe_transaccion=null, 
                $Cargo_fijo=null,$Mora=null, $Total_deuda=null, $Comision=null, 
                $Total_pagar=null, $idEmpresa=null, $idAgente=null, 
                $idTipoTransaccion=null, $idCuenta=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_Id_voucher = $Id_voucher;
        $this->_Fecha= $Fecha;
        $this->_Hora= $Hora;
        $this->_Numero_operacion= $Numero_operacion;
        $this->_Importe_transaccion = $Importe_transaccion;
        $this->_Cargo_fijo= $Cargo_fijo;
        $this->_Mora= $Mora;
        $this->_Total_deuda= $Total_deuda;
        $this->_Comision= $Comision;
        $this->_Total_pagar= $Total_pagar;
        $this->_idEmpresa = $idEmpresa;
        $this->_idAgente= $idAgente;
        $this->_idTipoTransaccion= $idTipoTransaccion;
        $this->_idCuenta= $idCuenta;
}
public function leer(){
    $sql ="SELECT * FROM ". $this->_tabla .";";
    return $this->_bd->ejecutar($sql);
}
public function leerUno(){
    $sql= "SELECT * FROM ". $this->_tabla
        . " WHERE Id_voucher=".$this->_Id_voucher;
    return $this->_bd->ejecutar($sql); 
}
public function eliminar(){
    $sql= "Delete FROM ". $this->_tabla
    . " WHERE Id_voucher=".$this->_Id_voucher;
    return $this->_bd->ejecutar($sql); 
}
public function editar(){
    $sql ="UPDATE ". $this->_tabla
        . " SET Fecha='".$this->_Fecha."', Hora='".$this->_Hora
        . "', Numero_operacion='".$this->_Numero_operacion 
        . "', Importe_transaccion='".$this->_Importe_transaccion 
        . "', Cargo_fijo='".$this->_Cargo_fijo 
        . "', Mora='".$this->_Mora 
        . "', Total_deuda='".$this->_Total_deuda 
        . "', Comision='".$this->_Comision 
        . "', Total_pagar='".$this->_Total_pagar 
        . "', idEmpresa='".$this->_idEmpresa 
        . "', idAgente='".$this->_idAgente 
        . "', idTipoTransaccion='".$this->_idTipoTransaccion 
        . "', idCuenta='".$this->_idCuenta ."'"
        ." WHERE Id_voucher=".$this->_Id_voucher;
    return $this->_bd->ejecutar($sql);
}
public function nuevo(){
    $sql = "INSERT INTO ". $this->_tabla
        ." (Id_voucher, Fecha, Hora, Numero_operacion, Importe_transaccion, Cargo_fijo, Mora, Total_deuda, Comision, 
        Total_pagar, idEmpresa, idAgente, idTipoTransaccion, idCuenta) VALUES ('".
            $this->_Id_voucher ."','". $this->_Fecha ."','"
            .$this->_Hora ."','".$this->_Numero_operacion ."','"
            .$this->_Importe_transaccion ."','". $this->_Cargo_fijo ."','"
            .$this->_Mora ."','".$this->_Total_deuda ."','"
            .$this->_Comision ."','". $this->_Total_pagar ."','"
            .$this->_idEmpresa ."','".$this->_idAgente ."','"
            .$this->_idTipoTransaccion ."','". $this->_idCuenta ."'"
        .");";
       // var_dump($sql);exit();
    return $this->_bd->ejecutar($sql);
    }
}