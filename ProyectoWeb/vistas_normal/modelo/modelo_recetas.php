<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class modelo_recetas
{
  private $idReceta;
  private $titulo_Receta;
  private $descripcion_Receta;
  private $categoria_Receta;
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
  private $porciones_Receta;
  private $dificultad_Receta;
  private $azucar;
  private $sal;
  private $grasa;
  private $grupoEtario;
  private $folder;

  #region Set y Get
  public function getidReceta()
  {
    return $this->idReceta;
  }

  public function setidReceta($idReceta)
  {
    $this->idReceta = $idReceta;
  }

  public function getidingredientes()
  {
    return $this->idingredientes;
  }

  public function setidingredientes($idingredientes)
  {
    $this->idingredientes = $idingredientes;
  }
  public function settitulo_Receta($titulo_Receta)
  {
    $this->titulo_Receta = $titulo_Receta;
  }

  public function setdescripcion_Receta($descripcion_Receta)
  {
    $this->descripcion_Receta = $descripcion_Receta;
  }

  public function setcategoria_Receta($categoria_Receta)
  {
    $this->categoria_Receta = $categoria_Receta;
  }

  public function setimagen_Receta($imagen_Receta)
  {
    $this->imagen_Receta = $imagen_Receta;
  }

  public function setfolder($folder)
  {
    $this->folder = $folder;
  }

  public function seturl_Receta($url_Receta)
  {
    $this->url_Receta = $url_Receta;
  }

  public function settresD_Receta($tresD_Receta)
  {
    $this->tresD_Receta = $tresD_Receta;
  }

  public function setinfoGeneral_Receta($infoGeneral_Receta)
  {
    $this->infoGeneral_Receta = $infoGeneral_Receta;
  }

  public function setenergia($energia)
  {
    $this->energia = $energia;
  }

  public function setproteina($proteina)
  {
    $this->proteina = $proteina;
  }

  public function setfibra($fibra)
  {
    $this->fibra = $fibra;
  }

  public function setcalcio($calcio)
  {
    $this->calcio = $calcio;
  }

  public function sethierro($hierro)
  {
    $this->hierro = $hierro;
  }

  public function setcarbohidratos($carbohidratos)
  {
    $this->carbohidratos = $carbohidratos;
  }

  public function setazucares($azucares)
  {
    $this->azucares = $azucares;
  }

  public function setazucarAnadido($azucarAnadido)
  {
    $this->azucarAnadido = $azucarAnadido;
  }

  public function setpotasio($potasio)
  {
    $this->potasio = $potasio;
  }

  public function setsodio($sodio)
  {
    $this->sodio = $sodio;
  }

  public function setgrasas($grasas)
  {
    $this->grasas = $grasas;
  }

  public function setgrasasSaturadas($grasasSaturadas)
  {
    $this->grasasSaturadas = $grasasSaturadas;
  }

  public function settiempo_Receta($tiempo_Receta)
  {
    $this->tiempo_Receta = $tiempo_Receta;
  }

  public function setingredientes_Receta($ingredientes_Receta)
  {
    $this->ingredientes_Receta = $ingredientes_Receta;
  }

  public function setpasos_Receta($pasos_Receta)
  {
    $this->pasos_Receta = $pasos_Receta;
  }

  public function setporciones_Receta($porciones_Receta)
  {
    $this->porciones_Receta = $porciones_Receta;
  }

  public function setdificultad_Receta($dificultad_Receta)
  {
    $this->dificultad_Receta = $dificultad_Receta;
  }

  public function setazucar($azucar)
  {
    $this->azucar = $azucar;
  }

  public function setsal($sal)
  {
    $this->sal = $sal;
  }

  public function setgrasa($grasa)
  {
    $this->grasa = $grasa;
  }

  public function setgrupoEtario($grupoEtario)
  {
    $this->grupoEtario = $grupoEtario;
  }

  public function BuscarReceta($categoria_Receta, $porciones_Receta, $dificultad_Receta, $nombre_Ingredientes)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 
    LEFT JOIN ingredientes on receta.idingredientes = ingredientes.idingredientes

    WHERE receta.categoria_Receta = '$categoria_Receta'
    AND receta.porciones_Receta = '$porciones_Receta' 
    AND receta.dificultad_Receta = '$dificultad_Receta'
    AND ingredientes.idingredientes = '$nombre_Ingredientes'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta2($categoria_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    
    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 

    WHERE receta.categoria_Receta = '$categoria_Receta'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta3($nombre_Ingredientes)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 
    LEFT JOIN ingredientes on receta.idingredientes = ingredientes.idingredientes
    
    WHERE ingredientes.idingredientes = '$nombre_Ingredientes'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta4($dificultad_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta , nota
    
    from receta, ingredientes , comentarios
    WHERE receta.dificultad_Receta = '$dificultad_Receta'
    AND comentarios.idReceta = receta.idReceta 
    group by receta.titulo_Receta";

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 

    WHERE receta.dificultad_Receta = '$dificultad_Receta'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta5($porciones_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta , nota
    
    from receta, ingredientes , comentarios
    WHERE receta.porciones_Receta = '$porciones_Receta' 
    AND comentarios.idReceta = receta.idReceta
    group by receta.titulo_Receta";

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 

    WHERE receta.porciones_Receta = '$porciones_Receta' 

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta6($categoria_Receta, $nombre_Ingredientes)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 
    LEFT JOIN ingredientes on receta.idingredientes = ingredientes.idingredientes

    WHERE receta.categoria_Receta = '$categoria_Receta'
    AND ingredientes.idingredientes = '$nombre_Ingredientes'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta7($categoria_Receta, $dificultad_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 

    WHERE receta.categoria_Receta = '$categoria_Receta'
    AND receta.dificultad_Receta = '$dificultad_Receta'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta8($categoria_Receta, $porciones_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 

    WHERE receta.categoria_Receta = '$categoria_Receta'
    AND receta.porciones_Receta = '$porciones_Receta'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta9($categoria_Receta, $nombre_Ingredientes, $dificultad_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 
    LEFT JOIN ingredientes on receta.idingredientes = ingredientes.idingredientes

    WHERE receta.categoria_Receta = '$categoria_Receta'
    AND receta.dificultad_Receta = '$dificultad_Receta'
    AND ingredientes.idingredientes = '$nombre_Ingredientes'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta10($categoria_Receta, $nombre_Ingredientes, $porciones_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 
    LEFT JOIN ingredientes on receta.idingredientes = ingredientes.idingredientes

    WHERE receta.categoria_Receta = '$categoria_Receta'
    AND receta.porciones_Receta = '$porciones_Receta'
    AND ingredientes.idingredientes = '$nombre_Ingredientes'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta11($nombre_Ingredientes, $dificultad_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 
    LEFT JOIN ingredientes on receta.idingredientes = ingredientes.idingredientes

    WHERE receta.dificultad_Receta = '$dificultad_Receta'
    AND ingredientes.idingredientes = '$nombre_Ingredientes'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta12($nombre_Ingredientes, $porciones_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 
    LEFT JOIN ingredientes on receta.idingredientes = ingredientes.idingredientes

    WHERE receta.porciones_Receta = '$porciones_Receta' 
    AND ingredientes.idingredientes = '$nombre_Ingredientes'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta13($nombre_Ingredientes, $porciones_Receta, $dificultad_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 
    LEFT JOIN ingredientes on receta.idingredientes = ingredientes.idingredientes

    WHERE receta.porciones_Receta = '$porciones_Receta' 
    AND receta.dificultad_Receta = '$dificultad_Receta'
    AND ingredientes.idingredientes = '$nombre_Ingredientes'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    return $resSQL;
  }

  public function BuscarReceta14($porciones_Receta, $dificultad_Receta)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 

    WHERE receta.porciones_Receta = '$porciones_Receta' 
    AND receta.dificultad_Receta = '$dificultad_Receta'

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    //$this->Disconnect();
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
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

  public function ListaReceta()
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("select idReceta 'ID', titulo_Receta 'TITULO', categoria_Receta 'CATEGORIA', grupoEtario 'GRUPO ETARIO' from receta");
    $resSQL = $miconexion->verconsultacrudReceta();
    //$this->Disconnect();
    return $resSQL;
  }

  public function ListaRecetaPagina($offset)
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("select idReceta 'ID',  titulo_Receta 'TITULO', categoria_Receta 'CATEGORIA', grupoEtario 'GRUPO ETARIO' from receta LIMIT 7 OFFSET $offset ");
    $resSQL = $miconexion->verconsultacrudReceta();
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

  public function PresentarRecetas()
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $query = "SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 

    GROUP BY receta.titulo_Receta";
    $resSQL = $miconexion->consulta($query);
    $resSQL = $miconexion->presentarconsultaRecetasIndex();
    //$this->Disconnect();
    return $resSQL;
  }

  public function PresentarTresRecetasVotos2()
  {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("SELECT receta.idReceta, receta.imagen_Receta, receta.categoria_Receta, receta.titulo_Receta, 
    receta.descripcion_Receta, receta.grupoEtario, receta.dificultad_Receta, receta.tiempo_Receta,  
    (if(Sum(comentarios.rating) is NULL,0,Sum(comentarios.rating)) / if(if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)) = 0,1,if(COUNT(comentarios.idcomentarios) = 0,0,COUNT(comentarios.idcomentarios)))) as Suma

    FROM receta LEFT JOIN comentarios ON comentarios.idReceta = receta.idReceta 
    LEFT JOIN ingredientes on receta.idingredientes = ingredientes.idingredientes

    GROUP BY receta.titulo_Receta 
    ORDER BY Suma DESC LIMIT 3");
     
    $resSQL = $miconexion->presentarconsultaTresRecetasIndex2();
    //$this->Disconnect();
    return $resSQL;
  }
}
