<?php
	include '../header.php';
?>
<link rel="stylesheet" type="text/css" href="../../style/style.css" />
<center>
	<h1 style="font-size:30px">Search page</h1>
	<h1 style="font-size:30px"><a href="../../stars.php" >BACK</a></h1>
	
	<div class = "article-container">
		<?php
			//if some one pressed designed button
			if(isset($_POST['star-search'])){
				$search = mysqli_real_escape_string($conn,$_POST['search']); 
				//check all in table
				$sql = "SELECT * FROM stars WHERE name LIKE '%$search%' 
				OR surname LIKE '%$search%' OR about LIKE '%$search%' 
				OR o_c LIKE '%$search%' OR dob LIKE '%$search%'";
				$result = mysqli_query($conn,$sql);
				$queryResult = mysqli_num_rows($result);
				
				echo"<h1>There are ".$queryResult." results!</h1>";
				
				if($queryResult>0){
					while($row = mysqli_fetch_assoc($result)){
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
				else{
					echo"There are no results matching your search!!!";
				}
				
				
			}
		?>
		
		
	</div>
	
</center>