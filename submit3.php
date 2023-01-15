
<html lang="en">
  <head>
    <title>Accomodation Finder</title>    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
    body{
      background-image: url("assets/images/4.jpg");
    }
    .figures{
      display: inline-flex;
      flex-direction: column;
    }
    .infigures{
      display: inline-flex;
      flex-direction: column;
      align-items: center;
    }
    #next{
      margin-left: 250px;
    }
    #nexty{
      margin-left: 250px;
    }
    </style>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body class="text-white">

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><h1>Accomodation Finder</h1></a>
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <form class="form-inline mt-2 mt-md-0 mr-auto">

        </form>
        <ul class="navbar-nav " style="margin-right:10%">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><h4>Home</h4><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php"><h4>Search</h4><span class="sr-only">(current)</span></a>
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

<?php
  include 'dbconnect.php';

  $sql = "select * from hostel
  where Name ='".$_POST['hostel']."';";

$result =  $conn->query($sql);

?>
<table class="table table-inverse">
<thead>
<tr>
<th>S.no.</th>
<th>Hostel Name</th>
<th>City</th>
<th>Price</th>
<th>Distance from Center</th>
<th>Rating</th>
</tr>
</thead>
<tbody>
<?php
$count = 1;
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<th>".$count."</th>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['City']."</td>";
echo "<td>".$row['Price']."</td>";
echo "<td>".$row['Distance']."</td>";
echo "<td>".$row['Rating_band']."</td>";
$count++;
}

 ?>
   </tbody>
 </table>


 <?php
  include 'dbconnect.php';

  $sql = "select * from hostel
  where Name ='".$_POST['hostel']."';";

$result =  $conn->query($sql);

$row = $result->fetch_assoc();
$summary= $row['Summary_score'];

$command="python summary.py $summary ";
exec($command, $output); 
echo '<div class="figures">
      <h2 style="margin-top: 35px; margin-bottom: 45px; margin-left: 35px">Summary Score of Hostel</h2>
      <img style="display: block;
      margin-left: 60px;
      margin-bottom: 75px" " src="sum.png" alt="Summary Score">
      </div>';

  $atmos=$row['Atmosphere'];
  $clean=$row['Cleanliness'];
  $facility=$row['Facilities'];


$command="python pie1.py $atmos $clean $facility ";
exec($command,$output);
echo '<div id="next" class="figures">
      <h2 style="margin-top: 35px; margin-bottom: 45px; margin-left: 120px">Features of Hostel</h2>
      <img style="display: block;
      margin-right: 60px;
      margin-bottom: 75px" " src="pie1.png" alt="Features">
      </div>';


      $value=$row['Value'];

$command="python value.py $value ";
exec($command, $output);

echo '<div class="infigures">
      <h2 style="margin-top: 35px; margin-bottom: 45px; margin-left: 35px">Summary Score of Hostel</h2>
      <img style="display: block;
      margin-left: 60px;
      margin-bottom: 75px" " src="value.png" alt="Summary Score">
      </div>';

  $loc=$row['Location'];
  $sec=$row['Security'];
  $staff=$row['Staff'];

$command="python line1.py $loc $sec $staff ";
exec($command,$output);
echo '<div id="nexty" class="infigures">
      <h2 style="margin-top: 35px; margin-bottom: 45px; margin-left: -50px">Features of Hostel</h2>
      <img style="display: block;
      margin-right: 60px;
      margin-bottom: 75px" " src="pie2.png" alt="Features">
      </div>';
?>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
