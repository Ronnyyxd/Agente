<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'TipoTransaccion.php';
/*
* Clase CtrlcuentasUsuario
*/
class CtrlTipoTransaccion extends Controlador {
    
    public function index(){
        $tipo = new TipoTransaccion();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'encabezado'=>"Tipo de Transaccion",
            'TipoTransaccion'=>$misTipos
        );
        
        $this->mostrarVista('TipoTransaccion/mostrar.php',$datos);
        
    }
    public function editar(){
        $id = $_GET["id"];
        $tipo = new TipoTransaccion($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando Tipos de transaccion: " . $id,
            'TipoTransaccion'=>$miTipo[0]
        );
        
        $this->mostrarVista('TipoTransaccion/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new TipoTransaccion($id,$tipo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $id = $_GET["id"];

        $tipo = new TipoTransaccion($id);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Tipo de transaccion: ",
           
        );
        
        $this->mostrarVista('TipoTransaccion/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new TipoTransaccion($id,$tipo); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}