<?php
    //A function to check if a user is login, otherwise they will be directed to the login page.
    checklogin();


$id = $_SESSION['id'];
$sql="SELECT fname, mname, sname, gender, dob, mstatus,
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
		  			$street = $rows['street'];
		  			$pobox = $rows['pobox'];
		  			$phone = $rows['phone'];
		  			$email = $rows['email'];

		}
	}


	if(isset($_POST['update'])){


		  			$street_upd = $_POST['street'];
		  			$pobox_upd = $_POST['pobox'];
		  			$phone_upd = $_POST['phone'];
		  			$email_upd = $_POST['email'];
		  			$mstatus_upd = $_POST['mstatus'];

		          $query="UPDATE entrepreneurs
                              set
                                    street = '$street_upd',
                                    pobox = '$pobox_upd',
                                    phone = '$phone_upd',
                                    email = '$email_upd',
                                    mstatus = '$mstatus_upd'
                        WHERE
                                    entrepreneurs.id = '$id'";

?>


<div id="message">
  <?php
              	if(mysql_query($query))
                {
                    
                      header("Location:index.php?q=pdetails");
              		}

              			else
                    {
              				echo "Something went wrong, please try again";
              			}
              	?>
    </div><?php

}
?>
