<?php
require_once PER . DIRECTORY_SEPARATOR . 'ManejadorBaseDeDatosInterface.php';
class MySQL implements ManejadorBaseDeDatosInterface {
    private $_usuario= "root";
    private $_clave="";
    private $_base="proyecto";    #Aqui el nombre su "Base de Datos"
    private $_servidor = "localhost";
    private $_conexion;
    # Metodos de la Interface
    public function conectar(){
        $this->_conexion = mysqli_connect (
            $this->_servidor,
            $this->_usuario,
            $this->_clave,
            $this->_base );
        $this->_conexion->set_charset("utf8"); #Para las tildes y caracteres especiales
    }
    public function desconectar(){
        mysqli_close($this->_conexion);
    }
    public function traerDatos($sql){
        $retorno = null; $msg=null;
        $msg= explode(" ", $sql);
        $msg= strtoupper($msg[0]);
        // var_dump($msg);exit();
        if (!($resultado = $this->_conexion->query($sql)))
            $retorno = 'Error!! En la Sentencia SQL: '.$sql;
        else
            if (is_object($resultado)){ #Si devuelve un SELECT
                while ($row = mysqli_fetch_assoc($resultado)) 
                    $retorno[] = $row;
            } else # En caso de otra operación (INSERT/UPDATE/DELETE)
                switch ($msg) {
                    case 'INSERT':
                        $retorno='Registro INSERTADO correctamente';
                        break;
                    case 'UPDATE':
                        $retorno='Registro ACTUALIZADO correctamente';
                        break;
                    case 'DELETE':
                        $retorno='Registro ELIMINADO correctamente';
                        break;
                    default:
                        $retorno='';
                        break;
                }
        return $retorno;
    }
}