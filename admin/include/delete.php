<?
 extract($_GET);
 $member_id=$member_id;
?>
<?
	include('db_connect.php');
	$sql = "delete from user where member_id ='$member_id'";
	$show = mysql_query($sql);
	if(!$show)
	{
	die("could not connect with db".mysql_error());
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META HTTP-EQUIV="Refresh" CONTENT="2;URL=/asm/admin/view/user_manager.php">
<title>Update Successful</title>
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
  <h3><span class="red"> <img src="../../img/check.png" width="32" height="32" /> Delete Successful</span></h3></div>
</body>
</html>

<?
}
?>
