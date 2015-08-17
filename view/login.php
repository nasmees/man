<!DOCTYPE HTML>
<html>
<head>
<title>fiman login</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="/asm/css/reset.css">
<link rel="stylesheet" type="text/css" href="/asm/css/structure.css">
</head>

<body>
<form class="box login" id="loginForm" name="loginForm" method="post" action="/asm/include/login-exec.php">
	<fieldset class="boxBody">
	  <label>Username</label>
	  <input name="login" type="text" tabindex="1" placeholder="ชื่อผู้ใช้" required>
	  <label><a href="#" class="rLink" tabindex="5"></a>Password</label>
	  <input name="password" type="password" tabindex="2" placeholder="รหัสผ่าน" required>
	</fieldset>
	<footer>
	  <label><input type="checkbox" tabindex="3">Keep me logged in</label>
	  <input type="submit" class="btnLogin" value="Login" tabindex="4">
	</footer>
</form>
<footer id="main">
File Management System for Faculty of Science and Technology Yala Islamic University 
</footer>
</body>
</html>
