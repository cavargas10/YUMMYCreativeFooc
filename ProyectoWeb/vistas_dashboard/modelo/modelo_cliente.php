<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_cliente
{
    private $idUsuario;


    #region Set y Get
    public function getidUsuario()
    {
        return $this->idUsuario;
    }

    public function setidUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function ListaCliente()
    {
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $resSQL = $miconexion->consulta("select idUsuario 'ID', nombre_Usuario 'NOMBRE', apellido_Usuario 'APELLIDO',  correo_Usuario 'CORREO' from usuarios where Rol=2 ");
        $resSQL = $miconexion->verconsultacrudCliente();
        //$this->Disconnect();
        return $resSQL;
    }

    public function DeleteCliente()
    {
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $resSQL = $miconexion->consulta("delete from usuarios where idUsuario ='$this->idUsuario'");
        //$this->Disconnect();
        return $resSQL;
    }
}
