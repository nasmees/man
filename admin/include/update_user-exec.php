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
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$email = clean($_POST['email']);
	$phone = clean($_POST['phone']);
	$appointment = clean($_POST['appointment']);
    $address = clean($_POST['address']);
	$education = clean($_POST['education']);
	$datework = clean($_POST['datework']);
	$type = clean($_POST['type']);
	
	

	
	
//Input Validations
	if($fname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	if($lname == '') {
		$errmsg_arr[] = 'Last name missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr[] = 'E-mail missing';
		$errflag = true;
	}
	if($appointment == '') {
		$errmsg_arr[] = 'appointment missing';
		$errflag = true;
	}
	
	
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../view/add_user.php");
		exit();
	}


	//Create INSERT query
	$qry = "UPDATE user SET 
	member_id='$member_id',
	firstname='$fname',
	lastname='$lname',
	email='$email',
	phone='$phone',
	appointment='$appointment',
	address='$address',
	education='$education',
	datework='$datework',
	type='$type'
	WHERE member_id='$member_id'";
	

$result =  mysql_query($qry);

if($result) {
		header("location: update-success.php");
		exit();
	}else {
		die("Query failed");
	}
?>
