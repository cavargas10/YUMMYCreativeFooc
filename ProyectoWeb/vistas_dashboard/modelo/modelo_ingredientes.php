<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_ingredientes
{
  private $idingredientes;
  private $nombre_Ingredientes;
 

  #region Set y Get
  public function getidingredientes(){
    return $this->idingredientes; 
  }

  public function setidingredientes($idingredientes){
    $this->idingredientes = $idingredientes;
  }
 
  public function setnombre_Ingredientes($nombre_Ingredientes){
    $this->nombre_Ingredientes = $nombre_Ingredientes;
  }
  
  public function ListaIngrediente() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select idingredientes 'ID', nombre_Ingredientes 'INGREDIENTE' from ingredientes");
    $resSQL=$miconexion->verconsultacrudIngrediente();
    //$this->Disconnect();
    return $resSQL;
  }

  public function ListaIngredientePagina($offset) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select idingredientes 'ID', nombre_Ingredientes 'INGREDIENTE' from ingredientes LIMIT 4 OFFSET $offset");
    $resSQL=$miconexion->verconsultacrudIngrediente();
    //$this->Disconnect();
    return $resSQL;
  }

  public function CreateIngrediente() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("insert into ingredientes values('','$this->nombre_Ingredientes')");
    //$this->Disconnect();
    return $resSQL;
  }

  public function DeleteIngrediente() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("delete from ingredientes where idingredientes ='$this->idingredientes'");
    //$this->Disconnect();
    return $resSQL;
  }

}
