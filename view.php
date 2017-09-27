<?php
include('header.php');
include('config/config.php');
?>

		 
		 <?php
		 if(isset($_POST['sea']))
{

	//var_dump($_POST);
		$a=$_POST['some-name'];
		//echo $a;
		
		 $res=mysql_query("Select * from student WHERE name like '%".$a."%' or city like '%".$a."%'");
		 //mysql_query($res);
		// echo "Select * from student WHERE name like '%".$a."%' or city like '%".$a."%'";
}
else
{
	
	$res = mysql_query("select * from student");
}	
	?>
		 
		 <form method="post">

    <ul>
        <li class="act"><a href="index.php">Register</a></li>
        <li><a href="view.php">View</a></li>
        <li><input type="submit" value="Search" name="sea" class="ser"/></li>
        <li><input type="text" name="some-name" class="serinput"/> </li>
                
        
    </ul>

</form>

<?php
//$res = mysql_query("select * from student");
?>

<table align="center" width="80%">
    
    <tr>
		<th align="center" > <center>Id</center></th>
         <th align="center" > <center>Name</center></th>
        <th align="center" ><center>Address</center></th>
         <th align="center" ><center>City</center></th>
          <th align="center" ><center>Mobile</center></th>
          <th align="center" ><center>Email</center></th>
           <th align="center" ><center>Image</center></th>
    <th align="center" colspan="2" ><center>Operations</center> </td>    </tr>

    <?php while ($x = mysql_fetch_array($res)) { ?>
        <tr>
            <td align="center" ><?php echo $x['id']; ?></td>
            <td align="center" ><?php echo $x['name']; ?></td>
            <td align="center" ><?php echo $x['address']; ?></td>
			<td align="center" ><?php echo $x['city']; ?></td>
			<td align="center" ><?php echo $x['mobile']; ?></td>
			<td align="center" ><?php echo $x['email']; ?></td>
			<td align="center" > <img src="images/<?php echo $x['image']; ?>"  height="100" width="100" 
			title="name" /></td>
            
            <td align="center" ><a href="edit.php?flag=edit&&id=<?php echo $x['id']; ?>">Edit</a></td>
            <td align="left" ><a href="delete.php?flag=delete&&id=<?php echo $x['id']; ?>">Delete</a></td>
        </tr>
    <?php } ?>
	</table>
</td>
</tr>
</table>



<!-- end of main content -->







<?php

//include('footer.php');
?>
		