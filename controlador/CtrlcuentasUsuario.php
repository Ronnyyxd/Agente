<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'cuentasUsuario.php';
/*
* Clase CtrlcuentasUsuario
*/
class CtrlcuentasUsuario extends Controlador {
    
    public function index(){
        $tipo = new cuentasUsuario();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'encabezado'=>"Cuentas de Usuario",
            'cuentasUsuario'=>$misTipos
        );
        
        $this->mostrarVista('cuentasUsuario/mostrar.php',$datos);
        
    }
    public function editar(){
        $id = $_GET["id"];
        $tipo = new cuentasUsuario($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando Cuentas de Usuario: " . $id,
            'cuentasUsuario'=>$miTipo[0]
        );
        
        $this->mostrarVista('cuentasUsuario/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new cuentasUsuario($id,$tipo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $id = $_GET["id"];

        $tipo = new cuentasUsuario($id);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nueva Cuentas de Usuario: ",
           
        );
        
        $this->mostrarVista('cuentasUsuario/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new cuentasUsuario($id,$tipo); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}