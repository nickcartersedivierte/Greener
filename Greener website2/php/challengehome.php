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

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

        <!-- CSS Stylesheets -->
        <link rel="stylesheet" href="../css/internalStyle.css">


  </head>


<body>

<ul>
  <li><a class= "active" href="challengehome.php">Home</a></li>
  <li><a href="settings.php">Settings</a></li>
   <li><a href="completed.php">Challenges History</a></li>
  <li><a href="logout.php" >Logout</a></li>
  <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
</ul>



<div class ="challenges">

<br/><br/>
<a href="wasteChallenges.php">
  <img src="../img/waste.jpg" class= "zoom" alt="Waste" width="25%">
</a>


<a href="waterChallenges.php">
  <img src="../img/water.jpg" class= "zoom" alt="Water" width="25%">
</a>
<br/>

<a href="dietChallenges.php">
  <img src="../img/diet.jpg" class= "zoom" alt="Diet" width="25%">
</a>

<a href="energyChallenges.php">
  <img src="../img/lights.jpg" class= "zoom" alt="Energy" width="25%">
</a>


</div>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>


</div>

</body>
</html>
