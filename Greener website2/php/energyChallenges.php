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

   <link href="../css/internalStyle.css" rel="stylesheet">
   <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

<!-- Font Awesome -->
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>


<body>
<!-- Navbar-->
 <ul>
  <li><a href="challengehome.php">Home</a></li>
  <li><a href="settings.php">Settings</a></li>
    <li><a href="completed.php">Challenges History</a></li>
  <li><a href="logout.php" >Logout</a></li>
  <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
</ul>

<div class ="container">
        <h1>Energy Challenges</h1>
</div>

<!-- flip card for challenge - FRONT-->
<div class ="left">
<div class="card flip-card">
    <div class="flip-card-inner">
    <div class="card-container flip-card-front">
    <img src ="../img/candles.jpg" id ="cover" width="30%">
    <h3>Save Electricity</h3>
        <p>For one day avoid turning on heaters if possible, keep the use of lights and use appliances the bare minimum</p>
     </div>
    <!-- back of the card with tips, etc-->
    <div class="flip-card-back">
        <h1>Save Electricity</h1>
     <p>
       Some ideas for this challenge: <br/>
          Batch cooking: just cook your food for the week one day, this way you will save energy.
         <br/>Light candles instead of lights</p>
       <p>Tips for evidence: <br/> <br/>
           - Take a pic of you using candles <br/>
           - Take a pic of your food already prepared for the week in containers
           - Take a pic of yourself while batch cooking
        </p>
     </div>
   </div>
     <!--button to redirect user to page to choose who to send challenge to-->
    <button class="button" onclick="window.location.href = 'sendChallenge.php';">Go Save !</button>
  </div>
</div>


<!-- flip card for challenge - FRONT -->
<div class ="right">
<div class="card flip-card">
    <div class="flip-card-inner">
    <div class="card-container flip-card-front">
    <img src ="../img/walk.jpg" id ="cover" width="30%">
    <h3>Walk or cycle to Work/College</h3>
     <p>By implementing these options as your daily commute choice you will contribute to reducing CO2 emissions.</p>
     </div>
<!-- back of the card with tips, etc-->
    <div class="flip-card-back">
        <h1>Walk or cycle to Work/College</h1>

       <p>Tips for evidence: <br/> <br/>
           - Take a pic of yourself walking or about to cycle to work or school <br/> <br/>
           - Record a short video of yourself commuting in this way (be mindful of traffic!)
        </p>
     </div>
   </div>
  <button class="button" onclick="window.location.href = 'sendChallenge.php';">Go Commute !</button>
  </div>
</div>

<a href="challengehome.php" class ="back">
  <h3>Back To Categories</h3>
</a>

</body>
</html>
