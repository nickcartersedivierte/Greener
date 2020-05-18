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




<body>

<!--- Navbar-->
<ul>
  <li><a href="challengehome.php">Home</a></li>
  <li><a href="settings.php">Settings</a></li>
    <li><a href="completed.php">Challenges History</a></li>
  <li><a href="logout.php" >Logout</a></li>
  <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
</ul>


<div class ="container">
        <h1>Diet Challenges</h1>
</div>

<!-- Front side of the flip card-->
<div class= "left">
<div class="card flip-card ">
    <div class="flip-card-inner">
    <div class="card-container flip-card-front">
    <img src ="../img/veg.jpg" id ="cover" width="30%">
    <h3>Go Vegan for a day!</h3>
    <p>Adopting a plant based diet, even a few days a week, can reduce our carbon emissions by half</p>
    </div>
        
<!-- back of the flip card with tips etc-->
    <div class="flip-card-back">
        <h1>Go Vegan for a day!</h1>
      <br/>
      <p>You can replace the protein found in meat with:<br/>
       Beans, Tofu, Mushrooms, Quinoa, Nuts, etc</p>
        <p>Tips for evidence: <br/>
           - Take pictures of your food<br/>
           - Take pictures of yourself cooking your Vegan meal
        </p>
     </div>
   </div>
<button class="button" onclick="window.location.href = 'sendChallenge.php';">Go Vegan!</button>
  </div>
</div>

<!-- Front side of the flip card-->
<div class ="right">
<div class="card flip-card">
    <div class="flip-card-inner">
    <div class="card-container flip-card-front">
    <img src ="../img/vegan.jpg" id ="cover" width="30%">
    <h3>Go dairy free!</h3>
    <p>The dairy industry emits just as many greenhouse gases as the meat industry!</p>
    </div>
<!-- Back of the card with tips, etc-->
    <div class="flip-card-back">
        <h1>Go dairy free!</h1>
      <p>Try replacing milk in your latte with any vegetal milk</p>
      <p>Almond milk, Oat milk, Coconut milk, Rice milk, Cajun milk are all delicious and better for the planet</p>
        <p>Tips for evidence: <br/>
           - Take a pic of yourself preparing your coffee with any vegetal milk<br/>
           - Take pictures of your vegan pizza or toastie
        </p>
     </div>
   </div>
  <button class="button" onclick="window.location.href = 'sendChallenge.php';">Go dairy free!</button>
  </div>
</div>



    <a href="challengehome.php" class ="back">
    <h3>Back To Categories</h3>
    </a>


</body>
</html>
