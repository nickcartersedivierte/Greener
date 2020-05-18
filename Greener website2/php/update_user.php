<?php

$errors = array(); 

// connect to database
$database = mysqli_connect('localhost', 'root', '', 'greener');

if (isset($_POST['update'])) {
    
// receiving values from the form
  $userName = mysqli_real_escape_string($database, $_POST['userName']);
  $email = mysqli_real_escape_string($database, $_POST['email']);
  
 //Checking that the username doesnt exist already    
     $user_check= "SELECT * FROM user WHERE userName='$userName' LIMIT 1";
     $result = mysqli_query($database, $user_check);
     $user = mysqli_fetch_assoc($result);
  
//if the username exists already warn user and redirect them
  if ($user) { 
    if ($user['userName'] === $userName) {
     array_push($errors);
     msg("Username already exists, please choose another");  
    }
  }
    
//if the username does not exist already update it
else if (count($errors) == 0) {
    
    $query = "UPDATE user SET userName ='$userName' WHERE email='$email'";
    
        mysqli_query($database, $query);
   
    alert("Username updated succesfully! Please Login again");  
    
    }
    $_SESSION['userName'] = $userName;
}


//Javascript to send confirmation or alert to user
function alert($message) { 
      
// Display the alert box and redirect to settings.php  
   echo "<script>
   
   alert('$message');
   location='login.php';
   </script>"; 
}

//Javascript for the warning message
function msg($warning) { 
      
// Display the alert box and redirect to settings.php  
   echo "<script>
   
   alert('$warning');
   location='settings.php';
   </script>"; 
}

?>