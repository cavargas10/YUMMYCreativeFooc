<?php
include("../../seguridad/seguridad.php");
include_once "../controlador/usuario_controlador.php";
include_once "../modelo/usuario_modelo.php";
include_once "../modelo/modelo_recetas.php";
include_once "../controlador/controlador_comentario.php";
include_once "../modelo/modelo_comentario.php";
extract($_GET);

$control2 = new usuario_modelo();

$control = new usuario_controlador();

$control3 = new modelo_recetas();
$lista = $control3->EncontrarRecetas($idReceta);

$control4 = new controlador_comentario();
$control4->CreateComentarios($idReceta);

// date_default_timezone_set('America/Guayaquil');
// setlocale(LC_TIME, 'es_EC.UTF-8','esp');
// $fecha = date("Y-m-d");
// /* Convertimos la fecha a marca de tiempo */
// $marca = strtotime($fecha);
// strftime('%A %e de %B de %Y', $marca);
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
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
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
        <h1><?php echo $lista[1] ?></h1><br>
        <section class="primera_sec">
            <div class="izq">
                <button class="im1">Imagen </button>
                <button class="im2">Video</button>
                <button class="im3">Diseño 3D</button>
                <img class="img3d" src="<?php echo $lista[4] ?>" alt="">
            </div>

            <aside class="der">

                <button class="tablink" onclick="openCity('London', this, 'rgb(203, 170, 120)')" id="defaultOpen">Tabla <br> Nutricional</button>
                <button class="tablink" onclick="openCity('Paris', this, 'rgb(203, 170, 120)')">Semáforo Nutricional</button>

                <div id="London" class="tabcontent">
                    <h1 class="tabla">Tabla Nutricional</h1><br><br>
                    <p><?php echo $lista[8] ?> kcal = <?php echo $lista[7] ?> kj /por porción</p>
                    <p><?php echo $lista[8] ?> (Kca) Energia</p>
                    <p><?php echo $lista[9] ?> (g) Proteina</p>
                    <p><?php echo $lista[10] ?> (g) Fibra</p>
                    <p><?php echo $lista[11] ?> (mg) Calcio</p>
                    <p><?php echo $lista[12] ?> (mg) Hierro</p>
                    <p><?php echo $lista[13] ?> (g) Carbohidratos</p>
                    <p><?php echo $lista[14] ?> (g) Azucares</p>
                    <p><?php echo $lista[15] ?> (g) Azucar Añadido</p>
                    <p><?php echo $lista[16] ?> (mg) Potasio</p>
                    <p><?php echo $lista[17] ?> (mg) Sodio</p>
                    <p><?php echo $lista[18] ?> (g) Grasas</p>
                    <p><?php echo $lista[19] ?> (g) Grasas Saturadas</p>
                </div>

                <div id="Paris" class="tabcontent">
                    <h1>Semáforo Nutricional</h1><br><br>
                    <div class="sem">
                        <!-- AZUCAR -->
                        <?php if ($lista[25] == 'Alto') {
                            echo "  <div class='alto'>
                                        <p>ALTO</p>
                                    </div>
                                    <div class='az'>
                                        <p>en <b>AZÚCAR</b></p>
                                    </div>";
                        } elseif ($lista[25] == 'Medio') {
                            echo "  <div class='medio'>
                                        <p>MEDIO</p>
                                    </div>
                                    <div class='gr'>
                                        <p>en <b>AZÚCAR</b></p>
                                    </div>";
                        } elseif ($lista[25] == 'Bajo') {
                            echo "  <div class='bajo'>
                                        <p>BAJO</p>
                                    </div>
                                    <div class='sal'>
                                        <p>en <b>AZÚCAR</b></p>
                                    </div>";
                        } elseif ($lista[25] == 'No contiene') {
                            echo "  <div class='no'>
                                        <p>No contiene</p>
                                    </div>
                                    <div class='cont'>
                                        <p><b>AZÚCAR</b></p>
                                    </div>";
                        }

                        // SAL
                        if ($lista[26] == 'Alto') {
                            echo "  <div class='alto'>
                                        <p>ALTO</p>
                                    </div>
                                    <div class='az'>
                                        <p>en <b>SAL</b></p>
                                    </div>";
                        } elseif ($lista[26] == 'Medio') {
                            echo "  <div class='medio'>
                                        <p>MEDIO</p>
                                    </div>
                                    <div class='gr'> 
                                        <p>en <b>SAL</b></p>
                                    </div>";
                        } elseif ($lista[26] == 'Bajo') {
                            echo "  <div class='bajo'>
                                        <p>BAJO</p>
                                    </div>
                                    <div class='sal'>
                                        <p>en <b>SAL</b></p>
                                    </div>";
                        } elseif ($lista[26] == 'No contiene') {
                            echo "  <div class='no'>
                                        <p>No contiene</p>
                                    </div>
                                    <div class='cont'>
                                        <p><b>SAL</b></p>
                                    </div>";
                        }

                        // GRASA
                        if ($lista[27] == 'Alto') {
                            echo "  <div class='alto'>
                                        <p>ALTO</p>
                                    </div>
                                    <div class='az'>
                                        <p>en <b>GRASA</b></p>
                                    </div>";
                        } elseif ($lista[27] == 'Medio') {
                            echo "  <div class='medio'>
                                        <p>MEDIO</p>
                                    </div>
                                    <div class='gr'>
                                        <p>en <b>GRASA</b></p>
                                    </div>";
                        } elseif ($lista[27] == 'Bajo') {
                            echo "  <div class='bajo'>
                                        <p>BAJO</p>
                                    </div>
                                    <div class='sal'>
                                        <p>en <b>GRASA</b></p>
                                    </div>";
                        } elseif ($lista[27] == 'No contiene') {
                            echo "  <div class='no'>
                                        <p>No contiene</p>
                                    </div>
                                    <div class='cont'>
                                        <p><b>GRASA</b></p>
                                    </div>";
                        }
                        ?>
                    </div>
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

        <div class="new-recetas">
            <h2><?php echo $lista[1] ?></h2>
        </div>

        <div class="ingredientes">
            <div class="ing_izq">
                <h2>INGREDIENTES </h2><br>
                <ul style="list-style-type: square;">
                    <div class="ck-content">
                        <?php echo $lista[23] ?>
                    </div>
                </ul>
            </div>
            <hr width="1" size="220" color="black">
            <div class="ing_der">
                <h5><i class="uil uil-clock-nine"></i> Preparación: <?php echo $lista[20] ?> min.</h5><br>
                <h5><i class="uil uil-crockery"></i> Porciones: <?php echo $lista[21] ?> porciones.</h5><br>
                <h5><i class="uil uil-signal-alt-3"></i> Dificultad: <?php echo $lista[22] ?></h5><br>
                <h5><i class="uil uil-share-alt"></i> Compartir Receta:
                    <div class="media-icons">
                        <a href="https://www.facebook.com"><i class="uil uil-facebook-f"></i></a>
                        <a href="https://www.twitter.com"><i class="uil uil-twitter"></i></a>
                        <a href="https://www.instagram.com"><i class="uil uil-instagram"></i></a>
                    </div>
                </h5>

            </div>
        </div>

        <div class="new-recetas">
            <h2>Instrucciones</h2>
            <div class="ck-content">
                <?php echo $lista[24] ?>
            </div>
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
                        <p class="cat">Categoría </p>
                        <a href="new_receta.php">
                            <h1 class="card-title text-medium">Mushroon and cream vegan vegetables </h1>
                        </a>
                        <div class="card-inf"><br>
                            <p class="text-medium"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem deserunt
                                officia ipsam architecto, deleniti nobis..</p>
                            <h3><i class="uil uil-user-circle"></i> Grupo etario: </h3>
                            <h3><i class="uil uil-graph-bar"></i> Dificultad: </h3>
                            <h3><i class="uil uil-clock-eight"></i> Tiempo: </h3>
                        </div>
                        <div class="val">
                            <p class="valor">★ <br> 4.5</p>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="comentarios">
            <div class="new-comentarios">
                <h2>Comentarios</h2>
            </div>

            <form class="formComentario" method="post" action="">
                <div class="contenedorFormComentarios">
                    
                    <label for="valoracion_Comentario"><b>Valoracion: </b> <span id="rateYo"></span></label>

                    <input type="hidden" name="rating" id="rating">

                    <label for="comentario"><b>Comentario:</b></label><br>
                    <textarea name="comentario" id="comentario" maxlength="100" required cols="30" rows="10" placeholder="Ingrese un Comentario!"></textarea>
                    
                </div>
                <div>
                    <br><button type="submit" value="Procesar" class="subbtnTips">Enviar</button>
                </div>
            </form>
        </div>
        <div class="comentariosUsuarios">
            <?php
            $control = new controlador_comentario();
            $control->ListaComentarios($idReceta);
            ?>
        </div>
    </main>
    <script>
        $(function() {
            $("#rateYo").rateYo({
                rating: 0,
                spacing: "10px",
                fullStar: true,
                starWidth: "30px",
                numStars: 5,
                minValue: 1,
                maxValue: 5,
                multiColor: {
                    "startColor": "#FF0000", //RED
                    "endColor": "#FFCC00" //GREEN
                },
                onSet: function(rating, rateYoInstance) {
                     $("#rating").val(rating);
                }
            });
        });
    </script>
</body>


<footer>
    <div class="content">
        <div class="top">
            <div class="logo-details">
                <img src="../../img/logo.png" alt="" class="logo">
                <H2 class="nombre"><span>Yummy</span> Creative Food</H2>.
            </div>
            <div class="media-icons">
                <a href="https://www.facebook.com"><i class="uil uil-facebook-f"></i></a>
                <a href="https://www.twitter.com"><i class="uil uil-twitter"></i></a>
                <a href="https://www.instagram.com"><i class="uil uil-instagram"></i></a>
                <a href="https://www.youtube.com"><i class="uil uil-youtube"></i></a>

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