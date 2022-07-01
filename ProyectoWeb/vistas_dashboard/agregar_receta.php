<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style_dasboard.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <title>Admin Dashboard Panel</title>
  </head>
  <body>
    <nav>
      <div class="logo-name">
        <div class="logo-image">
          <img src="../img/logo.png" alt="" />
        </div>

        <span class="logo_name">Yummi Food</span>
      </div>

      <div class="menu-items">
        <ul class="nav-links">
          <li>
            <a href="#">
              <i class="uil uil-estate"></i>
              <span class="link-name">Dahsboard</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="uil uil-files-landscapes"></i>
              <span class="link-name">Contentido</span>
              <i class="uil uil-angle-down"></i>
            </a>
            <ul class="sub-nav-links">
              <li>
                <a href="#">
                  <i class="uil uil-crockery"></i>
                  <span class="link-name">Recetas</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="uil uil-favorite"></i>
                  <span class="link-name">Especiales</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="uil uil-sun"></i>
                  <span class="link-name">Tips</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="uil uil-play-circle"></i>
                  <span class="link-name">Videos</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class="uil uil-chart"></i>
              <span class="link-name">Gráficos</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="uil uil-user"></i>
              <span class="link-name">Clientes</span>
            </a>
          </li>

          <li>
            <a href="">
              <i class="uil uil-question-circle"></i>
              <span class="link-name">AYUDA</span>
            </a>
          </li>
        </ul>

        <ul class="logout-mode">
          <li>
            <a href="index.html">
              <i class="uil uil-signout"></i>
              <span class="link-name">SALIR</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="dashboard">
      <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <h3>Dashboard</h3>
        <img src="../img/Juventud.jpg" alt="" />
      </div>

      <div class="panel">
        <form id="regForm" action="">
          <h1>Register:</h1>
          <!-- One "tab" for each step in the form: -->
          <div class="tab">Name:
            <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
          </div>
          <div class="tab">Contact Info:
            <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
            <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
          </div>
          <div class="tab">Birthday:
            <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
          </div>
          <div class="tab">Login Info:
            <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
            <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
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
          </div>
        </form>

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
              document.getElementById("regForm").submit();
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
      </div>
    </section>
  </body>
</html>
