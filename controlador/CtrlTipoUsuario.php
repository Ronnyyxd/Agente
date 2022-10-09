<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'TipoUsuario.php';
/*
* Clase CtrlcuentasUsuario
*/
class CtrlTipoUsuario extends Controlador {
    
    public function index(){
        $tipo = new TipoUsuario();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'encabezado'=>"Tipo de Usuario",
            'TipoUsuario'=>$misTipos
        );
        
        $this->mostrarVista('TipoUsuario/mostrar.php',$datos);
        
    }
    public function editar(){
        $id = $_GET["id"];
        $tipo = new TipoUsuario($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando Tipo de Usuario: " . $id,
            'TipoUsuario'=>$miTipo[0]
        );
        
        $this->mostrarVista('TipoUsuario/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new TipoUsuario($id,$tipo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $id = $_GET["id"];

        $tipo = new TipoUsuario($id);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Tipo de Usuario: ",
           
        );
        
        $this->mostrarVista('TipoUsuario/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $id = $_POST["idTipoUsuario "];
        $tipo =$_POST["tipo"];
        $miTipo = new TipoUsuario($id,$tipo); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}