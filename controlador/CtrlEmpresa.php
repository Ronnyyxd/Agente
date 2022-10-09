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
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new Empresa($id,$tipo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $id = $_GET["id"];

        $tipo = new Empresa($id);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Empresa: ",
           
        );
        
        $this->mostrarVista('Empresa/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $id = $_POST["idEmpresa"];
        $tipo =$_POST["tipo"];
        $miTipo = new Empresa($id,$tipo); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}