<?php

	session_start();
	if($_SESSION['SESS_MEMBER_ID'] == "")
	{
		header("location: /asm/view/login.php");
		exit();
	}

	if($_SESSION['TYPE'] != "Admin")
	{
		header("location: /asm/include/user-failed.php");
		exit();
	}	


	
	
	
?>
