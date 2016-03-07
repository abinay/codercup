<?php
session_start();
?>
<html>	
	<head><title>REGISTRATION PAGE</title>
	</head>
	<body background = "./codercup/codehard.jpg" >	
		<div style = "margin-left:30% ; margin-top:10% ; color: coral">
			<form method="POST" action="registrationScript.php">
				<p><label>USERNAME:</label><input type="text" name="username" value = "" placeholder="username"></p>
				<p><label>PASSWORD:</label><input type="password" name="password" value="" placeholder = "password"></p>
				<p><label>&nbsp &nbsp &nbsp &nbsp &nbspYEAR:</label>&nbsp<input type="text" name="year" value = "" placeholder="year"></p>
				<p><label>&nbsp &nbsp BRANCH:</label><input type="text" name="branch" value = "" placeholder="branch"></p>
			</form>
		</div>
	</body>
</html>
