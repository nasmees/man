<?php
	require_once('include/auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Fiman Administrator</title>
<link href="../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header"><img src="../img/logofiman.png" />

</div>

<div id="body">
<h3><a href="index.php"><span class="blue"> Administrater</span> <span class="gray">Tools</span></a></h3> 
        <div id="left">
        <div id="slogan">ยินดีต้อนรับคุณ  <?php echo $_SESSION['SESS_FIRST_NAME'];?>  เข้าสู้ระบบจัดการไฟล์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยอิสลามยะลา</div>
  
            <div id="cpanel">
                <div style="float:left;">
                    <div class="icon">
                        <a href="view/add_user.php">
                        <img src="../img/mainadduser.png" alt="Add User่" align="middle" border="0" />
                        <span>Add User</span>
                        </a>
                    </div>
                </div>
                
                 <div style="float:left;">
                    <div class="icon">
                        <a href="view/user_manager.php">
                        <img src="../img/mainmanageuser.png" alt="User Manager" align="middle" border="0" />
                        <span>User Manager </span>
                        </a>
                    </div>
                </div>
                <div style="float:left;">
                    <div class="icon">
                        <a href="view/change_password.php?member_id=<?php echo $_SESSION['SESS_MEMBER_ID'];?>">
                        <img src="../img/mainpassword.png" alt="Change Password" align="middle" border="0" />
                        <span>Change Paswd</span>
                        </a>
                    </div>
                </div>
  
                <div style="clear:both;"> </div>
            </div>
     
        </div>
        <div id="right">
			<h1>Main menu</h1>
			<ul>
				<li><a href="index.php"><img src="../img/home.png" width="20" height="20" /> Home</a></li>
				<li><a href="include/logout.php"><img src="../img/shutdown.png" width="20" height="20" /> Log Out</a></li>
			</ul>

	    <h1>Admin Tools</h1>
			<ul>
				<li><a href="view/add_user.php"><img src="../img/plus.png" width="20" height="20" /> Add User</a></li>
                <li><a href="view/user_manager.php"><img src="../img/hire-me.png" width="20" height="20" /> User Manager</a></li>
				</ul>
        </div>
    <div id="footer">
              ออกแบบและพัฒนาระบบ: <a href="http://www.facebook.com/groups/196668180462795/">นายนัสมี สาและ และ นายนาซอรี ลอตง</a><br>
            </p>
            <!-- ปรับปรุงล่าสุด 30 มีนาคม 2551 เวลา 4:06:15 น. -->
    </div>
    </div>
    
</body>

</html>
