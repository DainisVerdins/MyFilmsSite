
<?php
	include 'inc.db.reports.php';
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($link, "utf8");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT id, rid, date, client, text FROM ReportAnswers";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			if($row["rid"]==$ReportID){
				echo "<b>client at </b> " . $row["date"]. "<b> from</b> " . $row["client"]. "<br>
				<mark> " . $row["text"]. "</mark>
				";
				$rowid=$row["id"];
				include('inc.Del.Edit.Buttons.php');
				echo"<br>";
			}
			
		}
		} else {
		echo "0 results";
	}
	$conn->close();
	
?>
