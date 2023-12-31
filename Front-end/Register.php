<?php
include("../Back-end/registration.php");
if (isset($_POST['register'])) {
    // Call the addPatient function
    addPatient($_POST);
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
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/vendors.css" rel="stylesheet">
    <link href="../css/icon_fonts/css/all_icons_min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">

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
                                <li><a href="../RegisterDoctor.html">Register Doctor</a></li>
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
<!-- /Header -->

<main>
    <div class="bg_color_2">
        <div class="container margin_60_35">
            <div id="register">
                <h1>Please register to Findoctor!</h1>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <form method="post" action="" onsubmit="" >
                            <div class="box_form">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="nom" placeholder="Your name" required>
                                </div>
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" name="pr" placeholder="Your last name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="mail" placeholder="Your email address" required>
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
                                <div class="form-group text-center add_top_30">
                                    <input class="btn_1"  name="register" type="submit" value="Submit" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /register -->
        </div>
    </div>
</main>
<!-- /main -->

<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <p>
                    <a href="Index.html" title="Findoctor">
                        <img src="../img/logo.png" alt="" width="163" height="36" class="img-fluid">
                    </a>
                </p>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>About</h5>
                <ul class="links">
                    <li><a href="aboutUs.html">About us</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="Register.php">Register</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="#0">Doctors</a></li>
                    <li><a href="#0">Clinics</a></li>
                    <li><a href="RegisterDoctor.php">Join as a Doctor</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="icon_mobile"></i> + 61 23 8093 3400</a></li>
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
<script src="../js/jquery-3.6.3.min.js"></script>
<script src="../js/common_scripts.min.js"></script>
<script src="../js/functions.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="../js/pw_strenght.js"></script>
</body>
</html>