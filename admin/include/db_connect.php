<?
$db_host="";
$db_database="man";
$db_username="";
$db_password="";
$connection = mysql_connect($db_host, $db_username, $db_password);
if (!$connection)
	{
		die ("Could not connect to the database".mysql_error());
	}
	$db_select = mysql_select_db($db_database);
		if (!$db_select)
			{
				die("could not conect with db" .mysql_error());
			}
 ?>
