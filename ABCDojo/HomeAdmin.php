<?php
	include("session.php")
?>
<!DOCTYPE html>
<html>

<head>
	<link href="UI.css"rel="stylesheet"type="text/css">
	<title>Home</title>
	<style>
			html { scroll-behavior: smooth; } 
			section {
				height:300px;
				float: left;
				font-size:50px;				
 				text-align:center;
 				margin-top:300px;
			}
			#sec1 {
			}
			#sec2 {
			}
			#sec3 {
			}
			#sec4 {
			}
			/* For mobile phones: */
				[class*="col-"] {
				width: 100%;
			}
			@media only screen and (min-width: 600px) {
				/* For tablets: */
				.col-s-1 {width: 8.33%;}
				.col-s-2 {width: 16.66%;}
				.col-s-3 {width: 25%;}
				.col-s-4 {width: 33.33%;}
				.col-s-5 {width: 41.66%;}
				.col-s-6 {width: 50%;}
				.col-s-7 {width: 58.33%;}
				.col-s-8 {width: 66.66%;}
				.col-s-9 {width: 75%;}
				.col-s-10 {width: 83.33%;}
				.col-s-11 {width: 91.66%;}
				.col-s-12 {width: 100%;}
			}
			@media only screen and (min-width: 768px) {
				/* For desktop: */
				.col-1 {width: 8.33%;}
				.col-2 {width: 16.66%;}
				.col-3 {width: 25%;}
				.col-4 {width: 33.33%;}
				.col-5 {width: 41.66%;}
				.col-6 {width: 50%;}
				.col-7 {width: 58.33%;}
				.col-8 {width: 66.66%;}
				.col-9 {width: 75%;}
				.col-10 {width: 83.33%;}
				.col-11 {width: 91.66%;}
				.col-12 {width: 100%;}
				}
			.rounded{
				border-radius: 50%;
				cursor: pointer;
			}			
			.homebox {
				height: 500px;
				width: 99.2%;
				background-color: white;
				position: absolute;
				top: 1500px;
				z-index: -1;
			}
		</style>
		
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body style="background-image:url('pic/Dojo%20background.png');background-size:100%;background-repeat:no-repeat">
	<div class="navbar">
		<ul>
			<li>&nbsp;&nbsp;</li>
			<li><img style = "width: 60px; margin-top:10px; margin-bottom:-15px;" src = "pic/logomungkin.png" alt = "Logo">&nbsp;&nbsp;</li>
			<li style="color:#D48F34">ABCDojo</li>
			<li>&nbsp;&nbsp;</li>
			<li><a href="HomeAdmin.php" title="Home">Home</a></li>
			<li style="color:white"> | </li>
			<li><a href="AddQuestion.php" title="Your Profile">Add Question</a></li>
			<li style="color:white"> | </li>
			<li><a href="Logout.php" title="Logout">Logout</a></li>
			<li style = "float: right;">
				<div class = "menu-btn">
					<div class = "menu-burger"></div>
				</div>
			</li>
		</ul>
		<ul class = "nav-links">
			<br><br>
			<li style= "margin-left: 50%; position: fixed;"><a href = "History.php">History</a></li>
			<br><br><br><br>
			<li style= "margin-left: 49.38%; position: fixed;"><a href = "Aboutus.php">About Us</a></li>
		</ul>
		
	</div>
	<script src=burgnimation.js></script>
	<div style="text-align:center; color:white;font-size: 80px; padding:450px">
		<h1>Welcome <?php echo $user; ?></h1>
	</div>
</body>

</html>