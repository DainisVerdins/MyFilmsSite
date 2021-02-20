
<?php
	header("Content-Type: text/html; charset=utf-8");
	include'inc.db.reports.php';
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	if(isset($_POST['deleteComment'])){
		$qid = $_POST['qid'];
		$sql = "DELETE FROM ReportAnswers WHERE id =$qid";
		$result = $conn->query($sql);
		echo"<p>".$ReportNum."</p>";
	    if (mysqli_query($conn, $sql)) {
			echo "Comment deleted";
			} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	mysqli_close($conn);
	header ("Location: Reports.php");
	
	
?>
