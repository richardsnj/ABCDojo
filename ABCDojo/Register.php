<!DOCTYPE html>
<html>

<head>
	<link href="UI.css"rel="stylesheet"type="text/css">
	<script>
	function checkPwd() {		
        var pass1 = document.getElementById("password").value;
        var pass2 = document.getElementById("pass2").value;         
        
		if (pass1 != pass2) {
			document.getElementById("pass2").style.backgroundColor="#ffd7d4";
			document.getElementById("error").innerHTML = "Password not matched!";
			var pass_state = false;
            return pass_state;
        }
        else {
		document.getElementById("error").innerHTML = "";
		document.getElementById("pass2").style.backgroundColor="#dbffd4";
        }
		
    }
	</script>
	<style>
		* {
		  box-sizing: border-box;
		}
		
		.flex-container {
		  display: flex;
		  flex-wrap: wrap;
		  font-size: 30px;
		  text-align: center;
		}
		
		.flex-item-left {
		  padding: 10px;
		  flex: 50%;
		}
		
		.flex-item-right {
		  padding: 10px;
		  flex: 50%;
		}

		/* Responsive layout - makes a one column-layout instead of a two-column layout */
		@media (max-width: 800px) {
		  .flex-item-right, .flex-item-left {
		    flex: 100%;
		  }
		}
	</style>
	<title>Register</title>
</head>

<body style="background-image:url('pic/15Z_2104.w026.n002.381B.p1.381.jpg');background-repeat:no-repeat;background-position:center;background-size:cover">
<div class="navbar" style="top:5px">
	<ul>
		<li>&nbsp;&nbsp;</li>
		<li><img style = "width: 60px; margin-top:10px; margin-bottom:-15px;" src = "pic/logomungkin.png" alt = "Logo">&nbsp;&nbsp;</li>
		<li style="color:#D48F34">ABCDojo</li>
	</ul>
</div>
<div>
	<form id="regForm" method="post">
		<div class="RegisPage">
			<h1 style="margin-top:100px;text-align: center;color:#D48F34; text-shadow:1px 1px 10px #fff, 1px 1px 10px #ccc;">Register</h1>
			<div class="flex-container">
				<div class="flex-item-left">
					<label>Username:</label><br>
					<input type="text" name="txtUsername" id="username" placeholder="Input Username" autofocus="autofocus" required>
					<br><br>
					<label>Password:</label><br>
					<input type="password" name="txtPass" id="password" placeholder="Input Password" required>
					<br><br>
					<label>Re-Password:</label><br>
					<input type="password" name="txtRePass" id="pass2" placeholder="Input Password" required onkeyup="return checkPwd()"><br><span id="error"></span>
					<br>
					<label>E-mail:</label><br>
					<input type="email" name="email_check" id="email" placeholder="Input E-mail" required><br>
					<span id="msg"></span>
					<br><br>
				</div>
				<div class="flex-item-right">
					<label>Role:</label><br>
					<select name="cmbRole" id="role" required>
						<option value="">Select Role</option>
						<option value="Children">Children</option>
						<option value="Parents">Parents</option>
					</select>
					<br><br>
						<div style="text-align: center">
							<button style="margin-bottom:10px; overflow:hidden;" id="reg" type="Submit" class="butn" name="BtnRegis">Register</button><br>
							<a style = "text-decoration: none;" href="Login.php" class="butn">Back</a><br>
							<div id="error_msg"></div>
						</div>
				</div>
			</div>
		</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
		$('document').ready(function() {
			var email_state = false;
			$('#email').blur(function(){
				var emailAdd = $('#email').val();
				if (emailAdd == ''){
					email_state = false;
					return;
				}
								
			$.ajax({
				url: 'Registered.php',
				type: 'post',
				data: {
					'email_check' : 1,
					'email' : emailAdd
				},
				success: function(response){
				$('#msg').text(response);
					if(response == 'not_available') {
						email_state = false;
						$('#msg').text("Email already exist!");
					} else if (response == 'available') {
						email_state = true;
						$('#msg').text("Email available");
					}
				}
			});
			
			});
							
			
			$('#reg').click(function(e){
				
				var user_name = $('#username').val();
				var emailAdd = $('#email').val();
				var pass_word = $('#password').val();
				var role = $('#role').val();
				var pass1 = document.getElementById("password").value;
        		var pass2 = document.getElementById("pass2").value;     

				var $regForm = $('#regForm');
				if (!$regForm[0].checkValidity()) {
					$regForm.find(':submit').click();
				}				
				
				if (email_state == false || pass1 != pass2) {
					$('#error_msg').text('Fix the errors first');
					e.preventDefault();
				} else {
					$('#error_msg').text("");
					
					$.ajax({
						url: 'Registered.php',
						type: 'post',
						data: {
							'BtnRegis':1,
							'email': emailAdd,
							'username': user_name,
							'password': pass_word,
							'role': role
						},
						success: function(response) {
							if(response=='success'){
								alert('Registered Successfully, Please re-enter information');
								window.location.href='Login.php';
							}else{
								
							}											
						}
					});
				}
			});
			
		});	
	</script>
</div>
</body>

</html>