<?php
session_start();
if (($_POST['correo_Usuario']) && ($_POST['clave_Usuario'])) {
    $correo_Usuario = $_POST['correo_Usuario'];
    $clave_Usuario =  $_POST['clave_Usuario'];

    include("config.php");
    include("class_mysqli.php");
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $miconexion->consulta("select * from usuarios where correo_Usuario='$correo_Usuario' and clave_Usuario='$clave_Usuario'");

    $list = $miconexion->consulta_lista();
    if ($list[0]) {
            $_SESSION['autentificado'] = TRUE;
            $_SESSION['username'] = $list[1] . " " . $list[2];
            $_SESSION['roll'] = $list[5]; 
            if ($list[5]==1){
                //$_SESSION['local_path']=$local_path;
            echo '<script>alert("Acceso Correcto ADMIN");</script>';
            echo "<script>location.href='../vistas_dashboard/agregar_receta.php'</script>";
            }elseif ($list[5]==2){
                //$_SESSION['local_path']=$local_path;
                echo '<script>alert("Acceso Correcto USUARIO");</script>';
                echo "<script>location.href='../vistas_usuario/index_user.php'</script>";
            } 
    } else {
        $miconexion->consulta("select * from usuarios");
        echo '<script>alert("Datos Incorrectos...");</script>';
        echo "<script>location.href='../index.php'</script>";
    }
}
