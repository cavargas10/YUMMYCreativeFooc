<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_receta
{
  private $idReceta;
  private $titulo_Receta;
  private $descripcion_Receta;
  private $idcategoria_Receta;
  private $imagen_Receta;
  private $url_Receta;
  private $tresD_Receta;
  private $infoGeneral_Receta;
  private $energia;
  private $proteina;
  private $fibra;
  private $calcio;
  private $hierro;
  private $carbohidratos;
  private $azucares;
  private $azucarAnadido;
  private $potasio;
  private $sodio;
  private $grasas;
  private $grasasSaturadas;
  private $tiempo_Receta;
  private $ingredientes_Receta;
  private $pasos_Receta;
  private $idporciones_Receta;
  private $iddificultad_Receta;
  private $idazucar;
  private $idsal;
  private $idgrasa;
  private $idgrupoEtario;
  private $folder;

  #region Set y Get
  public function getidReceta(){
    return $this->idReceta; 
  }

  public function setidReceta($idReceta){
    $this->idReceta = $idReceta;
  }
 
  public function settitulo_Receta($titulo_Receta){
    $this->titulo_Receta = $titulo_Receta;
  }

  public function setdescripcion_Receta($descripcion_Receta){
    $this->descripcion_Receta = $descripcion_Receta;
  }

  public function getidcategoria_Receta(){
    return $this->idcategoria_Receta; 
  }

  public function setidcategoria_Receta($idcategoria_Receta){
    $this->idcategoria_Receta = $idcategoria_Receta;
  }

  public function setimagen_Receta($imagen_Receta){
    $this->imagen_Receta = $imagen_Receta;
  }

  public function setfolder($folder){
    $this->folder = $folder;
  }

  public function seturl_Receta($url_Receta){
    $this->url_Receta = $url_Receta;
  }

  public function settresD_Receta($tresD_Receta){
    $this->tresD_Receta = $tresD_Receta;
  }

  public function setinfoGeneral_Receta($infoGeneral_Receta){
    $this->infoGeneral_Receta = $infoGeneral_Receta;
  }
  
  public function setenergia($energia){
    $this->energia = $energia;
  }
  
  public function setproteina($proteina){
    $this->proteina = $proteina;
  }
  
  public function setfibra($fibra){
    $this->fibra = $fibra;
  }

  public function setcalcio($calcio){
    $this->calcio = $calcio;
  }
  
  public function sethierro($hierro){
    $this->hierro = $hierro;
  }
  
  public function setcarbohidratos($carbohidratos){
    $this->carbohidratos = $carbohidratos;
  }
  
  public function setazucares($azucares){
    $this->azucares = $azucares;
  }
  
  public function setazucarAnadido($azucarAnadido){
    $this->azucarAnadido = $azucarAnadido;
  }

  public function setpotasio($potasio){
    $this->potasio = $potasio;
  }

  public function setsodio($sodio){
    $this->sodio = $sodio;
  }

  public function setgrasas($grasas){
    $this->grasas = $grasas;
  }
  
  public function setgrasasSaturadas($grasasSaturadas){
    $this->grasasSaturadas = $grasasSaturadas;
  }
  
  public function settiempo_Receta($tiempo_Receta){
    $this->tiempo_Receta = $tiempo_Receta;
  }

  public function setingredientes_Receta($ingredientes_Receta){
    $this->ingredientes_Receta = $ingredientes_Receta;
  }
  
  public function setpasos_Receta($pasos_Receta){
    $this->pasos_Receta = $pasos_Receta;
  }

  public function getidporciones_Receta(){
    return $this->idporciones_Receta; 
  }

  public function setidporciones_Receta($idporciones_Receta){
    $this->idporciones_Receta = $idporciones_Receta;
  }

  public function getiddificultad_Receta(){
    return $this->iddificultad_Receta; 
  }

  public function setiddificultad_Receta($iddificultad_Receta){
    $this->iddificultad_Receta = $iddificultad_Receta;
  }

  public function getidazucar(){
    return $this->idazucar; 
  }

  public function setidazucar($idazucar){
    $this->idazucar = $idazucar;
  }

  public function getidsal(){
    return $this->idsal; 
  }

  public function setidsal($idsal){
    $this->idsal = $idsal;
  }

  public function getidgrasa(){
    return $this->idgrasa; 
  }

  public function setidgrasa($idgrasa){
    $this->idgrasa = $idgrasa;
  }

  public function getidgrupoEtario(){
    return $this->idgrupoEtario; 
  }

  public function setidgrupoEtario($idgrupoEtario){
    $this->idgrupoEtario = $idgrupoEtario;
  }

  public function ListaReceta() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select idtips 'ID', titulo_Tips 'TITULO', descripcion_Tips 'CONTENIDO', imagen_Tips 'IMAGEN' from tips");
    $resSQL=$miconexion->verconsultacrud();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarReceta($idtips) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from tips where idtips = $idtips");
    $resSQL=$miconexion->consulta_lista();
    //$this->Disconnect();
    return $resSQL;
  }

  public function UpdateReceta() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("update tips set titulo_Tips = '$this->titulo_Tips', descripcion_Tips = '$this->descripcion_Tips', contenido_Tips = '$this->contenido_Tips', imagen_Tips ='$this->folder' where idtips = '$this->idtips'");
    //$this->Disconnect();
    return $resSQL;
  }

  public function CreateReceta() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("insert into nuevareceta values
    ('','$this->titulo_Receta', '$this->descripcion_Receta', '$this->idcategoria_Receta', '$this->folder'
    , '$this->url_Receta', '$this->tresD_Receta', '$this->infoGeneral_Receta', '$this->energia', '$this->proteina'
    , '$this->fibra', '$this->calcio', '$this->hierro', '$this->carbohidratos', '$this->azucares'
    , '$this->azucarAnadido', '$this->potasio', '$this->sodio', '$this->grasas', '$this->grasasSaturadas'
    , '$this->tiempo_Receta', '$this->idporciones_Receta', '$this->iddificultad_Receta', '$this->ingredientes_Receta'
    , '$this->pasos_Receta', '$this->idazucar', '$this->idsal', '$this->idgrasa', '$this->idgrupoEtario')");
    //$this->Disconnect();
    return $resSQL;
  }

  public function DeleteReceta() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("delete from tips where idtips ='$this->idtips'");
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarCategoriaReceta() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from categoria_Receta");
    $resSQL=$miconexion->comboBox();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarPorciones() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from  porciones_Receta");
    $resSQL=$miconexion->comboBox();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarDificultad() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from dificultad_receta");
    $resSQL=$miconexion->comboBox();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarAzucar() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from azucar");
    $resSQL=$miconexion->comboBox();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarSal() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from sal");
    $resSQL=$miconexion->comboBox();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarGrasa() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from grasa");
    $resSQL=$miconexion->comboBox();
    //$this->Disconnect();
    return $resSQL;
  }

  public function EncontrarGrupoEtario() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from grupoetario");
    $resSQL=$miconexion->comboBox();
    //$this->Disconnect();
    return $resSQL;
  }
}
