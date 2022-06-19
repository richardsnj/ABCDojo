<?php
include("conf.php");
if (isset($_POST['question_check']))
{
	$ques = $_POST['Ques'];
	$query = "SELECT * FROM question WHERE question='$ques'";
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
	$que=$_POST["Ques"];
	$ans1=$_POST["Ans1"];
	$ans2=$_POST["Ans2"];
	$ans3=$_POST["Ans3"];
	$ans4=$_POST["Ans4"];
	$rans=$_POST["RAns"];
	$sql="INSERT INTO `question` (Question,Answers,RightAns) VALUES('$que','$ans1,$ans2,$ans3,$ans4','$rans')";
	if (mysqli_query($con,$sql)){
		echo "success";
	}
	else {
		echo "<script>alert('error')</script>";
	}
	exit();
}
mysqli_close($con)
?>
