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
        $Bancos = new Bancos(
            $_POST['idBanco'], 
            $_POST['nombre'],
        );

        $Bancos->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idBanco = $_GET["id"];

        $Bancos = new Bancos($_REQUEST['id']);
        $Bancos-> eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Banco: ",
           
        );
        
        $this->mostrarVista('Bancos/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $Bancos = new Bancos(
            $_POST['idBanco'], 
            $_POST['nombre'],
        );
        $Bancos->nuevo();

        $this->index(); // Recargo la Pagina
    }
}