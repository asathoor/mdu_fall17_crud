<?php
/*
file: loop.php
purpose: a list of whatever in  a table
*/

require_once 'boot_header.php'; // html header
require 'db.php'; // the mysqli object

$sql = "SELECT * FROM `medlemmer`";
    
$result =  $mysqli->query($sql); // query
?>

<h2>Actors</h2>

<?php
// looping out the result
while($row = $result->fetch_assoc()){
    echo "<article class='jumbotron'>" . $row['navn'] . "</article>\n";
   }

mysqli_close($mysqli); 

require_once 'footer.php'; // html footer
?>
