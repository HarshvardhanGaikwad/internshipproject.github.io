<?php

// Session starts
session_start();
$username = "interview_id";

if(isset($_POST["Login"])) {

	// Session Variables are created
	$_SESSION["user"] = $username;

	// Login time is stored in a session variable
	$_SESSION["login_time_stamp"] = time();
	header("Location:homepage.php");
}
?>
