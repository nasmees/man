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

<title>Update User</title>
<link href="../../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header"><img src="../../img/logofiman.png" />
</div>

<div id="body">
<h3><span class="blue"><img src="../../img/edit.png" width="30" height="30" /> Update</span><span class="gray"> User</span> </h3>

</a>
<div id="slogan"><span class="style1">กรุณากรอกข้อมูลเพื่อแก้ไขผู้ใช้ เพื่อใช้บริการระบบจัดการไฟล์</span></div>
            
            

<div id="left">           
<form  name="loginForm" method="post" action="../include/update_user-exec.php">
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
      <td><input name="member_id" type="text" class="inputbox-normal" id="member_id" value="<?PHP echo $shows[0]; ?>" readonly="readonly"/><span class="yellow">* เลขประจำตัวเจ้าหน้าที่ </span></td>
    </tr>
 <tr>
      <td width="21%" align="right">First Name </td>
      <td><input name="fname" type="text" class="inputbox-normal" id="fname" value="<?PHP echo $shows[1]; ?>"/><span class="yellow">* เช่น นายอับดุลเลาะห์ </span></td>
    </tr>
    <tr>
      <td align="right">Last Name </td>
      <td><input name="lname" type="text" class="inputbox-normal" id="lname" value="<?PHP echo $shows[2]; ?>"/><span class="yellow">* อูมา </span></td>
    </tr>
     <tr>
      <td align="right">E-mail </td>
      <td><input name="email" type="text" class="inputbox-normal" id="email" value="<?PHP echo $shows[3]; ?>"/><span class="yellow">* email@gmail.com </span></td>
    </tr>
    
    <tr>
      <td align="right">Telephone </td>
      <td><input name="phone" type="text" class="inputbox-normal" id="phone" value="<?PHP echo $shows[4]; ?>"/><span class="yellow">* 087292xxxx </span></td>
    </tr>
    
     <tr>	
      <td align="right">Appointment </td>
      <td><input name="appointment" type="text" class="inputbox-normal" id="appointment" value="<?PHP echo $shows[5]; ?>"/><span class="yellow">* คณบดี อาจาร์ย เจ้าหน้าที่ อื่นๆ </span></td>
    </tr> 
    <tr>	
      <td align="right">Address</td>
      <td><input name="address" type="text" class="inputbox-normal" id="address" value="<?PHP echo $shows[6]; ?>" />        <span class="yellow">* 101/2 ตลาดก่า อ.เมือง จ. ยะลา</span></td>
    </tr>
    <tr>	
      <td align="right">Education</td>
      <td><input name="education" type="text" class="inputbox-normal" id="education"  value="<?PHP echo $shows[7]; ?>"  /><span class="yellow"> ปริญญาตรี  วิทยาการคอมพิวเตอร์</span></td>
    </tr>
    <tr>	
      <td align="right">Date of Work</td>
     <td><label><input type="date" name="datework" id="datework" value="<?PHP echo $shows[8]; ?>"></label><span class="yellow"> 04/04/2012</span></td>

    </tr> 
    <tr>
	  <td align="right"><img src="../../img/login.png" width="32" height="32" /></td>
	<td><span class="blue">Login Information</span></td
    ></tr>
    
    
    <tr>
	<td align="right">Type of User</td>
	<td><select name="type" size="1"> <option>Officer</option> <option>Guest</option> </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value=" Update User " class="button" />
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
