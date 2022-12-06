<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Voucher.php';

require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlVoucher extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new Voucher ();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Voucher",
            'contenido'=>Vista::mostrar('Voucher/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $id = $_GET["id"];
        $tipo = new Voucher ($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar Voucher : " .  $id,
            'Voucher'=>$miTipo
        );
        
        $this->mostrarVista('Voucher/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $Id_voucher = $_POST["Id_voucher"];
        $Fecha =$_POST["Fecha"];
        $Hora = $_POST["Hora"];
        $Numero_operacion =$_POST["Numero_operacion"];
        $Importe_transaccion = $_POST["Importe_transaccion"];
        $Cargo_fijo =$_POST["Cargo_fijo"];
        $Mora = $_POST["Mora"];
        $Total_deuda =$_POST["Total_deuda"];
        $Comision = $_POST["Comision"];
        $Total_pagar =$_POST["Total_pagar"];
        $idEmpresa = $_POST["idEmpresa"];
        $idAgente =$_POST["idAgente"];
        $idTipoTransaccion =$_POST["idTipoTransaccion"];
        $idCuenta = $_POST["idCuenta"];
        
        $miTipo = new Voucher ($Id_voucher,$Fecha,$Hora,$Numero_operacion,$Importe_transaccion,$Cargo_fijo,$Mora,$Total_deuda,$Comision,$Total_pagar,$idEmpresa,$idAgente,$idTipoTransaccion,$idCuenta); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $Id_voucher = $_GET["id"];
        $Voucher = new Voucher ($Id_voucher);
        $Voucher->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Voucher: ",
           
        );
        
        $this->mostrarVista('Voucher/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $Id_voucher = $_POST["Id_voucher"];
        $Fecha =$_POST["Fecha"];
        $Hora = $_POST["Hora"];
        $Numero_operacion =$_POST["Numero_operacion"];
        $Importe_transaccion = $_POST["Importe_transaccion"];
        $Cargo_fijo =$_POST["Cargo_fijo"];
        $Mora = $_POST["Mora"];
        $Total_deuda =$_POST["Total_deuda"];
        $Comision = $_POST["Comision"];
        $Total_pagar =$_POST["Total_pagar"];
        $idEmpresa = $_POST["idEmpresa"];
        $idAgente =$_POST["idAgente"];
        $idTipoTransaccion =$_POST["idTipoTransaccion"];
        $idCuenta = $_POST["idCuenta"];
        
        $miTipo = new Voucher ($Id_voucher,$Fecha,$Hora,$Numero_operacion,$Importe_transaccion,$Cargo_fijo,$Mora,$Total_deuda,$Comision,$Total_pagar,$idEmpresa,$idAgente,$idTipoTransaccion,$idCuenta); 
        $miTipo->nuevo();
        $this->index(); // Recargo la Pagina
    }
}