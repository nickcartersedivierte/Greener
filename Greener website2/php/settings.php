
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

  <ul>
    <li><a href="challengehome.php">Home</a></li>
    <li><a class= "active" href="settings.php">Settings</a></li>
    <li><a href="completed.php">Challenges History</a></li>
    <li><a href="../index.html?logout='1'" >Logout</a></li>
    <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
  </ul>
    
<!--Profile Picture section -->
<?php
    if(isset($_POST['submit'])){
                
        move_uploaded_file($_FILES['file']['tmp_name'], "../uploads/".$_FILES['file']['name']);
        
        //connecting to database and updating the pic attribute in the table with the submitted picture
        $conn = mysqli_connect('localhost', 'root', '', 'greener');
        $query = mysqli_query($conn, "UPDATE user SET pic = '".$_FILES['file']['name']."' where userName = '".$_SESSION['userName']."'");
    }
?>
    
<div class="container-fluid"> 
<div class="d-flex  h-100 col-sm-6 px-5 mx-auto my-5 float-left ">    
    <div class="card">
    <div class="card-header">
    <h3>Profile picture</h3>
    </div>
      <div class="card-body">
        <div class= "form-update">
    <form action = '' method = POST enctype ='multipart/form-data'>
        <div class="input-group form-group">
            <div class="input-group-prepend update-group">
            </div>
            
<!--Querying the table to display current profile image if there is one or default if there isnt-->

<?php
$conn = mysqli_connect('localhost', 'root', '', 'greener');            
$q = mysqli_query ($conn, "SELECT userName, pic FROM user WHERE userName = '".$_SESSION['userName']."'");
    
        while($row = mysqli_fetch_assoc($q)) {
       
        if($row['pic']== ""){
        
            echo " <img src = '../img/placeholder.png' alt ='default image' class ='img-fluid fit-image img-thumbnail'>";
            
            }else{
                
            echo "<img src = '../uploads/".$row['pic']."' alt ='Profile image' class ='img-fluid fit-image img-thumbnail'>";
        }
     }
?>
            
   <div class="update-group">      
    <input type ='file' name = 'file' class="mt-3">
    <br/> 
    <button type='submit' name ='submit' class="btn btn-update mt-3">Upload</button>
    </div>    
    </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
    
<!--Updating Username-->
<div class="container-fluid"> 
<div class="d-flex h-100 col-sm-6 mx-auto my-5 float-right">
    <div class="card">
        <div class="card-header">
        <h3>Username Update</h3>
        </div>
        <div class="card-body">
        <div class= "form-update">
        <form method="post" action="update_user.php">
            <div class="input-group form-group">
                <div class="input-group-prepend update-group">
                 <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <!--Displaying the current username-->
                <label class="form-control">Current Username: <?php echo $_SESSION['userName']; ?> </label>
            </div>

            <!--Field to type in new username-->
            <div class="input-group form-group">
                <div class="input-group-prepend update-group">
                <span class="input-group-text"> <i class="fas fa-user"></i></span>
                </div>
                <input class="form-control "type="text" placeholder="New Username" name="userName">
                </div>   
            
            <!--Field to confirm email-->
            <div class="input-group form-group">
                <div class="input-group-prepend update-group">
                <span class="input-group-text"> <i class="fas fa-envelope"></i></span>
                </div>
  	            <input type="text"  class="form-control " name="email" placeholder="Confirm your email"  required>  
  	         </div>
            
            
            <!--Submit or Cancel buttons-->
            
                <button type="submit" class="btn float-right btn-update" name="update">Update</button>
                <button type="submit" class="btn float-left btn-update" name="cancel" onclick="location.href = 'settings.php'">Cancel</button>
        </form>
        </div>
        </div>
    </div>
</div>
</div>

      
</body>
</html>
