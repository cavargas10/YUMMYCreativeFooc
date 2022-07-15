<?php
include("../../seguridad/seguridad.php");
include_once "../controlador/controlador_receta.php";
include_once "../modelo/modelo_receta.php";
extract($_GET);
$control = new controlador_receta();
$control->CreateReceta();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../estilos/dashboard_principal.css">
  <link rel="stylesheet" href="../estilos/dashboard_contenido_receta.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/super-build/ckeditor.js"></script>

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

            <label for="titulo_Receta"><b>Título:</b></label>
            <input type="text" name="titulo_Receta" id="titulo_Receta" placeholder="Ingrese el titulo de la receta" required><br>
            <label for="descripcion_Receta"><b>Descripción:</b></label>
            <input type="text" name="descripcion_Receta" id="descripcion_Receta" placeholder="Ingrese la descripcion de la receta" required>
            <br><label for="idcategoria_Receta"><b>Categoria Receta:</b></label>
            <select name="idcategoria_Receta" id="idcategoria_Receta" required><br>
              <option value="idcategoria_Receta">Seleccione...</option>
              <option value="<?php echo $lista[1]?>"></option>
            </select>
            <br><label for="imagen_Receta"><b>Imagen:</b></label>
            <input type="file" name="imagen_Receta" id="imagen_Receta" accept="image/*" required><br>
            <label for="url_Receta"><b>Video:</b></label>
            <input type="url" name="url_Video" id="url_Video" placeholder="Ingrese el link de youtube" required><br>
            <label for="url_Receta"><b>3D:</b></label>
            <input type="url" name="3d_Receta" id="3d_Receta" placeholder="Ingrese el link de sketchfab" required><br>
            <label for="grupoEtario"><b>Grupo Etario:</b></label>
            <select name="grupoEtario" id="grupoEtario" required><br>
              <option value="grupoEtario">Seleccione...</option>
              <option value="grupoEtario"></option>
            </select><br>

            <b>TABLA NUTRICIONAL</b><br>
            <label for="energia"><b>Energia:</b></label>
            <input type="number" step=0.01 name="energia" id="energia" placeholder="Ingrese Energia" required> (Kcal)<br>
            <label for="proteina"><b>Proteina:</b></label>
            <input type="number" step=0.01 name="proteina" id="proteina" placeholder="Ingrese proteina" required> (g)<br>
            <label for="fibra"><b>Fibra:</b></label>
            <input type="number" step=0.01 name="fibra" id="fibra" placeholder="Ingrese fibra" required> (g)<br>
            <label for="calcio"><b>Calcio:</b></label>
            <input type="number" step=0.01 name="calcio" id="calcio" placeholder="Ingrese calcio" required> (mg)<br>
            <label for="hierro"><b>Hierro:</b></label>
            <input type="number" step=0.01 name="hierro" id="hierro" placeholder="Ingrese hierro" required> (mg)<br>
            <label for="carbohidratos"><b>Carbohidratos:</b></label>
            <input type="number" step=0.01 name="carbohidratos" id="carbohidratos" placeholder="Ingrese carbohidratos" required> (g)<br>
            <label for="carbohidratos"><b>Azucares:</b></label>
            <input type="number" step=0.01 name="azucares" id="azucares" placeholder="Ingrese azucares" required> (g)<br>
            <label for="carbohidratos"><b>Azucar Añadido:</b></label>
            <input type="number" step=0.01 name="azucarAnadido" id="azucarAnadido" placeholder="Ingrese Azucar Añadido" required> (g)<br>
            <label for="carbohidratos"><b>Potasio:</b></label>
            <input type="number" step=0.01 name="potasio" id="potasio" placeholder="Ingrese potasio" required> (mg)<br>
            <label for="carbohidratos"><b>Sodio:</b></label>
            <input type="number" step=0.01 name="sodio" id="sodio" placeholder="Ingrese sodio" required> (mg)<br>
            <label for="carbohidratos"><b>Grasas:</b></label>
            <input type="number" step=0.01 name="grasas" id="grasas" placeholder="Ingrese grasas" required> (g)<br>
            <label for="carbohidratos"><b>Grasas Saturadas:</b></label>
            <input type="number" step=0.01 name="grasasSaturadas" id="grasasSaturadas" placeholder="Ingrese Grasas Saturadas" required> (g)<br>

            <b>SEMAFORO NUTRICIONAL</b>
            <br><label for="azucar"><b>Azucar:</b></label>
            <select name="azucar" id="azucar" required><br>
              <option value="azucar">Seleccione...</option>
              <option value="azucar"></option>
            </select>
            <br><label for="sal"><b>Sal:</b></label>
            <select name="sal" id="sal" required><br>
              <option value="sal">Seleccione...</option>
              <option value="sal"></option>
            </select>
            <br><label for="grasa"><b>Grasa:</b></label>
            <select name="grasa" id="grasa" required><br>
              <option value="grasa">Seleccione...</option>
              <option value="grasa"></option>
            </select>

            <br><b>OPCIONES</b>
            <br><label for="tiempo_Receta"><b>Título:</b></label>
            <input type="numer" name="tiempo_Receta" id="tiempo_Receta" placeholder="Ingrese el tiempo de la receta" required> min<br>
            <label for="porciones_Receta"><b>Porciones:</b></label>
            <select name="porciones_Receta" id="porciones_Receta" required><br>
              <option value="porciones_Receta">Seleccione...</option>
              <option value="porciones_Receta"></option>
            </select>
            <br><label for="dificultad_Receta"><b>Dificultad:</b></label>
            <select name="dificultad_Receta" id="dificultad_Receta" required><br>
              <option value="dificultad_Receta">Seleccione...</option>
              <option value="dificultad_Receta"></option>
            </select>

            <br><b>INGREDIENTES</b>
            <br><label for="ingredientes_Receta"><b>Ingredientes:</b></label><br>
            <div class="ck-content">
              <textarea name="ingredientes_Receta" id="ingredientes_Receta"></textarea><br>
            </div>

            <b>PASOS RECETA</b>
            <br><label for="pasos_Receta"><b>Pasos Receta:</b></label><br>
            <div class="ck-content">
              <textarea name="pasos_Receta" id="pasos_Receta"></textarea><br>
            </div>

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

<script>
    // This sample still does not showcase all CKEditor 5 features (!)
    // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
    CKEDITOR.ClassicEditor.create(document.querySelector('#ingredientes_Receta'),  {
        // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
        toolbar: {
          items: [
            'selectAll', '|',
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'removeFormat', '|',
            'bulletedList', 'numberedList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            '-',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
            'alignment', '|',
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

<script>
    // This sample still does not showcase all CKEditor 5 features (!)
    // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
    CKEDITOR.ClassicEditor.create(document.querySelector('#pasos_Receta'),  {
        // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
        toolbar: {
          items: [
            'selectAll', '|',
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'removeFormat', '|',
            'bulletedList', 'numberedList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            '-',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
            'alignment', '|',
            'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', '|',
            'specialCharacters', 'horizontalLine', '|',
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
              title: 'Parrafo',
              class: 'ck-heading_paragraph'
            },
            {
              model: 'heading2',
              view: 'h2',
              title: 'Titulo 1',
              class: 'ck-heading_heading2'
            },
            {
              model: 'heading3',
              view: 'h3',
              title: 'Titulo 2',
              class: 'ck-heading_heading3'
            },
            {
              model: 'heading4',
              view: 'h4',
              title: 'Titulo 3',
              class: 'ck-heading_heading4'
            },
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
</body>

</html>