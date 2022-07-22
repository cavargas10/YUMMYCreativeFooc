<?php

class Modelo_grafico
{
    private $conexion;

    function __construct()
    {
        require_once "../../dll/config.php";
        require_once "../../dll/class_mysqli.php";
        $this->conexion = new clase_mysqli;
        $this->conexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    }
    function traerDatos()
    {
        $sql = " call sp_datosBar() ";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)) {
            while ($consulta_VU = mysqli_fetch_array($consulta)) {
                $arreglo[] = $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
}
