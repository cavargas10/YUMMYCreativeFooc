<?php
include("../../seguridad/seguridad.php");
include_once "../controlador/controlador_receta.php";
include_once "../modelo/modelo_receta.php";
extract($_GET);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../estilos/dashboard_principal.css">
  <link rel="stylesheet" href="../estilos/dashboard_contenido_receta.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="wrapper">
    <div class="sidebar">
      <div class="logo-details">
        <img src="../../img/logo.png" alt="">
        <span class="logo_name">Yummy</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="perfil_dashboard.php">
            <i class="uil uil-estate"></i>
            <span class="link_name">Dashboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Dashboard</a></li>
          </ul>
        </li>
        <li>
          <a href="perfil_dashboard.php">
            <i class="uil uil-user-circle"></i>
            <span class="link_name">Perfil</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Perfil</a></li>
          </ul>
        </li>
        <li>
          <div class="icon-link">
            <a href="#">
              <i class="uil uil-book-open"></i>
              <span class="link_name">Contenido</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Contenido</a></li>
            <li><a href="contenido_receta.php">Recetas</a></li>
            <li><a href="contenido_ingredientes.php">Ingredientes</a></li>
            <li><a href="contenido_tips.php">Tips</a></li>
            <li><a href="contenido_videos.php">Videos</a></li>
          </ul>
        </li>
        <li>
          <a href="graficos_dashboard.php">
            <i class="uil uil-chart-line"></i>
            <span class="link_name">Gráficos</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Gráficos</a></li>
          </ul>
        </li>
        <li>
          <a href="clientes_dashboard.php">
            <i class="uil uil-users-alt"></i>
            <span class="link_name">Clientes</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Clientes</a></li>
          </ul>
        </li>
        <li>
          <div class="icon-link">
            <a href="ayuda_dashboard.php">
              <i class="uil uil-question-circle"></i>
              <span class="link_name">AYUDA</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">AYUDA</a></li>
            <li><a href="ayuda_videos_dashboard.php">Videos</a></li>
            <li><a href="ayuda_manual_dashboard.php">Manual de Usuario</a></li>
          </ul>
        </li>
        <li>
          <div class="profile-details">
            <div class="profile-content">
            </div>
            <div class="name-job">
              <div class="profile_name">Salir</div>
            </div>
            <a href="../../index.php">
              <i class="uil uil-signout"></i>
            </a>

          </div>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">Contenido / Recetas</span> <br />
      </div>

      <div class="listaReceta">
        <button class="btnReceta"><a href="agregar_receta.php">Agregar</a></button>
        <?php
        // $control = new controlador_receta();
        // $control->ListaReceta();

        if (isset($idReceta)) {
          $control1 = new controlador_receta();
          $control1->DeleteReceta($idReceta);
        }
        ?>
      </div>

      <div class="paginacion">
        <?php
        $npagina;
        if (isset($_GET['pagina'])) {
          $npagina = $_GET['pagina'];
        } else {
          $npagina = 0;
        }
        $control = new controlador_receta();
        $control->ListaRecetaPagina($npagina);

        if($npagina <= 0){
          echo "<ul>";
          echo "<h2>" . ($npagina + 1) . "</h2>";
          echo "<li><a class = 'pagina' href='contenido_receta.php?pagina=" . ($npagina + 1) . "'> > </a></li>";
          echo "</ul>";
        }else {
          echo "<ul>";
          echo "<li><a class = 'pagina' href='contenido_receta.php?pagina=" . ($npagina - 1) . "'> < </a></li>";
          echo "<h2>" . ($npagina + 1) . "</h2>";
          echo "<li><a class = 'pagina' href='contenido_receta.php?pagina=" . ($npagina + 1) . "'> > </a></li>";
          echo "</ul>";
        }
        
        ?>

      </div>
    </section>
  </div>

  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    console.log(sidebarBtn);
    /* sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    }); */
    $(function() {
      /* console.log("width: "+ document.body.clientWidth); */

      resizeScreen();
      $(window).resize(function() {
        resizeScreen();
      })



      function resizeScreen() {
        if (document.body.clientWidth < 400) {
          $('.sidebar').addClass('close');
        } else {
          $('.sidebar').removeClass('close');
        }
      }
    });
  </script>
</body>

</html>