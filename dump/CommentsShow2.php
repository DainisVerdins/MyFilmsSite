<?php
  
      $servernameT = "localhost";
      $usernameT = "student";
      $passwordT = "stud.net";
      $dbnameT = "Answers";

      // Create connection
      $connT = new mysqli($servernameT, $usernameT, $passwordT, $dbnameT);
      // Check connection
      if ($connT->connect_error) {
          die("Connection failed: " . $connT->connect_error);
      } 

      $sqlT = "SELECT qid, date, client, text FROM Answers";
      $resultT = $connT->query($sqlT);
		//echo"<p>".$Questions_ID."</p>";
      if ($resultT->num_rows > 0) {
          // output data of each row
          while($rowT = $resultT->fetch_assoc()) {
	    //echo"I am in CommentShow2 (while)";
            if($rowT["qid"]==$Questions_ID){
		//	echo"I am in showcomments2 (if) <br>";
                echo "<b>client at </b> " . $rowT["date"]. "<b> from</b> " . $rowT["client"]. "<br>
                <p1><i> <mark> " . $rowT["text"]. "</mark></i></p1> <br><br>";
              }
          }
      } else {
          echo "0 results of Answers";
      }
      $connT->close();
  
    ?>
