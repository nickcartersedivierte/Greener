<?php
session_start();
if(!isset($_SESSION['userName'])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>


<html lang="en-US">

<head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="GreenTech">

    <title>#Greener</title>

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


    <!--CSS Link-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/internalStyle.css" rel="stylesheet">

</head>


<body>
    
<!--- Navbar-->
  <ul>
  <li><a class= "active" href="challengehome.php">Home</a></li>
  <li><a href="settings.php">Settings</a></li>
   <li><a href="completed.php">Challenges History</a></li>
  <li><a href="logout.php" >Logout</a></li>
  <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
</ul>
  <section class="colored-section" id="features">


    <div class="row">
      <div class="feature-box col-lg-4">

        <button type="button" class="active feature-title btn btn-lg btn-outline-light" onclick= "location.href = 'completed.php'"> Completed</button>

      </div>

      <div class="feature-box col-lg-4">

        <button type="button" class="feature-title btn btn-lg btn-outline-light" onclick= "location.href = 'pending.php'"> Pending</button>

      </div>

    <div class="feature-box col-lg-4">

        <button type="button" class="feature-title btn btn-lg btn-outline-light" onclick= "location.href = 'proposed.php'"> Proposed
        </button>

      </div>
    </div>
  </section>

  <section class="white-section" id="features">

    <div class="container-fluid">

      <div class="row">
        <div class="feature-box col-lg-4">
          <i class="icon fas fa-leaf fa-4x"></i>
          <h3 class="feature-title">Challenges</h3>
          <p>Water Challenge</p>
          <p>Waste Challenge</p>
          <p>Energy Challenge</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-user fa-4x"></i>
          <h3 class="feature-title">From</h3>
          <p>John</p>
          <p>Mary</p>
          <p>Mark</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-hourglass-end fa-4x"></i>
          <h3 class="feature-title">Time Completed</h3>
          <p>2:00</p>
          <p>5:00</p>
          <p>23:00</p>
        </div>
      </div>

    </div>
  </section>

</body>
</html>
