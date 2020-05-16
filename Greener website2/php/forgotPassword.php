<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Password</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </head>
  <body>

    <section>

      <div class="container-fluid">

        <!-- Nav Bar -->

        <nav class="navbar navbar-expand-lg navbar-dark">

          <a class="navbar-brand" href="../index.html">#Greener</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="../index.html#features">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.html#testimonials">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.html#team">GreenTech</a>
              </li>
            </ul>

          </div>
        </nav>


        <!-- Title -->
        <div class="container">
        	<div class="d-flex justify-content-center h-100">
        		<div class="card">
        			<div class="card-header">
        				<h3>Set new password</h3>
        			</div>
        			<div class="card-body">
        				<form>
        					<div class="input-group form-group">
        						<div class="input-group-prepend">
        							<span class="input-group-text"><i class="fas fa-user"></i></span>
        						</div>
        						<input type="text" class="form-control" placeholder="email">

        					</div>
        					<div class="form-group">
        						<input type="submit" value="Send" class="btn float-right login_btn">
        					</div>
        				</form>
        			</div>
        		</div>
        	</div>
        </div>

      </div>

    </section>



  </body>
</html>
