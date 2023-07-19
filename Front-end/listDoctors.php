<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Find easily a doctor and book online an appointment"
    />
    <meta name="author" content="Ansonika" />
    <title>
      FINDOCTOR - Find easily a doctor and book online an appointment
    </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      href="img/apple-touch-icon-57x57-precomposed.png"
    />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      sizes="72x72"
      href="img/apple-touch-icon-72x72-precomposed.png"
    />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      sizes="114x114"
      href="img/apple-touch-icon-114x114-precomposed.png"
    />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      sizes="144x144"
      href="img/apple-touch-icon-144x144-precomposed.png"
    />

    <!-- GOOGLE WEB FONT -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/menu.css" rel="stylesheet" />
    <link href="css/vendors.css" rel="stylesheet" />
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet" />

    <!-- SPECIFIC CSS -->
    <link href="css/date_picker.css" rel="stylesheet" />

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet" />
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
              <a href="in" title="Findoctor"
                ><img src="img/logo.png" alt="" width="163" height="36"
              /></a>
            </div>
          </div>
          <nav class="col-lg-9 col-6">
            <a
              class="cmn-toggle-switch cmn-toggle-switch__htx open_close"
              href="#0"
              ><span>Menu mobile</span></a
            >
            <ul id="top_access">
              <li id="user">
                <a href="#0">
                  <figure>
                    <img src="http://via.placeholder.com/150x150.jpg" alt="" />
                  </figure>
                  Jhon Smith
                </a>
              </li>
            </ul>
            <div class="main-menu">
              <ul>
                <li class="submenu">
                  <a href="index-8.html" class="show-submenu">Home</a>
                </li>
                <li class="submenu">
                  <a href="#0" class="show-submenu"
                    >Lists<i class="icon-down-open-mini"></i
                  ></a>
                  <ul>
                    <li class="third-level">
                      <a href="#0">Patients</a>
                      <ul>
                        <li><a href="list.html">List page</a></li>
                      </ul>
                    </li>
                    <li class="third-level">
                      <a href="#0">Dorctors</a>
                      <ul>
                        <li><a href="detail-page.html">Detail page 1</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li><a href="#0">LogOut</a></li>
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
              <h4><strong>Showing 10</strong> of 140 results</h4>
            </div>
            <div class="col-md-6">
              <div class="search_bar_list">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Ex. Specialist, Name, Doctor..."
                />
                <input type="submit" value="Search" />
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /results -->

      <div class="filters_listing">
        <div class="container">
          <ul class="clearfix">
            <li>
              <h6>Sort by</h6>
              <select name="orderby" class="selectbox">
                <option value="Closest"></option>
                <option value="Men">Men</option>
                <option value="Women">Women</option>
              </select>
            </li>
          </ul>
        </div>
        <!-- /container -->
      </div>
      <!-- /filters -->

      <div class="container margin_60_35">
        <div
          class=""
          style="
            display: flex;
            flex-direction: column;
            align-items: center;
            /* border-style: solid; */
          "
        >
          <!-- /strip_list -->

          <div class="strip_list wow fadeIn col-lg-7">
            <a href="#0" class="wish_bt"></a>
            <figure>
              <a href="detail-page.html"
                ><img src="http://via.placeholder.com/565x565.jpg" alt=""
              /></a>
            </figure>
            <small>Pediatrician</small>
            <h3>Dr. Cornfield</h3>
            <p>
              Id placerat tacimates definitionem sea, prima quidam vim no. Duo
              nobis persecuti cuodo....
            </p>
            <span class="rating"
              ><i class="icon_star voted"></i><i class="icon_star voted"></i
              ><i class="icon_star voted"></i><i class="icon_star"></i
              ><i class="icon_star"></i> <small>(145)</small></span
            >
            <a
              href="badges.html"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Badge Level"
              class="badge_list_1"
              ><img src="img/badges/badge_1.svg" width="15" height="15" alt=""
            /></a>
            <ul>
              <li>
                <a
                  href="#0"
                  onclick="onHtmlClick('Doctors', 0)"
                  class="btn_listing"
                  >View on Map</a
                >
              </li>
              <li>
                <a
                  href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                  target="_blank"
                  >Directions</a
                >
              </li>
              <li><a href="detail-page.html">Book now</a></li>
            </ul>
          </div>
          <!--/strip_list-->
          <div class="strip_list wow fadeIn col-lg-7">
            <a href="#0" class="wish_bt"></a>
            <figure>
              <a href="detail-page.html"
                ><img src="http://via.placeholder.com/565x565.jpg" alt=""
              /></a>
            </figure>
            <small>Pediatrician</small>
            <h3>Dr. Cornfield</h3>
            <p>
              Id placerat tacimates definitionem sea, prima quidam vim no. Duo
              nobis persecuti cuodo....
            </p>
            <span class="rating"
              ><i class="icon_star voted"></i><i class="icon_star voted"></i
              ><i class="icon_star voted"></i><i class="icon_star"></i
              ><i class="icon_star"></i> <small>(145)</small></span
            >
            <a
              href="badges.html"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Badge Level"
              class="badge_list_1"
              ><img src="img/badges/badge_1.svg" width="15" height="15" alt=""
            /></a>
            <ul>
              <li>
                <a
                  href="#0"
                  onclick="onHtmlClick('Doctors', 0)"
                  class="btn_listing"
                  >View on Map</a
                >
              </li>
              <li>
                <a
                  href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                  target="_blank"
                  >Directions</a
                >
              </li>
              <li><a href="detail-page.html">Book now</a></li>
            </ul>
          </div>

          <!-- /pagination -->
        </div>
        <!-- /col -->

        <!-- /aside -->
      </div>
      <!-- /row -->

      <!-- /container -->
    </main>
    <!-- /main -->

    <footer>
      <div class="container margin_60_35">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <p>
              <a href="index.html" title="Findoctor">
                <img
                  src="img/logo.png"
                  alt=""
                  width="163"
                  height="36"
                  class="img-fluid"
                />
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
              <li>
                <a href="tel://61280932400"
                  ><i class="icon_mobile"></i> + 61 23 8093 3400</a
                >
              </li>
              <li>
                <a href="mailto:info@findoctor.com"
                  ><i class="icon_mail_alt"></i> help@findoctor.com</a
                >
              </li>
            </ul>
            <div class="follow_us">
              <h5>Follow us</h5>
              <ul>
                <li>
                  <a href="#0"><i class="social_facebook"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="social_twitter"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="social_linkedin"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="social_instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--/row-->
        <hr />
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
