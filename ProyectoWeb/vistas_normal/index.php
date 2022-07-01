
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Yummi Creative Food</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="js/main.js"></script>
</head>


<header>

  <div class="menu">
    <nav>
      <a href="index.php" class="enlace">
        <img src="img/logo.png" alt="" class="logo">
        <H2 class="nombre"><span>Yummy</span> Creative Food</H2>.
      </a>
      <ul>
        <li><a class="active" href="index.php">Inicio</a></li>
        <li><a href="gruposEtarios.php">Grupos Etarios</a></li>
        <li><a href="recetas.php">Recetas</a></li>
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
    <form class="modal-content animate" action="">
      <div class="tittle">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <p>Inicio de Sesión</p>
      </div>
      <div class="container-form">
        <label for="correo"><b>E-mail</b></label><br>
        <input type="text" placeholder="  Ingrese su Correo Electronico" name="correo" required><br>

        <br><label for="clave"><b>Contraseña</b></label><br>
        <input type="password" placeholder="  Ingrese su Contraseña" name="clave" required><br>
        <span class="psw"><a href="#">Olvido su contraseña?</a></span>
        <br><br><button type="submit">Login</button>
      </div>
      <div class="container-sub">
        <h4>!Aún no tienes una cuenta!</h4>
        <button type="button" class="subbtn">Suscribete</button>
      </div>
    </form>
  </div>
</header>

<body>
  <main class="container-main">
    <img src="img/plato1.jpg" alt="" class="i1" />
    <div class="text-main">
      <h1>
        OLVIDATE DE LA COCINA TRADICIONAL Y EMPEZEMOS CON LA COCINA
        <span>CREATIVA </span>”
      </h1>
    </div>
    <img src="img/plato2.png" alt="" class="i2" />

    <div class="text-second">
      <h1>La Cocina <span>CREATIVA</span></h1>
      <h2 class="h21"> Es aquella que introduce nuevas técnicas, busca innovar, quiere ser
        original en cuanto a colores, sabores, texturas, aromas y además,
        tiene en cuenta el emplatado
      </h2>
    </div>

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
        <h1>Nuevas Recetas</h1>
        <h2>Explore nuestras nuevas Recetas</h2>
      </div>

      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="img/card1.png" alt="">
          </div>
          <div class="card-content">
            <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
            <div class="card-inf">
              <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                officia ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
                beatae asperiores temporibus numquam quod, repudiandae a.</p>
              <span class="rating">★★★★☆</span>
              <h3 class="card-view text-medium">5 Vistas</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="container-card-recet">
        <div class="card-recet">
          <div class="img-card-recet">
            <img src="img/card1.png" alt="">
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
            <img src="img/card1.png" alt="">
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
    <div class="mensaje">
      <div class="inf-mensaje">
        <img src="img/img1.jpg" alt=""></IMg>
        <h1><br>“No empieces una dieta que terminará algun día, comienza un estilo de vida que dure para siempre"</br>
        </h1>
      </div>
    </div>

    <div class="grid">
      <div class="new-recetas">
        <h1>Platos más populares</h1>
        <h2>Explora nuestras recetas más populares</h2>
      </div>
      <section class="container-card-recet">
        <div class="card-recet">
          <img src="img/card1.png" alt="">
          <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
          <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
            officia
            ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
            beatae
            asperiores temporibus numquam quod, repudiandae a.</p>
          <span class="rating">★★★★☆</span>
          <h3 class="card-view text-medium">5 Vistas</h3>
        </div>
      </section>

      <section class="container-card-recet">
        <div class="card-recet">
          <img src="img/card1.png" alt="">
          <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
          <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
            officia
            ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
            beatae
            asperiores temporibus numquam quod, repudiandae a.</p>
          <span class="rating">★★★★☆</span>
          <h3 class="card-view text-medium">5 Vistas</h3>
        </div>
      </section>

      <section class="container-card-recet">
        <div class="card-recet">
          <img src="img/card1.png" alt="">
          <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
          <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
            officia
            ipsam architecto, deleniti nobis blanditiis consectetur qui esse velit, sapiente sunt maxime
            beatae
            asperiores temporibus numquam quod, repudiandae a.</p>
          <span class="rating">★★★★☆</span>
          <h3 class="card-view text-medium">5 Vistas</h3>
        </div>
      </section>
    </div>

    <div class="inf_general">
      <div class="com">
        <i class="uil uil-comments-alt"></i>
        <h2>102</h2>
        <h3>COMENTARIOS</h3>
      </div>

      <div class="com">
        <i class="uil uil-restaurant"></i>
        <h2>90</h2>
        <h3>PLATOS</h3>
      </div>

      <div class="com">
        <i class="uil uil-eye"></i>
        <h2>256</h2>
        <h3>VISTAS</h3>
      </div>
    </div>

    <section class="recetas">
      <div class="email">
        <h1><b>COCINA CREATIVA</b></h1><br>
        <h1><span>¿Quieres más delicias?</h1><br>
        <h2>Suscríbete aquí y te enviaremos un correo electrónico cuando se publiquen nuevas recetas.</span></h2><br>

        <!-- Boton Signup -->
        <button onclick="document.getElementById('id02').style.display='block'">Suscribete</button>

        <!-- Modal Signup -->
        <div id="id02" class="modal">

          <form class="modal-content animate" action="">
            <div class="tittle-modal">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <h2 class="sus">Suscribete</h2>
            </div>
            <div class="container-form">
              <label for="usuario"><b>Usuario</b></label><br>
              <input type="text" placeholder="  Ingrese su Usuario" name="usuario" required><br>

              <br><label for="correo"><b>E-mail</b></label><br>
              <input type="text" placeholder="  Ingrese su Correo Electronico" name="correo" required><br>

              <br><label for="clave"><b>Contraseña</b></label><br>
              <input type="password" placeholder="  Ingrese su Contraseña" name="clave" required><br>

              <br><button type="submit">Suscribete</button>
            </div>
            <div class="container-sub">
              <h4>!Ya tienes una cuenta!</h4>
              <button type="button" class="subbtn1">Login</button>
            </div>
          </form>
        </div>

        <div class="img">
          <img src="img/fot2.jpg" class="img12" alt="" style="background-attachment:fixed">
        </div>
      </div>
    </section>
  </main>
</body>
<footer>
  <div class="content">
    <div class="top">
      <div class="logo-details">
        <img src="img/logo.png" alt="" class="logo">
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

          <form class="modal-content animate" action="">
            <div class="tittle-modal">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
              <h2 class="sus">Suscribete</h2>
            </div>
            <div class="container-form">
              <label for="usuario"><b>Usuario</b></label><br>
              <input type="text" placeholder="  Ingrese su Usuario" name="usuario" required><br>

              <br><label for="correo"><b>E-mail</b></label><br>
              <input type="text" placeholder="  Ingrese su Correo Electronico" name="correo" required><br>

              <br><label for="clave"><b>Contraseña</b></label><br>
              <input type="password" placeholder="  Ingrese su Contraseña" name="clave" required><br>

              <br><button type="submit">Suscribete</button>
            </div>
            <div class="container-sub">
              <h4>!Ya tienes una cuenta!</h4>
              <button type="button" class="subbtn2">Login</button>
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