<?php
require_once "../dll/config.php";
require_once "../dll/class_mysqli.php";

class modelo_tips
{
  private $idtips; 

  #region Set y Get
  public function getidtips(){
    return $this->idtips; 
  }

  public function setidvideos($idtips){
    $this->idtips = $idtips;
  }
  
  public function EncontrarTips() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from tips");
    $resSQL=$miconexion->consulta_lista();
    //$this->Disconnect();
    return $resSQL;
  }
}
