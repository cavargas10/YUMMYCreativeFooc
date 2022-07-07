<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/dashboard_graficos.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <title>Admin Dashboard Panel</title>
  </head>

  <body>
    <nav>
      <div class="logo-name">
        <div class="logo-image">
          <img src="../../img/logo.png" alt="" />
        </div>
        <span class="logo_name">Yummi Food</span>
      </div>

      <div class="sidenav">
        <a href="index_dashboard.php"><i class="uil uil-estate"></i><span class="link-name">Dashboard</span></a>
        <a href="perfil_dashboard.php">Perfil</a><button class="dropdown-btn">Contenido<i class="fa fa-caret-down"></i></button>
        <div class="dropdown-container">
          <a href="contenido_receta.php"><i class="uil uil-crockery"></i><span class="link-name">Recetas</span></a>
          <a href="contenido_ingredientes.php"><i class="uil uil-favorite"></i><span class="link-name">Ingredientes</a>
          <a href="contenido_tips.php"><i class="uil uil-sun"></i><span class="link-name">Tips</span></a>
          <a href="contenido_videos.php"><i class="uil uil-play-circle"></i><span class="link-name">Videos</span></a>
        </div>

        <a class="active" href="graficos_dashboard.php"><i class="uil uil-chart"></i><span class="link-name">Gráficos</span></a>
        <a href="clientes_dashboard.php"><i class="uil uil-user"></i><span class="link-name">Clientes</span></a>
        <a href="ayuda_dashboard.php"><i class="uil uil-question-circle"></i><span class="link-name">AYUDA</span></a>

        <ul class="logout-mode">
          <li><a href="../../index.php"><i class="uil uil-signout"></i><span class="link-name">SALIR</span></a></li>
        </ul>
      </div>
    </nav>

    <section class="dashboard">
      <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <h3>Dashboard</h3>
        <h4 class="user">Arianna Vinueza</h4>
        <img src="../../img/Juventud.jpg" alt="" />
      </div>

      <div class="panel">
        
      </div>
    </section>

    <script>
      /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
      }
    </script>
  </body>
  <footer>
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