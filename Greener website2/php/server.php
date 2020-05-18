<?php
session_start();

// initializing variables
$userName = "";
$email    = "";
$errors = array(); 

// connect to database
$database = mysqli_connect('localhost', 'root', '', 'greener');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive values from the form
  $userName = mysqli_real_escape_string($database, $_POST['userName']);
  $email = mysqli_real_escape_string($database, $_POST['email']);
  $password_1 = mysqli_real_escape_string($database, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($database, $_POST['password_2']);

  // form validation
  // adding (array_push()) corresponding error unto $errors array
  if (empty($userName)) { array_push($errors, "Please enter an Username"); }
  if (empty($email)) { array_push($errors, "Please enter an Email"); }
  if (empty($password_1)) { array_push($errors, "Please enter a Password"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The passwords don't match");
  }

  // checking DB to make sure the user doesnt exist already
  $user_check= "SELECT * FROM user WHERE userName='$userName' OR email='$email' LIMIT 1";
  $result = mysqli_query($database, $user_check);
  $user = mysqli_fetch_assoc($result);
  
// if user exists display message
  if ($user) { 
    if ($user['userName'] === $userName) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  //If there are no errors, register the user
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving 

  	$query = "INSERT INTO user (userName, email, password) 
  			  VALUES('$userName', '$email', '$password')";
    
    
  	mysqli_query($database, $query);
  	$_SESSION['userName'] = $userName;
  	$_SESSION['success'] =  "You are now logged in";
    
  	header('location: login.php');
  }
    
    
}

// ... 


// LOGIN USER
if (isset($_POST['login_user'])) {
  $userName = mysqli_real_escape_string($database, $_POST['userName']);
  $password = mysqli_real_escape_string($database, $_POST['password']);


  if (empty($userName)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
      
     //checking that the username and password are correct 
  	$query = "SELECT * FROM user WHERE userName='$userName' AND password='$password'";
  	$results = mysqli_query($database, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['userName'] = $userName;
  	  $_SESSION['success'] = "";
    //redirecting user
  	  header('location: challengehome.php');
  	}else {
  		array_push($errors, "Wrong username or password");
  	}
  }
}