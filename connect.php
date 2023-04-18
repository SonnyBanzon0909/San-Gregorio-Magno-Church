<?php

$servername = "localhost";///162.213.210.29//corporate.viplus1.noc401.com
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
	 
}


 
 

?>