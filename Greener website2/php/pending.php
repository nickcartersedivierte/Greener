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

    <!--CSS Link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="../css/internalStyle.css" rel="stylesheet">


    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>


<body>

  <ul>
    <li><a href="challengehome.php">Home</a></li>
    <li><a href="settings.php">Settings</a></li>
    <li><a href="completed.php">Challenges History</a></li>
    <li><a href="index.html?logout='1'" >Logout</a></li>
    <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
  </ul>

  <section class="colored-section" id="features">

    <div class="row">
      <div class="feature-box col-lg-4">

        <button type="button" class="feature-title btn btn-lg btn-outline-light" onclick= "location.href = 'completed.php'"> Completed</button>

      </div>

      <div class="feature-box col-lg-4">

        <button type="button" class="active feature-title btn btn-lg btn-outline-light" onclick= "location.href = 'pending.php'"> Pending</button>

      </div>

      <div class="feature-box col-lg-4">

        <button type="button" class="feature-title btn btn-lg btn-outline-light" onclick= "location.href = 'proposed.php'"> Proposed</button>

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
          <i class="icon fas fa-hourglass-half fa-4x"></i>
          <h3 class="feature-title">Time Remaining</h3>
          <p>2:00</p>
          <p>5:00</p>
          <p>23:00</p>
        </div>
      </div>

    </div>
  </section>

</body>
</html>
