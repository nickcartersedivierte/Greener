<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/internalStyle.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
</head>
    
<body>
    
<ul class="navbar">
  <li><a class="active" href="index.html">Back</a></li>
</ul>
    
 <div class ="container">
  	<h2>Login</h2>
  </div>

<div class= "form">
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="form-group">
  		<label>Username</label>
  		<input type="text" name="userName" >
  	</div>
  	<div class="form-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="form-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	
  	<p >
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
      </div>
  </form>
</div>
    
</body>
</html>