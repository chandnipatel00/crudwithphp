<?php
include('config/config.php');
include('header.php');

$sel_user_list="select * from users";
$ex_query=mysql_query($sel_user_list); ?>
<div class="main-content">
<?php if(isset($_GET['msgdel']) && $_GET['msgdel']=='suc'){echo "User Entry Deleted Successfuly..";} 
if (isset($_GET['msgdel']) && $_GET['msgdel']=='error') { echo "Delete is not done..";  }?>
<table width="" border="1">
  <tr>
    <td>User id</td>
    <td>Full name</td>
    <td>Email Address</td>
    <td>Password</td>
    <td>Address</td>
    <td>Options</td>
    <td>Terms & Condtions</td>
    <td>Gender</td>
    <td>Status</td>
	<td colspan="2">Action</td>
  </tr>

<?php while($rows=mysql_fetch_array($ex_query))
{
?>

  <tr>
    <td><?php echo $rows[0]; ?></td>
    <td><?php echo $rows[1]; ?></td> 
	 <td><?php echo $rows[2]; ?></td>
     <td><?php echo $rows[3]; ?></td>
	 <td><?php echo $rows[5]; ?></td>
   <td><?php echo $rows[4]; ?></td>
	<td><?php echo $rows[6]; ?></td>
	<td><?php echo $rows[7]; ?></td>
    <td><?php echo $rows[8]; ?></td>
	    <td><a href="index.php?edit=yes&id=<?php echo $rows[0]; ?>">Edit</a></td>
		    <td><a href="pulldataofregistration.php?del=yes&id=<?php echo $rows[0]; ?>">Delete</a></td>
  </tr>
  <?php }?>
</table>
</div>
<?php
include('footer.php');
?>
