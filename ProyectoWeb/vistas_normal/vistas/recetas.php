<?php
include_once "../modelo/modelo_recetas.php";
include_once "../controlador/controlador_recetas.php";

extract($_GET);
$control3 = new modelo_recetas();

$control4 = new controlador_recetas();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Yummi Creative Food</title>
  <link rel="stylesheet" href="../../css/vista_recetas.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="js/main.js"></script>
</head>

<body>

  <header>

    <div class="menu">
      <nav>
        <a href="../../index.php" class="enlace">
          <img src="../../img/logo.png" alt="" class="logo">
          <H2 class="nombre"><span>Yummy</span> Creative Food</H2>.
        </a>
        <ul>
          <li><a href="../../index.php">Inicio</a></li>
          <li><a href="gruposEtarios.php">Grupos Etarios</a></li>
          <li><a class="active" href="recetas.php">Recetas</a></li>
          <li><a href="tips.php">Tips</a></li>
          <li><a href="videos.php">Videos</a></li>
          <li><a href="acerca.php">Acerca de</a></li>
          <!-- Boton Login -->
          <li><button onclick="document.getElementById('id01').style.display='block'">Login</button></li>
        </ul>
      </nav>
    </div>

    <!-- Modal LOGIN-->
    <div id="id01" class="modal">
      <form class="modal-content animate" method="post" action="../../dll/validar.php">
        <div class="tittle">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <p>Inicio de Sesión</p>
        </div>
        <div class="container-form">

          <label for="correo_Usuario"><b>E-mail</b></label><br>
          <input type="email" name="correo_Usuario" id="correo_Usuario" placeholder="Ingrese su Correo Electronico" required><br>

          <br><label for="clave_Usuario"><b>Contraseña</b></label><br>
          <input type="password" name="clave_Usuario" id="clave_Usuario" placeholder="Ingrese su Contraseña" required><br>
          <br><span class="psw"><a href="#">Olvido su contraseña?</a></span><br>
          <br><button type="submit" value="Procesar">Login</button>

        </div>
        <div class="container-sub">
          <h4>!Aún no tienes una cuenta!</h4>
          <!-- <button onclick="document.getElementById('id02').style.display='block'" class="subbtn">Suscribete</button>  -->
          <button type="button" class="subbtn">Suscribete</button>
        </div>
      </form>
    </div>
  </header>

  <main class="container-main">


    <div class="card-search">

      <form action="" method="post">

        <div class="flex-box">

          <div class="input-box">
            <span>Tipo receta</span>
            <select name='categoria_Receta' id='categoria_Receta' class="tipo-receta">
              <option value="" selected disabled>Seleccione...</option>
              <option value='Desayunos'>Desayunos</option>
              <option value='Almuerzos'>Almuerzos</option>
              <option value='Meriendas'>Meriendas</option>
              <option value='Cenas'>Cenas</option>
              <option value='Postres'>Postres</option>
            </select>
          </div>

          <div class="input-box">
            <span>Ingredientes</span>
            <select name="nombre_Ingredientes" id="nombre_Ingredientes" class="ingred">
              <option value="" selected disabled>Seleccione...</option>
              <?php
              $control3->EncontrarIngredienteTAG();
              ?>
            </select>
          </div>

          <div class="input-box">
            <span>Dificultad</span>
            <select name="dificultad_Receta" id="dificultad_Receta" class="tipo-recet">
              <option value="" selected disabled>Seleccione...</option>
              <option value='Facil'>Facil</option>
              <option value='Intermedio'>Intermedio</option>
              <option value='Dificil'>Dificil</option>
            </select>
          </div>


          <div class="input-box">
            <span>Porciones</span>
            <select name="porciones_Receta" id="porciones_Receta" class="tipo-recet">
              <option value="" selected disabled>Seleccione...</option>
              <option value='1 a 3'>1 a 3</option>
              <option value='4 a 6'>4 a 6</option>
              <option value='7 a 9'>7 a 9</option>
              <option value='10 o mas'>10 o mas</option>
            </select>
          </div>

          <input type="submit" value="Buscar" class="submit-btn" name="Enviar">
        </div>

      </form>
    </div>

    <div class="grid">

      <div class="new-recetas">
        <h1>Todas las Recetas</h1>
        <h2>Explore nuestras Recetas</h2>
      </div>

      <?php
      $control3 = new modelo_recetas();
      if (isset($_POST['Enviar'])) {
        if (isset($_POST['categoria_Receta']) == '' && isset($_POST['nombre_Ingredientes']) == '' && isset($_POST['dificultad_Receta']) == '' && isset($_POST['porciones_Receta']) == '') {
          $control4->PresentarRecetas();
        } else {
          $control4->BuscarReceta();
        }
      }else{
        $control4->PresentarRecetas();
      }
      ?>
    </div>
  </main>
</body>

<footer>
  <div class="content">
    <div class="top">
      <div class="logo-details">
        <img src="../../img/logo.png" alt="" class="logo">
        <H2 class="nombre"><span>Yummy</span> Creative Food</H2>.
      </div>
      <div class="media-icons">
        <a href="#"><i class="uil uil-facebook-f"></i></a>
        <a href="#"><i class="uil uil-twitter"></i></a>
        <a href="#"><i class="uil uil-instagram"></i></a>
        <a href="#"><i class="uil uil-youtube"></i></a>

      </div>
    </div>
    <div class="link-boxes">
      <ul class="box">
        <li class="link_name">Grupos Etarios</li>
        <li><a href="#">Embarazo</a></li>
        <li><a href="#">Primera Infancia</a></li>
        <li><a href="#">Segunda Infancia</a></li>
        <li><a href="#">Adolescencia</a></li>
        <li><a href="#">Juventud</a></li>
        <li><a href="#">Adultez</a></li>
        <li><a href="#">Vejez</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Recetas</li>
        <li><a href="#">Desayunos</a></li>
        <li><a href="#">Almuerzos</a></li>
        <li><a href="#">Meriendas</a></li>
        <li><a href="#">Cenas</a></li>
        <li><a href="#">Postres</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Especiales</li>
        <li><a href="#">Semana Santa</a></li>
        <li><a href="#">Cumpleaños</a></li>
        <li><a href="#">Navidad</a></li>
        <li><a href="#">San Valentin</a></li>
        <li><a href="#">Carnaval</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Otros</li>
        <li><a href="#">Tips</a></li>
        <li><a href="#">Videos</a></li>
        <li><a href="#">Acerca de</a></li>
      </ul>
      <ul class="box input-box">
        <li class="link_name">Suscribete</li>
        <!-- Boton Signup -->
        <button onclick="document.getElementById('id03').style.display='block'">Suscribete</button>

        <!-- Modal Signup -->
        <div id="id03" class="modal">

          <form class="modal-content animate" method="post" action="../internas/procesar.php">
            <div class="tittle-modal">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
              <h2 class="sus">Suscribete</h2>
            </div>
            <div class="container-form">

              <label for="nombre_Usuario"><b>Nombre</b></label><br>
              <input type="text" name="nombre_Usuario" id="nombre_Usuario" placeholder="Ingrese su Nombre" required><br>

              <br><label for="apellido_Usuario"><b>Apellido</b></label><br>
              <input type="text" name="apellido_Usuario" id="apellido_Usuario" placeholder="Ingrese su Apellido" required><br>

              <br><label for="correo_Usuario"><b>E-mail</b></label><br>
              <input type="email" name="correo_Usuario" id="correo_Usuario" placeholder="Ingrese su Correo Electronico" required><br>

              <br><label for="clave_Usuario"><b>Contraseña</b></label><br>
              <input type="password" name="clave_Usuario" id="clave_Usuario" placeholder="Ingrese su Contraseña" required><br>

              <br><button type="submit" value="Procesar">Suscribete</button>
            </div>
            <div class="container-sub">
              <h4>!Ya tienes una cuenta!</h4>
              <button type="submit" class="subbtn2">Login</button>
            </div>
          </form>
        </div>
      </ul>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2022 <a href="#">Yummy Creative Food.</a>Todos los derechos
          reservados</span>
        <span class="policy_terms">
          <a href="#">Politica de Privacidad</a>
          <a href="#">Terminos y Condiciones</a>
        </span>
      </div>
    </div>
</footer>

</html>