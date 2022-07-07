<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Yummi Creative Food</title>
  <link rel="stylesheet" href="../css/vista_tips.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="js/main.js"></script>
</head>

<body>

  <header>

    <div class="menu">
      <nav>
        <a href="../index.php" class="enlace">
          <img src="../img/logo.png" alt="" class="logo">
          <H2 class="nombre"><span>Yummy</span> Creative Food</H2>.
        </a>
        <ul>
          <li><a href="../index.php">Inicio</a></li>
          <li><a href="gruposEtarios.php">Grupos Etarios</a></li>
          <li><a href="recetas.php">Recetas</a></li>
          <li><a class="active" href="tips.php">Tips</a></li>
          <li><a href="videos.php">Videos</a></li>
          <li><a href="acerca.php">Acerca de</a></li>
          <!-- Boton Login -->
          <li><button onclick="document.getElementById('id01').style.display='block'">Login</button></li>
        </ul>
      </nav>
    </div>
    <!-- Modal LOGIN-->
    <div id="id01" class="modal">
      <form class="modal-content animate" method="post" action="../dll/validar.php">
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

  <div class="grid">
    <div class="new-recetas">
      <h1 class="tips"><span>Tips
          <hr>
        </span></h1><br>
    </div>
    <section class="container-card-recet">
      <div class="card-recet">
        <img src="../img/tip1.png" />
        <h1 class="card-title text-medium">Alcanza una dieta equilibrada</h1>
        <p>
          Los hábitos de alimentación siempre han sido una preocupación constante de los ...
        </p>
        <button class="btnTips"><a href="tips_info.php">Leer más..</a></button>
      </div>
    </section>

    <section class="container-card-recet">
      <div class="card-recet">
        <img src="../img/tip1.png" />
        <h1 class="card-title text-medium">Comida</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
          excepturi unde?
        </p>
        <button class="btnTips"><a href="">Leer más..</a></button>
      </div>
    </section>

    <section class="container-card-recet">
      <div class="card-recet">
        <img src="../img/tip1.png" />
        <h1 class="card-title text-medium">Recetas</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
          excepturi unde?
        </p>
        <button class="btnTips"><a href="">Leer más..</a></button>
      </div>
    </section>

    <section class="container-card-recet">
      <div class="card-recet">
        <img src="../img/tip1.png" />
        <h1 class="card-title text-medium">Alimentación</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
          excepturi unde?
        </p>
        <button class="btnTips"><a href="">Leer más..</a></button>
      </div>
    </section>

    <section class="container-card-recet">
      <div class="card-recet">
        <img src="../img/tip1.png" />
        <h1 class="card-title text-medium">Cuidado Salud</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
          excepturi unde?
        </p>
        <button class="btnTips"><a href="">Leer más..</a></button>
      </div>
    </section>

    <section class="container-card-recet">
      <div class="card-recet">
        <img src="../img/tip1.png" />
        <h1 class="card-title text-medium">Comida</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel,
          excepturi unde?
        </p>
        <button class="btnTips"><a href="">Leer más..</a></button>
      </div>
    </section>
  </div>
</body>

<footer>
  <div class="content">
    <div class="top">
      <div class="logo-details">
        <img src="../img/logo.png" alt="" class="logo">
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
        <li><a href="#">Madre en gestación</a></li>
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