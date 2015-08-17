<?php
	require_once('../include/auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>User Manager</title>
<link href="../../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header"><img src="../../img/logofiman.png" />
</div>
<div id="body">
<h3><a href="user_manager.php"><span class="blue"><img src="../../img/hire-me.png" width="30" height="30" /> Administrator</span><span class="gray"> Manager</span> </h3>

</a>
<div id="slogan"><span class="style1">จัดการข้อมูลผู้ใช้ </span></div>    
<div id="left"> 
 <table width="100%" border="0" cellspacing="0" class="admintable" >
  <tr>
    <td width="25%" class="key">      Name</td>
    <td width="25%" class="key">Lastname</td>
    <td width="25%" class="key">Appointment</td>
    <td width="8%" class="key">Profile</td>
    <td width="8%" class="key">Update</td>
     <td width="8%" class="key">Delete</td>
  </tr>
  <tr>
    <td height="1"><span class="key">
      <? 
include('../include/db_connect.php');
$sql = "select * from user where type = 'admin'  ";
$show = mysql_query($sql);
while ($shows = mysql_fetch_row($show))
	{
		?>
    </span></td>
    <td height="1">&nbsp;</td>
    <td height="1">&nbsp;</td>
    <td height="1">&nbsp;</td>
     <td height="1">&nbsp;</td>
    <td height="1">&nbsp;</td
  ></tr>
  <tr>
    <td><img src="../../img/special-offer.png" width="20" height="20" /> <span class="blue"><?PHP echo $shows[1]; ?></span></td>
    <td><?PHP echo $shows[2]; ?></td>
    <td><?PHP echo $shows[4]; ?></td>
    <td><center><a href="profile.php?member_id=<?PHP echo $shows[0]; ?>"><img src="../../img/cv.png" width="20" height="20" /></a></td>
    <td><center><a href="update_user.php?member_id=<?PHP echo $shows[0]; ?>"><img src="../../img/edit.png" width="20" height="20" /></a></td>
    <td><center><a href="../include/delete.php?member_id=<?PHP echo $shows[0]; ?>"><img src="../../img/busy.png" width="20" height="20" /></a></td>
    <?
	}
	?>
  </tr>
  
  
  </table>

 
     

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
				<li><a href="index2.php?option=manage_user"><img src="../../img/dropbox.png" width="20" height="20" /> Dropbox</a></li>
				<li><a href="index2.php?option=manage_group"><img src="../../img/graphic-design.png" width="20" height="20" /> System Status</a></li>
				<li><a href="index2.php?option=manage_interface"><img src="../../img/database.png" width="20" height="20" /> Drive and Memory</a></li>
                <li><a href="index2.php?option=manage_config"><img src="../../img/future-projects.png" width="20" height="20" /> Log File</a></li>
				<li><a href="index2.php?option=user_online"><img src="../../img/refresh.png" width="20" height="20" /> Backup Restore</a></li>
  </ul>
</div>
<div id="footer">
            ออกแบบและพัฒนาระบบ: <a href="http://www.facebook.com/groups/196668180462795/">นายนัสมี สาและ และ นายนาซอรี ลอตง</a><br>
            </p
    ></div>

</body>
</html>