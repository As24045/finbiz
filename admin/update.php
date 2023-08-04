<?php

	include_once '../database/connect.php';
	if(empty($_SESSION["un"]))
{
	header("Location:login.php");
}

	$id = $_GET['id'];
	

	$sql = "select * from blog where id = '$id'";
	$result = $conn->query($sql);
	if($row = $result->fetch_assoc())
	{
	}

	if(isset($_POST['submit']))
	{
		$title = $_POST['title'];
		$discription = $_POST['discription'];
		

		// for the comming imges
		$old_img_name = $_POST['old_img_name'];
		$img_name = $_FILES['img']['name'];
		$img_tmp = $_FILES['img']['tmp_name'];
	
		if ($img_name!='')
		{
			$store = ('../assets/images/blog/'.$img_name);
			move_uploaded_file($img_tmp, $store);
			unlink("../assets/images/blog/".$old_img_name);
		}
		else
		{
			$img_name = $old_img_name;
		}
		// end	

		$sql = "update blog set title = '$title', discription = '$discription', image = '$img_name' where id = '$id'";

	if($conn->query($sql))
	{
		echo "<script>alert('Data updated Successfully...!'); window.location.href='view.php'; </script>";
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

	<script type="text/javascript">
	var loadFile = function(event)
	{
		var output = document.getElementById('output');
		output.src=URL.createObjectURL(event.target.files[0]);
	}
</script>

	<title></title>
</head>
<body style="background-color:coral;">
	<div class="container">
		<div style="margin-left: 320px; margin-right: 320px;margin-top: 150px; background-color: white; height: 450px; padding-top: 50px; border-radius: 10px">
			<div style="margin: 10%;">

				<form method="POST" action="" enctype="multipart/form-data" class="form-group">
		
				<input type="text" placeholder="Title" class="form-control" name="title" value="<?php echo $row['title']; ?>">
				<br>

				<textarea placeholder="Discription" name="discription" rows="8" cols="53"><?php echo $row['discription']; ?></textarea>
				<br>

				<input type="hidden" name="old_img_name" value="<?php echo $row['image']; ?>">

				
				<br>
				<br>
				
				<input type="file" name="img" onchange=loadFile(event)>
				<img src="../assets/images/blog/<?php echo $row['image']; ?>" id="output" style="width:120px; height: 90px;">
				<br>
				<input type="text" name="id" hidden value="<?php echo $row['id'] ?>">
				<br>
				<br>

				<button name="submit" value="update" class="btn btn-success">Update</button>

				</form>	
			</div>
		</div>
		</div>
	
		
		

</body>
</html>