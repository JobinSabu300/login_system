<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>

		<title>Home Page</title>
		<link type="text/css" rel="stylesheet" href="css/style.css">

	</head>
	<body style="background-color: #7f8c8d">

		<div id="main-wrapper">
			<center><h2>Home Page</h2>
				<h3>Welcome <?php echo $_SESSION['username'] ?></h3>
				<img src="imgs/EasyCraft.png" class="avatar"></center>
		
		
		<form class="myform" action="homepage.php" method="post">
			
			<input name="logout_btn" type="submit" id="logout_btn" value="Log Out"/><br/>
			
		</form>
		<?php
			if(isset($_POST['logout_btn'])){
			session_destroy();
			header("Location: index.php");
		}
		?>
		</div>

	</body>
</html>