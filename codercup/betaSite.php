<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<title>CODERCUP</title>
		<?php
			if(!$_SESSION["userloggedin"]){
		   		header("Location: ../index.php");
				exit;
			}
		?>
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css" />	
		<script>type = "text/javascript" src= "script.js"</script>
			
	</head>
	<body background = "./nightsky.jpg">	
			<div class = "imageTop"><img src =".//programmingImagecopy.jpg"/></div>		
			<div class = "options">			
			<div id = "button">SCOREBOARD</div>	
			<div id = "button"><a href= "./problems.php">PROBLEMS</a></div>	
		</div>
		<div id = "content-background">
			<marquee><p style = "color : coral;"><h2>CODE GALAT NI HOTE INSAAN GALAT HOTE HAIN!!!!!!</h2></p></marquee>
			<p><h1>CODE YOUR WAY TO UNLEASH THE CODER IN YOU !!!!!!</h1></p>
			<p><h3>We at CODERCUP try to unearthen the raw coder in every guy as we believe that there is no one who can not code..........</h3></p>
			<p><h3>Therefore our CODERCUP team welcomes you all in this exciting and challenging place of coding where life runs on a code - "SURVIVAL OF THE FITTEST!!!! ".........................................</h3></p>
			<p><h3> So bootstrap yourself for the most challenging event of your life where you will be competing with the best from your college. There is only one way to win here - CODE HARD!!!!!!.</h3><p>
			<br>
		</div>
			<div class = "imageBottom"><br><img src = "./programmer.jpg"/></div>
	</body>
</html>

