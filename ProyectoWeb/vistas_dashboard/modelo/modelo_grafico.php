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
}
