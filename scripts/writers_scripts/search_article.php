<?php
	//conection info
	include '../header.php';
?>
<!-- connect the style .css-->
<link rel="stylesheet" type="text/css" href="../../style/style.css" />
<center>
	<!-- Main header of resulting search page-->
	<h1 style="font-size:30px">Search page</h1>
	<h1 style="font-size:30px"><a href="../../writers.php" >BACK</a></h1>
	
	<div class = "article-container">
		<?php
			//if some one pressed designed button
			if(isset($_POST['writers_search'])){
				//assign from search input the data to variable $search by POST method 
				$search = mysqli_real_escape_string($conn,$_POST['search']); 
				
				//query of checking each column to find neede data
				$sql = "SELECT * FROM writers WHERE name LIKE '%$search%' 
				OR surname LIKE '%$search%' OR status LIKE '%$search%' 
				OR o_c LIKE '%$search%' OR dob LIKE '%$search%'OR sex LIKE '%$search%'";
				
				//get result of querry
				$result = mysqli_query($conn,$sql);
				//get how much rows of result have
				$queryResult = mysqli_num_rows($result);
				
				//display result count
				echo"<h1>There are ".$queryResult." results!</h1>";
				
				//check if have results of launched query
				if($queryResult>0){
					//loop thru result data launched query. where at iteration data of result string will be asigned to row variable
					while($row = mysqli_fetch_assoc($result)){
						//display data on the screen
						// and place at the end of itch article delete button
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
				else{
					echo"There are no results matching your search!!!";
				}
			}
		?>
	</div>		
</center>