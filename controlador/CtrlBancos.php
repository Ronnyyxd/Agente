<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Bancos.php';

require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlBancos extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new Bancos ();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Listado de Bancos",
            'contenido'=>Vista::mostrar('Bancos/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $id = $_GET["id"];
        $tipo = new Bancos ($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $id,
            'Bancos'=>$miTipo
        );
        
        $this->mostrarVista('Bancos/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idBanco = $_POST["idBanco"];
        $nombre =$_POST["nombre"];
        $miTipo = new Bancos ($idBanco,$nombre); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idBanco = $_GET["id"];
        $Bancos = new Bancos ($idBanco);
        $Bancos->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Banco: ",
           
        );
        
        $this->mostrarVista('Bancos/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idBanco  = $_POST["idBanco"];
        $nombre =$_POST["nombre"];
        $miTipo = new Bancos ($idBanco,$nombre); 
        $miTipo->nuevo();
        $this->index(); // Recargo la Pagina
    }
}