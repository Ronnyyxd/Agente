<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'Voucher.php';
/*
* Clase CtrlVoucher
*/
class CtrlVoucher extends Controlador {
    
    public function index(){
        $tipo = new Voucher();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'encabezado'=>"Voucher",
            'Voucher'=>$misTipos
        );
        
        $this->mostrarVista('Voucher/mostrar.php',$datos);
        
    }
    public function editar(){
        $id = $_GET["id"];
        $tipo = new Voucher($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar Voucher: " . $id,
            'Voucher'=>$miTipo[0]
        );
        
        $this->mostrarVista('Voucher/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $Voucher = new Voucher(
            $_POST['Id_voucher'], 
            $_POST['Fecha'], 
            $_POST['Hora'], 
            $_POST['Numero_operacion'],
            $_POST['Importe_transaccion'], 
            $_POST['Cargo_fijo'], 
            $_POST['Mora'],
            $_POST['Total_deuda'], 
            $_POST['Comision'], 
            $_POST['Total_pagar'],
            $_POST['idEmpresa'],
            $_POST['idAgente'], 
            $_POST['idTipoTransaccion'], 
            $_POST['idCuenta']
        );
        $Voucher->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $Id_voucher = $_GET["id"];

        $cuentasUsuario = new cuentasUsuario($_REQUEST['id']);
        $cuentasUsuario-> eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Voucher: ",
           
        );
        
        $this->mostrarVista('Voucher/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $Voucher = new Voucher(
            $_POST['Id_voucher'], 
            $_POST['Fecha'], 
            $_POST['Hora'], 
            $_POST['Numero_operacion'],
            $_POST['Importe_transaccion'], 
            $_POST['Cargo_fijo'], 
            $_POST['Mora'],
            $_POST['Total_deuda'], 
            $_POST['Comision'], 
            $_POST['Total_pagar'],
            $_POST['idEmpresa'],
            $_POST['idAgente'], 
            $_POST['idTipoTransaccion'], 
            $_POST['idCuenta']
        );
        $Voucher->nuevo();

        $this->index(); // Recargo la Pagina
    }
}