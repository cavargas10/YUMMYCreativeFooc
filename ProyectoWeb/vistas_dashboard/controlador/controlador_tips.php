<?php
require_once "../modelo/modelo_tips.php";

class controlador_tips
{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function controlador_tips($host = "", $user = "", $pass = "", $db = "")
	{
		$this->BaseDatos = $db;
		$this->Servidor = $host;
		$this->Usuario = $user;
		$this->Clave = $pass;
	}

	public function CreateTips()
	{
		$user = new modelo_tips();

		if (isset($_POST['titulo_Tips']) && isset($_POST['descripcion_Tips'])) {
			$user->settitulo_Tips($_POST['titulo_Tips']);
			$user->setdescripcion_Tips($_POST['descripcion_Tips']);
			$user->setcontenido_Tips($_POST['contenido_Tips']);

			$image_name = $_FILES['imagen_Tips']['name'];
			$tmp_name = $_FILES['imagen_Tips']['tmp_name'];
			$folder = "../../imagenesTips/" . $image_name;
			move_uploaded_file($tmp_name, $folder);

			$user->setfolder($folder);

			$userResponse = $user->CreateTips();
			if ($userResponse == 1) {
				echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../vistas/contenido_tips.php'</script>";
			} else {
				echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../vistas/agregar_tips.php'</script>";
			}
		}
	}

	public function ListaTips()
	{
		$user = new modelo_tips();
		$userResponse = $user->ListaTips();
	}

	public function ListaTipsPagina($pagina)
	{	
		$offset = 3 * $pagina;	
		$user = new modelo_tips();
		$userResponse = $user->ListaTipspagina($offset);
	}

	public function UpdateTips($idtips)
	{
		$user = new modelo_tips();

		if (isset($_POST['titulo_Tips']) && isset($_POST['descripcion_Tips'])) {
			$user->setidtips($idtips);
			$user->settitulo_Tips($_POST['titulo_Tips']);
			$user->setdescripcion_Tips($_POST['descripcion_Tips']);
			$user->setcontenido_Tips($_POST['contenido_Tips']);

			$image_name = $_FILES['imagen_Tips']['name'];
			$tmp_name = $_FILES['imagen_Tips']['tmp_name'];
			$folder = "../../imagenesTips/" . $image_name;
			move_uploaded_file($tmp_name, $folder);

			$user->setfolder($folder);

			$userResponse = $user->UpdateTips();
			if ($userResponse == 1) {
				echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../vistas/contenido_tips.php'</script>";
			} else {
				echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../vistas/actualizar_tips.php'</script>";
			}
		}
	}
	

	public function DeleteTips($idtips)
	{
		$user = new modelo_tips();
		$user->setidtips($idtips);
		$userResponse = $user->DeleteTips();
		if ($userResponse == 1) // exitoso
		{
			echo '<script>alert("SQL correctos :)...");</script>';
			echo "<script>location.href='../vistas/contenido_tips.php'</script>";
		} else {
			echo '<script>alert("SQL Incorrectos...");</script>';
			echo "<script>location.href='../vistas/contenido_tips.php'</script>";
		}
	}
}
