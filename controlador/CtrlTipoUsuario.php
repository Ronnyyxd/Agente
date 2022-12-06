<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'TipoUsuario.php';

require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlTipoUsuario extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new TipoUsuario ();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Tipos de Usuario",
            'contenido'=>Vista::mostrar('TipoUsuario/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $id = $_GET["id"];
        $tipo = new TipoUsuario ($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar Tipo de Usuario : " .  $id,
            'TipoUsuario'=>$miTipo
        );
        
        $this->mostrarVista('TipoUsuario/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idTipoUsuario = $_POST["idTipoUsuario"];
        $tipo =$_POST["tipo"];
        $miTipo = new TipoUsuario ($idTipoUsuario,$tipo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idTipoUsuario = $_GET["id"];
        $TipoUsuario = new TipoUsuario ($idTipoUsuario);
        $TipoUsuario->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Tipo de Usuario: ",
           
        );
        
        $this->mostrarVista('TipoUsuario/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idTipoUsuario = $_POST["idTipoUsuario"];
        $tipo =$_POST["tipo"];
        $miTipo = new TipoUsuario ($idTipoUsuario,$tipo); 
        $miTipo->nuevo();
        $this->index(); // Recargo la Pagina
    }
}