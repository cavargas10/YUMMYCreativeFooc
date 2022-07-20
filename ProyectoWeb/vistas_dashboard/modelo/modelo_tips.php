<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_tips
{
  private $idtips;
  private $titulo_Tips;
  private $descripcion_Tips;
  private $imagen_Tips;
  private $folder;

 

  #region Set y Get
  public function getidtips(){
    return $this->idtips; 
  }
 
  public function setidtips($idtips){
    $this->idtips = $idtips;
  }
 
  public function settitulo_Tips($titulo_Tips){
    $this->titulo_Tips = $titulo_Tips;
  }

  public function setdescripcion_Tips($descripcion_Tips){
    $this->descripcion_Tips = $descripcion_Tips;
  }

  public function setcontenido_Tips($contenido_Tips){
    $this->contenido_Tips = $contenido_Tips;
  }

  public function setimagen_Tips($imagen_Tips){
    $this->imagen_Tips = $imagen_Tips;
  }

  public function setfolder($folder){
    $this->folder = $folder;
  }

  
  public function ListaTips() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select idtips 'ID', titulo_Tips 'TITULO', descripcion_Tips 'CONTENIDO', imagen_Tips 'IMAGEN' from tips");
    $resSQL=$miconexion->verconsultacrudTips();
    //$this->Disconnect();
    return $resSQL;
  }
  public function ListaTipsPagina($offset) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select idtips 'ID', titulo_Tips 'TITULO', descripcion_Tips 'CONTENIDO', imagen_Tips 'IMAGEN' from tips LIMIT 5 OFFSET $offset");
    $resSQL=$miconexion->verconsultacrudTips();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarTips($idtips) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from tips where idtips = $idtips");
    $resSQL=$miconexion->consulta_lista();
    //$this->Disconnect();
    return $resSQL;
  }

  public function UpdateTips() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("update tips set titulo_Tips = '$this->titulo_Tips', descripcion_Tips = '$this->descripcion_Tips', contenido_Tips = '$this->contenido_Tips', imagen_Tips ='$this->folder' where idtips = '$this->idtips'");
    //$this->Disconnect();
    return $resSQL;
  }

  public function CreateTips() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("insert into tips values
    ('','$this->titulo_Tips', '$this->descripcion_Tips', '$this->contenido_Tips', '$this->folder')");
    //$this->Disconnect();
    return $resSQL;
  }

  public function DeleteTips() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("delete from tips where idtips ='$this->idtips'");
    //$this->Disconnect();
    return $resSQL;
  }

}
