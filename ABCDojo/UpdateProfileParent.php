<?php
	include ("session.php");
	include("conf.php");
	$NewMail=$_POST["txtEmailP"];
	$sql="UPDATE user SET mail='$NewMail' WHERE UserID='$idd'";
	$result = mysqli_query($con, $sql);
	
	mysqli_close($con);
	echo "<script>alert('Updated Successfuly!');window.location.href='Profile.php';</script>";
?>