<?php

if(isset($_POST['submit']))
{
		$reg="SELECT id FROM market where market_name = '".$_POST['market']."'";
 						$regresults=mysql_query($reg);
 						if(mysql_num_rows($regresults)>0)
      					{
									$regrows=mysql_fetch_assoc($regresults);
											$market_id = $regrows['id'];
										}


  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $mstatus=$_POST['mstatus'];
  $username=$_POST['username'];
  $password=md5($_POST['password']);


  //insert in the table

  $sql="INSERT INTO market_admin(fname,lname,gender,dob,mstatus, market_id, username, password)
  			VALUES ('$fname','$lname','$gender','$dob','$mstatus', '$market_id', '$username','$password')";
  if(mysql_query($sql))
  {
   echo "Successfully registered";
		}

			else {
				echo "Not Registered, Try again.";
			}
}
?>
