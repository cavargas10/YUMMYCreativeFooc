<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

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
  
  public function PresentarTips() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from tips");
    $resSQL=$miconexion->presentarconsultaTipsIndex();
    //$this->Disconnect();
    return $resSQL;
  }
}
