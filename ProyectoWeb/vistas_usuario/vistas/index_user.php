<?php
include("../../seguridad/seguridad.php");
include_once "../controlador/usuario_controlador.php";
include_once "../modelo/usuario_modelo.php";
include_once "../modelo/modelo_principal.php";
extract($_GET);

$control3 = new modelo_principal();

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
    <link rel="stylesheet" href="../../css/vista_principal.css" />
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
                    <li><a class="active" href="index_user.php">Inicio</a></li>
                    <li><a href="gruposEtarios_user.php">Grupos Etarios</a></li>
                    <li><a href="recetas_user.php">Recetas</a></li>
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
        <img src="../../img/plato1.jpg" alt="" class="i1" />
        <div class="text-main">
            <h1>
                "OLVIDATE DE LA COCINA TRADICIONAL Y EMPEZEMOS CON LA COCINA
                <span>CREATIVA </span>”
            </h1>
        </div>
        <img src="../../img/plato2.png" alt="" class="i2" />

        <div class="text-second">
            <h1>La Cocina <span>CREATIVA</span></h1>
            <h2 class="h21"> Es aquella que introduce nuevas técnicas, busca innovar, quiere ser
                original en cuanto a colores, sabores, texturas, aromas y además,
                tiene en cuenta el emplatado
            </h2>
        </div>

        <div class="card-search">
            <div class="flex-box">
                <img class="gen" src="../../img/general.png" alt="">
                <div class="input-box">
                    <span>Busqueda específica</span><br>
                    <h5>Busca tu receta por categoría, dificultad, porciones...</h5>
                    <a href="recetas_user.php">
                        <input type="submit" value="Buscar" class="submit-btn" id=""></a>
                </div>
            </div>
            <div class="flex-box">
                <img class="grup" src="../../img/grupo.png" alt="">
                <div class="input-box">
                    <span>Búsqueda por grupo etario:</span><br>
                    <h5>Busca tu receta por el grupo etario...</h5>
                    <a href="gruposEtarios_user.php">
                        <input type="submit" value="Buscar" class="submit-btn" id=""></a>
                </div>
            </div>
        </div>


        <div class="grid">
            <div class="new-recetas">
                <h1>Nuevas Recetas</h1>
                <h2>Explore nuestras nuevas Recetas</h2>
            </div>
            <?php
            $control3 = new modelo_principal();
            $control3->PresentarTresRecetas();
            ?>
        </div>

        <div class="mensaje">
            <div class="inf-mensaje">
                <img src="../../img/img1.jpg" alt=""></IMg>
                <h1><br>“No empieces una dieta que terminará algun día, comienza un estilo de vida que dure para
                    siempre"</br>
                </h1>
            </div>
        </div>

        <div class="grid">
            <div class="new-recetas">
                <h1>Platos más populares</h1>
                <h2>Explora nuestras recetas más populares</h2>
            </div>
            <?php
            $control3 = new modelo_principal();
            $control3->PresentarTresRecetas();
            ?>
        </div>

        <div class="inf_general">
            <div class="com">
                <?php
                $control5 = new modelo_principal();
                $control5->ContarComentariosIndex();
                ?>
            </div>

            <div class="com">
                <?php
                $control5 = new modelo_principal();
                $control5->ContarRecetaIndex();
                ?>
            </div>

            <div class="com">
                <?php
                $control5 = new modelo_principal();
                $control5->ContarUsuariosIndex();
                ?>
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
                <li><a href="#">Embarazo</a></li>
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