<?php
	include ("session.php");
	include("conf.php");
	$sql0="SELECT * FROM parents WHERE UserID='$idd'";
	$result1 = mysqli_query($con, $sql0);
	$Row = mysqli_fetch_assoc($result1);
	$chiID=$Row["StudentID"];
	$NewMail=$_POST["txtEmail"];
	$sql="UPDATE user SET mail='$NewMail' WHERE UserID='$chiID'";
	$result = mysqli_query($con, $sql);
	
	mysqli_close($con);
	echo "<script>alert('Updated Successfuly!');window.location.href='Profile.php';</script>";
?>