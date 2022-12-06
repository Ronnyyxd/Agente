<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Usuario1.php';

require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlUsuario1 extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $Agente = new Usuario1 ();
        $misTipos = $Agente->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Usuarios",
            'contenido'=>Vista::mostrar('Usuario1/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $id = $_GET["id"];
        $tipo = new Usuario1 ($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar Usuarios : " .  $id,
            'Usuario'=>$miTipo
        );
        
        $this->mostrarVista('Usuario1/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $Id_Usuario = $_POST["Id_Usuario"];
        $DNI =$_POST["DNI"];
        $nombre =$_POST["nombre"];
        $idTipoUsuario =$_POST["idTipoUsuario"];
        $miTipo = new Usuario1 ($Id_Usuario,$DNI,$nombre,$idTipoUsuario); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $Id_Usuario = $_GET["id"];
        $Usuario = new Usuario1 ($Id_Usuario);
        $Usuario->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Usuario: ",
           
        );
        
        $this->mostrarVista('Usuario1/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $Id_Usuario = $_POST["Id_Usuario"];
        $DNI =$_POST["DNI"];
        $nombre =$_POST["nombre"];
        $idTipoUsuario =$_POST["idTipoUsuario"];
        $miTipo = new Usuario1 ($Id_Usuario,$DNI,$nombre,$idTipoUsuario); 
        $miTipo->nuevo();
        $this->index(); // Recargo la Pagina
    }
}