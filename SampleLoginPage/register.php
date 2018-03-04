<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
	<head>

		<title>Registration Page</title>
		<link type="text/css" rel="stylesheet" href="css/style.css">

	</head>
	<body style="background-color: #7f8c8d">

		<div id="main-wrapper">
			<center><h2>Registration Form</h2>
				<img src="imgs/EasyCraft.png" class="avatar"></center>
		
		
		<form class="myform" action="register.php" method="post">
			<label><b>Username:</b></label>
			<input name="username" type="text" class="inputvalues" placeholder="Type your username"  required/><br/>
			<label><b>Password:</b></label>
			<input name="password" type="Password" class="inputvalues" placeholder="Type your password"  required/>
			<br/>
			<label><b>Confirm Password:</b></label>
			<input name="cpassword" type="Password" class="inputvalues" placeholder="Type your password again"  required/>
			<input name="signup_btn" type="submit" id="signup_btn" value="Sign Up"/><br/>
			<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
		</form>
		<?php
			if(isset($_POST['signup_btn'])){

				if($_POST['password'] != $_POST['cpassword']){
					echo '<script type="text/javascript">alert("Passwords dont match")</script>';
				}
				else{


				$username = $_POST['username'];
				$password = $_POST['password'];

				$query = "SELECT * FROM user WHERE username='$username';";
				$query_run = mysqli_query($con,$query);

					if(mysqli_num_rows($query_run)>0){
						echo '<script type="text/javascript">alert("User already exists...please use another username")</script>';
					}
					else{
						$query = "INSERT INTO user VALUES('$username', '$password');";
						$query_run = mysqli_query($con, $query);
						header("Location: index.php");
						exit();
					}

				}


			}
		?>
		</div>

	</body>
</html>