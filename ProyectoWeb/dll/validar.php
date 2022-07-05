<?php
    session_start();
   if(($_POST['correo_Usuario']) && ($_POST['clave_Usuario']))
   {
      $correo_Usuario = $_POST['correo_Usuario'];
      $clave_Usuario = md5 ($_POST['clave_Usuario']); 

      include ("config.php");
		include ("class_mysqli.php");
		$miconexion = new clase_mysqli;
		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
		$miconexion->consulta("select * from usuarios where correo_Usuario='$correo_Usuario' and clave_Usuario='$clave_Usuario'");

		$list=$miconexion->consulta_lista();
		if ($list[0]) {
            $_SESSION['autentificado'] = TRUE;
            $_SESSION['username'] = $list[1]." ".$list[2];
            $_SESSION['roll'] = $list[5]; 
            //$_SESSION['local_path']=$local_path;
            echo '<script>alert("Acceso Correcto");</script>';
            echo "<script>location.href='../vistas_usuario/index_user.php'</script>";
		}else{
			echo '<script>alert("Datos Incorrectos...");</script>';
            echo "QUE PASOOOOOOOO";
	        // echo "<script>location.href='../index.php'</script>";
		}
   }
