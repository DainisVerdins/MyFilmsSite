<?php
	include '../header.php';
?>
<link rel="stylesheet" type="text/css" href="../../style/style.css" />
<center>
	<h1 style="font-size:30px">Search page</h1>
	<h1 style="font-size:30px"><a href="../../movies.php" >BACK</a></h1>
	
	<div class = "article-container">
		<?php
			//if some one pressed designed button
			if(isset($_POST['movies_search'])){
				$search = mysqli_real_escape_string($conn,$_POST['search']); 
				//check all in table
				$sql = "SELECT * FROM movies WHERE title LIKE '%$search%' 
				OR year LIKE '%$search%' OR img_url LIKE '%$search%' 
				OR certificate LIKE '%$search%' OR runtime LIKE '%$search%'
				OR imdb_rating LIKE '%$search%'OR description LIKE '%$search%'
				OR metascore LIKE '%$search%'OR votes LIKE '%$search%'
				OR gross LIKE '%$search%'";
				$result = mysqli_query($conn,$sql);
				$queryResult = mysqli_num_rows($result);
				
				echo"<h1>There are ".$queryResult." results!</h1>";
				
				if($queryResult>0){
					while($row = mysqli_fetch_assoc($result)){
						echo"<div class = 'article-box'>
						<h3><b>img_url: </b><br><img src =\"".$row['img_url'].".png\"></img></h3>
						<h3><b>title: </b>".$row['title']."</h3>
						<h3><b>year: </b>".$row['year']."</h3>
						<h3><b>certificate: </b>".$row['certificate']."</h3>
						<h3><b>runtime: </b>".$row['runtime']."</h3>
						<h3><b>imdb_rating: </b>".$row['imdb_rating']."</h3> 
						<h3><b>description:</b><br>".$row['description']."</h3> 
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
				else{
					echo"There are no results matching your search!!!";
				}
				
				
			}
		?>
		
		
	</div>
	
</center>	