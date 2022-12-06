<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'Usuario.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';
/*
* Clase CtrlUsuario
*/
class CtrlUsuario extends Controlador {
    
    public function index($msg=null){
        $menu= Libreria::getMenu();
        
        $obj = new Usuario();
        $resultado = $obj->leer();
        $msg = $msg==null?$this->_getMsg():$msg;
        $datos = array(
            'titulo'=>"Usuarios",
            'contenido'=>Vista::mostrar('cliente/mostrar.php',$resultado,true),
            'menu'=>$menu,
            'migas'=>$this->_getMigas(),
            'msg'=>$msg
        );
        
        $this->mostrarVista('template.php',$datos);
    }
    public function validar(){
        if (isset($_POST['usuario']) && isset($_POST['clave'])) {
            $obj = new Usuario();
            $obj->setLogin($_POST['usuario']);
            $obj->setClave($_POST['clave']);
            $datos=$obj->validarUsuario();
            // var_dump($datos);exit();
            if (isset($datos['data']))
                if($datos['data']!=null){
                    $_SESSION['nombre']=$datos['data'][0]['nombre'];
                    $_SESSION['email']=$datos['data'][0]['email'];
                    $_SESSION['id']=$datos['data'][0]['idusuario'];
                    $_SESSION['idperfil']=$datos['data'][0]['idperfil'];
                    // echo $_SESSION['nombre'];
                }
            
        }
        header("Location: ?");
        exit();
    }
    public function cerrarSesion()
    {
        session_destroy();
        header("Location: ?");
        exit();
    }
    public function verSaldo()
    {
        $obj = new Usuario($_SESSION['id']);
        $data= $obj->getSaldo();
        // var_dump($data);exit();

        
        $menu= Libreria::getMenu($_SESSION['idperfil']);
        $migas = array(
            '?'=>'Inicio',
        );
               

        $datos = array(
            'titulo'=>"Saldos",
            'contenido'=>Vista::mostrar('cuentasUsuario/saldo.php',$data,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>array(
                    'titulo'=>'',
                    'cuerpo'=>''
                )
        );
        
        $this->mostrarVista('template.php',$datos);
           
    }
}