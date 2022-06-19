<?php
	include("conf.php");
	$sql = mysqli_query($con,"select * from student where UserID = '$idd' ");
	
	$roww = mysqli_fetch_array($sql,MYSQLI_ASSOC);
	
	$belt = $roww['BeltID'];
	$expnow = $roww['ExpNow'];
	
	$sqll = mysqli_query($con,"select * from belt where BeltID = '$belt' ");
	
	$row = mysqli_fetch_array($sqll,MYSQLI_ASSOC);
	
	$level = $row['Proficiency'];
	$expneed = $row['ExpTotal'];
	$maximum = $row['MaxLevel'];
?>