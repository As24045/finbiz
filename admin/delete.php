<?php
	
	include_once '../database/connect.php';

	if(empty($_SESSION["un"]))
{
	header("Location:login.php");
}

	$id =$_GET['id'];
	$sql = "delete from blog where id = '$id'";

	if ($conn->query($sql))
	{
		echo "<script> window.location.href = 'view.php'; </script>";
	}

?>