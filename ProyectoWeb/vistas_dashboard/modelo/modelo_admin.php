<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_admin 
{
  private $idUsuario;
  private $nombre_Usuario;
  private $apellido_Usuario;
  private $correo_Usuario;
  private $clave_Usuario;
  private $Rol;
 

  #region Set y Get
  public function getIdUser(){
    return $this->idUsuario; 
  }

  public function setIdUser($idUsuario){
    $this->idUsuario = $idUsuario;
  }
 
  public function setNombre_Usuario($nombre_Usuario){
    $this->nombre_Usuario = $nombre_Usuario;
  }
  public function setApellido_Usuario($apellido_Usuario){
    $this->apellido_Usuario = $apellido_Usuario;
  }
  public function setCorreo_Usuario($correo_Usuario){
    $this->correo_Usuario = $correo_Usuario;
  }
  public function setClave_Usuario($clave_Usuario){
    $this->clave_Usuario = $clave_Usuario;
  }
  public function setRol($Rol){
    $this->Rol = $Rol;
  }

  public function EncontrarAdmin($idUsuario) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from usuarios where idUsuario = $idUsuario");
    $resSQL=$miconexion->consulta_lista();
    //$this->Disconnect();
    return $resSQL;
  }

  public function UpdateAdmin() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("update usuarios set nombre_Usuario = '$this->nombre_Usuario', apellido_Usuario = '$this->apellido_Usuario', correo_Usuario ='$this->correo_Usuario', clave_Usuario ='$this->clave_Usuario' where idUsuario = '$this->idUsuario'");
    //$this->Disconnect();
    return $resSQL;
  }

}
