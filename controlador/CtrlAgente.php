<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'Agente.php';
/*
* Clase CtrlTipoPersona
*/
class CtrlAgente extends Controlador {
    
    public function index(){
        $tipo = new Agente();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'encabezado'=>"Listado de Agentes",
            'Agente'=>$misTipos
        );
        
        $this->mostrarVista('Agente/mostrar.php',$datos);
        
    }
    public function editar(){
        $id = $_GET["id"];
        $tipo = new Agente($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando Tipos de Agente: " . $id,
            'Agente'=>$miTipo[0]
        );
        
        $this->mostrarVista('Agente/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $id = $_POST["id"];
        $tipo =$_POST["tipo"];
        $miTipo = new Agente($id,$tipo); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $id = $_GET["id"];

        $tipo = new Agente($id);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Tipos de Agente: ",
           
        );
        
        $this->mostrarVista('Agente/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $id = $_POST["idAgente"];
        $tipo =$_POST["tipo"];
        $miTipo = new Agente($id,$tipo); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}