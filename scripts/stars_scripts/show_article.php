
<?php
	include 'scripts/header.php';
	
	$sql = "SELECT * FROM stars";
	$result = mysqli_query($conn,$sql);
	$queryResults=mysqli_num_rows($result);
	//check if table is filled with data
	if ($queryResults > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			
			echo"<div class = 'article-box'>
			<h3><b>name: </b>".$row['name']."</h3>
			<h3><b>surname: </b>".$row['surname']."</h3>
			<h3><b>origins(o_c): </b>".$row['o_c']."</h3>
			<h3><b>date of birth(dob): </b>".$row['dob']."</h3>
			<h3><b>about: </b>".$row['about']."</h3> 
			
			<form method ='POST' action='scripts/stars_scripts/delete_article.php'>
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
