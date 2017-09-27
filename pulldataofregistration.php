<?php
include('config/config.php');
//if (isset($_POST['submit']) && $_POST['submit']=='Submit'){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pswd=$_POST['pswd'];
	$dropdown=$_POST['dropdown'];
	$address=$_POST['address'];
	$terms=$_POST['terms'];
	$gender=$_POST['gender'];

	//if($name=='' || $email=='' || $pswd=='' || $dropdown=='' || $address=='' || $terms=='' || $gender=='')
	//{

		/*echo "<script>window.location.href='index.php?error=yes';</script>";
		exit;
*/
	/*}
	else
	{
	*/$ins_query="INSERT INTO users (user_id, user_fullname, user_email, user_password, user_option, user_address, user_terms, user_gender, user_status) VALUES (NULL, '".$name."', '".$email."', '".$pswd."', '".$dropdown."', '".$address."', '".$terms."', '".$gender."', '0')";
	mysql_query($ins_query);
	header('location:index.php?suc=success');
	//exit;
	//}



/*UPDATE phpcrud.users SET user_password = '123456' WHERE users.user_id =1*/

//}

if (isset($_POST['edit']) && $_POST['edit']=='Submit')
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pswd=$_POST['pswd'];
	$dropdown=$_POST['dropdown'];
	$address=$_POST['address'];
	$terms=$_POST['terms'];
	$gender=$_POST['gender'];
	
	$update_query="update users set 
	user_fullname='".$name."', 
	user_email='".$email."', 
	user_password='".$pswd."', 
	user_option='".$dropdown."', 
	user_address='".$address."', 
	user_terms='".$terms."', 
	user_gender='".$gender."', 
	user_status='0' where user_id='".$_POST['userid']."' ";
	mysql_query($update_query);
	header('location:user_list.php?msgedit=suc');
	exit;
}

if (isset($_POST['edit']))
{
}

if ($_GET['del']=='yes'&& $_GET['id']!='')
{
	$del_query_check =mysql_query("delete from users where user_id='".$_GET['id']."'");

	if($del_query_check)
	{
		header('location:user_list.php?msgdel=suc');
	}
	else
	{
				header('location:user_list.php?msgdel=error');
	}
	
}

?>