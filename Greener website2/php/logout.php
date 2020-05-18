<?php
session_start();
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
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link rel="stylesheet" href="../css/settings.css">
            
          <!-- Font Awesome -->
          <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

          <!-- Bootstrap Scripts -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<body>

<!--Navbar-->
 <ul>
  <li><a href="challengehome.php">Home</a></li>
  <li><a href="settings.php">Settings</a></li>
    <li><a href="completed.php">Challenges History</a></li>
</ul>


  <!--form for logging out--> 
<div class="container-fluid"> 
<div class="d-flex  h-100 col-sm-6 px-5 mx-auto my-3">    
        <form action = "" method="post">
        <h3>Are you sure you want to logout?</h3>
        <button type="submit" class="btn my-5 mx-auto btn-update" name="logout">Logout</button>
        <button type="submit" onclick="window.location.href = 'challengehome.php';" class="btn my-5 mx-auto btn-update">Cancel</button>
        
        </form>
    </div>
</div>

    
<!--code for destroying sessions-->
    <?php 
        if(isset($_POST['logout'])) {
        unset($_SESSION['userName']);  
        session_destroy(); 
        header('location:login.php');
            }
        ?>     
</body>
</html>
