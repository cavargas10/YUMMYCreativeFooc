
<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_principal
{
  private $idReceta;

  #region Set y Get
  public function getidReceta()
  {
    return $this->idReceta;
  }

  public function setidReceta($idReceta)
  {
    $this->idReceta = $idReceta;
  }

  public function PresentarTresRecetas()
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 

    GROUP BY receta.titulo_Receta DESC LIMIT 3");
    $resSQL = $miconexion->presentarconsultaTresRecetasUser();
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

  public function ContarComentariosIndex()
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("select count(idcomentarios) from comentarios");
    $resSQL = $miconexion->presentarContadorComentarios();
    //$this->Disconnect();
    return $resSQL;
  }

  public function ContarRecetaIndex()
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("select count(idReceta) from receta");
    $resSQL = $miconexion->presentarContadorReceta();
    //$this->Disconnect();
    return $resSQL;
  }

  public function ContarUsuariosIndex()
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("select count(idUsuario) from usuarios");
    $resSQL = $miconexion->presentarContadorUsuarios();
    //$this->Disconnect();
    return $resSQL;
  }
}

