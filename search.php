<html lang="en">
  <head>
    <title>Accomodation Finder</title>    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/new.css">
    <style>
    body{
      background-image: url("assets/images/homebg.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
  </head>
  <body class="text-white">
  <div id="splash-screen"><div id='loaded'></div></div>


    <nav style="background: cadetblue;" class="navbar navbar-toggleable-md navbar-inverse fixed-top" >
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a style="margin-left:40px" class="navbar-brand" href="#"><h1>Accomodation Finder</h1></a>
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <form class="form-inline mt-2 mt-md-0 mr-auto">

        </form>
        <ul class="navbar-nav " style="margin-right:10%">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><h4>Home</h4><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><h4>Search</h4><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php"><h4>Registration</h4><span class="sr-only">(current)</span></a>
          </li>
          <?php
                session_start();
                 // Check if the user is logged in
                if (isset($_SESSION['username'])) {
                // User is logged in
                // Display the log out option
                echo '<li class="nav-item"><a class="nav-link" href="logout.php"><h4>Log out</h4></a></li>';
                } else {
                // User is not logged in
                // Display the login option
                echo '<li class="nav-item"><a class="nav-link" href="login.html"><h4>Login</h4></a></li>';
                session_destroy();
                }
          ?>
        </ul>

      </div>
    </nav>

<br /><br /><br/>

</br/>
      <div class="container">
        <form method="post" action="submit3.php">
          <div class="row">
            <h3>Get details About :</h3>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                <span for="hostel">Get details of a particular Hostel :</span>
                <select name="hostel" class="form-control">
                  <option value="">choose</option>
                  <?php
                      include 'dbconnect.php';
                      $q = "SELECT * FROM hostel";
                      $results=$conn -> query($q);
                      //loop
                      while($row = mysqli_fetch_array($results))
                      {
                       ?><option value="<?php echo $row['Name']; ?>"> <?php echo $row['Name'];?></option>
                   <?php }?>
                  ?>
                </select>
              </div>
              <hr />
              <hr />
              <div class="row">
                <div class="col-xs-12 offset-lg-6 offset-md-6 offset-sm-6 offset-xs-6">
                  <div >
                    <button type="submit" class="btn btn-primary" id="sub">Submit</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>


        <form method="post" action="submit4.php">
          <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                <span for="locality">Get details of all the hostels in a particular city :</span>
                <select name="locality" class="form-control">
                  <option value="">choose</option>
                  <?php
                      include 'dbconnect.php';
                      $q = "SELECT DISTINCT City FROM hostel";
                      $results=$conn -> query($q);
                      //loop
                      while($row = mysqli_fetch_array($results))
                      {
                       ?><option value="<?php echo $row['City']; ?>"> <?php echo $row['City'];?></option>
                   <?php }?>
                  ?>
                </select>
              </div>
              <hr />
              <hr />
              <div class="row">
                <div class="col-xs-12 offset-lg-6 offset-md-6 offset-sm-6 offset-xs-6">
                  <div >
                    <button type="submit" class="btn btn-primary" id="sub">Submit</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>
        <hr />
        <hr />

        <form method="post" action="submit5.php">
          <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                <span >Details of number of hostels and pgs in different areas :</span>

              </div>

              <div class="row">
                <div class="col-xs-12 offset-lg-6 offset-md-6 offset-sm-6 offset-xs-6">
                  <div >
                    <button type="submit" class="btn btn-primary" id="sub">Click here</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>
      
      <?php
      $command = 'python chart.py ';
      exec($command, $output);
      echo '<h1 align="center" style="margin-top: 45px; margin-bottom: 45px;">Number of hostels in Different Cities</h1>
      <img style="display: block;
      margin-left: auto;
      margin-right: auto;" " src="chart.png" alt="Graph of Cities">';
      $command = 'python price.py ';
      exec($command, $output);
      echo '<h1 align="center" style="margin-top: 45px; margin-bottom: 45px;">Price Trend of Hostels</h1>
      <img style="display: block;
      margin-left: auto;
      margin-right: auto;
      width: 80%;
      margin-bottom: 75px" " src="price_graph.png" alt="Graph of Cities">';
      ?>


    <script>
      function getValue(sel){
        console.log(sel);
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
      var preloader = document.getElementById('splash-screen');
      window.onload = function() {
      preloader.style.display = 'none';
};
    </script>
  </body>
</html>
