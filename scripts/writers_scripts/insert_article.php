<?php
	//conection info
	include '../header.php';
	//check if neede named button was pressed 
	if(isset($_POST['insert_writer_article'])){
		//get data prost POST
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$status=$_POST['status'];
		$o_c=$_POST['o_c'];
		$dob=$_POST['dob'];
		$sex=$_POST['sex'];
		
		//query string
		$sql="INSERT INTO writers (name,surname,dob,o_c,status,sex)
		VALUES ('$name','$surname','$dob','$o_c','$status','$sex');";
		//run  query
		mysqli_query($conn,$sql);
		//back to webpage
		header("Location:../../writers.php?inserting=success");
	}
	//close connection
	$conn->close();//probably do not neede
?>