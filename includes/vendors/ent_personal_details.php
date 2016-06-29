<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();


            $id = intval($_GET['id']);

            $total_paid = "SELECT SUM(amount_paid) as total
                            FROM payments
                            WHERE payer_id = '$id'" or die(mysql_error);
            $total_rows = mysql_fetch_assoc(mysql_query($total_paid));
            $paid = $total_rows['total'];

            

             $sql="SELECT 
                        id, fname, mname, sname, gender, dob, mstatus, street, pobox, phone, email, market_id, slot, reg_date
                   FROM 
                        entrepreneurs 
                    WHERE id = '$id'";

             $results=mysql_query($sql);



//Counting months
$dates = "SELECT fname , TIMESTAMPDIFF( YEAR, reg_date, now() ) as _year , TIMESTAMPDIFF( MONTH, reg_date, now() ) % 12 as _month , FLOOR( TIMESTAMPDIFF( DAY, reg_date, now() ) % 30.4375 ) as _day FROM entrepreneurs where id='$id'";


$date_results = mysql_query($dates);

$date_query_assoc = mysql_fetch_assoc($date_results);

$year = $date_query_assoc['_year'];
$month = $date_query_assoc['_month'];
$day = $date_query_assoc['_day'];
?>


<h1 id="menu-header">Vendor's details</h1>
<div id="personal">
  <?php

   if(mysql_num_rows($results)>0)
      {      	
        //display markets
		while($rows=mysql_fetch_assoc($results))
		  { ?>
		  
<table class="table table-stiped table-bordered">
		  <tr><td><?php echo "First Name: "; ?></td>				<td><?php echo $rows['fname']; ?></td></tr>
		  <tr><td><?php	echo "Middle Name: "; ?></td>			<td><?php echo $rows['mname']; ?></td></tr>
		  <tr><td><?php	echo "Sir Name: "; ?></td>				<td><?php echo $rows['sname']; ?></td></tr>
		  <tr><td><?php	echo "Gender: "; ?></td>				<td><?php echo $rows['gender']; ?></td></tr>
		  <tr><td><?php	echo "Date of Birth: "; ?></td>		<td><?php echo $rows['dob']; ?></td></tr>
		  <tr><td><?php	echo "Date of Registration: "; ?></td>		<td><?php echo $rows['reg_date']; ?></td></tr>
		  <tr><td><?php	echo "Time in the market: "; ?></td>		
              <td>
                  <?php 
                        echo $year." Year(s), ".$month." Month(s) and ".$day." Day(s).";
                  ?>
              </td>
          </tr>
		  <tr><td><?php	echo "Marital Status: "; ?></td>		<td><?php echo $rows['mstatus']; ?></td></tr>
		  <tr><td><?php	echo "Street: "; ?></td>				<td><?php echo $rows['street']; ?></td></tr>
		  <tr><td><?php	echo "P.O. BOX: "; ?></td>				<td><?php echo $rows['pobox']; ?></td></tr>
		  <tr><td><?php	echo "Phone: "; ?></td>					<td><?php echo $rows['phone']; ?></td></tr>
		  <tr><td><?php	echo "Email: "; ?></td>					<td><?php echo $rows['email']; ?></td></tr>
		  <tr><td><?php	echo "Market Registered into: "; ?></td>
		  
		  <td><?php 
		  
		      $query=mysql_query("select market_name from market where id = '".$rows['market_id']."'");
		  		      	
                //display markets
                    $name_row=mysql_fetch_assoc($query);
		              echo $name_row['market_name'];
		  ?></td></tr>
		  <tr><td><?php	echo "Market Slot Number: "; ?></td><td><?php echo $rows['slot']; ?></td></tr>
		  <tr><td><?php	echo "Amount Paid so far (Tshs): "; ?></td>
              <td><?php echo $paid ?> 
                  <a href="index.php?q=vendor-payment-report&id=<?php echo $id; ?>">
                      <h4>Click here for payment Records.</h4>
                  </a></td>
          </tr>
			
    
    <?php }} ?>
			     
    </table>

</div>
