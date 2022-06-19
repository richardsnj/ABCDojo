<?php
include("conf.php");
session_start();

if(isset($_SESSION['login_user'])){
	session_destroy();
	echo "<script>location.href='login.php'</script>";
}
else{
	echo "<script>location.href='login.php'</script>";
}
?>