<?php
include("../seguridad/seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yummi Creative Food</title>
    <link rel="stylesheet" href="../css/style_gruposEta.css" />
    <link rel="stylesheet" href="../css/dropdown_User.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="js/main.js"></script>
</head>

<body>
    <header>
        <div class="menu">
            <nav>
                <a href="index_user.php" class="enlace">
                    <img src="../img/logo.png" alt="" class="logo">
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
                        <a href="perfil_user.php">Perfil</a>
                        <a href="../seguridad/exit.php?salir=true">Salir</a>
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

    <div class="grid">
        <div class="new-recetas">
            <h1 class="grup_et"><span>Grupos</span> Etarios
                <hr>
            </h1><br>
        </div>
        <section class="container-card-recet">
            <div class="card-recet">
                <a href="grupoEta_info_user.php">
                    <img src="../img/Embarazada.jpg" />
                    <h1 class="card-title text-medium">Madre en estado de gestación </h1>
                </a>
            </div>
        </section>

        <section class="container-card-recet">
            <div class="card-recet">
                <img src="../img/PrimeraInfancia.jpg" />
                <h1 class="card-title text-medium">Primera Infancia</h1>

            </div>
        </section>

        <section class="container-card-recet">
            <div class="card-recet">
                <img src="../img/SegundaInfancia.jpg" />
                <h1 class="card-title text-medium">Segunda Infancia</h1>

            </div>
        </section>

        <section class="container-card-recet">
            <div class="card-recet">
                <img src="../img/Adolecencia.jpg" />
                <h1 class="card-title text-medium">Adolescencia</h1>

            </div>
        </section>

        <section class="container-card-recet">
            <div class="card-recet">
                <img src="../img/Juventud.jpg" />
                <h1 class="card-title text-medium">Juventud</h1>

            </div>
        </section>

        <section class="container-card-recet">
            <div class="card-recet">
                <img src="../img/Adultez.jpg" />
                <h1 class="card-title text-medium">Adultez</h1>
            </div>
        </section>

        <section class="container-card-recet">
            <div class="card-recet">
                <img src="../img/Mayor.jpg" />
                <h1 class="card-title text-medium">Vejez</h1>
            </div>
        </section>
    </div>
</body>


<footer>
    <div class="content">
        <div class="top">
            <div class="logo-details">
                <img src="../img/logo.png" alt="" class="logo">
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