<?php
include("../seguridad/seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Yummi Creative Food</title>
  <link rel="stylesheet" href="../css/style_acerca.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="js/main.js"></script>
</head>

<body>

  <header>

    <div class="menu">
      <nav>
        <a href="index_user.php" class="enlace">
          <img src="../img/logo.png" alt="" class="logo">
          <H2 class="nombre"><span>Yummy</span> Creative Food</H2>.
        </a>
        <ul>
          <li><a href="index_user.php">Inicio</a></li>
          <li><a href="gruposEtarios_user.php">Grupos Etarios</a></li>
          <li><a href="recetas_user.php">Recetas</a></li>
          <li><a href="tips_user.php">Tips</a></li>
          <li><a href="videos_user.php">Videos</a></li>
          <li><a class="active" href="acerca_user.php">Acerca de</a></li>
          <!-- Dropdown Uuario-->
          <li><button onclick="myFunction()" class="dropbtn"><?php echo $_SESSION['username']; ?></button></li>
          <div id="myDropdown" class="dropdown-content">
            <a href="perfil_user.php">Perfil</a>
            <a href="../seguridad/exit.php?salir=true">Salir</a>
          </div>
        </ul>
      </nav>
    </div>

    <!-- Script Dropdown Uuario-->
    <script>
      /* Cuando el usuario hace clic en el botón, se alterna 
      entre ocultar y mostrar el contenido desplegable */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
    </script>
  </header>

  <div class="menu-history">
    <h3 class="heading-cards"><span>Nuestra </span>Historia</h3>
    <div class="text-history">
      <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempora fugit facilis magni animi
        eligendi amet ratione earum quisquam cumque fugiat assumenda quae architecto ex esse, voluptas nobis illo id?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempora fugit facilis magni animi
        eligendi amet ratione earum quisquam cumque fugiat assumenda quae architecto ex esse, voluptas nobis illo id?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempora fugit facilis magni animi
        eligendi amet ratione earum quisquam cumque fugiat assumenda quae architecto ex esse, voluptas nobis illo id?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempora fugit facilis magni animi
        eligendi amet ratione earum quisquam cumque fugiat assumenda quae architecto ex esse, voluptas nobis illo id?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempora fugit facilis magni animi
        eligendi amet ratione earum quisquam cumque fugiat assumenda quae architecto ex esse, voluptas nobis illo id?
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempora fugit facilis magni animi
        eligendi amet ratione earum quisquam cumque fugiat assumenda quae architecto ex esse, voluptas nobis illo id?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempora fugit facilis magni animi
        eligendi amet ratione earum quisquam cumque fugiat assumenda quae architecto ex esse, voluptas nobis illo id?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempora fugit facilis magni animi
        eligendi amet ratione earum quisquam cumque fugiat assumenda quae architecto ex esse, voluptas nobis illo id?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempora fugit facilis magni animi
        eligendi amet ratione earum quisquam cumque fugiat assumenda quae architecto ex esse, voluptas nobis illo id?
      </p>
    </div>
  </div>

  <div class="grid">
    <div class="new-recetas">
      <h3 class="heading-cards"><span>Carreras </span>Involucradas</h3>
    </div>

    <section class="container-card-recet">
      <div class="card-recet">
        <iframe width="402" height="315" src="https://www.youtube.com/embed/AqyHZTlqQiI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>

    <section class="container-card-recet1">
      <div class="card-recet">
        <iframe width="402" height="315" src="https://www.youtube.com/embed/0_75jHXYS7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>
  </div>

  <div class="main-cards">
    <h3 class="heading-cards"><span>Directores </span>Proyecto</h3>
    <div class="container-cards">
      <div class="card-about">
        <img src="../img/Norma Verónica Cárdenas.jpg">
        <div class="details-cards">
          <h3>Mgtr. Norma Cárdenas Mazón</h3>
          <p>Directora de la Carrera de Nutrición y Dietética</p>
          <div class="social-links-cards">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href=""><i class="uil uil-instagram"></i></a>
            <a href=""><i class="uil uil-twitter-alt"></i></a>
            <a href=""><i class="uil uil-whatsapp"></i></a>
          </div>
        </div>
      </div>
      <div class="card-about">
        <img src="../img/chef2.jpg">
        <div class="details-cards">
          <h3>Mgtr. Norma Cárdenas Mazón</h3>
          <p>Directora de la Carrera de Nutrición y Dietética</p>
          <div class="social-links-cards">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href=""><i class="uil uil-instagram"></i></a>
            <a href=""><i class="uil uil-twitter-alt"></i></a>
            <a href=""><i class="uil uil-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-cards">
    <h3 class="heading-cards"><span>Personalidades </span>Importantes</h3>
    <div class="container-cards">
      <div class="card-about">
        <img src="../img/chef3.jpg">
        <div class="details-cards">
          <h3>Mgtr. Norma Cárdenas Mazón</h3>
          <p>Directora de la Carrera de Nutrición y Dietética</p>
          <div class="social-links-cards">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href=""><i class="uil uil-instagram"></i></a>
            <a href=""><i class="uil uil-twitter-alt"></i></a>
            <a href=""><i class="uil uil-whatsapp"></i></a>
          </div>
        </div>
      </div>
      <div class="card-about">
        <img src="../img/chef1.jpg">
        <div class="details-cards">
          <h3>Mgtr. Norma Cárdenas Mazón</h3>
          <p>Directora de la Carrera de Nutrición y Dietética</p>
          <div class="social-links-cards">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href=""><i class="uil uil-instagram"></i></a>
            <a href=""><i class="uil uil-twitter-alt"></i></a>
            <a href=""><i class="uil uil-whatsapp"></i></a>
          </div>
        </div>
      </div>
      <div class="card-about">
        <img src="../img/chef4.jpg">
        <div class="details-cards">
          <h3>Mgtr. Norma Cárdenas Mazón</h3>
          <p>Directora de la Carrera de Nutrición y Dietética</p>
          <div class="social-links-cards">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href=""><i class="uil uil-instagram"></i></a>
            <a href=""><i class="uil uil-twitter-alt"></i></a>
            <a href=""><i class="uil uil-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-cards">
    <h3 class="heading-cards"><span>Jovenes </span>Desarrolladores</h3>
    <div class="container-cards">
      <div class="card-about">
        <img src="../img/carlos.jpeg">
        <div class="details-cards">
          <h3>Carlos Andres Vargas Ramirez</h3>
          <p>Estudiante Ing. Sistemas Computacionales y Computacion UTPL</p>
          <div class="social-links-cards">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href=""><i class="uil uil-instagram"></i></a>
            <a href=""><i class="uil uil-twitter-alt"></i></a>
            <a href=""><i class="uil uil-whatsapp"></i></a>
          </div>
        </div>
      </div>
      <div class="card-about">
        <img src="../img/arianna.jpeg">
        <div class="details-cards">
          <h3>Arianna Michelle Vinueza Ortega</h3>
          <p>Estudiante Ing. Sistemas Computacionales y Computacion UTPL</p>
          <div class="social-links-cards">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href=""><i class="uil uil-instagram"></i></a>
            <a href=""><i class="uil uil-twitter-alt"></i></a>
            <a href=""><i class="uil uil-whatsapp"></i></a>
          </div>
        </div>
      </div>
      <div class="card-about">
        <img src="../img/luis.jpg">
        <div class="details-cards">
          <h3>Luis Angel Celi Montaño</h3>
          <p>Estudiante Ing. Sistemas Computacionales y Computacion UTPL</p>
          <div class="social-links-cards">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href=""><i class="uil uil-instagram"></i></a>
            <a href=""><i class="uil uil-twitter-alt"></i></a>
            <a href=""><i class="uil uil-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
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