<?php

	session_start();
	if($_SESSION['SESS_MEMBER_ID'] == "")
	{
		header("location: /asm/admin/view/login.php");
		exit();
	}

	if($_SESSION['TYPE'] != "Admin")
	{
		header("location: ./include/user-failed.php");
		exit();
	}	
	
	
	
	
	
?>
