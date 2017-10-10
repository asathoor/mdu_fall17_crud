<?php
/*
file: seek-action.php
purpose: seek a work query
by: petj
*/
require_once "header.php";


/* from input to  query */
function search($what){
		
		/* mysqli database connection */
		require_once "db.php";

		/* headline printed */		
		print "<h2>Searching: $what</h3>";
		
		/* SEARCH the sql */
		$sql = "SELECT * FROM `cars` WHERE (`car_model` LIKE '%" 
		. $what 
		. "%') ORDER BY `hold_navn` DESC";
		echo $sql;
		
		/* mysqli query */
		$result =  $mysqli->query($sql); // query

		/* loop out the result */
		while($row = $result->fetch_assoc()){
   	 		echo $row['hold_navn'] . "<br>";
   		}
   	
	mysqli_close($mysqli); 
				
	} // ends word

/* Execute the function if the OK button has been pressed */
if(isset($_GET['OK'])) {
	search($_GET['seek']);
}

require_once "footer.php";
?>
