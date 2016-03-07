<?php
session_start();
?>
<html>	
	<head><title>CODERCUPNETWORK</title>
		<?php
			if( ($_SESSION["userloggedin"] == 1)){
				header("Location: codercup/betaSite.php");
			}
		?>
	</head>
<body background = "./codercup/blackbackground.jpeg">
<div style="margin-left:30%;margin-top:10%;">
<img src="codercup/coder.jpg" />
	<style>label{ color: coral }</style>
	<form method="POST" action="networkLogin.php">
		<p><label>USERNAME:</label><input type="text" name="username" value = "" placeholder="username"></p>
		<p><label>PASSWORD:</label><input type="password" name="password" value="" placeholder = "password"></p>
		<p><label>LOGIN:</label><input type="submit" ></p>
	</form>
	<p style = "color : coral">REGISTRATION <a href = "registrationPage.php">(Click here to register for the event)</a></p>
</div>
</body></html>
