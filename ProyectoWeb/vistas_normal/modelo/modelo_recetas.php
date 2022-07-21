<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_recetas
{
  private $idReceta;
  private $categoria_Receta;
  private $porciones_Receta;
  private $dificultad_Receta;
  private $idingredientes;
  private $grupoEtario;

  #region Set y Get
  public function getidReceta()
  {
    return $this->idReceta;
  }

  public function setidReceta($idReceta)
  {
    $this->idReceta = $idReceta;
  }

  public function setcategoria_Receta($categoria_Receta)
  {
    $this->categoria_Receta = $categoria_Receta;
  }

  public function setporciones_Receta($porciones_Receta)
  {
    $this->porciones_Receta = $porciones_Receta;
  }

  public function setdificultad_Receta($dificultad_Receta)
  {
    $this->dificultad_Receta = $dificultad_Receta;
  }

  public function setgrupoEtario($grupoEtario)
  {
    $this->grupoEtario = $grupoEtario;
  }

  public function getidingredientes()
  {
    return $this->idReceta;
  }

  public function setidingredientes($idingredientes)
  {
    $this->idingredientes = $idingredientes;
  }

  public function setnombre_Ingredientes($nombre_Ingredientes)
  {
    $this->nombre_Ingredientes = $nombre_Ingredientes;
  }

  public function PresentarRecetas()
  {
    //public function PresentarRecetas(){
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    //$resSQL = $miconexion->consulta("select * from receta order by idReceta DESC ");
    $resSQL = $miconexion->consulta("select * from receta order by idReceta DESC ");
    // if ($_POST['categoria_Receta']  == '' and $_POST['idingredientes'] == '' and $_POST['dificultad_Receta'] == '' and $_POST['porciones_Receta'] == '') {
    //   $resSQL = $miconexion->consulta("select * from receta order by idReceta DESC ");
    // } else {
    //   $resSQL = $miconexion->consulta("select * from receta, ingredientes  
    //                                     where ingredientes.idingredientes = receta.idingredientes
    //                                     And receta.categoria_Receta = $categoria_Receta
    //                                     AND receta.dificultad_Receta = $dificultad_Receta 
    //                                     AND receta.porciones_Receta = $porciones_Receta
    //                                     AND ingredientes.nombre_Ingredientes = 'Agua'
    //                                    order by idReceta DESC ");                                       
    // }
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    //$this->Disconnect();
    return $resSQL;
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

  public function EncontrarIngredienteTAG()
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("select * from ingredientes");
    $resSQL = $miconexion->comboBox();
    //$this->Disconnect();
    return $resSQL;
  }
}
