<!DOCTYPE HTML>
<html>
	<head>
		<title>Natural Annihilation: Support</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" href="res/favicon.ico" />
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="js/background.js" type="text/javascript"></script>
		<meta charset="UTF-8">
	</head>
	<body>
		<img src="res/background.jpg" id="bg"/>
		<div id="Wrapper">
			<div id="DownloadBox">
				<a href="download.html"><img src="res/DownloadButton.jpg" /></a>
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

			<!-- Contact Form Main PHP Block -->
			<?php if ($_POST['submitted']) {
				// Fetching details from the form and storing in variables
				$name = $_POST['name'];
				$email = $_POST['email'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];

				$result = 0;

				// Where Email is sent
				$mail_to = "admin@spacecrazyproductions.com";
				
				// Body
				$body = 'From: '.$name."\n";
				$body .= 'E-mail: '.$email."\n";
				$body .= 'Subject: '.$subject."\n";
				$body .= 'Message: '."\n".$message;

				$headers = 'From: '.$email."\r\n";
				$headers .= 'Reply-To: '.$email."\r\n";
	 			
	 			// Name longer than 0 Validation
				if(strlen($name) <= 0) {
					$error1 = True;
				}
				// Email longer than 0 and in correct format Validation
				if(strlen($email) <= 0) {
					$error2 = True;
				} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$error3 = True;
				}
				// Subject chosen Validation
				if($subject == "Please Select") {
					$error4 = True;
				}
				if($subject == "Legal Message") {
					$mail_to = "legal@spacecrazyproductions.com";
				}
				// Message longer than 0 Validation
				if(strlen($message) <= 0) {
					$error5 = True;
				}

				if($error1 || $error2 || $error3 || $error4 || $error5) {
					$result = 1;
				}else{
					$result = 2;
					mail($mail_to, $subject." from ".$name, $body, $headers);
				}
			} ?>
			<!-- END - Contact Form Main PHP Block -->

			<div id="MainBody">
				<h3>Support</h3>
				<div id="SupportWrapper">
					<p>If you were looking for the manual of the game <a href="guides.html">click here</a> to be redirected to the guides page.</p>
					<h4>Contact Details</h4>
					<p>admin@spacecrazyproductions.com</p>
				</div>
				<div id="ContactFormWrapper">
					<h3>Contact Us</h3>
					<form action="support.php" method="post">
						Name: <br>
						<input type="text" placeholder="Your Name" name="name"><span class="errorMsg"><?php if($error1) {echo "Please enter your name";} ?></span><br>
						Email: <br>
						<input type="text" placeholder="Your Email" name="email"><span class="errorMsg"><?php if($error2) {echo "Please enter your Email Address";} elseif($error3) {echo "Please enter a valid Email Address";} ?></span><br>
						Subject: <br>
						<select name="subject">
							<option value="Please Select">Select One</option>
							<option value="General Message">General</option>
							<option value="Web Bug Report">Website Problem/Bug</option>
							<option value="Game Bug Report (Low Priority)">Game Bug Report (Low Priority)</option>
							<option value="Game Bug Report (Medium Priority)">Game Bug Report (Medium Priority)</option>
							<option value="Game Bug Report (High Priority)">Game Bug Report (High Priority)</option>
							<option value="Legal Message">Legal Issues</option>
						</select><span class="errorMsg"><?php if($error4) {echo "Please choose a subject";} ?></span><br>
						Message: <br>
						<textarea name="message" placeholder="Your Message" rows="5" cols="20"></textarea>
						<span class="errorMsg"><?php if($error5) {echo "Please enter your message";} ?></span><br>
						<input type="hidden" name="submitted" value=1>
						<input type="submit" value="Submit">
						<input type="reset" value="Reset"><br>
						<span class="resultMsg"><?php if($result == 1) {echo "Please correct the form and re-submit it";} 
						elseif($result == 2) {echo "E-mail sent successfully";} ?></span>
					</form>
				</div>
			</div>
			<div id="Footer">
				<p>Copyright &copy; 2013 <a href="http://www.spacecrazyproductions.com">Space Crazy Productions</a> | Richard Hancock</p>
			</div>
		</div>
	</body>
</html>