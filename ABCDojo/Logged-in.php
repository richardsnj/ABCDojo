<?php
include("conf.php");
session_start();
$Username=$_POST['txtUsername'];
$Upass=$_POST['txtPass'];

$sql="SELECT userid FROM user WHERE Name = '$Username' and Password = '$Upass'";
$result=mysqli_query($con,$sql);
$count = mysqli_num_rows($result);

if($count == 1 and ($Username == "Admin" or $Username == "admin") and $Upass == "admin") {
	$_SESSION['login_user'] = $Username;
	
	echo "<script>alert('Welcome Admin'); window.location.href='HomeAdmin.php';</script>";
}else if($count == 1) {
	$_SESSION['login_user'] = $Username;
	
	echo "<script>alert('Welcome'); window.location.href='Home.php';</script>";
}else {
	echo "<script>alert('Your Login Name or Password is invalid'); window.location.href='Login.php';</script>";
}
mysqli_close($con)
?>