<?php
session_start();
$uname = $_POST["username"];
$pwd = $_POST["password"];
$year = $_POST["year"];
$branch = $_POST["branch"];
$server = "localhost";
$dbuser = "root";
$dbpwd = "root"; 
$response = mysql_connect($server , $dbuser , $dbpwd);
if(!$response){
	echo "Unable to connect to server";
	exit;
}
$db = mysql_select_db("codercupLogin", $response);
if(!$db){
		echo "unable to connect to database";
		exit;
}
$pwd = md5($pwd);
$sqlQuery = "INSERT INTO `loginDetails` (`USERNAME` , `PASSWORD` , `YEAR` , `BRANCH`) VALUES('$uname' , '$pwd' , '$year' , '$branch')";
$result = mysql_query($sqlQuery , $response);
if(!$result){
			echo "Server Error";
			exit;
}
$rowCount = mysql_num_rows($result);
if($rowCount != 1){
	echo "You have been successfully registered";
}
else{
	echo "Cannot put you in database sorry";
}
?>
