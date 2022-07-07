<?php
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$clave=md5($clave_Usuario);

$miconexion = new clase_mysqli;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql="update usuarios set nombre_Usuario = '$this->nombre_Usuario', apellido_Usuario = '$this->apellido_Usuario', correo_Usuario ='$this->correo_Usuario', clave_Usuario ='$this->clave_Usuario', Rol = '2' where idUsuario = '$this->idUsuario'";
$resSql=$miconexion->consulta($sql);
if (!$resSql) {
	echo '<script>alert("SQL Incorrectos...");</script>';
    //echo "<script>location.href='../vistas_usuario/vistas/index_user.php'</script>";
    echo "MAL";
}else{
	echo '<script>alert("SQL correctos :)...");</script>';
    echo "<script>location.href='../vistas_usuario/vistas/index_user.php'</script>";
}
?>