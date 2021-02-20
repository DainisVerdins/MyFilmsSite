<?php
	//connection info
	include 'scripts/header.php';
	
	//query string
	$sql = "SELECT * FROM writers";
	
	//get data from query (conn -> connection info;sql query string what must be done)
	$result = mysqli_query($conn,$sql);
	
	//get how much results/articles are in DB
	$queryResults=mysqli_num_rows($result);
	
	//check if table is filled with data
	// if not then print into webpage what nothing was found
	if ($queryResults > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			//display data
			//from <form> tag is code for delete button where passed data to script will be id of article in DB
			//
			echo"<div class = 'article-box'>
			
			<h3><b>name: </b>".$row['name']."</h3>
			<h3><b>surname: </b>".$row['surname']."</h3>
			<h3><b>origins(o_c): </b>".$row['o_c']."</h3>
			<h3><b>date of birth(dob): </b>".$row['dob']."</h3>
			<h3><b>sex: </b>".$row['sex']."</h3>
			<h3><b>status: </b>".$row['status']."</h3> 
			
			<form method ='POST' action='scripts/writers_scripts/delete_article.php'>
			<input type='hidden' name='article_id' value='".$row['id']."'>
			<button type='submit' name='article_delete'>Delete</button>
			</form>
			
			</div>";
			
			echo"<br>";	
		}	
	}
	else {
		echo "0 results in table";
	}
	//$conn->close();// probably do not needed
?>
