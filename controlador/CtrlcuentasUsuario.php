<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'cuentasUsuario.php';

require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlcuentasUsuario extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new cuentasUsuario ();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Cuentas de Usuario",
            'contenido'=>Vista::mostrar('cuentasUsuario/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $id = $_GET["id"];
        $tipo = new cuentasUsuario ($id);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando Cuentas de Usuario : " .  $id,
            'cuentasUsuario'=>$miTipo
        );
        
        $this->mostrarVista('cuentasUsuario/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idCuenta = $_POST["idCuenta"];
        $numero =$_POST["numero"];
        $saldo =$_POST["saldo"];
        $Id_Usuario =$_POST["Id_Usuario"];
        $idBanco =$_POST["idBanco"];
        $miTipo = new cuentasUsuario ($idCuenta,$numero,$saldo,$Id_Usuario,$idBanco); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idCuenta = $_GET["id"];
        $cuentasUsuario = new cuentasUsuario ($idCuenta);
        $cuentasUsuario->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nueva Cuenta de Usuario: ",
           
        );
        
        $this->mostrarVista('cuentasUsuario/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idCuenta = $_POST["idCuenta"];
        $numero =$_POST["numero"];
        $saldo =$_POST["saldo"];
        $Id_Usuario =$_POST["Id_Usuario"];
        $idBanco =$_POST["idBanco"];
        $miTipo = new cuentasUsuario ($idCuenta,$numero,$saldo,$Id_Usuario,$idBanco);
        $miTipo->nuevo();
        $this->index(); // Recargo la Pagina
    }
}