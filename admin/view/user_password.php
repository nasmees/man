<?php
	require_once('../include/auth.php');
?>
<?
extract($_GET);
$member_id=$member_id;
include('../include/db_connect.php');
$sql = "select * from user where member_id=$member_id";
$show = mysql_query($sql);
while ($shows = mysql_fetch_row($show))
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Change Password</title>
<link href="../../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header"><img src="../../img/logofiman.png" />
</div>

<div id="body">
<h3><span class="blue"><img src="../../img/edit.png" width="30" height="30" />Change</span><span class="gray"> Password</span> </h3>

</a>
<div id="slogan"><span class="style1">กรุณากรอกข้อมูลเพื่อแก้ไข Password เพื่อใช้บริการระบบจัดการไฟล์</span></div>
            
            

<div id="left">           
<form  name="loginForm" method="post" action="../include/user_password-exec.php">
  <table width="100%" border="0" cellpadding="2" cellspacing="5" >
 <tr>
     <td colspan="2"> 
     </td>
    </tr>
    <tr>
      <input name="member_id" type="hidden" class="inputbox-normal" id="member_id" value="<?PHP echo $shows[0]; ?>" readonly="readonly"/>
    </tr>
    <tr>
      <td align="right">New Password</td>
      <td width="175"><input name="password" type="password" class="inputbox-normal" id="password" /><span class="yellow">* อย่างน้อย 6 หนัก </span></td>
    </tr>
    <tr>
      <td align="right">Confirm Password </td>
      <td><input name="cpassword" type="password" class="inputbox-normal" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Change" class="button" />
      <a href="user_manager.php"><input name="" type="button" value="Cancel" class="button" /></a></td>
    </tr>
    
      <tr>
      <td width="21%" align="right"> </td>
      <td class="red"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>

</td>
    </tr>
  </table>
  <?
	}
  ?>
</form>


</div>
<div id="right">
			<h1>Main menu</h1>
			<ul>
				<li><a href="../index.php"><img src="../../img/home.png" width="20" height="20" /> Home</a></li>
				<li><a href="../include/logout.php"><img src="../../img/shutdown.png" width="20" height="20" /> Log Out</a></li>
			</ul>

	    <h1>Admin Tools</h1>
			<ul>
                <li><a href="../../view/admin_filemanager.php"><img src="../../img/folder.png" width="20" height="20" /> File Manager</a></li>
				<li><a href="../view/add_user.php"><img src="../../img/plus.png" width="20" height="20" /> Add User</a></li>
                <li><a href="../view/user_manager.php"><img src="../../img/hire-me.png" width="20" height="20" /> User Manager</a></li>
				<li><a href="../../view/admindropbox_filemanager.php"><img src="../../img/dropbox.png" width="20" height="20" /> Dropbox</a></li>
				<li><a href="system_status.php"><img src="../../img/graphic-design.png" width="20" height="20" /> System Status</a></li>
				<li><a href="hdd_status.php"><img src="../../img/database.png" width="20" height="20" /> Drive and Memory</a></li>
                <li><a href="logfile.php"><img src="../../img/future-projects.png" width="20" height="20" /> Log File</a></li>
  </ul>
</div>
<div id="footer">
          ออกแบบและพัฒนาระบบ: <a href="http://www.facebook.com/groups/196668180462795/">นายนัสมี สาและ และ นายนาซอรี ลอตง</a><br>
            </p
    ></div>

</body>
</html>
