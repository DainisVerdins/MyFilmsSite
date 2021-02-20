<?php
	include '../header.php';
	//mysqli_set_charset( $link, "utf8" );
	if(isset($_POST['insert_movie_article'])){
		
		$title=$_POST['title'];
		$year=$_POST['year'];
		$img_url=$_POST['img_url'];
		$certificate=$_POST['certificate'];
		$runtime=$_POST['runtime'];
		$imdb_rating=$_POST['imdb_rating'];
		$description=$_POST['description'];
		$metascore=$_POST['metascore'];
		$votes=$_POST['votes'];
		$gross=$_POST['gross'];
		
		echo"inside insert";
		
		$sql="INSERT INTO movies (title, year, img_url, certificate, runtime, imdb_rating, description,metascore,votes,gross)
		VALUES ('$title','$year','$img_url','$certificate','$runtime','$imdb_rating','$description','$metascore','$votes','$gross');";
		//run  query
		mysqli_query($conn,$sql);
		//back to webpage
		//header("Location:../../movies.php?inserting=success");
	}
	$conn->close();
?>
