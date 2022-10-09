<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'Usuario.php';
/*
* Clase CtrlcuentasUsuario
*/
class CtrlUsuario extends Controlador {
    
    public function index(){
        $tipo = new Usuario();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'encabezado'=>"Usuario",
            'Usuario'=>$misTipos
        );
        
        $this->mostrarVista('Usuario/mostrar.php',$datos);
        
    }
    public function editar(){
        $id = $_GET["id"];
        $tipo = new Usuario($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar Usuario: " . $id,
            'Usuario'=>$miTipo[0]
        );
        
        $this->mostrarVista('Usuario/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new Usuario($id,$tipo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $id = $_GET["id"];

        $tipo = new Usuario($id);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Usuario: ",
           
        );
        
        $this->mostrarVista('TipoUsuario/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new Usuario($id,$tipo); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}