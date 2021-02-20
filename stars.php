
<!DOCTYPE HTML>
<html>
	
	
	<head>
		<title>CrazyDiamond</title>
		
		<link rel="shortcut icon" type ="image/png" href="img/favicon3_1.png">
		
		<meta name="description" content="website description" />
		<meta name="keywords" content="website keywords, website keywords" />
		<meta http-equiv="content-type" content="text/html/php; charset=windows-1252" />
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	
	<body>
		<div id="main">
			<div id="header">
				<div id="logo">
					<div id="logo_text">
						<!-- class="logo_colour", allows you to change the colour of the text -->
						<h1><a href="index.php">Crazy<span class="logo_colour">Diamond</span></a></h1>
						<h2>Simple. Contemporary. Website.</h2>
					</div>
				</div>
				<div id="menubar">
					<ul id="menu">
						<!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
						<li><a href="index.php">Home</a></li>
						<li><a href="movies.php">Movies</a></li>
						<li class="selected"><a href="stars.php">Stars</a></li>
						<li><a href="writers.php">Writers</a></li>
						
					</ul>
				</div>
			</div>
			<div id="site_content">
				
				<!--  <div id="content">-->
				<!-- insert the page content here -->
				<!--here must be find script-->
				<font size ="2">    <h1><b>Stars</b></h1></font>
				<hr>
				<br>
				<!--here are find script -->
				<form action="scripts/stars_scripts/search_article.php" method ="POST">
				<input type ="text" name="search" placeholder="Search">
					<button type="submit" name="star-search">SEARCH</button>
				</form>
				<div class="article-container">
					<font size ="2">
						<!--shows all articles from db and places Delete button also in script-->
						<center>
							<?php
								include'scripts/stars_scripts/show_article.php';
							?>
						</center>
						<!--button to insert new article into DB-->
						<form action="scripts/stars_scripts/insert_article.php" method="POST">
								<input type="text" name ="first" placeholder="Name of Person">
								
								<input type="text" name ="surname" placeholder="Surname">
								
								<input type="text" name ="about" placeholder="about">
								
								<input type="text" name ="o_c" placeholder="Origins country tag(3)">
								
								<input type="date" name ="dob" placeholder="Date of birth">
								<br>
								<button type ="submit" name="insert_article">Insert</button>
							<form/>
					</font>
				</div>
				
			</div>
			
		</div>
	</body>
</html>
