<?php

$host = 'localhost';
$port = '';
$db = 'san-gregorio-db';
$user = 'parokyan';
$pass = 'l)UKks28.Jp67H';


 
/*
$host = 'localhost';
$port = '';
$db = 'parokyan_san-gregorio-db';
$user = 'parokyan_parokyan';
$pass = 'l)UKks28.Jp67H';


*/
define( 'SITE_NAME', 'Parokya' );
//define( 'DSN', "mysql:host=$host;port=$port;dbname=$db" );
define( 'DSN', "mysql:host=localhost;dbname=$db" );
define( 'DB_HOST', $host );
define( 'DB_USR', $user );
define( 'DB_PWD', $pass );
define( 'DB_NAME', $db );

$connection = mysqli_connect(DB_HOST, DB_USR, DB_PWD, DB_NAME);
?>