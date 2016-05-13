<link rel="stylesheet" type="text/css" href="css/includes_styles.css" />
	
<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();


$id = $_SESSION['id'];
$sql="SELECT fname, mname, sname, gender, dob, mstatus, nationality, region, district,
				street, pobox, phone, email FROM entrepreneurs where id = '$id'";
				$results=mysql_query($sql);


   if(mysql_num_rows($results)>0)
      {      	
        //display markets
		while($rows=mysql_fetch_assoc($results))
		  { 		 
		 			$fname = $rows['fname'];
		  			$mname = $rows['mname'];
		  			$sname = $rows['sname']; 
		  			$gender = $rows['gender']; 
		 			$dob = $rows['dob']; 
		 			$mstatus = $rows['mstatus'];
		  			$nationality = $rows['nationality']; 
		  			$region = $rows['region']; 
		  			$district = $rows['district']; 
		  			$street = $rows['street'];
		  			$pobox = $rows['pobox'];
		  			$phone = $rows['phone'];
		  			$email = $rows['email'];
					
		}
	}	

?>

<div id="personal">	

<form action="" method="POST" name="updatepay" onsubmit="js/forms.js">
<table align="center">
<tr align="center"><td colspan="2"><h1 id="menu-header">Edit Details.</h1></tr>

<tr><td>
	Enter amount:</td><td>
	<input type="text" name="amount" id="amount" ></td></tr><tr><td>
	<tr><td>
<input type="submit" name="update" value="PAY"></td></tr>
</table>
</form>

</div>
