<?php
require_once "../modelo/modelo_videos.php";

class controlador_videos{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function controlador_videos($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	
    public function CreateVideo()
    {
        $user = new modelo_videos();

		if (isset($_POST['titulo_Video'])&&isset($_POST['descripcion_Video'])){
	        $urlVideo = $_POST['url_Video'];
			$user->settitulo_Video($_POST['titulo_Video']);
	        $user->setdescripcion_Video($_POST['descripcion_Video']);
			$convertirURL = str_replace("watch?v=","embed/",$urlVideo);
			$user->seturl_Video($convertirURL);
        	$userResponse = $user->CreateVideo();
			if ($userResponse == 1)
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../vistas/contenido_videos.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
                echo 'MAL';
				echo "<script>location.href='../vistas/agregar_videos.php'</script>";
	        }
		}
        
    }

    public function ListaVideo()
    {
        $user = new modelo_videos();
        $userResponse = $user->ListaVideo();
    }
	
    public function ListaVideoPagina($pagina)
    {
		$offset=2*$pagina;
        $user = new modelo_videos();
        $userResponse = $user->ListaVideoPagina($offset);
    }

	public function UpdateVideo($idvideos)
    {
        $user = new modelo_videos();
		
		if (isset($_POST['titulo_Video'])&&isset($_POST['descripcion_Video'])){
            $user->setidvideos($idvideos);
	        $user->settitulo_Video($_POST['titulo_Video']);
	        $user->setdescripcion_Video($_POST['descripcion_Video']);
			$urlVideo = $_POST['url_Video'];
			$convertirURL = str_replace("watch?v=","embed/",$urlVideo);
			$user->seturl_Video($convertirURL);
        	$userResponse = $user->UpdateVideo();
			if ($userResponse == 1)
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../vistas/contenido_videos.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
                echo 'MAL';
				echo "<script>location.href='../vistas/actualizar_videos.php'</script>";
	        }
		}
    }

	public function DeleteVideo($idvideos)
    {
        $user = new modelo_videos();
		$user->setidvideos($idvideos);
		$userResponse = $user->DeleteVideo();
		if ($userResponse == 1) // exitoso
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../vistas/contenido_videos.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../vistas/contenido_videos.php'</script>";
	        }
    }
}
?>