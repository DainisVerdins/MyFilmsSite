<html>
	<head></head>
	<body>
		<?php
			header("Content-Type: text/html; charset = utf-8");
			$servername = "data.df.rtu";
			$username = "student";
			$password = "stud.net";
			$dbname = "QB";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			
			mysqli_set_charset($conn, "utf8");
			$sql = "SELECT id, question FROM NetworkQuestions WHERE variant = '4.4'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					print"<b>{$row["question"]}</b><br><br>";         
					echo"<hr>";
					
					//show all answers script
					$Questions_ID=$row["id"];
					include "CommentsShow2.php";
					print"<form method ='POST' action= 'Com.Insert.Q.php'>
					<input type ='hidden' name = 'qid' value =' $Questions_ID' >
					<textarea name= 'text' cols = '66' rows = '2'></textarea>
					<button type= 'submit' name = 'submitComment'>Fail?</button>
					</form>";	    
					echo"<hr>";
					echo"<hr>";
					echo"<hr>";
					echo"<br>";
				}
				} else {
				echo "0 results of Finding Questions";
			}
			$conn->close();
			
		?>
	</body>
</html>