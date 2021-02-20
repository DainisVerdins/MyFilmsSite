
<!DOCTYPE HTML>
<html>


<head>
   <title>CrazyDiamond</title>

  <link rel="shortcut icon" type ="image/png" href="img/favicon3_1.png">

  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
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
		  <li><a href="Reports.php">Reports</a></li>
          <li class="selected"><a href="Questions.php">FAQ</a></li>
          <li><a href="page.php">A Page</a></li>
        </ul>
      </div>
    </div>
    <!--<div id="content_header">
-->
    <div id="site_content">
    <!--  <div id="sidebar_container">
        <div class="sidebar"> 
        </div>
      </div>
 -->
    <!--  <div id="content">-->
        <!-- insert the page content here -->
    	<font size ="4">    <h1><b>Questions & Answers</b></h1></font>
	    <hr>
	    <br>
	
	<font size ="4">
        <center>
	  <?php
              include "Show_all_questions_only2.php";
            ?>
	    </center>
	</font>
	
    </div>
    
    <!--</div>
-->
  </div>
</body>
</html>
