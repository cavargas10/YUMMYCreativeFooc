<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Yummi Creative Food</title>
  <link rel="stylesheet" href="../css/style_recetas.css " />
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

  <main class="container-main">


    <div class="card-search">

      <form action="">

        <div class="flex-box">

          <div class="input-box">
            <span>Tipo receta</span>
            <select name="" id="" class="tipo-receta">
              <option value="Receta" selected disabled>Tipo Receta</option>
              <option value="receta1">receta1</option>
              <option value="receta2">receta2</option>
              <option value="receta3">receta3</option>
            </select>
          </div>

          <div class="input-box">
            <span>Ingredientes</span>
            <select name="" id="" class="ingred">
              <option value="Ingrediente" selected disabled>Ingredientes</option>
              <option value="Ingrediente1">Ingrediente1</option>
              <option value="Ingrediente2">Ingrediente2</option>
              <option value="Ingrediente3">Ingrediente3</option>
            </select>
          </div>

          <div class="input-box">
            <span>Dificultad</span>
            <select name="" id="" class="tipo-recet">
              <option value="Dificultad" selected disabled>Dificultad</option>
              <option value="Dificultad1">Dificultad1</option>
              <option value="Dificultad2">Dificultad2</option>
              <option value="Dificultad3">Dificultad3</option>
            </select>
          </div>


          <div class="input-box">
            <span>Porciones</span>
            <select name="" id="" class="tipo-recet">
              <option value="Porcion" selected disabled>Porciones</option>
              <option value="Porcion1">Porcion1</option>
              <option value="Porcion2">Porcion2</option>
              <option value="Porcion3">Porcion3</option>
            </select>
          </div>

          <input type="submit" value="Buscar" class="submit-btn" id="">
        </div>

      </form>
    </div>

    <div class="grid">

      <div class="new-recetas">
        <h1>Todas las Recetas</h1>
        <h2>Explore nuestras Recetas</h2>
      </div>

      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="../img/plato4.jpg" alt="">
          </div>
          <div class="card-content">
            <a href="new_receta.php">
              <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
            </a>
            <div class="card-inf">
              <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                officia ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
                beatae asperiores temporibus numquam quod, repudiandae a.</p>
              <span class="rating">★★★★☆</span>
              <h3 class="card-view text-medium">5 Vistas</h3>
            </div>
          </div></a>
        </div>
      </div>
      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="../img/plato5.jpg" alt="">
          </div>
          <div class="card-content">
            <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
            <div class="card-inf">
              <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                officia
                ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
                beatae
                asperiores temporibus numquam quod, repudiandae a.</p>
              <span class="rating">★★★★☆</span>
              <h3 class="card-view text-medium">5 Vistas</h3>
            </div>
          </div>
        </div></a>
      </div>
      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="../img/plato6.jpg" alt="">
          </div>
          <div class="card-content">
            <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
            <div class="card-inf">
              <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                officia
                ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
                beatae
                asperiores temporibus numquam quod, repudiandae a.</p>
              <span class="rating">★★★★☆</span>
              <h3 class="card-view text-medium">5 Vistas</h3>
            </div>
          </div>
        </div></a>
      </div>

      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="../img/fot2.jpg" alt="">
          </div>
          <div class="card-content">
            <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
            <div class="card-inf">
              <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                officia
                ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
                beatae
                asperiores temporibus numquam quod, repudiandae a.</p>
              <span class="rating">★★★★☆</span>
              <h3 class="card-view text-medium">5 Vistas</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="../img/img3d.jpg" alt="">
          </div>
          <div class="card-content">
            <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
            <div class="card-inf">
              <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                officia
                ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
                beatae
                asperiores temporibus numquam quod, repudiandae a.</p>
              <span class="rating">★★★★☆</span>
              <h3 class="card-view text-medium">5 Vistas</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="../img/paso4.jpg" alt="">
          </div>
          <div class="card-content">
            <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
            <div class="card-inf">
              <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                officia
                ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
                beatae
                asperiores temporibus numquam quod, repudiandae a.</p>
              <span class="rating">★★★★☆</span>
              <h3 class="card-view text-medium">5 Vistas</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="../img/fot.png" alt="">
          </div>
          <div class="card-content">
            <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
            <div class="card-inf">
              <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                officia
                ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
                beatae
                asperiores temporibus numquam quod, repudiandae a.</p>
              <span class="rating">★★★★☆</span>
              <h3 class="card-view text-medium">5 Vistas</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="../img/plato6.jpg" alt="">
          </div>
          <div class="card-content">
            <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
            <div class="card-inf">
              <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                officia
                ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
                beatae
                asperiores temporibus numquam quod, repudiandae a.</p>
              <span class="rating">★★★★☆</span>
              <h3 class="card-view text-medium">5 Vistas</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="../img/card1.png" alt="">
          </div>
          <div class="card-content">
            <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
            <div class="card-inf">
              <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                officia
                ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
                beatae
                asperiores temporibus numquam quod, repudiandae a.</p>
              <span class="rating">★★★★☆</span>
              <h3 class="card-view text-medium">5 Vistas</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
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