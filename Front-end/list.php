<?php

include "../Back-end/connect.php";
include "../Back-end/listD.php";
include "../Back-end/acceuil.php";
// function listD(){
//     global $db;
//     return $db->query("select * from Doctor");
// }
    // Call the connection function
    $D= listD();
    $doctorData=userDocterData();
    $id = $doctorData["idD"];
    $Doctorname = $doctorData["nomD"];
    $email = $doctorData["mailD"]
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

    <!-- SPECIFIC CSS -->
    <link href="css/date_picker.css" rel="stylesheet">

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

<header class="static">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo">
                    <a href="Index.html" title="Findoctor"><img src="img/logo.png" alt="" width="163" height="36"></a>
                </div>
            </div>
            <nav class="col-lg-9 col-6">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
                <ul id="top_access">
                    <li id="user">
                        <a href="">
                            <figure><img src="http://via.placeholder.com/150x150.jpg" alt=""></figure>
            <!-- display doctername -->
           <?php  echo $Doctorname ?>
                            
                        </a>
                    </li>
                </ul>
                <div class="main-menu">
                    <ul>
                        <li >
                            <a href="#0" class="show-submenu">Home<i class="icon-down-open-mini"></i></a>
                        </li>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">Pages<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="listP.php">Patient list/a></li>
                                <li><a href="Register.php">Register</a></li>
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
    <div id="results">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>                          </strong>                              </h4>
                </div>
                <div class="col-md-6">

                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /results -->

    <!-- /filters -->

    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-7">

                <?php
                while ($res=$D->fetch()){
                    ?>
                    <div class="strip_list wow fadeIn">
                        <a href="#0" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
                        </figure>
                        <small><?php echo $res['spc']?></small>
                        <h3>Dr. <?php echo $res['nomD']?></h3>
                        <p>I m a doctor specialist in  :<?php echo $res['spc']?></p>
                        <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
                        <ul>
                            <li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
                            <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>


                <?php } ?>
                <!-- /strip_list -->


            <!-- /col -->

            <aside class="col-lg-5" id="sidebar">
                <div id="map_listing" class="normal_list">
                </div>
            </aside>
            <!-- /aside -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!-- /main -->

<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <p>
                    <a href="index.html" title="Findoctor">
                        <img src="img/logo.png" alt="" width="163" height="36" class="img-fluid">
                    </a>
                </p>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>About</h5>
                <ul class="links">
                    <li><a href="#0">About us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#0">FAQ</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="#0">Doctors</a></li>
                    <li><a href="#0">Clinics</a></li>
                    <li><a href="#0">Specialization</a></li>
                    <li><a href="#0">Join as a Doctor</a></li>
                    <li><a href="#0">Download App</a></li>
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

<!-- SPECIFIC SCRIPTS -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/map_listing.js"></script>
<script src="js/infobox.js"></script>

</body>
</html>
