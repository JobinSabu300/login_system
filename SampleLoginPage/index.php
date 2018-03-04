<?php
	require 'dbconfig/config.php';
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>

		<title>Login Page</title>
		<link type="text/css" rel="stylesheet" href="css/style.css">

	</head>
	<body style="background-color: #7f8c8d">

		<div id="main-wrapper">
			<center><h2>Login Form</h2>
				<img src="imgs/EasyCraft.png" class="avatar"></center>
		
		
		<form class="myform" action="index.php" method="post">
			<label><b>Username:</b></label>
			<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br/>
			<label><b>Password:</b></label>
			<input name="password" type="Password" class="inputvalues" placeholder="Type your password" required/>
			<input name="login_btn" type="submit" id="login_btn" value="Login"/><br/>
			<a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
		</form>

		<?php

			if(isset($_POST['login_btn'])){
				$username = $_POST['username'];
				$password = $_POST['password'];

				$query = "SELECT * FROM user where username='$username' AND password='$password';";
				$query_run = mysqli_query($con, $query);

				if(mysqli_num_rows($query_run)>0){
					$_SESSION['username'] = $username;
					header("Location: homepage.php");
					exit();	
				}

				else{
						echo '<script type="text/javascript">alert("Username doest not exist")</script>';
				}
			}
		?>
		</div>

	</body>
</html>