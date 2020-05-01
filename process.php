<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	
	$userName 		= $_POST['userName'];
	$email 			= $_POST['email'];
	$password 		= sha1($_POST['password']);

		$sql = "INSERT INTO user ( userName, email, password ) VALUES(?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([ $userName, $email, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $userName = mysqli_real_escape_string($db, $_POST['userName']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($userName)) {
  	array_push($errors, "UserName is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE userName='$userName' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['userName'] = $userName;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>