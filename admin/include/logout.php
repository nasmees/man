<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META HTTP-EQUIV="Refresh" CONTENT="3;URL=/asm/admin/index.php">
<title>logged out</title>
<link href="../../css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div><table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</div>

<div align="center">
  <h3><span class="red"> <img src="../../img/shutdown.png" width="32" height="32" /> You have been logged out..</span></h3></div>
</body>
</html>
