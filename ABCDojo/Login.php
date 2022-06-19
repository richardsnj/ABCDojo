<!DOCTYPE html>
<html>

<head>
	<link href="UI.css"rel="stylesheet"type="text/css">
	<title>Login</title>
</head>

<body style="background-image:url('pic/--animated-falling-leaves-background-gif_52.gif');background-size:100%;background-repeat:no-repeat">
<div class="navbar" style="top:5px">
	<ul>
		<li>&nbsp;&nbsp;</li>
		<li><img style = "width: 60px; margin-top:10px; margin-bottom:-15px;" src = "pic/logomungkin.png" alt = "Logo">&nbsp;&nbsp;</li>
		<li style="color:#D48F34">ABCDojo</li>
		<li>&nbsp;&nbsp;</li>
	</ul>
</div>
<div>
	<form action="Logged-in.php" method="post">
		<div class="loginPage">
			<h1 style="margin-top:120px;text-shadow:1px 1px 10px #fff, 1px 1px 10px #ccc;">Login</h1>
			<label>Username:</label><br>
			<input type="text" name="txtUsername"  placeholder="Input Username" autofocus="autofocus" required>
			<br><br>
			<label>Password:</label><br>
			<input type="password" name="txtPass" placeholder="Input Password" required>
			<br><br>
			
			<div class = "onmid">
			<button type="Submit" class="btnlin btnlin1" name="BtnLog">
			Login
			</button>
			</div>
			
			<br><br>Don't have an account yet?<br>
			<a style = "color: black;" href="Register.php">Register</a> 
		</div>
	</form>
</div>
</body>

</html>