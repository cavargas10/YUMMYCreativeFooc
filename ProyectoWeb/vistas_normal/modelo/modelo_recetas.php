<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_recetas
{
  private $idtips; 

  #region Set y Get
  public function getidReceta(){
    return $this->idtips; 
  }

  public function setidReceta($idReceta){
    $this->idReceta = $idReceta;
  }
  
  public function PresentarRecetas() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from receta");
    $resSQL=$miconexion->presentarconsultaRecetasIndex();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarTips($idReceta) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from receta where idReceta = $idReceta");
    $resSQL=$miconexion->consulta_lista();
    //$this->Disconnect();
    return $resSQL;
  }
}
