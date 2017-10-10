<?php
/*
file: deleteAction.php
purpose: delete in the Dolly database ...
*/

require_once 'header.php';
require_once 'db.php'; // database connection

$delete = $_REQUEST['delete'];

$sql = "DELETE FROM medlemmer WHERE medlemmer_id = $delete";
$result =  $mysqli->query($sql);
echo "Deleted post $delete"; // feedback to user

require_once 'footer.php';
?>

