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

<title>User Information</title>
<link href="../../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header"><img src="../../img/logofiman.png" />
</div>

<div id="body">
<h3><span class="blue"><img src="../../img/cv.png" width="30" height="30" /> User</span><span class="gray"> Information</span> </h3>

</a>
<div id="slogan"><span class="style1">ข้อมูลผู้ใช้ ระบบจัดการไฟล์</span></div>
            
            

<div id="left">           

  <table width="100%" border="0" cellpadding="2" cellspacing="5" >
 <tr>
     <td colspan="2"> 
     </td>
    </tr>
     <tr>
	  <td align="right"><img src="../../img/my-account.png" width="32" height="32" /></td>
	<td><span class="blue">User Information</span></td
    ></tr>
    <tr>
      <td width="21%" align="right">ID </td>
      <td><span class="blue" > <?PHP echo $shows[0]; ?></span></td>
    </tr>
 <tr>
      <td width="21%" align="right">First Name </td>
      <td><span class="blue" ><?PHP echo $shows[1]; ?></span></td>
    </tr>
    <tr>
      <td align="right">Last Name </td>
      <td><span class="blue" ><?PHP echo $shows[2]; ?></span></td>
    </tr>
     <tr>
      <td align="right">E-mail </td>
      <td><span class="blue" ><?PHP echo $shows[3]; ?></span></td>
    </tr>
    <tr>	
      <td align="right">Telephone </td>
      <td><span class="blue" ><?PHP echo $shows[4]; ?></span></td>
    </tr> 
     <tr>	
      <td align="right">Appointment </td>
      <td><span class="blue" ><?PHP echo $shows[5]; ?></span></td>
    </tr>
     <tr>	
      <td align="right">Address </td>
      <td><span class="blue" ><?PHP echo $shows[6]; ?></span></td>
    </tr>
     <tr>	
      <td align="right">Education </td>
      <td><span class="blue" ><?PHP echo $shows[7]; ?></span></td>
    </tr>
     <tr>	
      <td align="right">Date of Work </td>
      <td><span class="blue" ><?PHP echo $shows[8]; ?></span></td>
    </tr>
    <tr>
	  <td align="right"><img src="../../img/login.png" width="32" height="32" /></td>
	<td><span class="blue">Login Information</span></td
    ></tr>
	<tr>
	  <td align="right" >Login</td>
	  <td width="175"><span class="blue" ><?PHP echo $shows[9]; ?></span></td>
    </tr>
    
      <tr>
        <td width="21%" align="right"> </td>
        <td class="red">
          
  </td>
      </tr>
  </table>
  <?
	}
  ?>


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
