<?php
session_start();
?>
<!doctype html>
<html>
	<head><title>SUBMISSION PAGE</title>
		<?php 	if(!$_SESSION["userloggedin"]){
				header("Location: ../index.php ");
				exit;
			}
		?>
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css" />	
	</head>
	<body background = "./programmingImageForSubmissionBackground.jpg">
			<center><form method = "POST" action = "submissionsPage.php" enctype = "multipart/form-data">
				<p style = "color:orange">CHOOSE A FILE:<input type = "file" name = "filename" value = ""></p>
				<p style = "color:orange">LANGUAGE:<input type = "radio" name = "language"  value= "C" >C
					<input type = "radio" name = "language" value= "C++" >C++
					<input type = "radio" name = "language" value= "java" >JAVA</p>
				<p style = "color:orange">PROBLEM:<input type = "radio" name = "PROBLEM" value = "PROBLEM1" id = "P1">1
					<input type = "radio" name = "PROBLEM" value = "PROBLEM2" id = "P2">2
					<input type = "radio" name = "PROBLEM" value = "PROBLEM3" id = "P3">3
					<input type = "radio" name = "PROBLEM" value = "PROBLEM4" id = "P4">4</p>
				<p style = "color:orange">SUBMIT:<input type = "submit" name = "submit" placeholder = "upload file"></p>
			</form><center>	
		<?php
			if(isset($_POST["submit"])){
				$name = $_FILES["filename"]["name"];
				$type = $_FILES["filename"]["type"];
				$size = $_FILES["filename"]["size"];
				$tmp = $_FILES["filename"]["tmp_name"];
				if($name == ""){
				 echo	"<script>alert('PLzzzz select a file first !!!!')</script>";
				}
				else{
					/*$name = time();
					$name = $name.".c";
					$targetDirectory = "../submittedcodes/";
					$targetFile = $targetDirectory . basename($name);
					if(move_uploaded_file($_FILES["filename"]["tmp_name"] , $targetDirectory.$name)){
						echo "<script>alert('file uploaded successfully')</script>";	
					}
					$codeFileName = $name;
					$compiledFile = basename($name);
					chmod($targetFile , 0777);
					$compiledFilesDirectory = "../compiledFiles/";
					$compiledFile = $compiledFilesDirectory.basename($compiledFile);
					$pathToCompiledFiles = "../compiledFiles";
					$pathToSubmittedCodes = "../submittedcodes/$name";
					$pathToExecutables = "../executables/$name";
					$pathToInputFiles = "../inputFiles";
					$pathToOutputFiles = "../outputs";
					$pathToExpectedOutputs = "../expectedOutputs";
					$pathToResult = "../resultFiles";*/	
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
					$uname = $_SESSION["userName"];				
					switch($_POST["PROBLEM"]){
					case "PROBLEM1":switch($_POST["language"]){
							case "C":$name = time();
								 $name = $name.".c";
								 $targetDirectory = "../submittedcodes/";
								 $targetFile = $targetDirectory . basename($name);
								 if(move_uploaded_file($_FILES["filename"]["tmp_name"] , $targetDirectory.$name)){
										echo "<script>alert('file uploaded successfully')</script>";	
								 }
								 $codeFileName = $name;
								 $compiledFile = basename($name);
								 chmod($targetFile , 0444);
					  			 $compiledFilesDirectory = "../compiledFiles/";
					 			 $compiledFile = $compiledFilesDirectory.basename($compiledFile);
								 $pathToCompiledFiles = "../compiledFiles";
								 $pathToSubmittedCodes = "../submittedcodes/$name";
								 $pathToExecutables = "../executables/$name";
								 $pathToInputFiles = "../inputFiles";
								 $pathToOutputFiles = "../outputs";
								 $pathToExpectedOutputs = "../expectedOutputs";
								 $pathToResult = "../resultFiles";
								 $pathToScoreFiles = "../users/";
								 $scoreFile = $pathToScoreFile.basename($_POST["username"]."php");
								 exec("gcc $pathToSubmittedCodes -o $pathToExecutables 2> $compiledFile");
								 chmod($compiledFile,0111);
								 $deleteFromSubmittedCodes = "rm ../submittedcodes/$name";
								 $deleteFromCompiledFiles = "rm ../compiledFiles/$name";
								 $deleteFromExecutables = "rm ../executables/$name";
								 $deleteFromOutputs = "rm ../outputs/$name";	
								 $deleteFromResultFiles = "rm ../resultFiles/$name";
								 $lines = file($compiledFile);
								 foreach($lines as $line){
								 	if(strpos($line , "error") !== false){
							         		echo "<font color= 'red'>COMPILATION ERROR!!!!!</font>";
										exec($deleteFromSubmittedCodes);
								 		exec($deleteFromCompiledFiles);
								 		exec($deleteFromExecutables);
										exit(1);
							         	} 
								 }
								 exec("$pathToExecutables < $pathToInputFiles/inputFile1 > ../outputs/$name");
								 chmod($pathToExecutables , 0444);
								 chmod("../outputs/$name" , 0444);
							 	 $cmd = "diff ../outputs/$name ../expectedOutputs/firstOutput >  ../resultFiles/$name";
								 exec($cmd);
								 chmod("../resultFiles/$name", 0444);
								 if('' == file_get_contents("../resultFiles/$name")){
							        	echo"<font color= 'white'>BULLS EYE!!!!CORRECT ANSWER..........WELL DONE $uname!!!!</font>";
									/*$sql = "UPDATE loginDetails SET SCORE1 = SCORE1 + 100 WHERE USERNAME = '$uname'";
									$result = mysql_query($sql , $response);*/
                                                                 }
								 else{
								 	echo "<font color= 'red'>SORRY WRONG ANSWER!!!!!</font>";
									exec($deleteFromSubmittedCodes);
								 	exec($deleteFromCompiledFiles);
								 	exec($deleteFromExecutables);
								 	exec($deleteFromOutputs);
									exit(-1);
								 }	 
								 exec($deleteFromSubmittedCodes);
								 exec($deleteFromCompiledFiles);
								 exec($deleteFromExecutables);
								 exec($deleteFromOutputs);
								 exec($deleteFromResultFiles);
								 break;
							case "C++":$name = time();
								   $name = $name.".cpp";
								   $targetDirectory = "../submittedcodes/";
								   $targetFile = $targetDirectory . basename($name);
								   if(move_uploaded_file($_FILES["filename"]["tmp_name"] , $targetDirectory.$name)){
										echo "<script>alert('file uploaded successfully')</script>";	
								   }
								   $codeFileName = $name;
								   $compiledFile = basename($name);
								   chmod($targetFile , 0444);
					  			   $compiledFilesDirectory = "../compiledFiles/";
					 			   $compiledFile = $compiledFilesDirectory.basename($compiledFile);
								   $pathToCompiledFiles = "../compiledFiles";
								   $pathToSubmittedCodes = "../submittedcodes/$name";
								   $pathToExecutables = "../executables/$name";
								   $pathToInputFiles = "../inputFiles";
								   $pathToOutputFiles = "../outputs";
								   $pathToExpectedOutputs = "../expectedOutputs";
								   $pathToResult = "../resultFiles";
								   exec("g++ -o $pathToExecutables $pathToSubmittedCodes 2> $compiledFile");
								   chmod($compiledFile,0111);
								   $deleteFromSubmittedCodes = "rm ../submittedcodes/$name";
								   $deleteFromCompiledFiles = "rm ../compiledFiles/$name";
								   $deleteFromExecutables = "rm ../executables/$name";
								   $deleteFromOutputs = "rm ../outputs/$name";	
								   $deleteFromResultFiles = "rm ../resultFiles/$name";
								   $lines = file($compiledFile);
								   foreach($lines as $line){
								  	 if(strpos($line , "error") !== false){//code to check if the compiled file is error-free..warnings can b there
							         		echo "<font color= 'red'>COMPILATION ERROR!!!!!</font>";
										exec($deleteFromSubmittedCodes);
								 		exec($deleteFromCompiledFiles);
								 		exec($deleteFromExecutables);
										exit(1);
								   	}
								   }
								   exec("$pathToExecutables < $pathToInputFiles/inputFile1 > ../outputs/$name");
								   chmod($pathToExecutables , 0444);
								   chmod("../outputs/$name" , 0444);
							 	   $cmd = "diff ../outputs/$name ../expectedOutputs/firstOutput >  ../resultFiles/$name";
								   exec($cmd);
								   chmod("../resultFiles/$name", 0444);
								   if('' == file_get_contents("../resultFiles/$name")){
							        	echo "<font color= 'white'>BULLS EYE!!!!CORRECT ANSWER..........WELL DONE $uname!!!!</font>";
                                                                   }
								   else{
								 	echo "<font color= 'red'>SORRY WRONG ANSWER!!!!!</font>";//delete files to prevent DOS
									exec($deleteFromSubmittedCodes);
								 	exec($deleteFromCompiledFiles);
								 	exec($deleteFromExecutables);
								 	exec($deleteFromOutputs);
									exit(-1);
								   }	 
								   exec($deleteFromSubmittedCodes);//delete all files to prevent DOS
								   exec($deleteFromCompiledFiles);
								   exec($deleteFromExecutables);
								   exec($deleteFromOutputs);
								   exec($deleteFromResultFiles); 
								   break;
							case "JAVA":break;
							}
							break;
					case "PROBLEM2":switch($_POST["language"]){
							case "C":
								 break;
							case "C++":break;
							case "JAVA":break;
							}
							break;
					case "PROBLEM3":switch($_POST["language"]){
							case "C":break;
							case "C++":break;
							case "JAVA":break;
							}
							break;
					case "PROBLEM4":switch($_POST["language"]){
							case "C":break;
							case "C++":break;
							case "JAVA":break;
							}
							break;
					}
				}
			}
		?>
	</body>
</html>
