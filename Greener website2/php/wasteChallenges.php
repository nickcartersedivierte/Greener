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
    <li><a href="completed.php">Challenges History</a></li>
  <li><a href="logout.php" >Logout</a></li>
  <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
</ul>

<div class ="container">
<h1>Waste Challenges</h1>
</div>


<div class ="left">
<div class="card flip-card">
    <div class="flip-card-inner">
    <div class="card-container flip-card-front">
    <img src ="../img/recup.jpg" id ="cover" width="30%">
    <h3>Go reusable</h3>
     <p>Avoid using plastic or papes mugs, bottles or bags and avoid generating waste.
     </p>
     </div>

    <div class="flip-card-back">
        <h1>Go reusable</h1>
      <p> Did you know a million plastic bottles are bought every minute around the world?</p>
       <p>Tips for evidence: <br/><br/>
           - Take a pic of yourself using reusable mugs for getting your coffee <br/>
           - Take a pic of your reusable water bottle
           - Take a pic of yourself doing groceries with reusable bags
        </p>
     </div>
   </div>
<button class="button" onclick="window.location.href = 'sendChallenge.php';" name ="goReusable">Go Reusable !</button>
  </div>
</div>


<div class ="right">
<div class="card flip-card">
    <div class="flip-card-inner">
    <div class="card-container flip-card-front">
    <img src ="../img/recycle.jpg" id ="cover" width="20%">
    <h3>Recycle or Clean a public space</h3>
    <p>Choose a public space and clean it using appropriate equipment.
        You can also recycle. </p>
     </div>

    <div class="flip-card-back">
        <h1>Recycle or Clean a public space</h1>
      <p>Get container for your house, work or school and start recylcing and classifyng waste.
        </p>
       <p>Tips for evidence: <br/> <br/>
           - Take a pic of yourself cleaning a public space of your choice <br/>
           - Take before and after pictures
           - Take a pic of your waste containers, show how you recycle
        </p>
     </div>
   </div>
    <button class="button" onclick="window.location.href = 'sendChallenge.php';" name ="goRecycle">Go Recycle !</button>
  </div>
</div>



<a href="challengehome.php" class ="back">
  <h3>Back To Categories</h3>
</a>

</body>
</html>
