<?php
	include('conf.php');
	session_start();
   
	$Username = $_SESSION['login_user'];
   
	$sql = mysqli_query($con,"select * from user where Name = '$Username' ");

	$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
    
    $idd = $row['UserID'];
	$user = $row['Name'];
	$role = $row['Role'];
	$mail = $row['mail'];
	
	if(!isset($_SESSION['login_user'])){
		header("location:login.php");
		die();
	}
?>