<html>
	<head>
	<link type="text/css" rel="stylesheet" href="UI.css">
	<title>Assign a Children</title>
	<script type="text/javascript">
		function AssignRecord(x) {
		var ask = window.confirm("Are you sure this is your child?");
		if (ask) {
			window.location.href = "Assigning.php?id="+x;
		}
	}
	</script>
	</head>
	<body>
	<div class="navbar" style="top:7px;">
		<ul>
			<li>&nbsp;&nbsp;</li>
			<li><img style = "width: 60px; margin-top:10px; margin-bottom:-15px;" src = "pic/logomungkin.png" alt = "Logo">&nbsp;&nbsp;</li>
			<li style="color:#D48F34">ABCDojo</li>
			<li>&nbsp;&nbsp;</li>
			<li><a href="Home.php" title="Home">Home</a></li>
			<li style="color:white"> | </li>
			<li><a href="Home.php#challenges" title="Daily Challenges">Challenges</a></li>
			<li style="color:white"> | </li>
			<li><a href="Profile.php" title="Your Profile">Profile</a></li>
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
	<h1 style="margin-top:100px;text-align: center;">Assign a Children</h1>
	<div class="parentbox" id="header" style="height:75px;top:320px;margin-top:10px;margin-bottom:100px;">
		<div style="width:50%; float: left; align-self: center;">
			<form method="post">
				<h2>Search</h2>
				<input type="text" name="search_keyword" placeholder="Search Name" style="width: 250px; padding: 8px; margin: 0; display: inline-block; font-size:12pt;">
				<button type="submit" class="butn" id="butn" name="searchBtn">Search</button>
			</form>
		</div>
	</div>
	<div class="parentbox">
		<?php
		$search_key="";
		
		if (isset($_POST["searchBtn"])){
			$search_key = $_POST["search_keyword"];
		}
		
		include("conf.php");
		
		$sql = "SELECT * FROM user WHERE Name LIKE '%$search_key%' AND Role='Children'";
		
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  $i = 1;
		  while($row = mysqli_fetch_assoc($result)) {
			echo '<div class="childbox">';
			echo '<h2>'.$row["Name"].'</h2>';
			echo '<label>E-mail : </label><label style="margin-top:50px;margin-bottom:50px">'.$row["mail"].'</label><br><br>';
			echo '<button style="text-align:center; width:150px"class="butn" id="assignrecord" onClick="return AssignRecord('.$row["UserID"].')">Assign</button>';
			echo '</div>';
		  }
		} else {
		  echo "0 results";
		}
		?>
	</div>
</body>
</html>