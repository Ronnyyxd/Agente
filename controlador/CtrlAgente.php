<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Agente.php';

require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlAgente extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $Agente = new Agente ();
        $misTipos = $Agente->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Listado de Agentes",
            'contenido'=>Vista::mostrar('Agente/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $idAgente = $_GET["idAgente"];
        $Agente = new Agente ($idAgente);
        $miTipo = $Agente->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idAgente,
            'Agente'=>$miTipo
        );
        
        $this->mostrarVista('Agente/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idAgente = $_POST["idAgente"];
        $NombreAgente =$_POST["NombreAgente"];
        $direccion =$_POST["direccion"];
        $codigoEquipo =$_POST["codigoEquipo"];
        $miTipo = new Agente ($idAgente,$NombreAgente,$direccion,$codigoEquipo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idAgente = $_GET["id"];
        $Agente = new Agente ($idAgente);
        $Agente->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Tipos de Agente: ",
           
        );
        
        $this->mostrarVista('Agente/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idAgente  = $_POST["idAgente"];
        $NombreAgente =$_POST["NombreAgente"];
        $direccion =$_POST["direccion"];
        $codigoEquipo =$_POST["codigoEquipo"];
        $miTipo = new Agente ($idAgente,$NombreAgente,$direccion,$codigoEquipo); 
        $miTipo->nuevo();
        $this->index(); // Recargo la Pagina
    }
}