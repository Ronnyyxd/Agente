<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'Bancos.php';
/*
* Clase CtrlTipoPersona
*/
class CtrlBancos extends Controlador {
    
    public function index(){
        $tipo = new Bancos();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'encabezado'=>"Bancos",
            'Bancos'=>$misTipos
        );
        
        $this->mostrarVista('Bancos/mostrar.php',$datos);
        
    }
    public function editar(){
        $id = $_GET["id"];
        $tipo = new Bancos($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando Bancos: " . $id,
            'Bancos'=>$miTipo[0]
        );
        
        $this->mostrarVista('Bancos/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new Bancos($id,$tipo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $id = $_GET["id"];

        $tipo = new Bancos($id);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Banco: ",
           
        );
        
        $this->mostrarVista('Bancos/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new Bancos($id,$tipo); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}