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
    <!-- /Header -->

    <main>
      <div id="breadcrumb">
        <div class="container">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li>Page active</li>
          </ul>
        </div>
      </div>
      <!-- /breadcrumb -->

      <div class="container margin_60_35">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="box_general_3 write_review">
              <h1>Write a review for Dr. Julia Smooths</h1>
              <div class="rating_submit">
                <div class="form-group">
                  <label class="d-block">Overall rating</label>
                  <span class="rating">
                    <input
                      type="radio"
                      class="rating-input"
                      id="5_star"
                      name="rating-input"
                      value="5 Stars"
                    /><label for="5_star" class="rating-star"></label>
                    <input
                      type="radio"
                      class="rating-input"
                      id="4_star"
                      name="rating-input"
                      value="4 Stars"
                    /><label for="4_star" class="rating-star"></label>
                    <input
                      type="radio"
                      class="rating-input"
                      id="3_star"
                      name="rating-input"
                      value="3 Stars"
                    /><label for="3_star" class="rating-star"></label>
                    <input
                      type="radio"
                      class="rating-input"
                      id="2_star"
                      name="rating-input"
                      value="2 Stars"
                    /><label for="2_star" class="rating-star"></label>
                    <input
                      type="radio"
                      class="rating-input"
                      id="1_star"
                      name="rating-input"
                      value="1 Star"
                    /><label for="1_star" class="rating-star"></label>
                  </span>
                </div>
              </div>
              <!-- /rating_submit -->
              <div class="form-group">
                <label>Title of your review</label>
                <input
                  class="form-control"
                  type="text"
                  placeholder="If you could say it in one sentence, what would you say?"
                />
              </div>
              <div class="form-group">
                <label>Your review</label>
                <textarea
                  class="form-control"
                  style="height: 180px"
                  placeholder="Write your review here ..."
                ></textarea>
              </div>
              <div class="form-group">
                <label>Add your photo (optional)</label>
                <div class="fileupload">
                  <input type="file" name="fileupload" accept="image/*" />
                </div>
              </div>
              <hr />
              <div class="form-group">
                <div class="checkboxes add_bottom_30 add_top_15">
                  <label class="container_check"
                    >I accept
                    <a href="#0">terms and conditions and general policy</a>
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <a href="#0" class="btn_1">Submit review</a>
            </div>
          </div>
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
  </body>
</html>
