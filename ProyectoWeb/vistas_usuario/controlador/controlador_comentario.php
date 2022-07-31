<?php
require_once "../modelo/modelo_comentario.php";

class controlador_comentario
{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function controlador_comentarios($host = "", $user = "", $pass = "", $db = "")
	{
		$this->BaseDatos = $db;
		$this->Servidor = $host;
		$this->Usuario = $user;
		$this->Clave = $pass;
	}

	public function CreateComentarios($idReceta)
	{
		$user = new modelo_comentario();
        
		if (isset($_POST['rating'])) {
			$user->setrating($_POST['rating']);
			$user->setcomentario($_POST['comentario']);
			$user->setidUsuario($_SESSION['idUsuario']);
            $user->setidReceta($idReceta);

			$userResponse = $user->CreateComentarios($idReceta);
			if ($userResponse == 1) {
				echo '<script>alert("SQL correctos :)...");</script>';
                echo "<script>location.href='../vistas/new_receta_user.php?idReceta=$idReceta'</script>";
			} else {
				echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../vistas/new_receta_user.php?idReceta=$idReceta'</script>";
			}
		}
	}

    public function ListaComentarios($idReceta)
	{
	 	$user = new modelo_comentario();
	 	$userResponse = $user->ListaComentarios($idReceta);
	}

}
