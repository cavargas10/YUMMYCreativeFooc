<?php
require_once "../modelo/usuario_modelo.php";

class usuario_controlador{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function usuario_controlador($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}

	public function UpdateUser($idUsuario)
    {
        $user = new usuario_modelo();
		
		if (isset($_POST['nombre_Usuario'])&&isset($_POST['apellido_Usuario'])){
			$user->setIdUser($idUsuario);
			$user->setNombre_Usuario($_POST['nombre_Usuario']);
	        $user->setApellido_Usuario($_POST['apellido_Usuario']);
	        $user->setCorreo_Usuario($_POST['correo_Usuario']);
			$user->setClave_Usuario($_POST['clave_Usuario']);
        	$userResponse = $user->UpdateUser();
			if ($userResponse == 1)
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='index_user.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='perfil_user.php'</script>";
	        }
		}
    }

}
?>