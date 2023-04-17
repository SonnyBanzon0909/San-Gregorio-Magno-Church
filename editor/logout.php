<?php
session_start();
// check if the session variable exists
if (isset($_SESSION['user_email'])) {
  // if it does, unset it
	unset($_SESSION['user_email']);
	 
	exit();
	 
}
?>
