<?php
	//conection info
	include '../header.php';
	//check if button was pressed
	if(isset($_POST['article_delete'])){
		//get from post needed info
		$article_id=$_POST['article_id'];
		//query string
		$sql="DELETE FROM writers WHERE id='$article_id'";
		//do mysql query
		mysqli_query($conn,$sql);
		
		//where to go after doing script
		header("Location:../../writers.php?deleted=success");
	}
?>