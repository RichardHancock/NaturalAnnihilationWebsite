<!DOCTYPE HTML>
<html>
	<head>
		<title>Natural Annihilation: Quiz</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" href="res/favicon.ico" />
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="js/background.js" type="text/javascript"></script>
		<meta charset="UTF-8">
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36113290-1']);
			_gaq.push(['_setDomainName', 'spacecrazyproductions.com']);
			_gaq.push(['_trackPageview']);

			(function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  	})();
		</script>
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
            if ($q2 == "c") { $correctCount++; }
            if ($q3 == "a") { $correctCount++; }
            if ($q4 == "d") { $correctCount++; }
            if ($q5 == "a") { $correctCount++; }
		?>
		<img src="res/background.jpg" id="bg" alt="Background Image"/>
		<div id="Wrapper">
			<div id="DownloadBox">
				<a href="download.html"><img src="res/DownloadButton.jpg" alt="Link to Download Page"/></a>
			</div>
			<div id="Logo">
				<a href="index.html"><img src="res/Logo.png" alt="Natural Annihilation" /></a>
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
				<h3>Natural Annihilation Quiz</h3>
				<div id="QuizWrapper">
					<form action="quiz.php" method="post" id="Quiz">
						<ol>
							<li>
								<h4>Q1: What is the name of the alien race that you play in the game?</h4>
							</li>
							<li>
								<input type="radio" name="q1" id="q1a" value="a"/>
								<label for="q1a">A. The Naturalis</label>
								<input type="radio" name="q1" id="q1b" value="b"/>
								<label for="q1b">B. The Tranquil</label>
								<input type="radio" name="q1" id="q1c" value="c"/>
								<label for="q1c">C. The Teddingtons</label>
								<input type="radio" name="q1" id="q1d" value="d"/>
								<label for="q1d">D. What Aliens?</label>
							</li>
							<li>
								<h4>Q2 - What is this a image of?</h4>
								<img src="res/quiz/MysteryImage1.png" alt="Mystery Image of a Red Tank-like object"/>
							</li>
							<li>
								<input type="radio" name="q2" id="q2a" value="a"/>
								<label for="q2a">A. Enemy Tank</label>
								<input type="radio" name="q2" id="q2b" value="b"/>
								<label for="q2b">B. Teddington Spaceship</label>
								<input type="radio" name="q2" id="q2c" value="c"/>
								<label for="q2c">C. Player Tank</label>
								<input type="radio" name="q2" id="q2d" value="d"/>
								<label for="q2d">D. A blurry red thing</label>
							</li>
							<li>
								<h4>Q3 - Why are the alien race angry with the Humans?</h4>
							</li>
							<li>
								<input type="radio" name="q3" id="q3a" value="a"/>
								<label for="q3a">A. Their treatment of earth</label>
								<input type="radio" name="q3" id="q3b" value="b"/>
								<label for="q3b">B. The humans attacked the aliens</label>
								<input type="radio" name="q3" id="q3c" value="c"/>
								<label for="q3c">C. The humans didn't return their phonecalls</label>
								<input type="radio" name="q3" id="q3d" value="d"/>
								<label for="q3d">D. All of the above</label>
							</li>
							<li>
								<h4>Q4 - How are the aliens trying to solve the problems caused by the humans?</h4>
							</li>
							<li>
								<input type="radio" name="q4" id="q4a" value="a"/>
								<label for="q4a">A. Diplomacy</label>
								<input type="radio" name="q4" id="q4b" value="b"/>
								<label for="q4b">B. Punch-Up</label>
								<input type="radio" name="q4" id="q4c" value="c"/>
								<label for="q4c">C. No Action</label>
								<input type="radio" name="q4" id="q4d" value="d"/>
								<label for="q4d">D. Natural Annihilation</label>
							</li>
							<li>
								<h4>Q5 - How much does this game cost?</h4>
							</li>
							<li>
								<input type="radio" name="q5" id="q5a" value="a"/>
								<label for="q5a">A. Nothing (Free)</label>
								<input type="radio" name="q5" id="q5b" value="b"/>
								<label for="q5b">B. £10</label>
								<input type="radio" name="q5" id="q5c" value="c"/>
								<label for="q5c">C. Millions</label>
								<input type="radio" name="q5" id="q5d" value="d"/>
								<label for="q5d">D. $3.50</label>
							</li>
							<li>
								<input type="submit" value="Submit Answers" class="submit"/>
							</li>
						</ol>
					</form>
				</div>
				<div id="ResultsWrapper">
					<h3>Results:</h3>
					<span> <?php echo"$correctCount / 5" ?> </span>
				</div>
			</div>
			<div id="Footer">
				<p>Copyright &copy; 2013 <a href="http://www.spacecrazyproductions.com">Space Crazy Productions</a> | Richard Hancock</p>
			</div>
		</div>
	</body>
</html>