<?php
	
	include_once '../database/connect.php';

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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<table class="table table-bordered">

		<tr>
			<th>Title</th>
			<th>Date</th>
			<th>Time</th>
			<th>Discription</th>
			<th>Image</th>

		</tr>
		
		<?php

			$sql= "select * from blog order by id desc";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc())
			{
		?>

				<tr>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><?php echo $row['time']; ?></td>
					<td><?php echo $row['discription']; ?></td>
					<td><img width="100px" src="../assets/images/blog/<?php echo $row['image']; ?>"></td>
					<td>
						<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
					    <a href="update.php?id=<?php echo $row['id']; ?>">update</a>
					</td>

				</tr>

				<?php
				} 
				?>

	</table>
	<button class="btn btn-success" ><a href="write_blog.php"  style="color: white;">Add clint</a></button>

</body>
</html>