<?php
	
	//header('Location: Quastions2.php');
	
    $hostnameQ = "localhost";
    $usernameQ = "student";
    $passwordQ = "stud.net";
    $dbQ = "Answers";
    //echo"PASS";
    $connQ = mysqli_connect($hostnameQ, $usernameQ, $passwordQ, $dbQ);
    mysqli_set_charset( $link, "utf8" );
	// Check connection
	
	if (!$connQ) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if(isset($_POST['submitComment'])){
		$qid = $_POST['qid'];
		//$date = $_POST['date'];
		//$client = $_POST['client'];
		$text = $_POST['text'];
		// $report = $_POST['Report'];
		$sqlQ = "INSERT INTO Answers (qid, date, client, text) VALUES ('$qid', CURRENT_TIMESTAMP, '{$_SERVER['REMOTE_ADDR']}', '$text')";
		if (mysqli_query($connQ, $sqlQ)) {
			echo "New record created successfully";
			} else {
			echo "Error: " . $sqlQ . "<br>" . mysqli_error($connQ);
		}
	}
	mysqli_close($connQ);
	header("Location: Questions.php");
?>