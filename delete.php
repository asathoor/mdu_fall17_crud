<?php
/*
File: delete.php
Purpose: delete something in the Sakila sample database
*/

require_once 'header.php'; // html header
require_once'db.php'; // the mysqli object

$sql = "SELECT * FROM medlemmer"; // a query created in PhpMyAdmin
    
$result =  $mysqli->query($sql); // query
?>

<h2>Delete sample</h2>

<table>

<?php
// looping out a nice table of actors with a deletebutton too.
while($row = $result->fetch_assoc()){
	
	// the delete button form used in the table	
	$deleteForm = "<form action='deleteAction.php'>\n
						<input type='hidden' name='delete' value='$row[medlemmer_id]'>\n
						<button name='Delete' value='Delete' type='submit'>Delete</button>\n
					</form>\n";
	
	// tr and td
    echo "\n<tr>\n<td>" 
    . $row['navn'] 
    . "<td>" 
    . $deleteForm 
    . "</td>"
    . "</td>\n</tr>";
   }

require_once 'footer.php'; // html footer
?>

</table>
