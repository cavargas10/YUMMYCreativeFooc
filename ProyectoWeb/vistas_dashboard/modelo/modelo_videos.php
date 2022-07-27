<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_videos
{
  private $idvideos;
  private $titulo_Video;
  private $descripcion_Video;
  private $url_Video;
 

  #region Set y Get
  public function getidvideos(){
    return $this->idvideos; 
  }
 
  public function setidvideos($idvideos){
    $this->idvideos = $idvideos;
  }
 
  public function settitulo_Video($titulo_Video){
    $this->titulo_Video = $titulo_Video;
  }

  public function setdescripcion_Video($descripcion_Video){
    $this->descripcion_Video = $descripcion_Video;
  }

  public function seturl_Video($url_Video){
    $this->url_Video = $url_Video;
  }
  
  public function ListaVideo() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select idvideos 'ID', titulo_Video 'TITULO', descripcion_Video 'CONTENIDO', url_Video 'VIDEO' from videos");
    $resSQL=$miconexion->verconsultacrudVideos();
    //$this->Disconnect();
    return $resSQL;
  }

  public function ListaVideoPagina($offset) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select idvideos 'ID', titulo_Video 'TITULO', descripcion_Video 'CONTENIDO', url_Video 'VIDEO' from videos LIMIT 2 OFFSET $offset");
    $resSQL=$miconexion->verconsultacrudVideos();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarVideo($idvideos) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from videos where idvideos = $idvideos");
    $resSQL=$miconexion->consulta_lista();
    //$this->Disconnect();
    return $resSQL;
  }

  public function UpdateVideo() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("update videos set titulo_Video = '$this->titulo_Video', descripcion_Video = '$this->descripcion_Video', url_Video ='$this->url_Video' where idvideos = '$this->idvideos'");
    //$this->Disconnect();
    return $resSQL;
  }

  public function CreateVideo() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("insert into videos values('','$this->titulo_Video', '$this->descripcion_Video', '$this->url_Video')");
    //$this->Disconnect();
    return $resSQL;
  }

  public function DeleteVideo() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("delete from videos where idvideos ='$this->idvideos'");
    //$this->Disconnect();
    return $resSQL;
  }

}
