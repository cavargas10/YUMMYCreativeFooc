<?php
include("../../seguridad/seguridad.php");
include_once "../controlador/usuario_controlador.php";
include_once "../modelo/usuario_modelo.php";
include_once "../modelo/modelo_recetas.php";
include_once "../modelo/modelo_recetas.php";
include_once "../controlador/controlador_recetas.php";

extract($_GET);

$control2 = new usuario_modelo();

$control = new usuario_controlador();


$control3 = new modelo_recetas();

$control4 = new controlador_recetas();

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yummi Creative Food</title>
    <link rel="stylesheet" href="../../css/vista_recetas.css" />
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


        <div class="card-search">

            <form action="" method="post">

                <div class="flex-box">

                    <div class="input-box">
                        <span>Tipo receta</span>
                        <select name='categoria_Receta' id='categoria_Receta' class="tipo-receta">
                            <option value="" selected disabled>Seleccione...</option>
                            <option value='Desayunos'>Desayunos</option>
                            <option value='Almuerzos'>Almuerzos</option>
                            <option value='Meriendas'>Meriendas</option>
                            <option value='Cenas'>Cenas</option>
                            <option value='Postres'>Postres</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span>Ingredientes</span>
                        <select name="nombre_Ingredientes" id="nombre_Ingredientes" class="ingred">
                            <option value="" selected disabled>Seleccione...</option>
                            <?php
                            $control3->EncontrarIngredienteTAG();
                            ?>
                        </select>
                    </div>

                    <div class="input-box">
                        <span>Dificultad</span>
                        <select name="dificultad_Receta" id="dificultad_Receta" class="tipo-recet">
                            <option value="" selected disabled>Seleccione...</option>
                            <option value='Facil'>Facil</option>
                            <option value='Intermedio'>Intermedio</option>
                            <option value='Dificil'>Dificil</option>
                        </select>
                    </div>


                    <div class="input-box">
                        <span>Porciones</span>
                        <select name="porciones_Receta" id="porciones_Receta" class="tipo-recet">
                            <option value="" selected disabled>Seleccione...</option>
                            <option value='1 a 3'>1 a 3</option>
                            <option value='4 a 6'>4 a 6</option>
                            <option value='7 a 9'>7 a 9</option>
                            <option value='10 o mas'>10 o mas</option>
                        </select>
                    </div>

                    <input type="submit" value="Buscar" class="submit-btn" name="Enviar">
                </div>

            </form>
        </div>

        <div class="grid">

            <div class="new-recetas">
                <h1>Todas las Recetas</h1>
                <h2>Explore nuestras Recetas</h2>
            </div>
            <?php
            $control3 = new modelo_recetas();
            if (isset($_POST['Enviar'])) {
                if (isset($_POST['categoria_Receta']) == '' && isset($_POST['nombre_Ingredientes']) == '' && isset($_POST['dificultad_Receta']) == '' && isset($_POST['porciones_Receta']) == '') {
                    $control4->PresentarRecetas();
                } else {
                    $control4->BuscarReceta();
                }
            } else {
                $control4->PresentarRecetas();
            }
            ?>
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