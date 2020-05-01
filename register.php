<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="css/internalStyle.css">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
</head>
    
<body>
    
<ul class="navbar">
  <li><a class="active" href="index.html">Back</a></li>
</ul>
    
  <div class="container">
  	<h2>Register</h2>
  </div>
	
<div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <div class="register">
  	<div class="form-group">
  	  <label>Username </label>
  	  <input type="text" name="userName" value="<?php echo $userName; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="form-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
        </div>
    </div>  
  </form>
</div>
    
</body>
</html>