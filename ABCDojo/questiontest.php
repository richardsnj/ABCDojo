
<?php
	echo "const quiz = [";
	include("conf.php");
	$sql = mysqli_query($con,"select * from question");
	
	if (mysqli_num_rows($sql) > 0) {
		while($roww = mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$ques = $roww['Question'];
			$ans = $roww['Answers'];
			$cor = $roww['RightAns'];
			
			$splitted = explode(",",$ans);
			$ans1 = $splitted[0];
			$ans2 = $splitted[1];
			$ans3 = $splitted[2];
			$ans4 = $splitted[3];
			
			echo "{
					q: '$ques',
					options: ['$ans1', '$ans2', '$ans3', '$ans4'],
					answer: $cor
				},";
			
		}
	}
	
	echo "{
						q: 'What is the image below?',
						options: ['Banana', 'Belt', 'Leaf', 'Sword'],
						answer: 1,
						img: 'pic/quizbelt.jpg'
					}]";

	/*echo "const quiz = [
	{
		q: 'Which month comes right before october ?',
		options: ['may', 'september', 'july', 'august'],
		answer: 1
	},
	{
		q: 'What color is a leaf?',
		options: ['red', 'green', 'white', 'blue'],
		answer: 1
	},
	{
		q: 'Is 1 + 1 = 2 ?',
		options: ['true', 'false'],
		answer: 0
	},
	{
		q: '$ques',
		options: ['$ans1', '$ans2', '$ans3', '$ans4'],
		answer: $cor
	},
	{
		q: 'What time of day do we have dinner?',
		options: ['In the afternoon', 'In the morning', 'In the evening'],
		answer: 2
	},
	{
		q: 'What is 2 + 2?',
		options: ['9', '10', '16', '4'],
		answer: 3
	},
	{
		q: 'What is the image below?',
		options: ['Banana', 'Belt', 'Leaf', 'Sword'],
		answer: 1,
		img: 'pic/quizbelt.jpg'
	},
	{
		q: 'Fill in the blanks: a,b,c,d,_,f,g',
		options: ['e', 'd', 'x', 'y'],
		answer: 0
	}]";*/
	
	?>