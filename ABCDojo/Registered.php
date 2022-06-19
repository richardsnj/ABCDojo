<?php
include("conf.php");
if (isset($_POST['email_check']))
{
	$email = $_POST['email'];
	$query = "SELECT * FROM user WHERE mail='$email'";
	$results = mysqli_query($con,$query);
	if (mysqli_num_rows($results)> 0){
		echo "not_available";
	}
	else {
		echo "available";
	}
	exit();
}
if(isset($_POST['BtnRegis']))
{
	$Username=$_POST["username"];
	$Upass=$_POST["password"];
	$Umail=$_POST["email"];
	$Urole=$_POST["role"];
	$sql="INSERT INTO `user` (Name,Password,mail,Role) VALUES('$Username','$Upass','$Umail','$Urole')";
	mysqli_query($con,$sql);
	echo "success";
	exit();
}
mysqli_close($con)
?>
