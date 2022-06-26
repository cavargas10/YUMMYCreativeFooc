<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Yummi Creative Food</title>
  <link rel="stylesheet" href="../css/style.css " />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="js/main.js"></script>
</head>

<body>
  <header>

    <div class="menu">
      <nav>
        <a href="index.html" class="enlace">
          <img src="../img/logo.png" alt="" class="logo">
          <H2 class="nombre"><span>Yummy</span> Creative Food</H2>.
        </a>
        <ul>
          <li><a class="active" href="index.html">Inicio</a></li>
          <li><a href="gruposEtarios.html">Grupos Etarios</a></li>
          <li><a href="#">Especiales</a></li>
          <li><a href="tips.html">Tips</a></li>
          <li><a href="videos.html">Videos</a></li>
          <li><a href="#">Acerca de</a></li>
          <li><button onclick="document.getElementById('id01').style.display='block'">Login</button></li>
        </ul>
      </nav>
    </div>
    <!-- Modal -->
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close"
        title="Close Modal">&times;</span>

      <form class="modal-content animate" action="">
        <div class="container">
          <h2  style="text-align:center;">Inicio de Sesión</h2><br>
          <label for="usuario"><b>Usuario</b></label><br>
          <input type="text" placeholder="  Ingrese su Usuario" name="usuario" required><br><br>

          <label for="correo"><b>E-mail</b></label><br>
          <input type="text" placeholder="  Ingrese su Correo Electronico" name="correo" required><br><br>

          <label for="clave"><b>Contraseña</b></label><br>
          <input type="password" placeholder="  Ingrese su Contraseña" name="clave" required><br>

          <br><button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Recuerdamelo
          </label>
        </div>
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Cancelar</button>
          <span class="psw"><a href="#">Olvido su contraseña?</a></span>
        </div>
      </form>
    </div>
  </header>