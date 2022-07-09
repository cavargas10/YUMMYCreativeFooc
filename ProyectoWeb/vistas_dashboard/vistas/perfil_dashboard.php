 <?php
  include("../../seguridad/seguridad.php");
  include_once "../controlador/controlador_admin.php";
  include_once "../modelo/modelo_admin.php";
  extract($_GET);

  $control2 = new modelo_admin();
  $idUsuario = $_SESSION['idUsuario'];
  $lista = $control2->EncontrarAdmin($idUsuario);

  $control = new controlador_admin();
  $control->UpdateAdmin($idUsuario);
  ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="../estilos/dashboard_principal.css">
   <link rel="stylesheet" href="../estilos/dashboard_perfil.css">
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
       <div>
         <form class="formUser" method="post" action="">
           <div class="tituloUser">
             <h2 class="actualizarUser"><span>ACTUALIZAR DATOS</h2>
           </div>

           <div class="contenedorFormUser">

              <label for="nombre_Usuario"><b>Nombre:</b></label>
              <input type="text" name="nombre_Usuario" id="nombre_Usuario" value="<?php echo $lista[1] ?>"><br>

              <br><label for="apellido_Usuario"><b>Apellido:</b></label>
              <input type="text" name="apellido_Usuario" id="apellido_Usuario" value="<?php echo $lista[2] ?>"><br>

              <br><label for="correo_Usuario"><b>E-mail:</b></label>
              <input type="email" name="correo_Usuario" id="correo_Usuario" value="<?php echo $lista[3] ?>"><br>

              <br><label for="clave_Usuario"><b>Contraseña:</b></label>
              <input type="password" name="clave_Usuario" id="clave_Usuario" value="<?php echo $lista[4] ?>"><br>
            </div>
            <div class="boton">
              <br><button type="submit" value="Procesar" class="subbtn">Guardar y Salir</button>
            </div>
         </form>
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