<?php
include("../../seguridad/seguridad.php");
include_once "../controlador/usuario_controlador.php";
include_once "../modelo/usuario_modelo.php";
include_once "../modelo/modelo_grupoEta_info.php";

extract($_GET);

$control3 = new modelo_grupoEta_info();

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
    <link rel="stylesheet" href="../../css/vista_grup_inf.css" />
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
                    <li><a class="active" href="gruposEtarios_user.php">Grupos Etarios</a></li>
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

    <div class="parrafo">
        <h1 class="tips"><span>Segunda </span>Infancia
            <hr>
        </h1><br>
        <div class="parte">
            <p>
                Durante el embarazo, debes ser muy cuidadosa con tu alimentación ya que si es deficiente,
                pudieras tener una hija o hijo de bajo peso y con mayor riesgo de sufrir enfermedades o
                incluso de morir. <br>

                Cuando tu alimentación es exagerada, aumentarás de peso más de lo esperado, lo que puede
                ocasionar complicaciones en tú salud y la del bebé. <br>
            </p>
            <h3>RECOMENDACIONES</h3><br>
            <ol class="recom">
                <li>
                    Consume verduras y frutas de temporada
                </li>
                <li>
                    Incluye alimentos ricos en calcio, hierro y ácido fólico
                </li>
                <li>
                    Disminuye el consumo de pan dulce, pastelitos, galletas, frituras, pizzas, hamburguesas,
                    hot-dogs, refrescos y postres. Estos son alimentos con alto contenido de grasa y azúcares y
                    con pocas vitaminas, minerales y fibra.
                </li>
                <li>
                    Modera el consumo de la sal y de alimentos que la contengan, como: embutidos (jamón, salchichas,
                    queso de puerco, mortadela, etc.), quesos, enlatados, cecina, cátsup, agua mineral, consomé en polvo,
                    aceitunas y galletas saladas
                </li>
                <li>
                    De preferencia realice cinco comidas durante el día: Desayune, almuerce, coma, meriende y cene.
                    Incluye todos los grupos de alimentos
                </li>
            </ol>
        </div>
        <img class="img_emb" src="../../img/embarazo.jpg" alt="">
    </div><br><br>

    <div id="myBtnoContainer" class="myBtnoContainer">
        <button class="btno active" onclick="filterSelection('all')"> Todos</button>
        <button class="btno" onclick="filterSelection('Desayunos')"> Desayunos</button>
        <button class="btno" onclick="filterSelection('Almuerzos')"> Almuerzos</button>
        <button class="btno" onclick="filterSelection('Meriendas')"> Meriendas</button>
        <button class="btno" onclick="filterSelection('Cenas')"> Cenas</button>
        <button class="btno" onclick="filterSelection('Postres')"> Postres</button>

    </div>

    <!-- Portfolio Gallery Grid -->
    <div class="grid">
        <div class="row">
            <?php
            $control3 = new modelo_grupoEta_info();
            //$control3->PresentarRecetas();
            $control3->PresentarRecetasGSInfancia();
            ?>
        </div>
    </div>

    <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }


        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnoContainer");
        var btns = btnContainer.getElementsByClassName("btno");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("btno active");
                current[0].className = current[0].className.replace(" active", " ");
                this.className += " active";
            });
        }
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