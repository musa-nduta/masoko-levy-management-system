<link rel="stylesheet" type="text/css" href="css/includes_styles.css">

<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();


$id_number = $_SESSION['id'];
$sql="SELECT fname, mname, sname, gender, dob, mstatus, nationality, region, district,
				street, pobox, phone, email FROM entrepreneurs where id_number = '$id_number'";
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



	if(isset($_POST['update'])){

		$mstatus = $_POST['mstatus'];
		$district = $_POST['district'];
		$street = $rows['street'];
		$pobox = $rows['pobox'];
		$phone = $rows['phone'];
		$email = $rows['email'];


		$query="UDPATE entrepreneurs SET
		 		mstatus = '$mstatus', nationality = '$nationality',
		 		district = '$district', street = '$street',
		 		pobox = '$pobox', phone = '$phone', email = '$email'  where id_number = '$id_number'";

?>
<div id="message"><?php
	if(mysql_query($query)){
		echo "Details were updated successfully";
		}

			else {
				echo "Something went wrong, please try again";
			}
	?></div><?php

		}
?>
