<?php
include_once "../modelo/modelo_recetas.php";
include_once "../controlador/controlador_comentario.php";
include_once "../modelo/modelo_comentario.php";
extract($_GET);

$control3 = new modelo_recetas();
$lista = $control3->EncontrarRecetas($idReceta);

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
                <a href="../../index.php" class="enlace">
                    <img src="../../img/logo.png" alt="" class="logo">
                    <H2 class="nombre"><span>Yummy</span> Creative Food</H2>.
                </a>
                <ul>
                    <li><a href="../../index.php">Inicio</a></li>
                    <li><a href="gruposEtarios.php">Grupos Etarios</a></li>
                    <li><a class="active" href="recetas.php">Recetas</a></li>
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
            <form class="modal-content animate" method="post" action="../../dll/validar.php">
                <div class="tittle">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <p>Inicio de Sesión</p>
                </div>
                <div class="container-form">

                    <label for="correo_Usuario"><b>E-mail</b></label><br>
                    <input type="email" name="correo_Usuario" id="correo_Usuario" placeholder="Ingrese su Correo Electronico" required><br>

                    <br><label for="clave_Usuario"><b>Contraseña</b></label><br>
                    <input type="password" name="clave_Usuario" id="clave_Usuario" placeholder="Ingrese su Contraseña" required><br>
                    <br><span class="psw"><a href="#">Olvido su contraseña?</a></span><br>
                    <br><button type="submit" value="Procesar">Login</button>

                </div>
                <div class="container-sub">
                    <h4>!Aún no tienes una cuenta!</h4>
                    <!-- <button onclick="document.getElementById('id02').style.display='block'" class="subbtn">Suscribete</button>  -->
                    <button type="button" class="subbtn">Suscribete</button>
                </div>
            </form>
        </div>
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

            <div class="contenedorFormComentarios">

                <label for="valoracion_Comentario"><b>Valoracion: </b> <span id="rateYo"></span></label>

                <input type="hidden" name="rating" id="rating" class="rating">

                <label for="comentario"><b>Comentario:</b></label><br>
                <textarea name="comentario" id="comentario" maxlength="50" required cols="30" rows="10" placeholder="Ingrese un Comentario!" readonly></textarea>

            </div>
            <div>
                <button class="bt" onclick="document.getElementById('id01').style.display='block'">Enviar</button>
            </div>
        </div>
        <div class="comentariosUsuarios">
            <!-- <div class='datosComentarios'>
                    <i class='uil uil-user-square'></i>
                    <div class='nombreComentario'>
                        <p>$row[0] $row[1] dijo: </p>
                    </div>
                    <div class='valoracion'>
                        <p class='estrella'> ★</p>
                    </div>
                    <div class='descComentario'>
                        <p>$row[3]</p>
                    </div>
                </div><br> -->
            <?php
            $control = new controlador_comentario();
            $control->ListaComentarios($idReceta);
            ?>
        </div>
    </main>
    <script>
        $(function() {
            $("#rateYo").rateYo({
                readOnly: true,
                rating: 4,
                spacing: "10px",
                fullStar: true,
                starWidth: "30px",
                numStars: 5,
                minValue: 1,
                maxValue: 5,
                multiColor: {

                    "startColor": "#FF0000", //RED
                    "endColor": "#FFFF00" //GREEN
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
            <ul class="box input-box">
                <li class="link_name">Suscribete</li>
                <!-- Boton Signup -->
                <button onclick="document.getElementById('id03').style.display='block'">Suscribete</button>

                <!-- Modal Signup -->
                <div id="id03" class="modal">

                    <form class="modal-content animate" method="post" action="../internas/procesar.php">
                        <div class="tittle-modal">
                            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <h2 class="sus">Suscribete</h2>
                        </div>
                        <div class="container-form">

                            <label for="nombre_Usuario"><b>Nombre</b></label><br>
                            <input type="text" name="nombre_Usuario" id="nombre_Usuario" placeholder="Ingrese su Nombre" required><br>

                            <br><label for="apellido_Usuario"><b>Apellido</b></label><br>
                            <input type="text" name="apellido_Usuario" id="apellido_Usuario" placeholder="Ingrese su Apellido" required><br>

                            <br><label for="correo_Usuario"><b>E-mail</b></label><br>
                            <input type="email" name="correo_Usuario" id="correo_Usuario" placeholder="Ingrese su Correo Electronico" required><br>

                            <br><label for="clave_Usuario"><b>Contraseña</b></label><br>
                            <input type="password" name="clave_Usuario" id="clave_Usuario" placeholder="Ingrese su Contraseña" required><br>

                            <br><button type="submit" value="Procesar">Suscribete</button>
                        </div>
                        <div class="container-sub">
                            <h4>!Ya tienes una cuenta!</h4>
                            <button type="submit" class="subbtn2">Login</button>
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