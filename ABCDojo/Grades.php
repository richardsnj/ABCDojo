<?php
   include('conf.php');
   session_start();
   
   $Username = $_SESSION['login_user'];
   
   $sql = mysqli_query($con,"select * from user where Name = '$Username' ");

   $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
   
   $user = $row['Name'];
   $userid = $row['ID'];

   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>