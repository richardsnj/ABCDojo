<!DOCTYPE html>
<html>

<head>
	<link href="UI.css"rel="stylesheet"type="text/css">
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
	<title>AddQuestion</title>
</head>

<body>
<div class="navbar"style="top:5px">
		<ul>
			<li>&nbsp;&nbsp;</li>
			<li><img style = "width: 60px; margin-top:15px; margin-bottom:-15px;" src = "pic/logomungkin.png" alt = "Logo">&nbsp;&nbsp;</li>
			<li style="color:#D48F34;margin-top: 5px;">ABCDojo</li>
			<li>&nbsp;&nbsp;</li>
			<li><a href="HomeAdmin.php" style = "margin-top: 5px"title="Home">Home</a></li>
			<li style="color:white;margin-top: 3px;"> | </li>
			<li><a href="AddQuestion.php" style = "margin-top: 5px" title="Your Profile">Add Question</a></li>
			<li style="color:white;margin-top: 3px;"> | </li>
			<li><a href="Logout.php" style = "margin-top: 5px" title="Logout">Logout</a></li>
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
<div>
	<form id="queForm" method="post">
		<div class="RegisPage">
			<h1 style="margin-top:100px;text-align: center;">Add Question</h1>
			<div class="flex-container">
				<div class="flex-item-left">
					<label>Question:</label><br>
					<input type="text" name="txtQuestion" id="Ques" placeholder="Input Question" autofocus="autofocus" required><br>
					<span id="msg"></span>
					<br><br>
					<label>Answer1:</label><br>
					<input type="text" name="txtAnswer1" id="Ans1" placeholder="Input Answer 1" required>
					<br><br>
					<label>Answer2:</label><br>
					<input type="text" name="txtAnswer2" id="Ans2" placeholder="Input Answer 2" required>
					<br><br>
					<label>Answer3:</label><br>
					<input type="text" name="txtAnswer3" id="Ans3" placeholder="Input Answer 3" required>
					<br><br>
					<label>Answer4:</label><br>
					<input type="text" name="txtAnswer4" id="Ans4" placeholder="Input Answer 4" required>
					<br><br>
				</div>
				<div class="flex-item-right">
					<label>Correct Answer:</label><br>
					<select name="cmbAns" id="RAns" required>
						<option value="">Select Answer</option>
						<option value="0">1</option>
						<option value="1">2</option>
						<option value="2">3</option>
						<option value="3">4</option>
					</select>
					<br><br>
						<div style="text-align: center">
							<button style="margin-bottom:10px; overflow:hidden;" id="reg" type="Submit" class="butn" name="BtnRegis">Submit</button><br>
							<a style = "text-decoration: none;" href="HomeAdmin.php" class="butn">Back</a><br>
							<div id="error_msg"></div>
						</div>
				</div>
			</div>
		</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
		$('document').ready(function() {
			var question_state = false;
			
			$('#Ques').blur(function(){
				var ques = $('#Ques').val();
				if (ques == ''){
					question_state = false;
					return;
				}
								
			$.ajax({
				url: 'addques.php',
				type: 'post',
				data: {
					'question_check' : 1,
					'Ques' : ques
				},
				success: function(response){
				$('#msg').text(response);
					if(response == 'not_available') {
						question_state = false;
						$('#msg').text("Question already exist!");
					} else if (response == 'available') {
						question_state = true;
						$('#msg').text("New Question!");
					}
				}
			});
			
			});
							
			
			$('#reg').click(function(e){
				
				var ques = $('#Ques').val();
				var ans1 = $('#Ans1').val();
				var ans2 = $('#Ans2').val();
				var ans3 = $('#Ans3').val();
				var ans4 = $('#Ans4').val();
				var RAns = $('#RAns').val();

				var $queForm = $('#queForm');
				if (!$queForm[0].checkValidity()) {
					$queForm.find(':submit').click();
				}				
				
				if (question_state == false) {
					$('#error_msg').text('Fix the errors first');
					e.preventDefault();
				} else {
					$('#error_msg').text("");
					
					$.ajax({
						url: 'addques.php',
						type: 'post',
						data: {
							'BtnRegis':1,
							'Ques': ques,
							'Ans1': ans1,
							'Ans2': ans2,
							'Ans3': ans3,
							'Ans4': ans4,
							'RAns': RAns
						},
						success: function(response) {
							if(response=='success'){
								alert('Added Successfully');
								window.location.href='HomeAdmin.php';
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