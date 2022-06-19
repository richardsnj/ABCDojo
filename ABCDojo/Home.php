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
			div.parents, div.children{
				display: none;
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
	<script type="text/javascript">
			$(document).ready(function(){
			let role = <?php echo json_encode($role); ?>;
			if(role == "Parents"){
				$("div.parents").show();
			}
			else if(role == "Children"){
				$("div.children").show();
				
			}
			});
	</script>

</head>

<body style="background-image:url('pic/Dojo%20background.png');background-size:100%;background-repeat:no-repeat">
	<div class="navbar">
		<ul>
			<li>&nbsp;&nbsp;</li>
			<li><img style = "width: 60px; margin-top:10px; margin-bottom:-15px;" src = "pic/logomungkin.png" alt = "Logo">&nbsp;&nbsp;</li>
			<li style="color:#D48F34">ABCDojo</li>
			<li>&nbsp;&nbsp;</li>
			<li><a href="Home.php" title="Home">Home</a></li>
			<li style="color:white"> | </li>
			<div class = "children">
			<li><a href="Home.php#challenges" title="Daily Challenges">Challenges</a></li>
			<li style="color:white"> | </li>
			</div>
			<li><a href="Profile.php" title="Your Profile">Profile</a></li>
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
	<div style="text-align:center; color:white;font-size: 80px; padding:450px;">
		<h1>Welcome <?php echo $user; ?></h1>
	</div>
	
	<div class="children">
	<?php
		include("conf.php");
		$sql="SELECT userid FROM `student` WHERE userid='$idd'";
		$result= mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
	
		if($count == 0 and $role == "Children"){
			$sqladd="INSERT INTO `student` (Name,UserID,BeltID,ExpNow,TempExp) VALUES('$user','$idd','1','0','0')";
			mysqli_query($con,$sqladd);
		}
	?>
	
	<div class = "homeBox">
		<script src="app.js" type="text/javascript">
		console.log(ca)
		</script>
		<?php
			include("data.php");
			if (isset($_COOKIE["ca"])){
				$exp = $_COOKIE["ca"];
				$sqlstud="UPDATE student SET ExpNow='$expnow' + '$exp' WHERE UserID='$idd'";
				mysqli_query($con,$sqlstud);
				echo '<script>document.cookie = "ca=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";</script>';
			}
		?>
	</div>
	
	<section id="sec1" class="col-3 col-s-6">
		
		<a href = "thequiz.php"><img class = "rounded" width="80%" alt="Challenges" src="pic/Challenges.png">
		</a>
		<h4 id = "challenges">Challenges</h4>
	</section>
	<section id="sec2" class="col-3 col-s-6">
		<a href = "thequiz.php"><img class = "rounded" width="80%" alt="Daily Exercise" src="pic/DailyExercise.png">
		</a>
		<h4>Daily Exercise</h4>
	</section>
	<section id="sec3" class="col-3 col-s-6">
		<a href = "thequiz.php"><img class = "rounded"width="80%" alt="Training" src="pic/Training.png">
		</a>
		<h4>Training</h4>
	</section>
	<section id="sec4" class="col-3 col-s-6">
		<a href = "thequiz.php"><img class = "rounded" width="80%" alt="Test" src="pic/Test.png">
		</a>
		<h4>Test</h4>
	</section>
	</div>
	
	<div class = "parents">
	<section id="sec1"class="col-6 col-s-12" style="margin-bottom:500px;">
		<h1>ABCDojo</h1>
		<p>
			Here in ABCDojo your child can learn how to do basic stuff
			while using kungfu theme to entize them to keep playing
			and best of all IT'S FREE!
		</p>
	</section>
	<section id="sec4" class="col-6 col-s-12" style="margin-bottom:500px">
		<img alt="intro" src="pic/43-437914_free-vector-karate-silhouette-karate-kick-silhouette.png" style="width:100%;">
	</section>
	<section id="sec1"class="col-6 col-s-12">
		<img alt="belts" src="pic/belt.png"style="width:100%;">
	</section>
	<section id="sec4" class="col-6 col-s-12">
		<p style="font-size:80px;">
			Your child can even level up <br>
			depending on how they perform <br>
			and get one of these belts
		</p>
	</section>

	
	</div>
</body>

</html>