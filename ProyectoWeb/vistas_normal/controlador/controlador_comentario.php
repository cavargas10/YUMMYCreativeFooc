<?php
require_once "../modelo/modelo_comentario.php";

class controlador_comentario
{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function controlador_comentario($host = "", $user = "", $pass = "", $db = "")
	{
		$this->BaseDatos = $db;
		$this->Servidor = $host;
		$this->Usuario = $user;
		$this->Clave = $pass;
	}

    public function ListaComentarios($idReceta)
	{
	 	$user = new modelo_comentario();
	 	$userResponse = $user->ListaComentarios($idReceta);
	}

}
