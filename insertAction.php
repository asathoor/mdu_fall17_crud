
<?php
/*
File: action.php
Purpose: INSERT INTO ...
*/

require_once 'header.php';

require_once 'db.php';

	if($_GET) { 
				
		$fn = $_GET['name'];
		
		// the sql
		$sql = "INSERT INTO `medlemmer` (`medlemmer_id`, `navn`) VALUES (NULL, '$fn');";
					
		// INSERT
		$insert = $mysqli->query($sql);	
		mysqli_close($mysqli); // close connection
		
		echo "<p>Added: $fn.</p>";
		echo $sql;
				
	}
	else {
		echo "<p>Error: Use the form please. No GET got.</p>";
	}

require_once 'footer.php';
?>
