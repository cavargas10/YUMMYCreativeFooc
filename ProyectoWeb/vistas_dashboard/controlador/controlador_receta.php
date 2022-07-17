<?php
require_once "../modelo/modelo_receta.php";

class controlador_receta
{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function controlador_receta($host = "", $user = "", $pass = "", $db = "")
	{
		$this->BaseDatos = $db;
		$this->Servidor = $host;
		$this->Usuario = $user;
		$this->Clave = $pass;
	}

	public function CreateReceta()
	{
		$user = new modelo_receta();

		if (isset($_POST['titulo_Receta'])) {
			$user->settitulo_Receta($_POST['titulo_Receta']);
			$user->setdescripcion_Receta($_POST['descripcion_Receta']);
			$user->setcategoria_Receta($_POST['categoria_Receta']);
			
            $image_name = $_FILES['imagen_Receta']['name'];
			$tmp_name = $_FILES['imagen_Receta']['tmp_name'];
			$folder = "../../imagenesReceta/" . $image_name;
			move_uploaded_file($tmp_name, $folder);
			$user->setfolder($folder);

			$urlVideo = $_POST['url_Receta'];
			$convertirURL = str_replace("watch?v=","embed/",$urlVideo);
			$user->seturl_Receta($convertirURL);

			//https://sketchfab.com/3d-models/scan-of-chinese-food-rice-food-photogrammetry-9f56ae63c5f2483a99d6ecd2acbc2453
			//https://sketchfab.com/                                                        9f56ae63c5f2483a99d6ecd2acbc2453/embed

            $urlVideo2 = $_POST['tresD_Receta'];
            $convertirURL2 = str_replace("watch?v=","embed/",$urlVideo2);
			$user->settresD_Receta($convertirURL2);

            $user->setenergia($_POST['energia']);
			$_POST['infoGeneral_Receta'] = $_POST['energia'] * 4.1868;

			$user->setinfoGeneral_Receta($_POST['infoGeneral_Receta']);
            $user->setproteina($_POST['proteina']);
            $user->setfibra($_POST['fibra']);
            $user->setcalcio($_POST['calcio']);
            $user->sethierro($_POST['hierro']);
            $user->setcarbohidratos($_POST['carbohidratos']);
            $user->setazucares($_POST['azucares']);
            $user->setazucarAnadido($_POST['azucarAnadido']);
            $user->setpotasio($_POST['potasio']);
            $user->setsodio($_POST['sodio']);
            $user->setgrasas($_POST['grasas']);
            $user->setgrasasSaturadas($_POST['grasasSaturadas']);
            $user->settiempo_Receta($_POST['tiempo_Receta']);

            $user->setporciones_Receta($_POST['porciones_Receta']);
            $user->setdificultad_Receta($_POST['dificultad_Receta']);
            $user->setingredientes_Receta($_POST['ingredientes_Receta']);
			$user->setpasos_Receta($_POST['pasos_Receta']);
            $user->setazucar($_POST['azucar']);
            $user->setsal($_POST['sal']);
            $user->setgrasa($_POST['grasa']);
            $user->setgrupoEtario($_POST['grupoEtario']);

			$user->setidingredientes($_POST['idingredientes']);

			$userResponse = $user->CreateReceta();
			if ($userResponse == 1) {
				echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../vistas/contenido_receta.php'</script>";
			} else {
				echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../vistas/agregar_receta.php'</script>";
			}
		}
	}

	// public function ListaTips()
	// {
	// 	$user = new modelo_tips();
	// 	$userResponse = $user->ListaTips();
	// }

	// public function UpdateTips($idtips)
	// {
	// 	$user = new modelo_tips();

	// 	if (isset($_POST['titulo_Tips']) && isset($_POST['descripcion_Tips'])) {
	// 		$user->setidtips($idtips);
	// 		$user->settitulo_Tips($_POST['titulo_Tips']);
	// 		$user->setdescripcion_Tips($_POST['descripcion_Tips']);
	// 		$user->setcontenido_Tips($_POST['contenido_Tips']);

	// 		$image_name = $_FILES['imagen_Tips']['name'];
	// 		$tmp_name = $_FILES['imagen_Tips']['tmp_name'];
	// 		$folder = "../../imagenesTips/" . $image_name;
	// 		move_uploaded_file($tmp_name, $folder);

	// 		$user->setfolder($folder);

	// 		$userResponse = $user->UpdateTips();
	// 		if ($userResponse == 1) {
	// 			echo '<script>alert("SQL correctos :)...");</script>';
	// 			echo "<script>location.href='../vistas/contenido_tips.php'</script>";
	// 		} else {
	// 			echo '<script>alert("SQL Incorrectos...");</script>';
	// 			echo "<script>location.href='../vistas/actualizar_tips.php'</script>";
	// 		}
	// 	}
	// }

	// public function DeleteTips($idtips)
	// {
	// 	$user = new modelo_tips();
	// 	$user->setidtips($idtips);
	// 	$userResponse = $user->DeleteTips();
	// 	if ($userResponse == 1) // exitoso
	// 	{
	// 		echo '<script>alert("SQL correctos :)...");</script>';
	// 		echo "<script>location.href='../vistas/contenido_tips.php'</script>";
	// 	} else {
	// 		echo '<script>alert("SQL Incorrectos...");</script>';
	// 		echo "<script>location.href='../vistas/contenido_tips.php'</script>";
	// 	}
	// }
}