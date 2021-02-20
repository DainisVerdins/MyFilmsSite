<?php
	include '../header.php';
	mysqli_set_charset( $link, "utf8" );
	if(isset($_POST['insert_article'])){
		
		$name=$_POST['first'];
		$surname=$_POST['surname'];
		$about=$_POST['about'];
		$o_c=$_POST['o_c'];
		$dob=$_POST['dob'];
		
		
		$sql="INSERT INTO stars (name,surname,about,o_c,dob)
		VALUES ('$name','$surname','$about','$o_c','$dob');";
		//run  query
		mysqli_query($conn,$sql);
		//back to webpage
		header("Location:../../stars.php?inserting=success");
	}
	$conn->close();
?>