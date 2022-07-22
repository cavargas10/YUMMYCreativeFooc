<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_comentario
{

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
                                    WHERE receta.idReceta = $idReceta
                                    AND comentarios.idReceta = receta.idReceta                                 
                                    AND usuarios.idUsuario = comentarios.idUsuario");
     $resSQL=$miconexion->presentarconsultaComentarios();
     //$this->Disconnect();
    return $resSQL;
  }
}
