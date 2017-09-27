<?php

include('config/config.php');
include('header.php');

 ?>
  <ul>
 
		 <li><a href="index.php">Register</a></li>
        <li><a href="view.php">View</a></li>       
    </ul>
<?php
if ($_GET['flag'] == 'edit' && $_GET['id'] != '') {
    $qry_sel = mysql_query("select * from student where id='".$_GET['id']."'");
    if ($rowc = mysql_fetch_array($qry_sel)) {
        $a1 = $rowc['id'];
        $a2 = $rowc['name']; 
		$a3 = $rowc['address']; 
        $a4 = $rowc['city'];
        $a5 = $rowc['mobile'];
        $a6 = $rowc['email'];
		$a7 = $rowc['image'];
        
    }
}
if($_POST['update']=='update')
{
 //extract($_POST);

   $id=$_POST['id'];
   $nm=$_POST['name'];
   $add=$_POST['address'];
   $city=$_POST['city'];
   $mob=$_POST['mobile'];
   $email=$_POST['email'];
   $filename=$_POST['file'];
   //------------------------------------------------UPDATE QUERY-------------------------------------------

$uploadDir = 'images/';
        $filename = $uploadDir . $_FILES['file']['name']; 
		move_uploaded_file($_FILES['file']['tmp_name'], $filename);       

	

  $q = "UPDATE student SET id = '".$id."', 
name = '".$nm."',
address = '".$add."',
city = '".$city."',
mobile = '".$mob."',
email = '".$email."',
image ='".$filename."'
 WHERE id='".$id."'" ; 

 $result= mysql_query($q); 
 
 header("location:view.php");
/*if ($filename!='') {
            move_uploaded_file($_FILES['file']['tmp_name'], $filename);
        }
*/?>
<?php }?>


<div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="edit.php" enctype="multipart/form-data">
            <div class="form-row">
                <label>
                    <span>Name</span>
                    <input type="text" name="name" value="<?php echo $a2;?>">
                </label>
            </div>

			<div class="form-row">
                <label>
                    <span>Address</span>
                    <textarea name="address"><?php echo $a3;?> </textarea>
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>City</span>
                    <input type="text" name="city" value="<?php echo $a4;?>">
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>Mobile</span>
                    <input type="text" name="mobile" value="<?php echo $a5;?>">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" value="<?php echo $a6;?>">
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Image</span>
					
					<img src="../crudwithphp/<?php echo $a7; ?>"  height="100" width="100" 
			title="name" />
                    <input type="file" name="file" value="<?php echo $a7;?>">
                </label>
            </div>
			<div class="form-row">
			<tr>
                	<td><input type="hidden" name="id" value="<?php echo $a1;?>" /></td>
                </tr>
			</div>
            <div class="form-row">
				<center><input type="submit" value="update" name="update"></center>
			</div>
</form>
    </div>
	
	<?php //include('footer.php'); ?>