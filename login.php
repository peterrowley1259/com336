<?php session_start(); ?>
<?php include('config.php'); ?>


<html lang="en">
  <head>
     <meta charset="utf-8">
	 <link rel="stylesheet" href="assets/stylesheets/main.css">
	 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
     <title>Login</title>
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
			<h1>Login</h1>

			<p>Returning customers please login below with your email address</p>

		</div>

	<section class="row">
		<div class="grid">
		
		<form action="#" method="post">

		<div class="loginform">
			<label for="email"><b>Email address</b></label>
			<input type="text" placeholder="Enter email address" name="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>

			<button type="submit" class="login" title= "Log in" name="login" value= "Login">Log in </button>
			
			
			<div class="container" style="background-color:#">
				<button type="button" class="createacc" onclick="window.location.href='register.php'">Create Account</button>
			</div>
		</div>

		
	</form>
	</div>
	
	<?php 
	if (isset($_POST['login']))
		{
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['psw']);
			
			$query 		= mysqli_query($con, "SELECT * FROM customer WHERE password='$password' AND email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['customerID']=$row['customerID'];
					header("location:products.php");

				}
			else
				{
				//echo 'Invalid Username and Password Combination';
				echo "<p align=center>Invalid username or Password </p>";
				}
		}
	?>
	
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
