<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
# require_once MOD .DIRECTORY_SEPARATOR . 'Carrito.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';
/*
* Clase CtrlPrincipal
*/
class CtrlPrincipal extends Controlador {
    
    public function index(){
        $tipo = isset($_SESSION['idperfil'])?$_SESSION['idperfil']:0;
        $menu= Libreria::getMenu($tipo);
        $migas = array(
            '?'=>'Inicio',
        );
        // cargar iNTERFAZ según tipo de usuario
        switch ($tipo) {
            case 1:
               $principal = 'principalAdmin.php';
                break;
            case 2:
               $principal = 'principalCliente.php';
                break;
            
            default:
                $principal = 'principal.php';
                break;
        }


        $datos = array(
            'titulo'=>"Sistema Bancario ",
            'contenido'=>Vista::mostrar($principal,'',true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>array(
                    'titulo'=>'',
                    'cuerpo'=>''
                )
        );
        
        $this->mostrarVista('template.php',$datos);

    }
    public function error404()
    {
        $datos= array(
            'controlador'=>isset($_GET['ctrl'])?$_GET['ctrl']:'CtrlPrincipal',
            'accion'=>isset($_GET['accion'])?$_GET['accion']:'index'
        );
        $this->mostrarVista('404.php',$datos);
    }
}