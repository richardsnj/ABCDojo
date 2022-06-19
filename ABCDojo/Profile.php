<?php
	include("session.php")
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	* {
	  box-sizing: border-box;
	}
	
	.flex-container {
	  display: flex;
	  flex-wrap: wrap;
	  font-size: 30px;
	}
	
	.flex-item-left {
	  padding: 10px;
	  flex: 50%;
	  float:right;
	}
	
	.flex-item-right {
	  padding: 10px;
	  flex: 50%;
	  float:left;
	}

	/* Responsive layout - makes a one column-layout instead of a two-column layout */
	@media (max-width: 800px) {
	  .flex-item-right, .flex-item-left {
	    flex: 100%;
	  }
	}
	.button {
		border: 2px solid;
		padding: 5px;
		color: white;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 30px;
		margin: 4px 2px;
		background-color: #CAA472;
	}
	
	.button:hover{
		background-color: black;
		border-radius: 30px;
		border: none;
		transition: all .5s ease-out;
	}
	div.parents, div.children, div#Child, div#NoChild, div#NotOrphan{
		display: none;
	}
	p{
		font-size : 30px;
        background-color: #383434;
        width: 95%;
        padding: 50px;
        border-radius: 35px;
        margin: 20px;
        color: #D48F34;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
	<script type="text/javascript">
		$(document).ready(function(){
			<?php
				$sqlpa="SELECT userid FROM parents WHERE userid='$idd'";
				$result= mysqli_query($con,$sqlpa);
				$count = mysqli_num_rows($result);
			
				if( $count == 1){
					echo'$("div#Child").show();';
				}
				else{
					echo'$("div#NoChild").show();';
				}
			?>
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			<?php
				$sqlkid="SELECT studentid FROM parents WHERE StudentID='$idd'";
				$result= mysqli_query($con,$sqlkid);
				$count = mysqli_num_rows($result);
			
				if( $count == 1){
					echo'$("div#NotOrphan").show();';
				}
			?>
		});
	</script>
	<script>
		function deleteRecord(x) {
		var ask = window.confirm("Are you sure you want to delete your account?");
		if (ask) {
			window.location.href = "delete.php?id="+x;
		}
	}
	</script>
	<link href="./UI.css"rel="stylesheet"type="text/css">
	<title>User Profile</title>
</head>

<body>
	<div style="margin-top:8px; margin-left:8px;"class="navbar">
		<ul>
			<li>&nbsp;&nbsp;</li>
			<li><img style = "width: 60px; margin-top:-50px; margin-bottom:-50px;" src = "pic/logomungkin.png" alt = "Logo">&nbsp;&nbsp;</li>
			<li style="color:#D48F34; margin-top: 5px;">ABCDojo</li>
			<li>&nbsp;&nbsp;</li>
			<li style="margin-top: 3px"><a href="Home.php" title="Home">Home</a></li>
			<li style="color:white;margin-top: 5px;"> | </li>
			<div class = "children">
			<li style="margin-top: 3px"><a href="Home.php#challenges" title="Daily Challenges">Challenges</a></li>
			<li style="color:white;margin-top: 5px;"> | </li>
			</div>
			<li style="margin-top: 3px"><a href="Profile.php" title="Your Profile">Profile</a></li>
			<li style = "float: right;">
				<div class = "menu-btn">
					<div class = "menu-burger"></div>
				</div>
			</li>
		</ul>
		<ul class = "nav-links">
			<br><br>
			<li style= "margin-left: 50%;"><a href = "History.php">History</a></li>
			<br><br><br><br><br>
			<li style= "margin-left: 49.38%;"><a href = "Aboutus.php">About Us</a></li>
		</ul>
	</div>
	<script src=burgnimation.js></script>
	
	<div>
		<br><br><br>
		<h1 style="text-align: center;margin-top:120px;">User Profile</h1>
		<br>
		<div class="flex-container">
			<div class = "flex-item-left">
				<div class = "parents">
					<p>
	                    Username : <?php echo $user; ?><br>
						Role : <?php echo $role; ?><br>
						Email address : <?php echo $mail; ?><br>
						<button onclick="document.getElementById('id03').style.display='block'"style="float:right;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)"class="butn">Edit E-mail</button><br>
					</p>
					<div id="id03" class="w3-modal">
					    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
					  
					      <div class="w3-center"><br>
					        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
					        <img src="pic/login-icon-png-2.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
					      </div>
					
					      <form class="w3-container" action="UpdateProfileParent.php" method="post">
					        <div class="w3-section">
					        	<br><label><b>E-mail</b></label><br>
					        	<input type="email" name="txtEmailP" value="<?php echo $mail?>">
						        <button style="margin-bottom:10px; overflow:hidden" id="update" type="Submit" class="butn" name="BtnUpdate">Update</button><br>
					        </div>
					      </form>					
					    </div>
					  </div>
				</div>
			
				<div class = "children">
				<?php include("data.php");?>
				<?php 
				if($expnow >= $expneed and $maximum == NULL){
					$sqlad = "UPDATE student SET ExpNow='0' WHERE UserID='$idd'";
					mysqli_query($con,$sqlad);
					
					if ($belt < 9){
						$levelup = "UPDATE student SET BeltID = '$belt' + '1' WHERE UserID='$idd'";
						mysqli_query($con,$levelup);
					}
				}
				?>
					<p>
						Username : <?php echo $user; ?><br>
						Role : <?php echo $role; ?><br>
						Email address : <?php echo $mail; ?><br>
						Belt: <?php echo $level; ?><br>
						Exp : <?php echo $expnow; ?>/<?php 
						if($belt > 8){
							echo $maximum; 
						}
						else if ($belt < 9){
							echo $expneed;
						}
						?><br>
						
					</p>
				</div>
			</div>
			<div class = "flex-item-right">
				<div class = "children">
				<div id="NotOrphan">
				<button onclick="document.getElementById('id01').style.display='block'" class="butn">Parent Information</button><br>

					  <div id="id01" class="w3-modal">
					    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
					  
					      <div class="w3-center"><br>
					        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
					        <img src="pic/login-icon-png-2.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
					      </div>
					
					      <form class="w3-container" action="/action_page.php">
					        <div class="w3-section">
					        <?php
					        	include("conf.php");
		
								$sql = "SELECT * FROM parents WHERE StudentID='$idd'";
								
								$result = mysqli_query($con, $sql);
					        	$Row = mysqli_fetch_assoc($result);
					        	
					        	$ParenID=$Row["UserID"];
					        	$sqlemail = "SELECT * FROM user WHERE UserID='$ParenID'";
								
								$result = mysqli_query($con, $sqlemail);
					        	$row = mysqli_fetch_assoc($result);

					        	
					         	echo'<label><b>Parent Name</b></label><br>';
					         	echo '<h2>'.$Row["Name"].'</h2>';
					         	echo'<br><label><b>Parent ID</b></label><br>';
					         	echo '<h2>'.$Row["UserID"].'</h2>';
					         	echo'<br><label><b>E-mail</b></label><br>';
					         	echo '<h2>'.$row["mail"].'</h2><br>';
					         ?>
					        </div>
					      </form>					
					    </div>
					  </div>
					 </div>
					 <br>
					<a href="logout.php" style = "text-decoration: none" class ="butn" title = "Logout">Logout</a>
					
				</div>
				
				<div class = "parents">
					<div id="NoChild">
					<a style="margin-top:45px;text-decoration:none"href="AssignChildren.php" class ="butn" title = "Pick your children">Assign Children</a><br>
					</div>
					<div id="Child">
						<button onclick="document.getElementById('id02').style.display='block'" style = "overflow: hidden" class="butn">Children Information</button><br>
						
						  <div id="id02" class="w3-modal">
						    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
						  
						      <div class="w3-center"><br>
						        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
						        <img src="pic/login-icon-png-2.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
						      </div>
						
						      <form class="w3-container" action="UpdateProfileChild.php" method="post">
						        <div class="w3-section">
							        <?php
							        	include("conf.php");
							        	$sql="SELECT * FROM parents WHERE UserID='$idd'";
							        	$result = mysqli_query($con, $sql);
							        	$Row = mysqli_fetch_assoc($result);
							        	$chiID=$Row["StudentID"];
				
							        	$sqlemail = "SELECT * FROM user WHERE UserID='$chiID'";
										
										$result = mysqli_query($con, $sqlemail);
							        	$row = mysqli_fetch_assoc($result);
							        	
							        	$sqlbelt = "SELECT * FROM student WHERE UserID='$chiID'";
										
										$result = mysqli_query($con, $sqlbelt);
							        	$roww = mysqli_fetch_assoc($result);
							        	$belID=$roww["BeltID"];
							        	
							        	$sqllevel = "SELECT * FROM belt WHERE BeltID='$belID'";
										
										$result = mysqli_query($con, $sqllevel);
							        	$rowe = mysqli_fetch_assoc($result);

							        ?>
						         	<label><b>Children Name</b></label><br>
						         	<h2><?php echo $row["Name"] ?></h2>
						         	<br><label><b>Student ID</b></label><br>
						         	<h2><?php echo $Row["StudentID"]?></h2>
						         	<br><label><b>Belt</b></label><br>
						         	<h2><?php echo $rowe["Proficiency"]?></h2>
						         	<br><label><b>E-mail</b></label><br>
						         	<input type="email" name="txtEmail" value="<?php echo $row["mail"]?>">
						         	<button style="margin-bottom:10px; overflow:hidden" id="update" type="Submit" class="butn" name="BtnUpdate">Update</button><br>
						        </div>
						      </form>					
						    </div>
						  </div>
					</div>
					<br>
					<a href="logout.php" style = "text-decoration: none" class ="butn" title = "Logout">Logout</a><br>
					<?php
						echo '<br>';
						echo '<button class="butn"id="deletebtn" onClick="return deleteRecord('.$idd.')">Delete Profile</button>';
					?>
				</div>
			</div>
		</div>
	</div>
</body>

</html>