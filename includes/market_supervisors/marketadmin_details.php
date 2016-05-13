<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();



$id=$_GET['id'];
$sql="SELECT * FROM market_admin WHERE id='$id'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
?>

<table border='3' width='500px'>
<tr>

<td>Name</td>
<td><?php echo $row['fname'] ."&nbsp;" .$row['lname'];?></td>
</tr>

<tr>
<td>Sex</td>
<td><?php echo $row['sex'];?></td>
</tr>

<tr>
<td>Date of Birth</td>
<td><?php echo $row['dob'];?></td>
</tr>

<tr>
<td>Marital status</td>
<td><?php echo $row['mstatus'];?></td>
</tr>

<tr>
<td>Address</td>
<td><?php echo $row['address'];?></td>
</tr>

<tr>
<td>Market</td>
<td>&nbsp;</td>
</tr>

</table>
