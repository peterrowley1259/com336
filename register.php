<?php session_start(); ?>
<?php include('config.php'); ?>

<html lang="en">
  <head>
     <meta charset="utf-8">
	 <link rel="stylesheet" href="assets/stylesheets/main.css">
	 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
     <title>Register</title>
  </head>
  
  <body>
  
  	<!-- Header -->
  
 	<header class="primary-header container group">
  	
		<h1 class="logo">
			<a href="index.php"><img src="assets/images/updatedlogo.png" alt="index">
			
		</h1>
  			
  		<h3 class="tagline"></h3>
  		
		<nav class="nav primary-nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<!--
		    -->
				<li><a href="Products.php">Products</a></li>
				<!--
		    -->
				<li><a href="booking.php">Booking</a></li>
				<!--
		    -->
				<li><a href="location.php">Location</a></li>
				<!--
		    -->
				<li><a href="login.php">Log in</a></li>
			</ul>
		</nav>


	</header>
	
	<!-- Main content -->
	
	<section class="row-alt">
		<div class="lead container">
			<h1>Create Account</h1>

			<p>Please register with us to continue to the site</p>

		</div>
	<section class="row">
		<div class="grid">
		
	<form action="#" method="post">
		<div class="loginform">
		<p>Please fill in this form to create an account.</p>
		<hr>

		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>

		<label for="psw-repeat"><b>Confirm Password</b></label>
		<input type="password" placeholder="Confirm Password" name="psw-repeat" required>
		
		<label for="firstname"><b>First Name</b></label>
		<input type="text" placeholder="Enter First Name" name="firstname" required>	
		
		<label for="lastname"><b>Last Name</b></label>
		<input type="text" placeholder="Enter Last Name" name="lastname" required>
		
		<label for="address"><b>Address</b></label>
		<input type="text" placeholder="Enter Address" name="address" required>
		
		<label for="country"><b>Country</b></label>
		<input type="text" placeholder="Enter Country" name="country" required>
		<hr>

	<?php
		if(isset($_POST['register'])) {
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['psw']);
			$confirmpass = mysqli_real_escape_string($con, $_POST['psw-repeat']);
			$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
			$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
			$address = mysqli_real_escape_string($con, $_POST['address']);
			$country = mysqli_real_escape_string($con, $_POST['country']);
		
			$query = mysqli_query($con, "SELECT * FROM customer WHERE email= '$email'");
			$row = mysqli_fetch_array($query);
			$num_row = mysqli_num_rows($query);
		
			if($password == $confirmpass){
				if($num_row == 0) {
					$query = mysqli_query($con, "INSERT INTO customer (`email`, `password`, `firstName`, `lastName`, `country`, `address`) VALUES('$email', '$password', '$firstname', '$lastname', '$country', '$address')");
					header("location:login.php");
				}
				else {
					echo "<p align=center>User already exists </p>";
				}
			}
			else {
				echo "<p align=center>Password does not match </p>";
			}
		}
		
	?>	
	
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" title="Register" name="register" value="Register">Register</button>
		</div>
  
	</form>
	
	</div>
	
		</div>
	
	</section>

	</section>
	
	<!-- Footer -->

	<footer class="primary-footer container group">
  		<small>&copy; Smith Car Sales</small>
  	
		<nav class="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<!--
		    -->
			<li><a href="Products.php">Products</a></li>
			<!--
		    -->
			<li><a href="booking.php">Booking</a></li>
			<!--
		    -->
			<li><a href="location.php">Location</a></li>
			<!--
		    -->
			<li><a href="register.php">Register</a></li>
		</ul>
		</nav>


	</footer>

  </body>
</html>
