<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_video
{
  private $idvideos; 

  #region Set y Get
  public function getidvideos(){
    return $this->idvideos; 
  }

  public function setidvideos($idvideos){
    $this->idvideos = $idvideos;
  }
  
  public function PresentarVideos() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from videos");
    $resSQL=$miconexion->presentarconsultaVideo();
    //$this->Disconnect();
    return $resSQL;
  }
}
