<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<title>PROBLEM - 1</title>
		<?php
			if(!$_SESSION['userloggedin']){
				header('Location: ../index.php');
				exit;
			}
		?>	
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css" />
		<script type = "text/javascript">
			function countDownTimer(){
				var finishTime = new Date("December 9, 2015 16:00:00");
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
		<div>
			<h3 id = "background"><p>PROBLEM 1 - You have shopped for ur mother but she is not at home.Your mother is stuck in an infinite tree!!! . She is stuck in a complete BINARY tree .  Complete means that each node has exactly two sons, so the tree is infinite. Code her out...........The tree is as follows-

   <p>1. Let's call the nodes' level a number of nodes that occur on the way to this node from &nbsp &nbspthe root, including this node. This way, only the root has the level equal to 1, while &nbsp &nbsp &nbsponly its two sons has the level equal to 2.</p>
    <p>2.Then, let's take all the nodes with the odd level and enumerate them with&nbsp &nbsp &nbsp consecutive odd numbers, starting from the smallest levels and the leftmost nodes,&nbsp &nbsp &nbsp going to the rightmost nodes and the highest levels.</p>
    <p>3.Then, let's take all the nodes with the even level and enumerate them with consecutive even numbers, starting from the smallest levels and the leftmost nodes, going to the rightmost nodes and the highest levels.</p>
    For the better understanding there is an example:
						
		         <p>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp  &nbsp &nbsp 1</p>
                        <p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp/  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp         \</p>
                 <p> &nbsp  &nbsp &nbsp &nbsp2 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp      &nbsp &nbsp           4</p>
               <p>  &nbsp  &nbsp  /  &nbsp &nbsp  &nbsp  \   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp      &nbsp       /  &nbsp &nbsp  &nbsp      \</p>
             <p> &nbsp  3  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp     5     &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp      7  &nbsp  &nbsp    &nbsp  &nbsp  &nbsp      9</p>
            <p>/  &nbsp  &nbsp\   &nbsp  &nbsp  &nbsp    / &nbsp  &nbsp  \   &nbsp  &nbsp  &nbsp        / &nbsp  &nbsp  \ &nbsp  &nbsp  &nbsp       / &nbsp  &nbsp  \</p>
          <p> 6  &nbsp  &nbsp 8  &nbsp  &nbsp10 &nbsp  &nbsp 12 &nbsp  &nbsp      14  &nbsp  &nbsp16   18 &nbsp  &nbsp 20 </p>

					

Here you can see the visualization of the process. For example, in odd levels, the root was enumerated first, then, there were enumerated roots' left sons' sons and roots' right sons' sons.

You are given the string of symbols, let's call it S. Each symbol is either l or r. Naturally, this sequence denotes some path from the root, where l means going to the left son and r means going to the right son.
Determine the number of the last node in this path to get your mom out.
		<p>INPUT</p>		
		<p>The first line contains single integer T number of test cases.

Each of next T lines contain a string S consisting only of the symbols l and r. </p>
		<p>OUTPUT</p>
Per each line output the number of the last node in the path, described by S, modulo 10^9+7.
		<p>CONSTRAINTS</p>
		
    1.1 <= |T| <=5
   <p> 2.1 <= |S| <= 10^5</p>
    <p>3.Remember that the tree is infinite, so each path described by appropriate S is a correct one.</p>
	<p>Sample Input</p>
	<p>4</p>
	<p>lrl</p>
	<p>rll</p>
	<p>r</p>
	<p>lllr</p>
	<p>Sample Output</p>
	<p>10</p>
	<p>14</p>
	<p>4</p>
	<p>13</p>			
			</p></h3>
			<div id = "submitButton"><a href ="./submissionsPage.php" >SUBMIT</a></div>	

		</div>
	</body>
</html>
