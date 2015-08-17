<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	$member_id = clean($_POST['member_id']);
	$password = clean($_POST['password']);
	$cpassword = clean($_POST['cpassword']);
	
	
//Input Validations
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../view/change_password.php");
		exit();
	}


	//Create INSERT query
	$qry = "UPDATE user SET 
	member_id='$member_id',
	passwd='".md5($_POST['password'])."'
	WHERE member_id='$member_id'";
	
$result =  mysql_query($qry);

if($result) {
		header("location: change-success.php");
		exit();
	}else {
		die("Query failed");
	}
?>
