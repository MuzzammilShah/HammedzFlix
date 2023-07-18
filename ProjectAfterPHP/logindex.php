<!DOCTYPE html>
<html>
<head>
	<title>HAMMEDzFLIX Login</title>
    <link rel="shortcut icon" href="images/MainLogoNew.png" />
	<link rel="stylesheet" type="text/css" href="logstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="images/wavefinal.png">
	<div class="container">
		<div class="img">
			<img src="images/bgl.png">
		</div>
		<div class="login-content">
			<form action="includes/login.inc.php" method="post">
				<img src="images/avatar4.png">
				<h6 class="title">WELCOME!</h6>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="password" placeholder="">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="uname" placeholder="">
            	   </div>
            	</div>
            	<!-- <a href="#">Don't have an account?</a> -->
            	<input type="submit" class="btn" value="Login" name="submit">
                <a style="text-align: unset;" href="createlog.php">Oops. Don't have an account?</a>
            </form>
        </div>

		<?php 
		if(isset($_GET["error"])){
			if($_GET["error"] == "emptyLoginInput") {
				echo '<script>alert("Please fill all the fields!")</script>';
			}
			else if($_GET["error"] == "invalidUnameInput") {
				echo '<script>alert("Invalid Username!")</script>';
			}
			// else if($_GET["error"] == "invalidPassInput") {
			// 	echo '<script>alert("Invalid Password!")</script>';
			// }
		}
	?>

    </div>
    <script type="text/javascript" src="logapp.js"></script>
</body>
</html>