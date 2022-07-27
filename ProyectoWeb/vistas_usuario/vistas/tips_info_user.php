<?php
include("../../seguridad/seguridad.php");
include_once "../controlador/usuario_controlador.php";
include_once "../modelo/usuario_modelo.php";
include_once "../modelo/modelo_tips.php";
extract($_GET);

$control2 = new usuario_modelo();

$control = new usuario_controlador();

$control2 = new modelo_tips();
$lista = $control2->EncontrarTips($idtips);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yummi Creative Food</title>
    <link rel="stylesheet" href="../../css/abc.css" />
    <link rel="stylesheet" href="../../css/vista_tips_info.css" />
    <link rel="stylesheet" href="../../css/vista_dropdown_User.css" />
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/super-build/ckeditor.js"></script>
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
                    <li><a href="recetas_user.php">Recetas</a></li>
                    <li><a class="active" href="tips_user.php">Tips</a></li>
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


    <div class="contenido">
        <h1 class="tips"><span><?php echo $lista[1] ?></span>
        </h1><br>
        <div class="ck-content">
            <?php echo $lista[3] ?>
        </div>
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
            <ul class="box input-box">
                <li class="link_name">Suscribete</li>
                <!-- Boton Signup -->
                <button onclick="document.getElementById('id03').style.display='block'">Suscribete</button>

                <!-- Modal Signup -->
                <div id="id03" class="modal">

                    <form class="modal-content animate" action="">
                        <div class="tittle-modal">
                            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <h2 class="sus">Suscribete</h2>
                        </div>
                        <div class="container-form">
                            <label for="usuario"><b>Nombre</b></label><br>
                            <input type="text" placeholder="  Ingrese su Nombre" name="usuario" required><br>

                            <br><label for="usuario"><b>Apellido</b></label><br>
                            <input type="text" placeholder="  Ingrese su Apellido" name="usuario" required><br>

                            <br><label for="correo"><b>E-mail</b></label><br>
                            <input type="text" placeholder="  Ingrese su Correo Electronico" name="correo" required><br>

                            <br><label for="clave"><b>Contraseña</b></label><br>
                            <input type="password" placeholder="  Ingrese su Contraseña" name="clave" required><br>

                            <br><button type="submit">Suscribete</button>
                        </div>
                        <div class="container-sub">
                            <h4>!Ya tienes una cuenta!</h4>
                            <button type="button" class="subbtn2">Login</button>
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
<script>
CKEDITOR.ClassicEditor.create(document.querySelector('$lista'), {
        // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
        toolbar: {
          items: [
            'selectAll', '|',
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            '-',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
            'alignment', '|',
            'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', '|',
            'specialCharacters', 'horizontalLine', '|',
            'sourceEditing'
          ],
          shouldNotGroupWhenFull: true
        },
        // Changing the language of the interface requires loading the language file using the <script> tag.
        // language: 'es',
        list: {
          properties: {
            styles: true,
            startIndex: true,
            reversed: true
          }
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
        heading: {
          options: [{
              model: 'paragraph',
              title: 'Paragraph',
              class: 'ck-heading_paragraph'
            },
            {
              model: 'heading1',
              view: 'h1',
              title: 'Heading 1',
              class: 'ck-heading_heading1'
            },
            {
              model: 'heading2',
              view: 'h2',
              title: 'Heading 2',
              class: 'ck-heading_heading2'
            },
            {
              model: 'heading3',
              view: 'h3',
              title: 'Heading 3',
              class: 'ck-heading_heading3'
            },
            {
              model: 'heading4',
              view: 'h4',
              title: 'Heading 4',
              class: 'ck-heading_heading4'
            },
            {
              model: 'heading5',
              view: 'h5',
              title: 'Heading 5',
              class: 'ck-heading_heading5'
            },
            {
              model: 'heading6',
              view: 'h6',
              title: 'Heading 6',
              class: 'ck-heading_heading6'
            }
          ]
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
        placeholder: 'Welcome to CKEditor 5!',
        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
        fontFamily: {
          options: [
            'default',
            'Arial, Helvetica, sans-serif',
            'Courier New, Courier, monospace',
            'Georgia, serif',
            'Lucida Sans Unicode, Lucida Grande, sans-serif',
            'Tahoma, Geneva, sans-serif',
            'Times New Roman, Times, serif',
            'Trebuchet MS, Helvetica, sans-serif',
            'Verdana, Geneva, sans-serif'
          ],
          supportAllValues: true
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
        fontSize: {
          options: [10, 12, 14, 'default', 18, 20, 22],
          supportAllValues: true
        },
        // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
        // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
        htmlSupport: {
          allow: [{
            name: /.*/,
            attributes: true,
            classes: true,
            styles: true
          }]
        },
        // Be careful with enabling previews
        // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
        htmlEmbed: {
          showPreviews: true
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
        link: {
          decorators: {
            addTargetToExternalLinks: true,
            defaultProtocol: 'https://',
            toggleDownloadable: {
              mode: 'manual',
              label: 'Downloadable',
              attributes: {
                download: 'file'
              }
            }
          }
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
        mention: {
          feeds: [{
            marker: '@',
            feed: [
              '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
              '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
              '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
              '@sugar', '@sweet', '@topping', '@wafer'
            ],
            minimumCharacters: 1
          }]
        },
        // The "super-build" contains more premium features that require additional configuration, disable them below.
        // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
        removePlugins: [
          // These two are commercial, but you can try them out without registering to a trial.
          // 'ExportPdf',
          // 'ExportWord',
          'CKBox',
          'CKFinder',
          'EasyImage',
          // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
          // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
          // Storing images as Base64 is usually a very bad idea.
          // Replace it on production website with other solutions:
          // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
          // 'Base64UploadAdapter',
          'RealTimeCollaborativeComments',
          'RealTimeCollaborativeTrackChanges',
          'RealTimeCollaborativeRevisionHistory',
          'PresenceList',
          'Comments',
          'TrackChanges',
          'TrackChangesData',
          'RevisionHistory',
          'Pagination',
          'WProofreader',
          // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
          // from a local file system (file://) - load this site via HTTP server if you enable MathType
          'MathType'
        ]
      });
  </script>

</html>