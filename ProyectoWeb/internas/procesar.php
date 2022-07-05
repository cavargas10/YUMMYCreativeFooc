<?php
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$clave=md5($clave_Usuario);

$miconexion = new clase_mysqli;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql="insert into usuarios values ('','$nombre_Usuario','$apellido_Usuario','$correo_Usuario','$clave_Usuario','2')";
$resSql=$miconexion->consulta($sql);
if (!$resSql) {
	echo '<script>alert("SQL Incorrectos...");</script>';
    echo "<script>location.href='../index.php'</script>";
}else{
	echo '<script>alert("SQL correctos :)...");</script>';
    echo "<script>location.href='../index.php'</script>";
}
?>