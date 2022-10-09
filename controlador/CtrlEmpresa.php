<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'Empresa.php';
/*
* Clase CtrlcuentasUsuario
*/
class CtrlEmpresa extends Controlador {
    
    public function index(){
        $tipo = new Empresa();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'encabezado'=>"Empresa",
            'Empresa'=>$misTipos
        );
        
        $this->mostrarVista('Empresa/mostrar.php',$datos);
        
    }
    public function editar(){
        $id = $_GET["id"];
        $tipo = new Empresa($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar Empresa: " . $id,
            'Empresa'=>$miTipo[0]
        );
        
        $this->mostrarVista('Empresa/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $Empresa = new Empresa(
            $_POST['idEmpresa'], 
            $_POST['Giro_rubro'], 
            $_POST['nroCuenta'], 
            $_POST['Nombre'],
            $_POST['codigo'],
        );
        $Empresa->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idEmpresa = $_GET["id"];

        $Empresa = new Empresa($_REQUEST['id']);
        $Empresa-> eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Empresa: ",
           
        );
        
        $this->mostrarVista('Empresa/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $Empresa = new Empresa(
            $_POST['idEmpresa'], 
            $_POST['Giro_rubro'], 
            $_POST['nroCuenta'], 
            $_POST['Nombre'],
            $_POST['codigo'],
        ); 
        $Empresa->nuevo();

        $this->index(); // Recargo la Pagina
    }
}