<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Send mail</title>
	</head>
	<body>
		<h1>Send mail</h1>
		<form method="post" action="index.php">
			<input type="email" name="email" placeholder="your@email.com"></input><br />
			<input type="text" name="subject" placeholder="Subject"></input><br />
			<textarea type="textarea" name="message" placeholder="Your message" rows="20" cols="40"></textarea><br />
			<input type="submit" value="Send"></input>
		</form>

		<?php

		$to      = 'vv221@dotslashplay.it';
		$subject = 'Test1';
		$message = 'Blebleble';
		$headers = 'From: mopi@dotslashplay.it' . "\r\n" .
		    'Reply-To: mopi@dotslashplay.it' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();
			//if (isset($_POST['email']) &&
			//		isset($_POST['message'])&&
			//		isset($_POST['subject'])) {
				mail($to, $subject, $message, $headers);
			//}
		?>
	</body>
</html>
