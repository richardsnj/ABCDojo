<?php
	include("session.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./quizbox.css">
</head>
<body>

	<div class = "home-box custom-box">
		<h3>Instruction: </h3>
		<p> Total number of questions: <span class="total-question"></span></p>
		<a href = "Home.php"><button type = "button" class="btn" onclick="goToHome()">Back to Home</button></a>
		<button type="button" class ="btn" onclick = "startQuiz()">Start Quiz</button>
	</div>
	
	<div class = "quiz-box custom-box hide">
		<div class = "question-number">
			
		</div>
		<div class ="question-text">
			
		</div>
		<div class = "option-container">
			
		</div>
		<div class = "next-question-btn">
			<button type = "button" class = "btn" onclick="next()">Next</button>
		</div>
		<div class = "answers-indicator">
		</div>
	</div>

	<div class = "result-box custom-box hide">
		<h1>Quiz Result</h1>
		<table>
			<tr>
				<td>Total Question</td>
				<td><span class = "total-question"></span></td>
			</tr>
			<tr>
				<td>Attempt</td>
				<td><span class = "total-attempt"></span></td>
			</tr>
			<tr>
				<td>Correct</td>
				<td><span class = "total-correct"></span></td>
			</tr>
			<tr>
				<td>Wrong</td>
				<td><span class = "total-wrong"></span></td>
			</tr>
			<tr>
				<td>Percentage</td>
				<td><span class = "percentage"></span></td>
			</tr>
			<tr>
				<td>Total Score</td>
				<td><span class = "total-score"></span></td>
			</tr>
			<tr>
				<td>Exp Get</td>
				<td><span class = "total-exp" id = "expp">
				</span></td>
			</tr>
		</table>
		<a href = "Home.php"><button type = "button" class="btn" onclick="goToHome()">Back to Home</button></a>
	</div>

	<script src="questiontest.php"></script>
	<script src="app.js" type="text/javascript">
	console.log(ca)
	</script>
	<?php
		if (isset($_COOKIE["ca"])){
			$_COOKIE["ca"];
		}
		else{
		}
	?>
	
</body>
</html>
