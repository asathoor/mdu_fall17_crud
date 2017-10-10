<?php
/*
file: actors.php
purpose: a list of actors from the sakila database
*/

require_once 'header.php'; // html header
require 'db.php'; // the mysqli object

$sql = "SELECT * FROM `medlemmer`";
    
$result =  $mysqli->query($sql); // query
?>

<h2>Actors</h2>

<?php
// looping out the result
while($row = $result->fetch_assoc()){
    echo $row['navn'] . "<br> ";
   }

mysqli_close($mysqli); 

require_once 'footer.php'; // html footer
?>
