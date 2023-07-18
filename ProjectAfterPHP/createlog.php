<!DOCTYPE html>
<html>
<head>
	<title>Create HAMMEDzFLIX Account</title>
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
			<form action="includes/create.inc.php" method="post">
				<img src="images/avatar4.png">
				<h6 class="title">Hello Friend!</h6>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>What's your name?</h5>
           		   		<input type="text" class="input" name="name" placeholder="">
           		   </div>
           		</div>
                   <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-at"></i>
                    </div>
                    <div class="div">
                            <h5>Got a Cool Username?</h5>
                            <input type="text" class="input" name="uname" placeholder="">
                    </div>
                 </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Shhh... What's your Password?</h5>
           		    	<input type="password" class="input" name="password" placeholder="">
            	   </div>
            	</div>
            	<input type="submit" name="submit" class="btn" value="Create my Account!">
                
            </form>
        </div>

		<?php 
		if(isset($_GET["error"])){
			if($_GET["error"] == "emptyinput") {
				echo '<script>alert("Please fill all the fields!")</script>';
			}
			else if($_GET["error"] == "invalidUsername") {
				echo '<script>alert("Invalid Characters in username!")</script>';
			}
			else if($_GET["error"] == "unameExists") {
				echo '<script>alert("Username is already taken!")</script>';
			}
			// else if($_GET["error"] == "passExists") {
			// 	echo '<script>alert("Password is already taken!")</script>';
			// }
			else if($_GET["error"] == "stmtFailed") {
				echo '<script>alert("Oops! We have a technical error. Please try again!")</script>';
			}
		}
	?>

    </div>
    <script type="text/javascript" src="logapp.js"></script>

</body>
</html>