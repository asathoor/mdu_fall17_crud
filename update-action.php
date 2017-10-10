<h1>Update</h1>
<?php /*
File: update-action.php
Purpose: update sample
*/
require "db.php"; // connect to the database

// print_r($_REQUEST); // test

// get the form values
$name = $_REQUEST['name'];
$id = $_REQUEST['id'];

// SQL string with input from the form
$sql = "UPDATE `medlemmer` SET `navn` = '". $name ."' WHERE `medlemmer`.`medlemmer_id` = ". $id .";";

// test / execute the query
if( $mysqli->query( $sql ) ){
	echo "<p>Post $id updated to: $name </p>";
} else {
	echo "I cannot execute your query.";
};
?>