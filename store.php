<?php
	require_once 'connection.php';
	session_start();
	if(empty($_SESSION["IdValidation"]))
    {
    		 $_SESSION["error"] = "You try to break the link or SQL Injection";
             header('Location: '.'login.php');
    }
    if($_SESSION["userType"]!=1){
    	$_SESSION["error"] = "You try to break the link or SQL Injection";
             header('Location: '.'login.php');
    }
	if ( isset($_POST['manuStore']) ) {
	$manuName = $_POST['manuName'];
	$link = $_POST['link'];
	$query = "INSERT INTO mainmenu (mainMenuName,mainMenuLink) VALUES('$manuName','$link')";
   	$res = $conn->query($query);
   	if ($res) {
    	$_SESSION["resuly"] = "Successfully Store Menu";
   } 
   else {
    	$_SESSION["resuly"] = "Some Error Occure";
   }

   }

   if ( isset($_POST['sStore']) ) {
	$submenu = $_POST['submenu'];
	$link = $_POST['link'];
	$mainMenuId = $_POST['mainMenuId'];
	$query = "INSERT INTO smenu(name,link,manu) VALUES('$submenu','$link','$mainMenuId')";
   	$res = $conn->query($query);
   		if ($res) {
    		$_SESSION["resuly"] = "Successfully Store Submenu";
   } 
   else {
    	$_SESSION["resuly"] = "Some Error Occure";
   } 
   }
header('Location: '.'settings.php');
?>