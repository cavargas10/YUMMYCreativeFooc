<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";
class modelo_grafico
{
    private $conexion;

    function ObtenerGrafico()
    {

        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        //$resSQL = $miconexion->consulta("SELECT * from ingredientes");
        $resSQL = $miconexion->consulta("SELECT grupoEtario, COUNT(idReceta) FROM receta GROUP BY grupoEtario ");
        $resSQL = $miconexion->traerGrafico();
        // echo $resSQL;
        //$this->Disconnect();
        return $resSQL;
    }

    function ObtenerGraficodos()
    {
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $resSQL = $miconexion->consulta("SELECT categoria_Receta,COUNT(comentarios.comentario) FROM receta JOIN comentarios on comentarios.idReceta=receta.idReceta GROUP BY categoria_Receta;");
        $resSQL = $miconexion->traerGraficodos();

        return $resSQL;
    }

    function ObtenerGraficoVideos()
    {
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $resSQL = $miconexion->consulta("SELECT idvideos,COUNT(videos.titulo_Video) from videos;");
        $resSQL = $miconexion->traerGraficoVideos();

        return $resSQL;
    }

    function obtenerGraficoTips()
    {
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $resSQL = $miconexion->consulta("SELECT idtips,COUNT(tips.titulo_Tips) from tips");
        $resSQL = $miconexion->traerGraficoTips();

        return $resSQL;
    }
}
