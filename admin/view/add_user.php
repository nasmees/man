<?php
	require_once('../include/auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Add New User</title>
<link href="../../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header"><img src="../../img/logofiman.png" />
</div>

<div id="body">
<h3><a href="add_user.php"><span class="blue"><img src="../../img/plus.png" width="30" height="30" /> Add</span><span class="gray"> New User</span> </h3>

</a>
<div id="slogan"><span class="style1">กรอกข้อมูลสมาชิก</span></div>
            
            

<div id="left">           
<form  name="loginForm" method="post" action="../include/adduser-exec.php">
  <table width="100%" border="0" cellpadding="2" cellspacing="5" >
 <tr>
     <td colspan="2"> 
     </td>
    </tr>
     <tr>
	  <td align="right"><img src="../../img/my-account.png" width="32" height="32" /></td>
	<td><span class="blue">ประวัติส่วนตัว</span></td
    ></tr>
    <tr>
      <td width="21%" align="right">ID </td>
      <td><input name="member_id" type="text" class="inputbox-normal" id="member_id" /><span class="yellow">* ใช้หมายเลขโทรศัพท์มือถือ</span></td>
    </tr>
 <tr>
      <td width="21%" align="right">First Name </td>
      <td><input name="fname" type="text" class="inputbox-normal" id="fname" /><span class="yellow">* นายมุสลิม</span></td>
    </tr>
    <tr>
      <td align="right">Last Name </td>
      <td><input name="lname" type="text" class="inputbox-normal" id="lname" /><span class="yellow">* อิสลาม </span></td>
    </tr>
     <tr>
      <td align="right">Age </td>
      <td><input name="age" type="text" class="inputbox-normal" id="age" /><span class="yellow">* 25 </span></td>
    </tr>
     <tr>
      <td align="right">E-mail </td>
      <td><input name="email" type="text" class="inputbox-normal" id="email" /><span class="yellow">* agsa@agsa.org </span></td>
    </tr>
    <tr>
      <td align="right">Telephone </td>
      <td><input name="phone" type="text" class="inputbox-normal" id="phone" /><span class="yellow">* 087292xxxx </span></td>
    </tr>
    <tr>	
      <td align="right">Facebook </td>
      <td><input name="facebook" type="text" class="inputbox-normal" id="facebook" /><span class="yellow">* facebook.com/agsa </span></td>
    </tr> 
    <tr>	
      <td align="right">Address</td>
      <td><input name="address" type="text" class="inputbox-normal" id="address"  /><span class="yellow">* 101/2 ตลาดก่า อ.เมือง จ. ยะลา</span></td>
    </tr>
    <tr> 
      <td align="right">Province</td>
      <td><select name="province"> <option>ยะลา</option> <option>ปัตตานี</option> </select></td>
    </tr>
    <tr>	
      <td align="right">Education</td>
      <td><input name="education" type="text" class="inputbox-normal" id="education"  /><span class="yellow">* ปริญญาตรี  วิทยาการคอมพิวเตอร์</span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Add User" class="button" />
        <a href="../"><input name="" type="button" value="Cancel" class="button" /></a></td>
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
				<li><a href="../view/add_user.php"><img src="../../img/plus.png" width="20" height="20" /> Add User</a></li>
                <li><a href="../view/user_manager.php"><img src="../../img/hire-me.png" width="20" height="20" /> User Manager</a></li>
  </ul>
</div>
<div id="footer">
            ออกแบบและพัฒนาระบบ: <a href="http://www.facebook.com/groups/196668180462795/">นายนัสมี สาและ และ นายนาซอรี ลอตง</a><br>
            </p
    ></div>

</body>
</html>
