<?php
	include("conf.php");
	
	$id = intval($_GET["id"]); //Primary Key value, from URL Parameter
	
	$sql = "DELETE FROM parents WHERE UserID=".$id;
	
	$result = mysqli_query($con, $sql);
	
	$sqluser = "DELETE FROM user WHERE UserID=".$id;
	
	$result = mysqli_query($con, $sqluser);

	mysqli_close($con);
	
	header("location:login.php");

?>