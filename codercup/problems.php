<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<title>PROBLEMS</title>
		<?php
			if(!$_SESSION['userloggedin']){
				header('Location: ../index.php');
				exit;
			}
		?>	
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css" />
		<script type = "text/javascript">
			function countDownTimer(){
				var finishTime = new Date("November 20, 2015 16:00:00");
				var now = new Date();
				var timediff = finishTime.getTime() - now.getTime();
				if(timediff <= 0){
					clearTimeout(timer);
					alert("contest ended");
				}
				var seconds = Math.floor(timediff/1000);
				var minutes =  Math.floor(seconds/60);
				var hours = Math.floor(minutes/60);
				hours %= 24;
				minutes %= 60;
				seconds %= 60;
				document.getElementById("hoursbox").innerHTML = hours;
				document.getElementById("minutesbox").innerHTML = minutes;
				document.getElementById("secondsbox").innerHTML = seconds;
				var timer = setTimeout('countDownTimer()' , 1000); 
			}      
		</script>
	</head>
	<body class = "nightBackground">
		<div id = "secondsbox">SECONDS</div>
		<div id = "minutesbox">MINUTES</div>
		<div id = "hoursbox">HOURS</div>
		<script type = "text/javascript">countDownTimer();</script>
		<div class = "problemBackground">
		<h3 id = "allProblemsBackground"><p><a href = "./problem1.php">PROBLEM 1 -(Click here to get the Problem Statement)</a> 
</p></h3>
		<div class = "problemStatement1"></div>
		<h3 id = "allProblemsBackground"><p><a href = "./problem2.php">PROBLEM 2 - (Click here to get the Problem Statement)</a></p></h3>
		<h3 id = "allProblemsBackground"><p><a href = "./problem3.php">PROBLEM 3 - (Click here to get the Problem Statement)</a></p></h3>
		<h3 id = "allProblemsBackground"><p><a href = "./problem4.php">PROBLEM 4 - (Click here to get the Problem Statement)</a></p></h3>
		</div>
	</body>
</html>
