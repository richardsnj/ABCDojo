<?php include ('session.php');?>

<!DOCTYPE html>
<html>

<head>
	<link href="UI.css"rel="stylesheet"type="text/css">
	<title>About Us</title>
</head>

<body style="background-image:url('pic/Dojo%20background.png');
		background-size:100%;
		background-repeat:no-repeat; 
		background-position:center;
        padding: 50px;
        border-radius: 35px;
        margin: 20px;
        color: white;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		text-align:center">
		<div style="background-color: gray;border-radius: 35px;">
		
		<h2>About Us !</h2>
		<h3 style="text-align: center;">Welcome To <span id="W_Name1">ABCDojo</span></h3>
		<p style="font-size : 30px;">
			ABCDojo is a Professional 
		    Educational Platform. 
		    Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of 
		    Educational, with a focus on dependability and 
		    Kids learning website. We're working to turn our passion for 
		    Educational into a booming online website We hope you enjoy our 
		    Education Website as much as we enjoy offering them to you.
		</p>
		<p style="font-weight: bold; text-align: center;">Thanks For Visiting Our Site<br><br>
		<span style=" font-size: 16px; font-weight: bold; text-align: center;">Have a nice day !</span></p>
</div>
<br><br><br>
	<div class="container">
      <div class="buabthis">
	  <?php

		if ($role == "ADMIN"){
			echo '<a href="HomeAdmin.php" class="abthis btnabthis">Back to Home</a>';
		}
		else{
			echo '<a href="Home.php" class="abthis btnabthis">Back to Home</a>';
		}
		?>
      </div>
    </div>

</body>

</html>