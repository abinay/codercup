<?php
	session_start();
	$uname = $_POST["username"];
	$pwd = $_POST["password"];
	$uname = refinedData($uname);
	$pwd = refinedData($pwd);
	$server = "localhost";
	$dbuser = "root";
	$dbpwd = "root";
	$response = mysql_connect("localhost" , "root" , "root");
	if(!$response){
		echo "unable to connect to server";
		exit;
	}
	$db = mysql_select_db("codercupLogin", $response);
	if(!$db){
		echo "unable to connect to database";
		exit;
	}
	function refinedData($data){
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = stripslashes($data);
		return $data;
	}
	authencityCheck($uname , $pwd);
	function authencityCheck($uname , $pwd){
		global $response;
		$pwd = md5($pwd);
		$sql = "SELECT UID FROM loginDetails WHERE USERNAME='$uname' AND PASSWORD='$pwd'";
		$result = mysql_query($sql , $response);
		if(!$result){
			echo "Server Error!!";
			exit;
		}
		$rowCount = mysql_num_rows($result);
		if($rowCount == 1){
			$_SESSION["userloggedin"] = 1;
			$_SESSION["userName"] = $uname;
			header("Location: codercup/betaSite.php");
		}
		else{
			header("Location: index.php");
		}
		
	}
?>
