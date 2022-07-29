<?php
require_once "../modelo/modelo_grafico.php";
class controlador_grafico
{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function controlador_grafico($host = "", $user = "", $pass = "", $db = "")
	{
		$this->BaseDatos = $db;
		$this->Servidor = $host;
		$this->Usuario = $user;
		$this->Clave = $pass;
	}

	public function ObtenerGrafico()
	{
		$user = new modelo_grafico();
		$userResponse = $user->ObtenerGrafico();

		return json_encode($userResponse);
		//echo '<script>json_encode('.$userResponse.');</script>';

	}

	public function ObtenerGraficodos()
	{
		$user = new modelo_grafico();
		$userResponse = $user->ObtenerGraficodos();

		return json_encode($userResponse);
	}

	public function ObtenerGraficoVideos()
	{
		$user = new modelo_grafico();
		$userResponse = $user->ObtenerGraficoVideos();

		return json_encode($userResponse);
	}

	public function ObtenerGraficoTips()
	{
		$user = new modelo_grafico();
		$userResponse = $user->ObtenerGraficoTips();

		return json_encode($userResponse);
	}
}
