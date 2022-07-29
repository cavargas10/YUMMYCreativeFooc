<?php

class clase_mysqli
{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	/*identificacion de error y texto de error*/
	var $Errno = 0;
	var $Error = "";
	/*identificacion de conexion y consulta*/
	var $Conexion_ID = 0;
	var $Consulta_ID = 0;
	/*constructor de la clase*/
	function clase_mysqli($host = "", $user = "", $pass = "", $db = "")
	{
		$this->BaseDatos = $db;
		$this->Servidor = $host;
		$this->Usuario = $user;
		$this->Clave = $pass;
	}
	/*conexion al servidor de db*/
	function conectar($host, $user, $pass, $db)
	{
		if ($db != "") $this->BaseDatos = $db;
		if ($host != "") $this->Servidor = $host;
		if ($user != "") $this->Usuario = $user;
		if ($pass != "") $this->Clave = $pass;
		/*conectar al servidor*/
		$this->Conexion_ID = new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if (!$this->Conexion_ID) {
			$this->Error = "Ha fallado la conexion";
			return 0;
		}
		return $this->Conexion_ID;
	}
	function cerrar()
	{
		$this->Conexion_ID->close();
	}
	function consulta($sql = "")
	{
		if ($sql == "") {
			$this->Error = "NO hay ninguna sentencia sql";
			return 0;
		}
		/*Ejecutar la cunsulta*/
		//$this->Consulta_ID=$this->Conexion_ID->query($sql);
		$this->Consulta_ID = mysqli_query($this->Conexion_ID, $sql);

		if (!$this->Consulta_ID) {
			print $this->Conexion_ID->error;
			//$this->Errno->error;
		}
		return $this->Consulta_ID;
	}

	/*retorna el numero de campos de la consulta*/
	function numcampos()
	{
		return mysqli_num_fields($this->Consulta_ID);
	}
	/*retorna de campos de la consulta*/
	function numregistros()
	{
		return mysqli_num_rows($this->Consulta_ID);
	}
	function verconsulta()
	{
		echo "<table class='tablecud'>";
		echo "<tr>";
		for ($i = 0; $i < $this->numcampos(); $i++) {
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<td>" . mysqli_fetch_field_direct($this->Consulta_ID, $i)->name . "</td>";
		}
		echo "</tr>";
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i = 0; $i < $this->numcampos(); $i++) {
				//echo "<td>".utf8_encode($row[$i])."</td>";
				echo "<td>" . $row[$i] . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	function verconsultacrud()
	{
		echo "<table class='tablecud'>";
		echo "<tr>";
		for ($i = 0; $i < $this->numcampos(); $i++) {
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<td>" . mysqli_fetch_field_direct($this->Consulta_ID, $i)->name . "</td>";
		}
		echo  "<td>Borrar</td>";
		echo  "<td>Actualizar</td>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i = 0; $i < $this->numcampos(); $i++) {
				//echo "<td>".utf8_encode($row[$i])."</td>";
				echo "<td>" . $row[$i] . "</td>";
			}
			echo  "<td><a href='perfil_user.php?idUser=$row[0]'>Borrar</a></td>";
			echo  "<td><a href='user_update.php?idUser=$row[0]'>Actualizar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function verconsultacrudIngrediente()
	{
		echo "<table class='tablecudIngredientes'>";
		echo "<tr>";
		for ($i = 0; $i < $this->numcampos(); $i++) {
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<th>" . mysqli_fetch_field_direct($this->Consulta_ID, $i)->name . "</th>";
		}
		echo  "<th>BORRAR</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i = 0; $i < $this->numcampos(); $i++) {
				//echo "<td>".utf8_encode($row[$i])."</td>";
				echo "<td>" . $row[$i] . "</td>";
			}
			echo  "<td><a class='btnDelete' href='contenido_ingredientes.php?idingredientes=$row[0]'>Borrar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function verconsultacrudTips()
	{
		echo "<table class='tablecudTips'>";
		echo "<tr>";
		for ($i = 0; $i < $this->numcampos(); $i++) {
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<th>" . mysqli_fetch_field_direct($this->Consulta_ID, $i)->name . "</th>";
		}
		echo  "<th>BORRAR</th>";
		echo  "<th>ACTUALIZAR</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i = 0; $i < $this->numcampos(); $i++) {
				//echo "<td>".utf8_encode($row[$i])."</td>";

				if ($i == 3) {
					echo "<td><img src = '" . $row[3] . "' width = 80></td>";
				} else {
					echo "<td>" . $row[$i] . "</td>";
				}
			}
			echo  "<td><a class='btnDelete' href='contenido_tips.php?idtips=$row[0]'> Borrar </a></td>";
			echo  "<td><a class='btnUpdate' href='actualizar_tips.php?idtips=$row[0]'>Actualizar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function verconsultacrudVideos()
	{
		echo "<table class='tablecudVideos'>";
		echo "<tr>";
		for ($i = 0; $i < $this->numcampos(); $i++) {
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<th>" . mysqli_fetch_field_direct($this->Consulta_ID, $i)->name . "</th>";
		}
		echo  "<th>BORRAR</th>";
		echo  "<th>ACTUALIZAR</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i = 0; $i < $this->numcampos(); $i++) {
				//echo "<td>".utf8_encode($row[$i])."</td>";
				echo "<td>" . $row[$i] . "</td>";
			}
			echo  "<td><a class='btnDelete' href='contenido_videos.php?idvideos=$row[0]'> Borrar </a></td>";
			echo  "<td><a class='btnUpdate' href='actualizar_videos.php?idvideos=$row[0]'>Actualizar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function verconsultacrudReceta()
	{
		echo "<table class='tablecudReceta'>";
		echo "<tr>";
		for ($i = 0; $i < $this->numcampos(); $i++) {
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<th>" . mysqli_fetch_field_direct($this->Consulta_ID, $i)->name . "</th>";
		}
		echo  "<th>BORRAR</th>";
		echo  "<th>ACTUALIZAR</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i = 0; $i < $this->numcampos(); $i++) {
				//echo "<td>".utf8_encode($row[$i])."</td>";
				echo "<td>" . $row[$i] . "</td>";
			}
			echo  "<td><a class='btnDelete' href='contenido_receta.php?idReceta=$row[0]'> Borrar </a></td>";
			echo  "<td><a class='btnUpdate' href='actualizar_receta.php?idReceta=$row[0]'>Actualizar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function verconsultacrudCliente()
	{
		echo "<table class='tablecudCliente'>";
		echo "<tr>";
		for ($i = 0; $i < $this->numcampos(); $i++) {
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<th>" . mysqli_fetch_field_direct($this->Consulta_ID, $i)->name . "</th>";
		}
		echo  "<th>BORRAR</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i = 0; $i < $this->numcampos(); $i++) {
				//echo "<td>".utf8_encode($row[$i])."</td>";
				echo "<td>" . $row[$i] . "</td>";
			}
			echo  "<td><a class='btnDelete' href='clientes_dashboard.php?idUsuario=$row[0]'>Borrar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function presentarconsultaTips()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				echo " <section class='container-card-recet'>
					<div class='card-recet'>
					<img src = '" . $row[4] . "'>
					<h1 class='card-title text-medium'>$row[1]</h1>
					<p>$row[2]</p>
					<button class='btnTips'><a href='tips_info_user.php?idtips=$row[0]'>
					Leer más..</a></button>
					</div>
					</section>";
			}
		}
	}

	function presentarconsultaTipsIndex()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				echo " <section class='container-card-recet'>
					<div class='card-recet'>
					<img src = '" . $row[4] . "'>
					<h1 class='card-title text-medium'>$row[1]</h1>
					<p>$row[2]</p>
					<button class='btnTips'><a href='tips_info.php?idtips=$row[0]'>
					Leer más..</a></button>
					</div>
					</section>";
			}
		}
	}

	function presentarconsultaVideo()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				echo "<section class='container-card-recet'>
				<div class='card-recet'>
				<iframe width='360' height='215' src='" . $row[3] . "' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
				<h1 class='card-title text-medium'>$row[1]</h1>
				<p>$row[2]</p>
				</div>
				</section>";
			}
		}
	}

	function presentarconsultaRecetasIndex()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				echo "  <div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[1] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[2]</p>
									<a href='new_receta_user.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[3]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[4]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[5]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[6]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[7] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div>";
			}
		}
	}

	function presentarconsultaTresRecetasIndex()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			$newrow = str_replace("../../imagenesReceta/", "", $row[1]);
			for ($i = 0; $i < 1; $i++) {
				echo "  <div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='imagenesReceta/" . $newrow . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[2]</p>
									<a href='vistas_normal/vistas/new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[3]</h1>
									</a>
									<div class='card-inf'>
										<p class='text-medium'>$row[4]</p>
										<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[5]</p></h3>
										<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[6]</p></h3>
										<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[7] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br>".number_format($row[8], 2)."</p>
									</div>
								</div>
							</div>
						</div>";
			}
		}
	}

	function presentarconsultaTresRecetasUser()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				echo "  <div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='$row[4]'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta_user.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
										<p class='text-medium'>$row[2]</p>
										<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
										<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
										<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div>";
			}
		}
	}

	function presentarconsultaRecetas()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				echo "  <div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[1] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[2]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[3]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[4]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[5]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[6]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[7] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br>".number_format($row[8], 2)."</p>
									</div>
								</div>
							</div>
						</div>";
			}
		}
	}

	function presentarconsultaComentarios()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			echo " <div class='datosComentarios'>
				<i class='uil uil-user-square'>	</i>		
				<div class='nombreComentario'>
							
								<p>$row[0] $row[1] dijo: </p>
							</div>
							<div class='valoracion'> ";
			if ($row[2] == 1) {
				echo "<p class='estrella'> ★</p>
								</div>
							<div class='descComentario'>
								<p>$row[3]</p>
							</div></div><br>";
			} elseif ($row[2] == 2) {
				echo "<p class='estrella'> ★★</p></div>
								<div class='descComentario'>
									<p>$row[3]</p>
								</div></div><br>";
			} elseif ($row[2] == 3) {
				echo "<p class='estrella'> ★★★</p></div>
								<div class='descComentario'>
									<p>$row[3]</p>
								</div></div><br>";
			} elseif ($row[2] == 4) {
				echo "<p class='estrella'> ★★★★</p></div>
								<div class='descComentario'>
									<p>$row[3]</p>
								</div></div><br>";
			} elseif ($row[2] == 5) {
				echo "<p class='estrella'> ★★★★★</p></div>
								<div class='descComentario'>
									<p>$row[3]</p>
								</div></div><br>";
			}
		}
	}

	function presentarconsultaRecetasGEmbarazo()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				if ($row[28] == 'Embarazo' && $row[3] == 'Desayunos') {
					echo "<div class='column Desayunos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Embarazo' && $row[3] == 'Almuerzos') {
					echo "<div class='column Almuerzos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Embarazo' && $row[3] == 'Meriendas') {
					echo "<div class='column Meriendas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Embarazo' && $row[3] == 'Cenas') {
					echo "<div class='column Cenas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Embarazo' && $row[3] == 'Postres') {
					echo "<div class='column Postres'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				}
			}
		}
	}

	function presentarconsultaRecetasGVejez()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				if ($row[28] == 'Vejez' && $row[3] == 'Desayunos') {
					echo "<div class='column Desayunos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Vejez' && $row[3] == 'Almuerzos') {
					echo "<div class='column Almuerzos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Vejez' && $row[3] == 'Meriendas') {
					echo "<div class='column Meriendas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Vejez' && $row[3] == 'Cenas') {
					echo "<div class='column Cenas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Vejez' && $row[3] == 'Postres') {
					echo "<div class='column Postres'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				}
			}
		}
	}

	function presentarconsultaRecetasGPInfancia()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				if ($row[28] == 'Primera Infancia' && $row[3] == 'Desayunos') {
					echo "<div class='column Desayunos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Primera Infancia' && $row[3] == 'Almuerzos') {
					echo "<div class='column Almuerzos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Primera Infancia' && $row[3] == 'Meriendas') {
					echo "<div class='column Meriendas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Primera Infancia' && $row[3] == 'Cenas') {
					echo "<div class='column Cenas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Primera Infancia' && $row[3] == 'Postres') {
					echo "<div class='column Postres'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				}
			}
		}
	}


	function presentarconsultaRecetasGSInfancia()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				if ($row[28] == 'Segunda Infancia' && $row[3] == 'Desayunos') {
					echo "<div class='column Desayunos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Segunda Infancia' && $row[3] == 'Almuerzos') {
					echo "<div class='column Almuerzos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Segunda Infancia' && $row[3] == 'Meriendas') {
					echo "<div class='column Meriendas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Segunda Infancia' && $row[3] == 'Cenas') {
					echo "<div class='column Cenas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Segunda Infancia' && $row[3] == 'Postres') {
					echo "<div class='column Postres'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				}
			}
		}
	}

	function presentarconsultaRecetasGJuventud()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				if ($row[28] == 'Juventud' && $row[3] == 'Desayunos') {
					echo "<div class='column Desayunos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Juventud' && $row[3] == 'Almuerzos') {
					echo "<div class='column Almuerzos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Juventud' && $row[3] == 'Meriendas') {
					echo "<div class='column Meriendas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Juventud' && $row[3] == 'Cenas') {
					echo "<div class='column Cenas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Juventud' && $row[3] == 'Postres') {
					echo "<div class='column Postres'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				}
			}
		}
	}

	function presentarconsultaRecetasGAdultez()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				if ($row[28] == 'Adultez' && $row[3] == 'Desayunos') {
					echo "<div class='column Desayunos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Adultez' && $row[3] == 'Almuerzos') {
					echo "<div class='column Almuerzos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Adultez' && $row[3] == 'Meriendas') {
					echo "<div class='column Meriendas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Adultez' && $row[3] == 'Cenas') {
					echo "<div class='column Cenas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Adultez' && $row[3] == 'Postres') {
					echo "<div class='column Postres'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				}
			}
		}
	}

	function presentarconsultaRecetasGAdolescencia()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				if ($row[28] == 'Adolescencia' && $row[3] == 'Desayunos') {
					echo "<div class='column Desayunos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Adolescencia' && $row[3] == 'Almuerzos') {
					echo "<div class='column Almuerzos'>
							<div class='container-card-recet'>
							<div class='card-recet'>
								<div class='img-card-recet'>
									<img src='" . $row[4] . "'>
								</div>
								<div class='card-content'>
									<p class='cat'>$row[3]</p>
									<a href='new_receta.php?idReceta=$row[0]'>
										<h1 class='card-title text-medium'>$row[1]</h1>
									</a>
									<div class='card-inf'>
									<p class='text-medium'>$row[2]</p>
									<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
									<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
									<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
									</div>
									<div class='val'>
										<p class='valor'>★ <br> 4.5</p>
									</div>
								</div>
							</div>
						</div></div>";
				} elseif ($row[28] == 'Adolescencia' && $row[3] == 'Meriendas') {
					echo "<div class='column Meriendas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Adolescencia' && $row[3] == 'Cenas') {
					echo "<div class='column Cenas'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				} elseif ($row[28] == 'Adolescencia' && $row[3] == 'Postres') {
					echo "<div class='column Postres'>
						<div class='container-card-recet'>
						<div class='card-recet'>
							<div class='img-card-recet'>
								<img src='" . $row[4] . "'>
							</div>
							<div class='card-content'>
								<p class='cat'>$row[3]</p>
								<a href='new_receta.php?idReceta=$row[0]'>
									<h1 class='card-title text-medium'>$row[1]</h1>
								</a>
								<div class='card-inf'>
								<p class='text-medium'>$row[2]</p>
								<h3><i class='uil uil-user-circle'></i> Grupo etario: <p>$row[28]</p></h3>
								<h3><i class='uil uil-graph-bar'></i> Dificultad: <p>$row[22]</p></h3>
								<h3><i class='uil uil-clock-eight'></i> Tiempo: <p>$row[20] min.</p></h3>
								</div>
								<div class='val'>
									<p class='valor'>★ <br> 4.5</p>
								</div>
							</div>
						</div>
					</div></div>";
				}
			}
		}
	}

	function presentarContadorComentarios()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				echo "<i class='uil uil-comments-alt'></i>
						<h2>$row[0]</h2>
						<h3>COMENTARIOS</h3>";
			}
		}
	}

	function presentarContadorReceta()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				echo "<i class='uil uil-restaurant'></i>
						<h2>$row[0]</h2>
						<h3>RECETAS</h3>";
			}
		}
	}

	function presentarContadorUsuarios()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < 1; $i++) {
				echo "<i class='uil uil-user-check'></i>
						<h2>$row[0]</h2>
						<h3>USUARIOS</h3>";
			}
		}
	}

	function comboBox()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			echo "<option value='" . $row[0] . "'>$row[1]</option>";
		}
	}

	function consulta_lista()
	{
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i = 0; $i < $this->numcampos(); $i++) {
				$row[$i];
			}
			return $row;
		}
	}

	function traerGrafico()
	{
		$arreglo = array();
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			$arreglo[] = $row;
		}
		return $arreglo;
	}

	function traerGraficodos()
	{
		$arreglo = array();
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			$arreglo[] = $row;
		}
		return $arreglo;
	}

	function traerGraficoVideos()
	{
		$arreglo = array();
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			$arreglo[] = $row;
		}
		return $arreglo;
	}

	function traerGraficoTips()
	{
		$arreglo = array();
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			$arreglo[] = $row;
		}
		return $arreglo;
	}
}

	/*
	function consulta_json(){
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			$data[]=$row;
		}
		echo json_encode(array("sensores"=>$data));
	}
	function consulta_busqueda_json(){ 
		if($this->numcampos() > 0){
			while ($row = mysqli_fetch_array($this->Consulta_ID)) {
				$data[]=$row;
			}
		    $resultData = array('status' => true, 'postData' => $data);
	    }else{
	    	$resultData = array('status' => false, 'message' => 'No Post(s) Found...');
	    }

	    echo  json_encode($resultData);
	}
*/
