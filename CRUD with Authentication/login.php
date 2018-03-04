<?php
	session_start();

	if(isset($_SESSION['logindetails'])){
		header("Location:index.php");
	}

	include_once('connect.php');
	if (isset($_POST['email']) && isset($_POST['password'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM login WHERE userid='$email' AND password='$password'";
		//echo $sql;
		$result = mysqli_query($con, $sql);
		 
		if (mysqli_num_rows($result)>0) {
			if($row = $result->fetch_assoc()) {
				$_SESSION['logindetails'] = $row['userid']; 
				header("Location:index.php");
					       
			}
		}


	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">

		<form method="post" action="login.php">
		  <div class="form-group">
		    <label for="userid">User ID</label>
		    <input type="text" name="email" class="form-control" id="userid" placeholder="Email" value="">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="">
		  </div>

		  <button type="submit" class="btn btn-default">Login</button>
		</form>	

	</div>


</body>
</html>