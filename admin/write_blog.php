<?php
	include_once '../database/connect.php';
if(empty($_SESSION["un"]))
{
	header("Location:login.php");
}
	
	date_default_timezone_set("Asia/Kolkata");
	if (isset($_POST['submit'])) 
{
	$title = $_POST['title'];
	$discription = $_POST['discription'];
	$date = date("d-m-Y");
	$time = date("h:i:s A");



	$img_name = $_FILES['img']['name'];
	$img_tmp=$_FILES['img']['tmp_name'];
	$store = 'assets/images/blog/'.$img_name;
	move_uploaded_file($img_tmp, $store);


	$sql = "insert into blog(title, date, time, discription, image) values ('$title', '$date','$time','$discription','$img_name')";
	if($conn->query($sql))
	{
		echo "<script>alert('Data Submitted Successfully...!'); window.location.href='view.php'; </script>";
	}
}
?>
<script type="text/javascript">
	var loadFile = function(event)
	{
		var output = document.getElementById('output');
		output.src=URL.createObjectURL(event.target.files[0]);
	}
</script>

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
<body style="background-color:coral;">
	<div class="container">
		<div style="margin-left: 320px; margin-right: 320px;margin-top: 100px; background-color: white; height: 550px; padding-top: 30px; border-radius: 10px">
			<div style="margin: 10%;">

				<form method="POST" action="" class="form-group" enctype="multipart/form-data">
		
				<input type="text" placeholder="Title" class="form-control" name="title">
				<br>

				<textarea placeholder="Discription" name="discription" rows="8" cols="53"></textarea>
				<br>

				<input type="file" name="img" onchange="loadFile(event)">
				<br>
				<br>
				<img id="output" style="width:120px; height: 90px;">
				<br>
				<br>
				<button name="submit" class="btn btn-success">Submit</button>

				</form>	
			</div>
		</div>
		</div>
	
		
		

</body>
</html>