<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "nicolettedjohnson@gmail.com";
	$subject = "Contact Form From Website";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die('
		<html>
			<head>
				<title>Nicolette Johnson Photography</title>
				<link rel="stylesheet" href="css/browser.css">
				<script src="java/head.js"></script>
			</head>
			<body>
				<div class="wrapper">
					<script src="java/header.js"></script>
					<div class="content">
						<div class="grid">
							<div class="col-1-1">
								<p class="phpmessage">Oh no! Something went wrong with the form you filled out. Please send an email to nicolettedjohnson@gmail.com while I get Tom to fix the problem.</p>
							</div>
						</div>
					</div>
					<script src="java/fixedfooter.js"></script>
				</div>
			</body>
		</html>
	');
?>
<html>
	<head>
		<title>Nicolette Johnson Photography</title>
		<link rel="stylesheet" href="css/browser.css">
		<script src="java/head.js"></script>
	</head>
	<body>
		<?php include_once("analyticstracking.php") ?>
		<div class="wrapper">
			<script src="java/header.js"></script>
			<div class="content">
				<div class="grid">
					<div class="col-1-1">
						<p class="phpmessage">Thankyou for contacting me! I'll be in touch as soon as possible.</p>
					</div>
				</div>
			</div>
			<script src="java/fixedfooter.js"></script>
		</div>
	</body>
</html>