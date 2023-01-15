<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Accomodation Finder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Ubuntu&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->
        <header id="main_menu" class="header">
            <div class="main_menu_bg navbar navbar-expand-lg navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu wow fadeInUp" data-wow-duration="1s">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#"><h1 style = "color: white;">Accomodation Finder</h1></a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="#home"><h5>Home</h5></a></li>
                                            <li><a href="search.php"><h5>Search</h5></a></li>
                                            <li><a href="form.php"><h5>Register hostel</h5></a></li>
                                            <?php
                                                session_start();
                                                 // Check if the user is logged in
                                                if (isset($_SESSION['username'])) {
                                                // User is logged in
                                                 // Display the log out option
                                                 echo '<li><a href="logout.php"><h5>Log out</h5></a></li>';
                                                } else {
                                                // User is not logged in
                                                // Display the login option
                                                echo '<li><a href="login.html"><h5>Login</h5></a></li>';
                                                session_destroy();
                                                }
                                                ?>
                                            <!-- <li><a href="#clients">About us</a></li> -->

                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </header> <!--End of header -->



        <!-- <section id="home" class="home">
            <div class="home-overlay-fluid">
                <div class="container">
                    <div class="row">
                        <div class="main_slider_area">
                            <div class="slider">
                                <div class="single_slider wow fadeIn" data-wow-duration="2s">
                                    <h3 style="color:white;">Hey, there!</h3>
                                    <h3 style="color:white;">Finding your stay just got easier....</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

              <div class="item active">
                <img src="assets/images/1.jpg" alt="Los Angeles" style="width:100%;height:640px;">
                <div class="carousel-caption">
                  <h3>Hey, there !!</h3>
                  <p style="color:white;">find your perfect hostel !</p>
                </div>
              </div>

              <div class="item">
                <div class="slider-size">
                  <img src="assets/images/2.jpg" alt="Chicago" style="width:100%; height:640px;">
                </div>
                <div class="carousel-caption">
                  <h3>Register</h3>
                  <p style="color:white;">Register your hostel if it's not listed..</p>
                </div>
              </div>

              <div class="item">
                <img src="assets/images/3.jpg" alt="New York" style="width:100%;height:640px;">
                <div class="carousel-caption">
                  <h3>Search by area</h3>
                  <p style="color:white;">Get all the hostels and PGs in the area..</p>
                </div>
              </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        <section id="register" class="register">
            <div class="container-fullwidth">
                <div class="row text-center">
                    <div class="col-sm-6 col-xs-6 no-padding">
                        <div class="single_register single_login">
                            <a href="search.php" target="_blank">Search for a Hostel</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 no-padding">
                        <div class="single_register">
                            <a href="form.html" target="_blank">Register your Hostel</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="footer" class="footer sections">
            <div class="container">
                <div class="row">
                    <div class="main_footer wow fadeInDown" data-wow-duration="2s">
                        <div class="col-sm-3 col-xs-12">
                            <div class="footer_logo">
                                <a href=""><h2 style="color: white;">Accomodation Finder</h2></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="footer_bottom_area" style="display: block; text-align: center; height: 10px; padding: 25px 50px 75px;">
                        <!--<div class="col-sm-9 col-xs-12">-->
                            <div class="bottom" style= "padding: 50px 0 20px 0; display: flex; flex-wrap: nowrap; margin-left: 375px; padding-bottom: 150px;">
                                <a class="footer-link" href="#home" style="font-family: 'Montserrat', sans-serif; text-decoration: none; margin:10px 20px;">Home</a>
                                <a class="footer-link" href="form.html" style="
                                font-family: 'Montserrat', sans-serif;
                                margin:10px 20px;
                                text-decoration: none;">Register Hostel</a>   
                                <a class="footer-link" href="search.php" style="
                                font-family: 'Montserrat', sans-serif;
                                margin:10px 20px;
                                text-decoration: none;">Search</a> 
                                <a class="footer-link" href="#" style="
                                font-family: 'Montserrat', sans-serif;
                                margin:10px 20px;
                                text-decoration: none;">Login</a>     
                            </div>
                        <!--</div>-->
                     </div>

                        <!--<div class="col-sm-3 col-xs-12">
                          <h3>Contact info :</h3>
                          <h4>
                            <label>Email :</label>
                            <p>
                              yashcoolrk30@gmail.com
                            </p>
                          </h4>
                        </div>-->
                    </div>
                </div>

            </div>
        </section><!-- End of footer3 section -->








        <!-- STRAT SCROLL TO TOP -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
