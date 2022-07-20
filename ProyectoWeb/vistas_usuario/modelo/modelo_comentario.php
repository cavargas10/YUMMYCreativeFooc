<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_comentario
{
  private $idcomentarios;
  private $rating;
  private $comentario;
  private $idUsuario;
  private $idReceta;

 

  #region Set y Get
  public function getidcomentarios(){
    return $this->idcomentarios; 
  }
 
  public function setidcomentarios($idcomentarios){
    $this->idcomentarios = $idcomentarios;
  }
 
  public function setrating($rating){
    $this->rating = $rating;
  }

  public function setcomentario($comentario){
    $this->comentario = $comentario;
  }

  public function getidUsuario(){
    return $this->idUsuario; 
  }
 
  public function setidUsuario($idUsuario){
    $this->idUsuario = $idUsuario;
  }

  public function getidReceta(){
    return $this->ididReceta; 
  }
 
  public function setidReceta($idReceta){
    $this->idReceta = $idReceta;
  }

  
   public function ListaComentarios($idReceta) {
     $miconexion = new clase_mysqli;
     $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
     $resSQL=$miconexion->consulta("SELECT usuarios.nombre_Usuario, usuarios.apellido_Usuario, comentarios.rating, comentarios.comentario
                                    FROM comentarios, receta, usuarios 
                                    WHERE comentarios.idReceta = $idReceta
                                    AND usuarios.idUsuario = comentarios.idUsuario");
     $resSQL=$miconexion->presentarconsultaComentarios();
     //$this->Disconnect();
    return $resSQL;
  }

//   public function EncontrarComentarios($idcomentarios) {
//     $miconexion = new clase_mysqli;
//     $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
//     $resSQL=$miconexion->consulta("select * from comentarios where idcomentarios = $idcomentarios");
//     $resSQL=$miconexion->consulta_lista();
//     //$this->Disconnect();
//     return $resSQL;
//   }

  public function CreateComentarios($idReceta) {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("insert into comentarios values
    ('','$this->rating', '$this->comentario', '$_SESSION[idUsuario]', '$idReceta')");
    //$this->Disconnect();
    return $resSQL;
  }
}
