<?php
include("../../seguridad/seguridad.php");
include_once "../controlador/usuario_controlador.php";
include_once "../modelo/usuario_modelo.php";
extract($_GET);

$control2 = new usuario_modelo();

$control = new usuario_controlador();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yummi Creative Food</title>
    <link rel="stylesheet" href="../../css/vista_nueva_receta.css" />
    <link rel="stylesheet" href="../../css/vista_dropdown_User.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="js/main.js"></script>
</head>

<body>
    <header>

        <div class="menu">
            <nav>
                <a href="index_user.php" class="enlace">
                    <img src="../../img/logo.png" alt="" class="logo">
                    <H2 class="nombre"><span>Yummy</span> Creative Food</H2>.
                </a>
                <ul>
                    <li><a href="index_user.php">Inicio</a></li>
                    <li><a href="gruposEtarios_user.php">Grupos Etarios</a></li>
                    <li><a class="active" href="recetas_user.php">Recetas</a></li>
                    <li><a href="tips_user.php">Tips</a></li>
                    <li><a href="videos_user.php">Videos</a></li>
                    <li><a href="acerca_user.php">Acerca de</a></li>
                    <!-- Dropdown Uuario-->
                    <li><button onclick="myFunction()" class="dropbtn"><?php echo $_SESSION['username']; ?></button></li>
                    <div id="myDropdown" class="dropdown-content">
                        <?php
                        echo "<a href='perfil_user.php?idUsuario=" . $_SESSION['idUsuario'] . "'>Perfil</a>";
                        ?>

                        <a href="../../seguridad/exit.php?salir=true">Salir</a>
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

    <main class="container-main">
        <h1>NUEVAS RECETAS</h1>
        <section class="primera_sec">
            <div class="izq">
                <button class="im1">Imagen </button>
                <button class="im2">Video</button>
                <button class="im3">Diseño 3D</button>
                <img class="img3d" src="../../img/img3d.jpg" alt="">
            </div>

            <aside class="der">

                <button class="tablink" onclick="openCity('London', this, 'rgb(255, 153, 0)')" id="defaultOpen">Tabla <br> Nutricional</button>
                <button class="tablink" onclick="openCity('Paris', this, 'green')">Semáforo Nutricional</button>

                <div id="London" class="tabcontent">
                    <h1>Tabla Nutricional</h1>
                </div>

                <div id="Paris" class="tabcontent">
                    <h1>Semáforo Nutricional</h1>
                </div>



                <script>
                    function openCity(cityName, elmnt, color) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablink");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].style.backgroundColor = "";
                        }
                        document.getElementById(cityName).style.display = "block";
                        elmnt.style.backgroundColor = color;

                    }
                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                </script>

            </aside>
        </section>

        <section class="segunda_sec">
            <h3>
                Mushroon and cream vegan vegetables
            </h3>
        </section>
        <div class="ingredientes">
            <div class="ing_izq">
                <h2>INGREDIENTES </h2><br>
                <ul style="list-style-type: square;">
                    <input id="check1" type="checkbox" name="check1">
                    2 Tazas Carne De Res Molida <br>
                    <input id="check1" type="checkbox" name="check1">
                    2 Cucharaditas Cebolla en polvo <br>
                    <input id="check1" type="checkbox" name="check1">
                    2 Cucharaditas Ajo en Polvo <br>
                    <input id="check1" type="checkbox" name="check1">
                    1 Cucharadita Orégano seco <br>
                    <input id="check1" type="checkbox" name="check1">
                    4 Tajadas Queso Cheddar <br>
                </ul>
            </div>
            <hr width="1" size="220" color="black">
            <div class="ing_der">
                <h5><i class="uil uil-clock-nine"></i> Preparación: 37 min.</h5>
                <h5><i class="uil uil-crockery"></i> Porciones: 12 porciones.</h5>
                <h5><i class="uil uil-signal-alt-3"></i> Dificultad: intermedio</h5>
                <h5><i class="uil uil-share-alt"></i> Compartir Receta:
                    <a href="#"><i class="uil uil-facebook-f"></a></i>
                    <a href="#"><i class="uil uil-twitter"></a></i>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                </h5>

            </div>
        </div>

        <section class="segunda_sec1">
            <h3>
                INSTRUCCIONES
            </h3>
        </section>
        <div class="pasos">
            <h2>Paso 1:</h2><br>
            <h5> Coloca la carne molida, cebolla, ajo y orégano molido en un recipiente
                e integra todo formando una mezcla homogénea. Rectifica con sal y pimienta.</h5>
            <img class="paso" src="../../img/paso1.jpg" alt="">
            <h2>Paso 2:</h2><br>
            <h5>Mientras esta refrigerada la carne, prepara el guacamole aplastando en aguacate y
                mezclándolo con la cebolla, cilantro y jugo de limón. Rectifica con sal y pimienta y reserva </h5>
            <img class="paso" src="../../img/paso2.jpg" alt="">
            <h2>Paso 3:</h2><br>
            <h5> Una vez reposadas las carnes cocínalas en un sartén caliente con un poquito de aceite,
                dorándolas por 5 a 6 minutos por lado. </h5>
            <img class="paso" src="../../img/paso3.jfif" alt="">
            <h2>Paso 4:</h2><br>
            <h5> Arma las hamburguesas colocando el queso sobre la carne caliente, esta sobre el pan,
                previamente cubierto con suficiente salsa de tomate de chipotle. Sobre el queso coloca un poco
                de guacamole y acompaña con salsa de tomate adicional. </h5>
            <img class="paso" src="../../img/paso4.jpg" alt="">
        </div>

        <div class="grid">

            <div class="new-recetas">
                <h2>Recetas Relacionadas</h2>
            </div>

            <div class="container-card-recet">
                <div class="card-recet">
                    <div class="img-card-recet">
                        <img src="../../img/plato4.jpg" alt="">
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
                        <img src="../../img/plato5.jpg" alt="">
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
                        <img src="../../img/plato6.jpg" alt="">
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

        <div class="comentarios">
            <div class="new-recetas">
                <h2>Comentarios</h2>
            </div>

            <div class="center">
                <p>Valoracion:</p>
                <div class="stars">
                    <input type="radio" id="five" name="rate" value="5">
                    <label for="five"></label>
                    <input type="radio" id="four" name="rate" value="4">
                    <label for="four"></label>
                    <input type="radio" id="three" name="rate" value="3">
                    <label for="three"></label>
                    <input type="radio" id="two" name="rate" value="2">
                    <label for="two"></label>
                    <input type="radio" id="one" name="rate" value="1">
                    <label for="one"></label>
                    <span class="result"></span>
                </div>
                <p>Comentario: </p>
                <input class="comentario" type="text" placeholder="  Ingrese su Comentario aqui..." name="comentario"><br>
            </div>

            <div class="boton-comentario">
                <button onclick="document.getElementById('id01').style.display='block'">Envia tu comentario</button>
            </div>
        </div>
    </main>
</body>


<footer>
    <div class="content">
        <div class="top">
            <div class="logo-details">
                <img src="../../img/logo.png" alt="" class="logo">
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