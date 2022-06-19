<?php include ('session.php');?>
<!DOCTYPE html>
<html>

<head>
	<link href="UI.css"rel="stylesheet"type="text/css">
	<title>History</title>
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
			<h1>History of ABCDojo</h1>
			<h3>Welcome To <span id="W_Name1">ABCDojo</span></h3>
			<p style="font-size : 30px">
				ABCDojo was discovered in September 9th of 2014 by Gintoki Tatakae Kuzuo the twenty third<br>
				in his ealy years he did not go to school, so he does not know basic stuff like math and colors<br>
				when he discovered the internet he immeduately sold his mother and bought himself a computer<br>
				because he vows that every kid has a right to learn and not suffer like he did<br>
				(if they have enough money to buy a computer and internet)
			</p>
			<p style="font-weight: bold;">Thanks For Visiting Our Site<br><br>
			<span style=" font-size: 16px; font-weight: bold; text-align: center;">Have a nice day !</span></p><br>
</div>
<br><br><br>
	<div class="container">
      <div class="buabthis"><?php

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