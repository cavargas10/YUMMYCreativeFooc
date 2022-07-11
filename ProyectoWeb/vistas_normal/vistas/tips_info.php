<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yummi Creative Food</title>
    <link rel="stylesheet" href="../../css/vista_tips_info.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="js/main.js"></script>
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
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="gruposEtarios.php">Grupos Etarios</a></li>
                    <li><a href="recetas.php">Recetas</a></li>
                    <li><a class="active" href="tips.php">Tips</a></li>
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

    <div class="parrafo">
        <h1 class="tips"><span>Alcanza una </span>dieta equilibrada
            <hr>
        </h1><br>
        <div class="parte">
            <p>
                Los hábitos de alimentación siempre han sido una preocupación constante de los gobiernos y los organismos internacionales.
                Como consecuencia de una ingesta indiscriminada de alimentos hipercalóricos o la falta de acceso a vitaminas y nutrientes,
                la población mundial actualmente afronta varios problemas como malnutrición, sobrepeso y obesidad. <br>

                Desde 1975, la obesidad casi ha triplicado en todo el mundo. Según datos de la Organización Mundial de la Salud (OMS), desde
                2016 se calcula que más de 1900 millones de adultos, de 18 años en adelante tienen sobrepeso. Además, se registra que 52 millones
                de niños, menores de 5 años sufren problemas de malnutrición, como delgadez extrema y problemas de crecimiento, y 41 millones de
                infantes padecen sobrepeso y obesidad. <br>

                Por este motivo, Sofía Vivanco Zárate, docente de la carrera de Nutrición y Dietética de la UTPL resalta la importancia de cuidar
                la alimentación, y seguir algunas reglas para elaborar un menú saludable. La catedrática señala que ante todo, un plan alimenticio
                debe ser equilibrado, completo, suficiente, adecuado e inocuo. <br>
                Zárate explica que estas cualidades permitirán que una dieta mantenga una proporción correcta entre frutas, verduras y proteínas
                en el consumo diario, cuide la cantidad y calidad de los alimentos, se ajuste a la edad, sexo y condiciones específicas de cada
                persona. Adicionalmente, también ayudará a que sea apta para la ingesta, es decir, que estará libre de microorganismos y contaminantes. <br>

                Por lo general, la distribución de la alimentación debe centrarse en tres tiempos principales (desayuno, almuerzo, cena). Sin embargo,
                si una persona requiere de un aporte calórico más frecuente, se pueden fraccionar los momentos de alimentación en cinco tiempos.
            </p>
        </div>
        <img class="img_tip" src="../../img/inf_tips.png" alt="">
    </div>
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