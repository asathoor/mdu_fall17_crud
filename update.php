<?php
/*
File: update.php
Purpose: delete something in the Sakila sample database
*/

require_once 'header.php'; // html header
require_once 'db.php'; // the mysqli object

$sql = "SELECT * FROM `medlemmer`"; // a query created in PhpMyAdmin
    
$result =  $mysqli->query($sql); // query

/* will print out a html form */
function theUpdateForm($name, $id){
	?>
	<div>	
	<form action="update-action.php" method='get' enctype='multipart/form-data'>
		<input type='text' name='name' value='<?php echo $name; ?>'>
		<input type='hidden' name='id' value='<?php echo $id; ?>'>
		<input type="submit" name="update" value="Update"> <input type="reset" name="Cancel" value="Cancel">
	</form>
	</div>
	<?php
}
?>

<h2>Update forms</h2>



<?php
// looping out a table of actors with a deletebutton too.
while($row = $result->fetch_assoc()){
	
	theUpdateForm($row['navn'],$row['medlemmer_id']);

}
?>



<?php require_once('footer.php'); // html footer ?>
