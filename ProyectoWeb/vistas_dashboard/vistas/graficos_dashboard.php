<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";
include_once "../controlador/controlador_grafico.php";
include_once "../modelo/modelo_grafico.php";
extract($_GET);
$control4 = new controlador_grafico();
$lista = $control4->ObtenerGrafico();

echo $lista;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../estilos/dashboard_principal.css">
  <link rel="stylesheet" href="../estilos/dashboard_graficos.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">

  <!-- graficas -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

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
          <a href="dashboard_principal.php">
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
          <a href="ayuda_dashboard.php">
            <i class="uil uil-question-circle"></i>
            <span class="link_name">AYUDA</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">AYUDA</a></li>
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
        <span class="text">Dashboard</span> <br />
      </div>
      <section class="container-graf">
        <div class="grafica_uno">
          <h1>Recetas grupo etarios</h1>
          <!-- <button class="CargarDatosGraficoPastel" id="CargarDatosGraficoPastel" onclick="CargarDatosGraficoPastel()">ENVIAR</button> -->
          <canvas id="m" width="10px" height="10px">
          <script></script>
          </canvas>
        </div>
        <div class="grafica_uno">
          <h1 class="name">Comentarios por tipo de Receta</h1>
          <canvas id="q" width="10px" height="10px"></canvas>
        </div>
      </section>
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
    
    $(function() {

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


  <script>
    var jsvar = '<?=$lista?>';
    jsvar = JSON.parse(jsvar);
    let titulo = [];
    let cantidad = [];
    jsvar.forEach(element => {
      
      titulo.push(element.grupoEtario);
      cantidad.push(element["COUNT(idReceta)"]);
      console.log(titulo);console.log(cantidad);
    });
    var ctx =  document.getElementById('m');
    var myChart  = new Chart(ctx,{
      type: 'doughnut',
          data: {
            labels: titulo,
            datasets: [{
              data: cantidad,
              backgroundColor: [
                'rgba(255, 99, 132, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                'rgba(75, 192, 192, 0.7)',
                'rgba(153, 102, 255, 0.7)',
                'rgba(255, 159, 64, 0.7)',
                'rgba(205, 159, 64, 0.7)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(205, 159, 64, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        })
        </script>
  <script>
    // grafica
    const w = document.getElementById('q');
    const a = new Chart(q, {
      type: 'bar',
      data: {
        labels: ['Desayunos', 'Almuerzos', 'Meriendas', 'Cenas', 'Postres'],
        datasets: [{
          label: 'Num Comentarios',
          data: [3, 4, 2, 1, 5],
          backgroundColor: [
            'rgba(255, 99, 132, 0.8)',
            'rgba(54, 162, 235, 0.8)',
            'rgba(255, 206, 86, 0.8)',
            'rgba(75, 192, 192, 0.8)',
            'rgba(153, 102, 255, 0.8)',
            'rgba(255, 159, 64, 0.8)'
          ],
          borderColor: [
            'rgba(255, 99, 71, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
</body>

</html>