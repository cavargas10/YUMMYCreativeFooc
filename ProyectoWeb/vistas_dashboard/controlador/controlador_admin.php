<?php
require_once "../modelo/modelo_admin.php";

class controlador_admin{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function controlador_admin($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}

	public function UpdateAdmin($idUsuario)
    {
        $user = new modelo_admin();
		
		if (isset($_POST['nombre_Usuario'])&&isset($_POST['apellido_Usuario'])){
			$user->setIdUser($idUsuario);
			$user->setNombre_Usuario($_POST['nombre_Usuario']);
	        $user->setApellido_Usuario($_POST['apellido_Usuario']);
	        $user->setCorreo_Usuario($_POST['correo_Usuario']);
			$user->setClave_Usuario($_POST['clave_Usuario']);
        	$userResponse = $user->UpdateAdmin();
			if ($userResponse == 1)
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../../index.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='perfil_dashboard.php'</script>";
	        }
		}
    }

}
?>