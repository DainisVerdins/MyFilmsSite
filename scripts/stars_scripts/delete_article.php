<?php
	//conection info
	include '../header.php';
	//check if button was pressed
	if(isset($_POST['article_delete'])){
	//this part in different include???
		$article_id=$_POST['article_id'];
		$sql="DELETE FROM stars WHERE id='$article_id'";
		$result=$conn->query($sql);
		
		//kurp pec delete vaicajuma doties
		
		header("Location:../../stars.php?deleted=success");
	}
	
?>