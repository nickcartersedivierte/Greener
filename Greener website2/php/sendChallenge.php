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
<ul>
  <li><a href="challengehome.php">Home</a></li>
  <li><a href="settings.php">Settings</a></li>
  <li><a href="completed.php">Challenges History</a></li>
  <li><a href="logout.php" >Logout</a></li>
  <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
</ul>

<div class ="container">
    <h1>Select an user to send your challenge to: </h1>
</div>

<?php
    //Connecting to DB
    $conn = mysqli_connect('localhost', 'root', '', 'greener');
    
    //Querying the table 
    $query = mysqli_query ($conn, "SELECT userName, pic FROM user");
    
    echo "<section class='white-section id='features' >
          <div class='container-fluid'>
            <div class='feature-box '>
                ";
    while($row = mysqli_fetch_assoc($query)){
          echo "<table>";
          echo "<tr>";
          echo  "<th>" . $row ['userName'], "</th>";
          echo "</tr>";
         
        if($row['pic']== ""){
            
            echo "<tr>";
            echo "<td> <img src = '../img/placeholder.png' width = '200' heigth = '200' alt ='default image'> </td> ";
            echo "</tr>";
        }else{
            echo "<tr>";
            echo " <td> <img src = '../uploads/".$row['pic']."' width = '200' heigth = '200' alt ='profile image'> </td>";
            echo "</tr>";
            echo "</table";
        }
    }
    
         echo "
          </div>
          </div>
          </section>";      
    ?>
    
<!--   
<section class="colored-section" id="features">    <div class="row">
      <a href="challengehome.php" class ="back">
        <h3>Back To Categories</h3>
      </a>
    </div>
</section>
-->
    
</body>
</html>
