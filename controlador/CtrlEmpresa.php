<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Empresa.php';

require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlEmpresa extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new Empresa ();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Listado de Empresas",
            'contenido'=>Vista::mostrar('Empresa/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $id = $_GET["id"];
        $tipo = new Empresa ($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar Empresa : " .  $id,
            'Empresa'=>$miTipo
        );
        
        $this->mostrarVista('Empresa/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idEmpresa = $_POST["idEmpresa"];
        $Giro_rubro =$_POST["Giro_rubro"];
        $nroCuenta =$_POST["nroCuenta"];
        $Nombre =$_POST["Nombre"];
        $codigo =$_POST["codigo"];
        $miTipo = new Empresa ($idEmpresa,$Giro_rubro,$nroCuenta,$Nombre,$codigo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idEmpresa = $_GET["id"];
        $Empresa = new Empresa ($idEmpresa);
        $Empresa->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Empresa: ",
           
        );
        
        $this->mostrarVista('Empresa/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idEmpresa = $_POST["idEmpresa"];
        $Giro_rubro =$_POST["Giro_rubro"];
        $nroCuenta =$_POST["nroCuenta"];
        $Nombre =$_POST["Nombre"];
        $codigo =$_POST["codigo"];
        $miTipo = new Empresa ($idEmpresa,$Giro_rubro,$nroCuenta,$Nombre,$codigo); 
        $miTipo->nuevo();
        $this->index(); // Recargo la Pagina
    }
}