<?php
require_once "../modelo/modelo_ingredientes.php";

class controlador_ingredientes{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function controlador_ingredientes($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	public function CreateIngrediente()
    {
        $user = new modelo_ingredientes();

		if (isset($_POST['nombre_Ingredientes'])){
			$user->setnombre_Ingredientes($_POST['nombre_Ingredientes']);
        	$userResponse = $user->CreateIngrediente();
			if ($userResponse == 1)
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../vistas/contenido_ingredientes.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../vistas/contenido_ingredientes.php'</script>";
	        }
		}
        
    }

    public function ListaIngrediente()
    {
        $user = new modelo_ingredientes();
        $userResponse = $user->ListaIngrediente();
    }

	public function DeleteIngrediente($idingredientes)
    {
        $user = new modelo_ingredientes();
		$user->setidingredientes($idingredientes);
		$userResponse = $user->DeleteIngrediente();
		if ($userResponse == 1) // exitoso
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../vistas/contenido_ingredientes.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../vistas/contenido_ingredientes.php'</script>";
	        }
    }
}
?>