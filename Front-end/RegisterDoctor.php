<?php
include("../Back-end/registerDoc.php");
if (isset($_POST['registerD'])) {
    // Call the addPatient function
    addDoc($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Find easily a doctor and book online an appointment">
  <meta name="author" content="Ansonika">
  <title>FINDOCTOR - Find easily a doctor and book online an appointment</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- BASE CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/menu.css" rel="stylesheet">
  <link href="css/vendors.css" rel="stylesheet">
  <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">

  <!-- YOUR CUSTOM CSS -->
  <link href="css/custom.css" rel="stylesheet">

</head>

<body>

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<div id="preloader">
  <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<header class="header_sticky">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div id="logo">
          <a href="Index.html" title="Findoctor"><img src="../img/logo.png" alt="" width="163" height="36"></a>
        </div>
      </div>
      <nav class="col-lg-9 col-6">
        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
        <div class="main-menu">
          <ul>
            <li >
              <a href="Index.html" >Home<i ></i></a>
            </li>
            <li class="submenu">
              <a href="#0" class="show-submenu">Pages<i class="icon-down-open-mini"></i></a>
              <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="Register.php">Register Patient</a></li>
                <li><a href="aboutUs.html">About Us</a></li>
                <li><a href="contactUs.html">Contacts</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /main-menu -->
      </nav>
    </div>
  </div>
  <!-- container -->
</header>
<!-- /header -->

<main>
  <div id="hero_register">
    <div class="container margin_120_95">
      <div class="row">
        <div class="col-lg-6">
          <h1>It's time to find you!</h1>
          <p class="lead">Te pri adhuc simul. No eros errem mea. Diam mandamus has ad. Invenire senserit ad has, has ei quis iudico, ad mei nonumes periculis.</p>
          <div class="box_feat_2">
            <i class="pe-7s-map-2"></i>
            <h3>Let patients to Find you!</h3>
            <p>Ut nam graece accumsan cotidieque. Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet.</p>
          </div>
          <div class="box_feat_2">
            <i class="pe-7s-date"></i>
            <h3>Easly manage Bookings</h3>
            <p>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. Eum no atqui putant democritum, velit nusquam sententiae vis no.</p>
          </div>
          <div class="box_feat_2">
            <i class="pe-7s-phone"></i>
            <h3>Instantly via Mobile</h3>
            <p>Eos eu epicuri eleifend suavitate, te primis placerat suavitate his. Nam ut dico intellegat reprehendunt, everti audiam diceret in pri, id has clita consequat suscipiantur.</p>
          </div>
        </div>
        <!-- /col -->
        <div class="col-lg-5 ml-auto">
          <div class="box_form">
            <form method="post" action="" onsubmit="">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" id="nD" name="nD" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name" id="prD" name="prD" required>
                  </div>
                </div>
              </div>
              <!-- /row -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Specialization" id="spc" name="spc" required>
                  </div>
                </div>
              </div>
              <!-- /row -->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="City"  id="city" name="city" required>
                  </div>
                </div>
              </div>
              <!-- /row -->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Mobile Phone" id="tel" name="tel" required>
                  </div>
              </div>
              <!-- /row -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address" id="mailD" name="mailD" required>
                  </div>
                </div>
              </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="pwd1" name="pwd1" placeholder="Your password" required>
                  </div>
                  <div class="form-group">
                      <label>Confirm password</label>
                      <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Confirm password" required>
                  </div>
                  <div id="errorRegister" ></div>
                  <script>
                      document.querySelector('form').addEventListener('submit', function(event) {
                          let pwd1 = document.getElementById('pwd1').value;
                          let pwd2 = document.getElementById('pwd2').value;
                          let error = document.getElementById('errorRegister');

                          if (pwd1 !== pwd2) {
                              error.innerHTML = "Passwords does not match";
                              error.style.color = "red"; // Set the error message color to red
                              event.preventDefault(); // Prevent form submission
                          } else {
                              error.innerHTML = ""; // Clear the error message
                          }
                      });
                  </script>
              <!-- /row -->
              <p class="text-center add_top_30"><input type="submit" class="btn_1"  name="registerD" value="Submit" ></p>
              <div class="text-center"><small>Ut nam graece accumsan cotidieque. Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet.</small></div>
            </form>
          </div>
          <!-- /box_form -->
        </div>
        <!-- /col -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /hero_register -->
</main>
<!-- /main -->

<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <p>
                    <a href="index.html" title="Findoctor">
                        <img src="../img/logo.png" alt="" width="163" height="36" class="img-fluid">
                    </a>
                </p>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>About</h5>
                <ul class="links">
                    <li><a href="aboutUs.html">About us</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="Register.php">Register as a Patient</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://29101952"><i class="icon_mobile"></i> + 29 101 952</a></li>
                    <li><a href="mailto:info@findoctor.com"><i class="icon_mail_alt"></i> help@findoctor.com</a></li>
                </ul>
                <div class="follow_us">
                    <h5>Follow us</h5>
                    <ul>
                        <li><a href="#0"><i class="social_facebook"></i></a></li>
                        <li><a href="#0"><i class="social_twitter"></i></a></li>
                        <li><a href="#0"><i class="social_linkedin"></i></a></li>
                        <li><a href="#0"><i class="social_instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-md-8">
                <ul id="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">© 2023 Findoctor</div>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->

<div id="toTop"></div>
<!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/common_scripts.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>