<?php 

include('config/config.php');
include('header.php');

 ?>
  <ul>
 
		 <li class="act"><a href="index.php">Register</a></li>
        <li><a href="view.php">View</a></li>       
    </ul>

<?php 

if($_POST['submit']=='submit')
{
$id = '';
 $nm=$_POST['name'];	
 $add=$_POST['address'];
 $city=$_POST['city'];
 $mob=$_POST['mobile'];
 $email=$_POST['email'];
 $filename=$_POST['file'];

		$uploadDir = 'images/';
        $filename = $uploadDir . $_FILES['file']['name']; 
		move_uploaded_file($_FILES['file']['tmp_name'], $filename);
         
$insert="INSERT INTO student VALUES('','$nm','$add','$city','$mob','$email', '$filename')"; 

	$result= mysql_query($insert);

	
	}

?>

 
<div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="index.php" enctype="multipart/form-data">
			 
            <div class="form-title-row">
                <h1>Registration</h1>
			</div>

            <div class="form-row">
                <label>
                    <span>Name</span>
                    <input type="text" name="name" required>
                </label>
            </div>

			<div class="form-row">
                <label>
                    <span>Address</span>
                    <textarea name="address" required></textarea>
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>City</span>
                    <input type="text" name="city" required>
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>Mobile</span>
                    <input type="text" name="mobile" max ="10" required>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required>
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Image</span>
                    <input type="file" name="file" required>
                </label>
            </div>
            <div class="form-row">
            <center><input type="submit" value="submit" name="submit">   </center>        
			</div>
		</form>
</div>
	<?php include('footer.php'); ?>