<?php
require_once "../modelo/modelo_grafico.php";

$mg = new Modelo_grafico();
$consulta = $mg->traerDatos();
echo json_encode($consulta);
