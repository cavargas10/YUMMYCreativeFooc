<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
  <link rel="stylesheet" href="../../css/dashboard_contenido_recetas.css">
  <!-- Boxiocns CDN Link -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="wrapper">
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">CodingLab</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#">
            <i class="uil uil-estate"></i>
            <span class="link_name">Dashboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Dashboard</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
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
            <li><a href="#">Recetas</a></li>
            <li><a href="#">Ingredientes</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Videos</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
          <i class="uil uil-chart-line"></i>
            <span class="link_name">Gráficos</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Gráficos</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
          <i class="uil uil-users-alt"></i>
            <span class="link_name">Clientes</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Clientes</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
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
            <i class="uil uil-signout"></i>
          </div>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">Drop Down Sidebar</span> <br />
      </div>


    </section>
  </div>

  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    /* sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    }); */
    $(function () {
      /* console.log("width: "+ document.body.clientWidth); */
      
      resizeScreen();
      $(window).resize(function(){
        resizeScreen();
      });
      $('.bx-menu').click(function(){

        // 點選選單按鈕時，大螢幕為新增或移除.close，小螢幕新增或移除.small-screen預設有.close，
        if(document.body.clientWidth > 400){
          $('.sidebar').toggleClass('close');
        }else{
          $('.sidebar').toggleClass('small-screen');
        }
      });
      
      function resizeScreen() {
        // 大螢幕.sidebar預設為沒有.close，小螢幕.sidebar預設為有.close
        if(document.body.clientWidth < 400){
          $('.sidebar').addClass('close');
        }else{
          $('.sidebar').removeClass('close');
        }
      }
    });
  </script>
</body>

</html>