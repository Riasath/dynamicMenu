<?php
	session_unset();
    session_destroy();
	$_SESSION["error"] = "You Successfully Logout";
	header('Location: '.'login.php');
?>