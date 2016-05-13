<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();


$id = $_SESSION['id'];
	
	$results = mysql_query("select market_id from market_admin where id = '".$id."'");
	
	$row_m_id=mysql_fetch_assoc($results);
	$mid = $row_m_id['market_id'];




$query = "select fname, sname, SUM(paid) as total, slot, paid FROM entrepreneurs where market_id = '".$mid."' GROUP BY fname";
 $result = mysql_query($query) or die("Did Not find any information");
 ?>
 <table align="center" width="100%" border="1"> 
 <tr><td>First Name</td>
		<td>Sir Name</td>
		<td>Slot</td>
		<td>Amount Paid</td></tr>
		
 <?php $newvalue=0;
 			$sumnewvalue =0;
 while($row = mysql_fetch_array($result)){ ?>
 
 	<tr><td><?php echo $row['fname']; ?></td>
 	<td><?php echo $row['sname']; ?></td>
 	<td><?php echo $row['slot']; ?></td>
 	<td><?php echo $row['paid']; ?></td></tr>
		
	<?php	 $newvalue= $row['paid'];
	       $sumnewvalue  = $sumnewvalue + $newvalue;
				
	?>


		
		
		<?php		} ?>
		<tr><td colspan="3">Total Amount:</td><td><?php echo $sumnewvalue; ?></td></tr>
</table>