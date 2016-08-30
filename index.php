<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Send mail</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<form method="post" action="index.php">
			<fieldset>
				<legend>Send Mail</legend>
				<input type="email" name="email" placeholder="your@email.com"></input><br />
				<input type="text" name="subject" placeholder="Subject"></input><br />
				<textarea type="textarea" name="message" placeholder="Your message" rows="20" cols="40" maxlength="500"></textarea><br />
				<input type="submit" value="Send"></input>
			</fieldset>
		</form>

		<?php
			if (isset($_POST['email']) &&
					isset($_POST['message'])&&
					isset($_POST['subject'])) {
				mail($_POST['email'], $_POST['subject'], $_POST['message']);
				echo "Message sent!";
			}
		?>
	</body>
</html>
