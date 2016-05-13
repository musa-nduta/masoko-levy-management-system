<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();


$id = intval($_GET['id']);

 $sql="SELECT id, fname, mname, sname, gender, dob, mstatus, street, pobox, phone, email, market_id, slot, paid FROM entrepreneurs where id = '$id'";
 $results=mysql_query($sql);
 

 
?>
<h1 id="menu-header">Personal Details - <?php echo(date("Y-m-d",time())); ?></h1>
<div id="personal">
<table>
  <?php

   if(mysql_num_rows($results)>0)
      {      	
        //display markets
		while($rows=mysql_fetch_assoc($results))
		  { 
		  
			if(isset($_POST['submitpay'])){
				 $new = $_POST['pay'];
				 $curr = $rows['paid'];
				 $current = $new + $curr;
				 $payment = "update entrepreneurs set paid = '$current' where id = '$id'";				
				mysql_query($payment);
				header("location: index.php?q=entlist");
				
				}		  
		  ?>
		  
		  	<table class="table table-stiped table-hover">
		  <tr><td><?php echo "First Name: "; ?></td>				<td><?php echo $rows['fname']; ?></td></tr>
		  <tr><td><?php	echo "Middle Name: "; ?></td>			<td><?php echo $rows['mname']; ?></td></tr>
		  <tr><td><?php	echo "Sir Name: "; ?></td>				<td><?php echo $rows['sname']; ?></td></tr>
		  <tr><td><?php	echo "Gender: "; ?></td>				<td><?php echo $rows['gender']; ?></td></tr>
		  <tr><td><?php	echo "Date of Birth: "; ?></td>		<td><?php echo $rows['dob']; ?></td></tr>
		  <tr><input type="text" id="mstatus" value='<td><?php echo "Marital Status: "; ?>'</td>		<td><?php echo $rows['mstatus']; ?></td></tr>
		  <tr><td><?php	echo "Street: "; ?></td>				<td><?php echo $rows['street']; ?></td></tr>
		  <tr><td><?php	echo "P.O. BOX: "; ?></td>				<td><?php echo $rows['pobox']; ?></td></tr>
		  <tr><td><?php	echo "Phone: "; ?></td>					<td><?php echo $rows['phone']; ?></td></tr>
		  <tr><td><?php	echo "Email: "; ?></td>					<td><?php echo $rows['email']; ?></td></tr>
		  <tr><td><?php	echo "Market Registered into: "; ?></td>
		  
		  <td><?php 
		  
		  $query=mysql_query("select name from market where id = '".$rows['market_id']."'");
		  		      	
        //display markets
		$name_row=mysql_fetch_assoc($query);
		
		echo $name_row['name'];
		  
		  
		  
		  
		  
		  
		  ?></td></tr>
		  <tr><td><?php	echo "Market Slot Number: "; ?></td><td><?php echo $rows['slot']; ?></td></tr>
		  <tr><td><?php	echo "Amount Paid so far (Tshs): "; ?></td><td><?php echo $rows['paid']; ?></td></tr>
			<?php if($_SESSION['ma']){		?>
			
			<form name="payment" method="POST" action="index.php?q=entpdetails&id=<?php echo $id ?>">  
		  <tr><td>Enter amount to pay: <input type="text" name="pay" size="9"> <input type="submit" name="submitpay" value="PAY"></td>
		  <td>
		  
		   <input type='submit' name='delete' value='Delete Entrepreneur' />	
			<?php	if(isset($_POST['delete'])){
					if(mysql_query("delete from entrepreneurs where id='$id'")){
								echo "<h3>success</h3>";
								header("Location: index.php?q=entlist");						
						}
						
						else { echo "<h3>failed delete</h3>";}
					
					}				
				
				else { echo "";}			  
		  
		  
		  
		  
		 	 }  ?>
		 	
		 	</td></tr>
		  		  </form>
		  </table>
		  
		  
		  
		  <?php

		  
		  
		}
		
		}		  
		  	
   ?>
   
  

</div>
