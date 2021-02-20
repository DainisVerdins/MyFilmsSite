
<?php
	include 'scripts/header.php';
	
	$sql = "SELECT * FROM movies";
	$result = mysqli_query($conn,$sql);
	$queryResults=mysqli_num_rows($result);
	//check if table is filled with data
	if ($queryResults > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo"<div class = 'article-box'>
			<h3><b>img_url: </b><br><img src =\"".$row['img_url'].".png\"></img></h3>
			<h3><b>title: </b>".$row['title']."</h3>
			<h3><b>year: </b>".$row['year']."</h3>
			<h3><b>certificate: </b>".$row['certificate']."</h3>
			<h3><b>runtime: </b>".$row['runtime']."</h3>
			<h1><b>description:</b> <br>".$row['description']." </h1>
			<h3><b>imdb_rating: </b>".$row['imdb_rating']."</h3>  
			<h3><b>metascore: </b>".$row['metascore']."</h3> 
			<h3><b>votes: </b>".$row['votes']."</h3> 
			<h3><b>gross: </b>".$row['gross']."</h3> 
			
			<form method ='POST' action='scripts/movies_scripts/delete_article.php'>
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
