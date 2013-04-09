<!DOCTYPE HTML>
<html>
	<head>
		<title>Natural Annihilation: Quiz</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<?php
			$q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
        
            $correctCount = 0;
            
            if ($q1 == "b") { $correctCount++; }
            if ($q2 == "a") { $correctCount++; }
            if ($q3 == "c") { $correctCount++; }
            if ($q4 == "d") { $correctCount++; }
            if ($q5 == "a") { $correctCount++; }
		?>
		<div id="Wrapper">
			<div id="DownloadBox">
				<a href="download.html"><img src="http://dummyimage.com/250x100/000066/ff0000&amp;text=Download" /></a>
			</div>
			<div id="Logo">
				<a href="index.html"><img src="res/Logo.png" /></a>
			</div>
			
			<div id="NavSection">
				<ul id="MainNav">
					<li><a href="index.html">Home</a></li>
					<li><a href="story.html">Story</a></li>
					<li><a href="gameplay.html">Game</a></li>
					<li class="empty">&nbsp;</li>
					<li><a href="media.html">Media</a></li>
					<li><a href="guides.html">Guides</a></li>
					<li><a href="support.php">Support</a></li>
				</ul>
			</div>
			<div id="MainBody">
				<div id="QuizWrapper">
					<h3>Natural Annihilation Quiz</h3>
					<form action="quiz.php" method="post" id="Quiz">
						<ol>
							<h4>Question 1</h4>
							<li>
								<input type="radio" name="q1" id="q1a" value="a"/>
								<label for="q1a">A. Answer 1</label>
								<input type="radio" name="q1" id="q1b" value="b"/>
								<label for="q1b">B. Answer 2</label>
								<input type="radio" name="q1" id="q1c" value="c"/>
								<label for="q1c">C. Answer 3</label>
								<input type="radio" name="q1" id="q1d" value="d"/>
								<label for="q1d">D. Answer 4</label>
							</li>
							<h4>Question 2</h4>
							<img src="http://dummyimage.com/300x150/000/fff"/>
							<li>
								<input type="radio" name="q2" id="q2a" value="a"/>
								<label for="q2a">A. Answer 1</label>
								<input type="radio" name="q2" id="q2b" value="b"/>
								<label for="q2b">B. Answer 2</label>
								<input type="radio" name="q2" id="q2c" value="c"/>
								<label for="q2c">C. Answer 3</label>
								<input type="radio" name="q2" id="q2d" value="d"/>
								<label for="q2d">D. Answer 4</label>
							</li>
							<h4>Question 3</h4>
							<li>
								<input type="radio" name="q3" id="q3a" value="a"/>
								<label for="q3a">A. Answer 1</label>
								<input type="radio" name="q3" id="q3b" value="b"/>
								<label for="q3b">B. Answer 2</label>
								<input type="radio" name="q3" id="q3c" value="c"/>
								<label for="q3c">C. Answer 3</label>
								<input type="radio" name="q3" id="q3d" value="d"/>
								<label for="q3d">D. Answer 4</label>
							</li>
							<h4>Question 4</h4>
							<li>
								<input type="radio" name="q4" id="q4a" value="a"/>
								<label for="q4a">A. Answer 1</label>
								<input type="radio" name="q4" id="q4b" value="b"/>
								<label for="q4b">B. Answer 2</label>
								<input type="radio" name="q4" id="q4c" value="c"/>
								<label for="q4c">C. Answer 3</label>
								<input type="radio" name="q4" id="q4d" value="d"/>
								<label for="q4d">D. Answer 4</label>
							</li>
							<h4>Question 5</h4>
							<li>
								<input type="radio" name="q5" id="q5a" value="a"/>
								<label for="q5a">A. Answer 1</label>
								<input type="radio" name="q5" id="q5b" value="b"/>
								<label for="q5b">B. Answer 2</label>
								<input type="radio" name="q5" id="q5c" value="c"/>
								<label for="q5c">C. Answer 3</label>
								<input type="radio" name="q5" id="q5d" value="d"/>
								<label for="q5d">D. Answer 4</label>
							</li>
							<li>
								<input type="submit" value="Submit Answers" class="submit"/>
							</li>
						</ol>
					</form>
				</div>
				<div id="ResultsWrapper">
					<h3>Results:</h3>
					<span><?php echo"$correctCount / 5" ?><span>
				</div>
			</div>
			<div id="Footer">
				<p>Copyright &copy; 2013 Space Crazy Productions | Richard Hancock</p>
			</div>
		</div>
	</body>
</html>