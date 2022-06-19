<?php
	include("session.php");
	include("conf.php");
	$StudID=intval($_GET["id"]);//Primary Key value, from URL Parameter
	$sql="INSERT INTO `Parents` (UserID,Name,StudentID) VALUES('$idd','$user','$StudID')";
	$result = mysqli_query($con, $sql);
	
	mysqli_close($con);
	
	header("location:Profile.php");
?>