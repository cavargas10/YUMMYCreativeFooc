<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_grupoEta_info
{
  private $idReceta;
  private $categoria_Receta;

  #region Set y Get
  public function getidReceta()
  {
    return $this->idReceta;
  }

  public function setidReceta($idReceta)
  {
    $this->idReceta = $idReceta;
  }

  public function getcategoria_Receta()
  {
    return $this->categoria_Receta;
  }

  public function setcategoria_Receta($categoria_Receta)
  {
    $this->categoria_Receta = $categoria_Receta;
  }

  public function EncontrarRecetas($idReceta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("select * from receta where idReceta = $idReceta");
    $resSQL = $miconexion->consulta_lista();
    //$this->Disconnect();
    return $resSQL;
  }

  public function PresentarRecetasGE()
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("select * from receta order by idReceta DESC ");
    $resSQL = $miconexion->presentarconsultaRecetasGE();
    //$this->Disconnect();
    return $resSQL;
  }
}
