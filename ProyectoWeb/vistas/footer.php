    <footer>
      <div class="content">
        <div class="top">
          <div class="logo-details">
            <img src="img/logo.png" alt="" class="logo">
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

              <form class="modal-content animate" action="">
                <div class="tittle-modal">
                  <span onclick="document.getElementById('id03').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                  <h2 class="sus">Suscribete</h2>
                </div>
                <div class="container-form">
                  <label for="usuario"><b>Usuario</b></label><br>
                  <input type="text" placeholder="  Ingrese su Usuario" name="usuario" required><br>

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
</body>
</html>