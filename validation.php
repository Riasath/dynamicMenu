<?php
	require_once 'connection.php';
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$res=$conn->query("SELECT * FROM user WHERE userEmail='$email' And userPassword= '$password'");


	$userRow=$res->fetch_array(); 
	$iii=$userRow['userType'];
	$count = $res->num_rows;
	if($count==1){
		if($iii==1){
			$_SESSION["userType"] = 1;
		}
		else{
			$_SESSION["userType"] = 2;
		}
		$_SESSION["IdValidation"] = $email;
		header('Location: '.'main.php');
	}
	else{
		 $_SESSION["error"] = "Wrong Username or Password";
		header('Location: '.'login.php');
	}



?>