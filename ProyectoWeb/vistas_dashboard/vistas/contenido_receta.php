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
    

    <div class="addReceta">
        <form class="formReceta" method="post" action="">
          <div class="tituloReceta">
            <h2 class="agregarReceta">AGREGAR RECETAS</h2><br>
          </div>

          <div class="contenedorFormReceta">
          <h2>TITULO</h2>
            <label for="tituloReceta"><b>Título:</b></label>
            <input type="text" name="tituloReceta" id="tituloReceta" placeholder="Ingrese el titulo de la receta"><br>
            <label for="descripcionReceta"><b>Descripción:</b></label>
            <input type="text" name="descripcionReceta" id="descripcion-Receta" placeholder="Ingrese la descripcion de la receta"><br>
            <label for="grupoReceta"><b>Grupo Etario:</b></label>
            <input type="text" name="example" list="exampleList">
              <datalist id="exampleList">
                <option value="Embarazo">  
                <option value="Niñez">
              </datalist>
              <br><button type="submit" value="Procesar" class="btnIngredientes">NEXT</button>
              <br><br>
          
          <h2>ESPECIFICACIONES</h2>
            <label for="tiempoReceta"><b>Tiempo Preparación:</b></label>
            <input type="text" name="tiempoReceta" id="tiempoReceta" placeholder="Ingrese el tiempo de preparación de la receta"><br>
            <label for="dificultadReceta"><b>Dificultad:</b></label>
            <input type="text" name="example" list="exampleList1">
              <datalist id="exampleList1">
                <option value="Alto">  
                <option value="Medio">
                <option value="Bajo">
              </datalist><br>
              <label for="porcionesReceta"><b>Porciones:</b></label>
              <input type="text" name="example" list="exampleList2">
              <datalist id="exampleList2">
                <option value="3 - 5">  
                <option value="5 - 7">
              </datalist>
              <br><button type="submit" value="Procesar" class="btnIngredientes">NEXT</button>
              <br><br>

          <h2>VALOR NUTRICIONAL</h2>
            <label for="cantidadIngrediente"><b>Cantidad:</b></label>
            <input type="text" name="cantidadIngrediente" id="cantidadIngrediente" placeholder="Ingrese la cantidad del ingrediente"><br>
            <label for="umIngrediente"><b>Unidad de medida:</b></label>
            <input type="text" name="example" list="exampleList3">
              <datalist id="exampleList3">
                <option value="gr">  
                <option value="lb">
              </datalist><br>
            <label for="valorNutricional"><b>Valor Nutricional:</b></label>
            <input type="text" name="example" list="exampleList4">
              <datalist id="exampleList4">
                <option value="...">  
                <option value="..">
              </datalist>
              <br><button type="submit" value="Procesar" class="btnIngredientes">NEXT</button>
              <br><br>
              
              <h2>SEMÁFORO</h2>
              <label for="azucar"><b>Azúcar:</b></label>
            <input type="text" name="example" list="exampleList5">
              <datalist id="exampleList5">
                <option value="Alto">  
                <option value="Medio">
                <option value="Bajo">
              </datalist><br>
              <label for="grasa"><b>Grasa:</b></label>
            <input type="text" name="example" list="exampleList5">
              <datalist id="exampleList5">
                <option value="Alto">  
                <option value="Medio">
                <option value="Bajo">
              </datalist><br>
              <label for="sal"><b>Sal:</b></label>
            <input type="text" name="example" list="exampleList5">
              <datalist id="exampleList5">
                <option value="Alto">  
                <option value="Medio">
                <option value="Bajo">
              </datalist>
              <br><button type="submit" value="Procesar" class="btnIngredientes">NEXT</button>
              <br><br>

              <h2>INGREDIENTE</h2>
            <label for="cantidadIngrediente"><b>Cantidad:</b></label>
            <input type="text" name="cantidadIngrediente" id="cantidadIngrediente" placeholder="Ingrese la cantidad del ingrediente"><br>
            <label for="umIngrediente"><b>Unidad de medida:</b></label>
            <input type="text" name="example" list="exampleList3">
              <datalist id="exampleList3">
                <option value="gr">  
                <option value="lb">
              </datalist><br>
            <label for="ingrediente"><b>Ingrediente:</b></label>
            <input type="text" name="example" list="exampleList4">
              <datalist id="exampleList4">
                <option value="...">  
                <option value="..">
              </datalist>
              <br><button type="submit" value="Procesar" class="btnIngredientes">NEXT</button>
              <br><br>

            <h2>PASOS</h2>
            <label for="nroPaso"><b>Número de paso:</b></label>
            <input type="text" name="nroPaso" id="nroPaso" placeholder="Ingrese el número de paso"><br>
            <label for="desccripcionPaso"><b>Descripción de paso:</b></label>
            <input type="text" name="desccripcionPaso" id="desccripcionPaso" placeholder="Ingrese la descripción del paso"><br>
            <label for="imagenPaso"><b>Imagen del paso:</b></label>
            <input type="file" name="imagenPaso" id="imagenPaso">
            <br><button type="submit" value="Procesar" class="btnIngredientes">NEXT</button>
            <br><br>

            
            <h2>MODELOS</h2>
            <label for="imagenReceta"><b>Imagen de la receta:</b></label>
            <input type="file" name="imagenReceta" id="imagenReceta"><br>
            <label for="videoReceta"><b>Video de la receta:</b></label>
            <input type="url" name="videoReceta" id="videoReceta"><br>
            <label for="modeloReceta"><b>Modelo 3D de la receta:</b></label>
            <input type="url" name="modeloReceta" id="modeloReceta">
            <br><button type="submit" value="Procesar" class="btnIngredientes">NEXT</button>
            <br><br>
            
          </div>
          <div class="boton">
            <br><button type="submit" value="Procesar" class="btnIngredientes">Guardar</button>
          </div>
        </form>
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
    console.log(sidebarBtn);
    /* sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    }); */
    $(function () {
      /* console.log("width: "+ document.body.clientWidth); */
      
      resizeScreen();
      $(window).resize(function(){
        resizeScreen();
      })
  
      
      
      function resizeScreen() {
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