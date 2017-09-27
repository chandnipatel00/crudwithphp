<?php
	include('config/config.php');
	$id=$_REQUEST['id'];
	
	$qry="delete from student where id='$id'";
	$res=mysql_query($qry);
	if($res==1)
	{
		header("location:view.php");
	}
	else
	{
		die('error...'.mysql_error());
	}
?>