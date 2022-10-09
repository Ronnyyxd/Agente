<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'Agente.php';
/*
* Clase CtrlTipoPersona
*/
class CtrlAgente extends Controlador {
    
    public function index(){
        $Agente = new Agente();
        $misTipos = $Agente->leer();
        
        $datos = array(
            'encabezado'=>"Listado de Agentes",
            'Agente'=>$misTipos
        );
        
        $this->mostrarVista('Agente/mostrar.php',$datos);
        
    }
    public function editar(){
        $idAgente = $_GET["id"];
        $Agente = new Agente($idAgente);
        $miTipo = $Agente->leerUno();
        $datos = array(
            'titulo'=>"Editando Tipos de Agente: " . $idAgente,
            'Agente'=>$miTipo[0]
        );
        
        $this->mostrarVista('Agente/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $Agente = new Agente(
            $_POST['idAgente'], 
            $_POST['NombreAgente'], 
            $_POST['direccion'], 
            $_POST['codigoEquipo']
        );
        $Agente->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idAgente = $_GET["id"];

        $Agente = new Agente($idAgente);
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
        $Agente = new Agente(
            $_POST['idAgente'], 
            $_POST['NombreAgente'], 
            $_POST['direccion'], 
            $_POST['codigoEquipo']
        );
        $Agente->nuevo();
        

        $this->index(); // Recargo la Pagina
    }
}