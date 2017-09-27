<?php
/*$host='localhost';
$dbusername='root';
$dbpassword='';
$dbname='college';

$con=mysql_connect($host,$dbusername,$dbpassword);
$db=mysql_select_db($dbname);
	if (!$con && !$db)
	{
		echo "Connecation not Established";
		exit;
	}*/
?>
<?php 
$host='localhost';
$usernm='root';
$pass='';
$db='college';
mysql_connect($host,$usernm,$pass);
mysql_select_db($db);
error_reporting(0);
?>