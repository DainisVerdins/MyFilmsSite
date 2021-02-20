
<?php

//header("Location: Reports.php");

    $hostname = "localhost";
    $username = "student";
    $password = "stud.net";
    $db = "Reports";
    $conn = mysqli_connect($hostname, $username, $password, $db);
    mysqli_set_charset( $link, "utf8" );
// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
 if(isset($_POST['submitComent'])){
    $date = $_POST['date'];
    $client = $_POST['client'];
    $text = $_POST['text'];
    $ReportID = $_POST['ReportID'];
    $sql = "INSERT INTO ReportAnswers (rid, date, client, text) VALUES ('$ReportID', CURRENT_TIMESTAMP, '{$_SERVER['REMOTE_ADDR']}', '$text')";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
 header ("Location: Reports.php");
?>
