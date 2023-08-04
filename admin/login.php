<?php 

	include '../database/connect.php';
	
	if(isset($_GET['submit']))
	{
		$un = $_GET['un'];
		$pass = $_GET['pass'];

		$sql = "select * from login where username = '$un' and password ='$pass'"; 
		$result = $conn->query($sql);
		if($row = $result->fetch_assoc())
		{
		if($un==$row['username'] && $pass==$row['password'])
		{
			$_SESSION["un"] = $row['username'];
			echo "<script>alert('Login Successful... Welcome to Panel...!'); window.location.href='index.php'; </script>";
		}
	}
		else
		{
			echo "<script>alert('Wrong details'); </script>";
		}

	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body style="background-color: greenyellow;">
	<div class="container" style="margin-right: 350px; background-color: white; margin-top: 100px; height: 350px; width: 50%; border-radius: 5%; padding: auto; ">
		<h2 style="text-align:center;">Login Form</h2>
		<form method="GET">
			<div class="form-group">
				<td>Username : </td>
				<input type="text" class="form-control" name="un">
			</div>
			<div class="form-group">
				<td>Password : </td>
				<input type="password" class="form-control" name="pass">
			</div>
			<button class="btn btn-success" type="submit" name="submit">Login</button>
		</form>
	</div>
</body>
</html>