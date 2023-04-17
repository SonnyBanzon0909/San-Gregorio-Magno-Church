<?php

$host = 'localhost';
$port = '';
$db = 'psgm_db';
$user = 'root';
$pass = '';

define( 'SITE_NAME', 'Magusara Dental Clinic' );
//define( 'DSN', "mysql:host=$host;port=$port;dbname=$db" );
define( 'DSN', "mysql:host=localhost;dbname=$db" );
define( 'DB_HOST', $host );
define( 'DB_USR', $user );
define( 'DB_PWD', $pass );
define( 'DB_NAME', $db );

$connection = mysqli_connect(DB_HOST, DB_USR, DB_PWD, DB_NAME);