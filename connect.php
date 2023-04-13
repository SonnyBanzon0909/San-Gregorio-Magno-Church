<?php

$servername = "corporate.viplus1.noc401.com";///162.213.210.29
$username = "parokyan_parokyan";
$password = "l)UKks28.Jp67H";
$dbname = "parokyan_san_gregorio_db"; 
/*
$servername = "localhost";
$username = "parokyan";
$password = "l)UKks28.Jp67H";
$dbname = "san-gregorio-db";

*/


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
{
	echo "Connection success"; 
}


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 

?>