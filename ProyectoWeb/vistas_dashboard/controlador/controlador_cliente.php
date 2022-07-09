<?php
require_once "../modelo/modelo_cliente.php";

class controlador_cliente{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function controlador_cliente($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}

    public function ListaCliente()
    {
        $user = new modelo_cliente();
        $userResponse = $user->ListaCliente();
    }

	public function DeleteCliente($idUsuario)
    {
        $user = new modelo_cliente();
		$user->setidUsuario($idUsuario);
		$userResponse = $user->DeleteCliente();
		if ($userResponse == 1) // exitoso
	        {
	            echo '<script>alert("SQL correctos :)...");</script>';
				echo "<script>location.href='../vistas/clientes_dashboard.php'</script>";
	        } else {
	            echo '<script>alert("SQL Incorrectos...");</script>';
				echo "<script>location.href='../vistas/clientes_dashboard.php'</script>";
	        }
    }

}
