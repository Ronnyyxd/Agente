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
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new Voucher($id,$tipo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $id = $_GET["id"];

        $tipo = new Voucher($id);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Voucher: ",
           
        );
        
        $this->mostrarVista('Voucher/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new Voucher($id,$tipo); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}