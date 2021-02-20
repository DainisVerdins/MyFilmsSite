
<?php
		echo"
		    <div>
			<!--Edit wizard-->
			<form id='editText'>
			    <button>EDIT</button>
			</form >
			    <!--Delete wizard-->
			<form method ='POST' action = 'CommentDelete.php'>
			    	<input type ='hidden' name ='qid' value ='$rowid'>
				<button type='submit' name='deleteComment' >DELETE</button>
			</form>
		    </div>
		";
?>
