<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'TipoTransaccion.php';

require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlTipoTransaccion extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new TipoTransaccion ();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Tipo de Transacción",
            'contenido'=>Vista::mostrar('TipoTransaccion/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $id = $_GET["id"];
        $tipo = new TipoTransaccion ($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $id,
            'TipoTransaccion'=>$miTipo
        );
        
        $this->mostrarVista('TipoTransaccion/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idTipoTransaccion = $_POST["idTipoTransaccion"];
        $Transaccion =$_POST["Transaccion"];
        $miTipo = new TipoTransaccion ($idTipoTransaccion,$Transaccion); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idTipoTransaccion = $_GET["id"];
        $TipoTransaccion = new TipoTransaccion ($idTipoTransaccion);
        $TipoTransaccion->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Transaccion: ",
           
        );
        
        $this->mostrarVista('TipoTransaccion/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idTipoTransaccion = $_POST["idTipoTransaccion"];
        $Transaccion =$_POST["Transaccion"];
        $miTipo = new TipoTransaccion ($idTipoTransaccion,$Transaccion);
        $miTipo->nuevo();
        $this->index(); // Recargo la Pagina
    }
}