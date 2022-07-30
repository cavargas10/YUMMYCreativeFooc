<?php
include("../../seguridad/seguridad.php");
include_once "../controlador/controlador_receta.php";
include_once "../modelo/modelo_receta.php";
extract($_GET);
$control = new controlador_receta();
$control->CreateReceta();

$control3 = new modelo_receta();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../estilos/dashboard_principal.css">
  <link rel="stylesheet" href="../estilos/dashboard_agregar_receta.css">
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
          <div class="icon-link">
            <a href="ayuda_dashboard.php">
              <i class="uil uil-question-circle"></i>
              <span class="link_name">AYUDA</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">AYUDA</a></li>
            <li><a href="ayuda_videos_dashboard.php">Videos</a></li>
            <li><a href="ayuda_manual_dashboard.php">Manual de Usuario</a></li>
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
        <form class="formReceta" id="formReceta" method="post" action="" enctype="multipart/form-data">
          <div class="tituloReceta">
            <h2 class="agregarReceta">AGREGAR RECETAS</h2><br>
          </div>
          <div class="contenedorFormReceta">

            <div class="tab">
              <label for="titulo_Receta"><b>Título:</b></label>
              <p><input type="text" name="titulo_Receta" id="titulo_Receta" placeholder="Ingrese el titulo de la receta" required></p>
              <label for="descripcion_Receta"><b>Descripción:</b></label>
              <p><input type="text" name="descripcion_Receta" id="descripcion_Receta" placeholder="Ingrese la descripcion de la receta" required></p>
              <label for="categoria_Receta"><b>Categoria Receta:</b></label>
              <p><select name='categoria_Receta' id='categoria_Receta' required><br>
                  <option>Seleccione...</option>
                  <option value='Desayunos'>Desayunos</option>
                  <option value='Almuerzos'>Almuerzos</option>
                  <option value='Meriendas'>Meriendas</option>
                  <option value='Cenas'>Cenas</option>
                  <option value='Postres'>Postres</option>
                </select></p>
              <label for="grupoEtario"><b>Grupo Etario:</b></label>
              <p><select name="grupoEtario" id="grupoEtario" required><br>
                  <option>Seleccione...</option>
                  <option value='Embarazo'>Embarazo</option>
                  <option value='Primera Infancia'>Primera Infancia</option>
                  <option value='Segunda Infancia'>Segunda Infancia</option>
                  <option value='Adolescencia'>Adolescencia</option>
                  <option value='Juventud'>Juventud</option>
                  <option value='Adultez'>Adultez</option>
                  <option value='Vejez'>Vejez</option>
                </select></p>
            </div>

            <div class="tab">
              <label for="imagen_Receta"><b>Imagen:</b></label>
              <p><input type="file" name="imagen_Receta" id="imagen_Receta" accept="image/*" required><br></p>
              <label for="url_Receta"><b>Video:</b></label>
              <p><input type="url" name="url_Receta" id="url_Receta" placeholder="Ingrese el link de youtube" required><br></p>
              <label for="tresD_Receta"><b>3D:</b></label>
              <p><input type="url" name="tresD_Receta" id="tresD_Receta" placeholder="Ingrese el link de sketchfab" required><br></p>
            </div>


            <div class="tab">
              <label for="tiempo_Receta"><b>Tiempo (min):</b></label>
              <p><input type="numer" name="tiempo_Receta" id="tiempo_Receta" placeholder="Ingrese el tiempo de la receta min." required><br></p>

              <label for="porciones_Receta"><b>Porciones:</b></label>
              <p><select name="porciones_Receta" id="porciones_Receta" required><br>
                  <option>Seleccione...</option>
                  <option value='1 a 3'>1 a 3</option>
                  <option value='4 a 6'>4 a 6</option>
                  <option value='7 a 9'>7 a 9</option>
                  <option value='10 o mas'>10 o mas</option>
                </select></p>
              <label for="dificultad_Receta"><b>Dificultad:</b></label>
              <p><select name="dificultad_Receta" id="dificultad_Receta" required><br>
                  <option>Seleccione...</option>
                  <option value='Facil'>Facil</option>
                  <option value='Intermedio'>Intermedio</option>
                  <option value='Dificil'>Dificil</option>
                </select></p>

              <label for="idingredientes"><b>Ingrediente Principal:</b></label>
              <p><select name="idingredientes" id="idingredientes" required><br>
                  <option>Seleccione...</option>
                  <?php
                  $control3->EncontrarIngredienteTAG();
                  ?>
                </select></p>
            </div>


            <div class="tab">
              <label for="azucar"><b>Azucar:</b></label>
              <p><select name="azucar" id="azucar" required><br>
                  <option>Seleccione...</option>
                  <option value='Alto'>Alto</option>
                  <option value='Medio'>Medio</option>
                  <option value='Bajo'>Bajo</option>
                  <option value='No contiene'>No contiene</option>
                </select></p>
              <label for="sal"><b>Sal:</b></label>
              <p><select name="sal" id="sal" required><br>
                  <option>Seleccione...</option>
                  <option value='Alto'>Alto</option>
                  <option value='Medio'>Medio</option>
                  <option value='Bajo'>Bajo</option>
                  <option value='No contiene'>No contiene</option>
                </select></p>
              <label for="grasa"><b>Grasa:</b></label>
              <p><select name="grasa" id="grasa" required><br>
                  <option>Seleccione...</option>
                  <option value='Alto'>Alto</option>
                  <option value='Medio'>Medio</option>
                  <option value='Bajo'>Bajo</option>
                  <option value='No contiene'>No contiene</option>
                </select></p>
            </div>

            <div class="tab">
              <label for="energia"><b>Energia (Kcal):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="energia" id="energia" placeholder="Ingrese Energia" required><br></p>
              <label for="proteina"><b>Proteina (g):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="proteina" id="proteina" placeholder="Ingrese proteina" required><br></p>
              <label for="fibra"><b>Fibra (g):</b></label></p>
              <p><input class="nutri" type="number" step=0.01 name="fibra" id="fibra" placeholder="Ingrese fibra" required><br></p>
              <label for="calcio"><b>Calcio (mg):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="calcio" id="calcio" placeholder="Ingrese calcio" required><br></p>
            </div>
            <div class="tab">
              <label for="hierro"><b>Hierro (mg):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="hierro" id="hierro" placeholder="Ingrese hierro" required><br></p>
              <label for="carbohidratos"><b>Carbohidratos (g):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="carbohidratos" id="carbohidratos" placeholder="Ingrese carbohidratos" required><br></p>
              <label for="azucares"><b>Azucares (g):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="azucares" id="azucares" placeholder="Ingrese azucares" required><br></p>
              <label for="azucarAnadido"><b>Azucar Añadido (g):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="azucarAnadido" id="azucarAnadido" placeholder="Ingrese Azucar Añadido" required><br></p>
            </div>
            <div class="tab">
              <label for="potasio"><b>Potasio (mg):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="potasio" id="potasio" placeholder="Ingrese potasio" required><br></p>
              <label for="sodio"><b>Sodio (mg):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="sodio" id="sodio" placeholder="Ingrese sodio" required><br></p>
              <label for="grasas"><b>Grasas (g):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="grasas" id="grasas" placeholder="Ingrese grasas" required><br></p>
              <label for="grasasSaturadas"><b>Grasas Saturadas (g):</b></label>
              <p><input class="nutri" type="number" step=0.01 name="grasasSaturadas" id="grasasSaturadas" placeholder="Ingrese Grasas Saturadas" required><br></p>
            </div>

            <div class="tab">
              <label for="ingredientes_Receta"><b>Ingredientes:</b></label><br>
              <div class="ck-content">
                <textarea name="ingredientes_Receta" id="ingredientes_Receta"></textarea><br>
              </div>
            </div>

            <div class="tab">
              <label for="pasos_Receta"><b>Pasos Receta:</b></label><br>
              <div class="ck-content">
                <textarea name="pasos_Receta" id="pasos_Receta"></textarea><br>
              </div>
            </div>

            <div style="overflow:auto;">
              <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
              </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>

  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    console.log(sidebarBtn);
    /* sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    }); */
    $(function() {
      /* console.log("width: "+ document.body.clientWidth); */

      resizeScreen();
      $(window).resize(function() {
        resizeScreen();
      })

      function resizeScreen() {
        if (document.body.clientWidth < 400) {
          $('.sidebar').addClass('close');
        } else {
          $('.sidebar').removeClass('close');
        }
      }
    });
  </script>

  <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("formReceta").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      y = x[currentTab].getElementsByTagName("select");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
  </script>


  <script>
    // This sample still does not showcase all CKEditor 5 features (!)
    // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
    CKEDITOR.ClassicEditor.create(document.querySelector('#ingredientes_Receta'), {
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
      language: 'es',
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
        }, ]
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
    CKEDITOR.ClassicEditor.create(document.querySelector('#pasos_Receta'), {
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