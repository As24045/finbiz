<?php 
include '../database/connect.php';

if(empty($_SESSION["un"]))
{
	header("Location:login.php");
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>	
		<button>
			<a href="write_blog.php">Write Blog</a>
		</button>

		<button>
			<a href="view.php">View Blog</a>
		</button>

		<a href="logout.php">LogOut</a>

</body>
</html>