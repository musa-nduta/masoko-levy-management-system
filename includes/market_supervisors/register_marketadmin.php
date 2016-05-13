<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();


if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $sex=$_POST['sex'];
  $dob=$_POST['dob'];
  $mstatus=$_POST['mstatus'];
  $address=$_POST['address'];
  $username=$_POST['username'];
  $password=md5($_POST['password']);


  //insert in the table

  $sql="INSERT INTO market_admin(fname,lname,sex,dob,mstatus,address,username,password) VALUES ('$fname','$lname','$sex','$dob','$mstatus','$address','$username','$password')";
  if(mysql_query($sql))
  {
    echo "Record saved";
  }else
    {
	  echo "record not saved";
	}
}
?>

<form name='register_marketadmin' method='POST' action='' enctype="multipart/form-data">
 <table>
     <th>
	    Register New Market Supervisor
	 </th>
	 <tr>
	    <td>First Name</td>
	    <td><input type='text' name='fname'></td>
	 </tr>
	    <td>Last Name</td>
	    <td><input type='text' name='lname'></td>
	 </tr>
	 <tr>
	    <td>Gender: </td>
	    <td><input type='radio' name='sex' value='male'>Male
	    <input type='radio' name='sex' value='female'>Female</td>
	 </tr>
	 <tr>
	    <td>Date Of Birth</td>
	    <td><input type='text' name='dob'></td>
	 </tr>
	 <tr>
	    <td>marital status</td>
	    <td><input type='radio' name='mstatus' value='single'>Single
	    <input type='radio' name='mstatus' value='Married'>Married</td>
	 </tr>
	 <tr>
	    <td>Address</td>
	    <td><input type='text' name='address'></td>
	 </tr>
	 <tr><td>Market</td><td>
	 <select name="market" size="1">
	    		<?php

	    		/*****************************ADMIN DETAILS ******************/
					/*	$id = $_SESSION['id'];
						$sql="SELECT * FROM district_admin where id = '".$id."'";
 						$results=mysql_query($sql);
 						$rows=mysql_fetch_assoc($results);

									$sql1="SELECT name FROM market where district_id = '".$rows['district_id']."'";
			 						$results1=mysql_query($sql1);
			 						if(mysql_num_rows($results1)>0)
			      					{
												while($rows1=mysql_fetch_assoc($results1)){	?>

													<option><?php	echo $rows1['name']; ?></option>

										<?php

							}

						}

 		 ?>*/
 		 </select>










	    <td>Username</td>
	    <td><input type='text' name='username'></td>
	 </tr>
	    <td>Password</td>
	    <td><input type='password' name='password'></td>
	 </tr>
	 <tr>
	    <td><input type='submit' name='submit' value='Add'></td>
	 </tr>
 </table>
</form>
