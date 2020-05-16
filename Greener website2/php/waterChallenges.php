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
<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

</head>


<body>

<ul>
  <li><a href="challengehome.php">Home</a></li>
  <li><a href="settings.php">Settings</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Challenges History</a>
    <div class="dropdown-content">
      <a href="completed.php">Completed</a>
      <a href="pending.php">Pending</a>
      <a href="proposed.php">Proposed</a>
    </div>
  </li>
  <li><a href="index.html?logout='1'" >Logout</a></li>
  <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
</ul>



<div class ="container">
    <h1>Water Challenges</h1>
</div>


<div class ="left">
<div class="card flip-card">
    <div class="flip-card-inner">
    <div class="card-container flip-card-front">
    <img src ="../img/glass.jpg" id ="cover" width="30%">
    <h3>Brush your teeth with one glass of water</h3>
     <p>This is an extremely simple way of saving water. According to studies you can save up to 4 gallons of water.</p>
     </div>

    <div class="flip-card-back">
        <h1>Brush your teeth with one glass of water</h1>

       <p>Tips for evidence: <br/>
           - Take a pic from your glass of water and toothbrush
           -Record how you brush your teeth with just one glass
        </p>
     </div>
   </div>
    <button class="button" onclick="window.location.href = 'sendChallenge.php';">Go One Glass!</button>
  </div>
</div>

<div class ="right">
<div class="card flip-card">
    <div class="flip-card-inner">
    <div class="card-container flip-card-front">
    <img src ="../img/laundry.jpg" id ="cover" width="30%">
    <h3>Full Loads only! </h3>
      <p>By only using your laundry machine or dishwasher with full loads you will save lots of water.</p>
     </div>

    <div class="flip-card-back">
        <h1>Full Loads only! </h1>

      <p>Avoid doing unnecessary washes. By doing this you save water and contribute <br/>
       with the process of cleaning waste water, which is an energy intensive process</p>

        <p>Tips for evidence: <br/><br/>
           - Take a pic from your fully loaded machine
        </p>
     </div>
   </div>
    <button class="button" onclick="window.location.href = 'sendChallenge.php';">Go Full Loads!</button>
  </div>
</div>

<a href="challengehome.php" class ="back">
  <h3>Back To Categories</h3>
</a>

</body>
</html>
