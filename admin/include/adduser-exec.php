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
	
	//Sanitize the POST values
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
	$login = clean($_POST['login']);
	$password = clean($_POST['password']);
	$cpassword = clean($_POST['cpassword']);
	
	//Input Validations
	if($member_id == '') {
		$errmsg_arr[] = 'ID missing';
		$errflag = true;
	}
	if($member_id > '999999999') {
		$errmsg_arr[] = 'ID incorrect';
		$errflag = true;
	}
	if($member_id < '11111111') {
		$errmsg_arr[] = 'ID incorrect';
		$errflag = true;
	}
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
	if($type == '') {
		$errmsg_arr[] = 'Type of User missing';
		$errflag = true;
	}
	if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($password < '999999') {
		$errmsg_arr[] = 'Password must more than 6 digit';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM user WHERE login='$login'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Login ID already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../view/add_user.php");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO user(member_id,firstname, lastname, login, email, phone, address, datework, education, type, appointment, passwd) VALUES('$member_id','$fname','$lname','$login','$email','$phone','$address','$datework','$education','$type','$appointment','".md5($_POST['password'])."')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: adduser-success.php");
		exit();
	}else {
		die("Query failed");
	}
?>
