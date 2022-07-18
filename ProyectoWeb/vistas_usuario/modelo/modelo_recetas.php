<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_recetas
{
  private $idReceta; 

  #region Set y Get
  public function getidReceta(){
    return $this->idReceta; 
  }

  public function setidReceta($idReceta){
    $this->idReceta = $idReceta;
  }
  
  public function PresentarRecetas() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from receta order by idReceta DESC ");
    $resSQL=$miconexion->presentarconsultaRecetas();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarRecetas($idReceta) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from receta where idReceta = $idReceta");
    $resSQL=$miconexion->consulta_lista();
    //$this->Disconnect();
    return $resSQL;
  }
}
