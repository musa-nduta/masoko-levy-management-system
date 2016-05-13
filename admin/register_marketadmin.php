

<form name='register_marketadmin' method='POST' action="index.php?q=process-reg-ma" enctype="multipart/form-data">
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
	    <td>Gender</td>
	    <td>Male <input type='radio' name='gender' value='male'>
	    Female <input type='radio' name='gender' value='female'></td>
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
	    <td>Market</td>
	    <td>
			<select name="market" size="1">
	    		<?php

	    		/*****************************ADMIN DETAILS ******************/
                                                //$id = $_SESSION['id'];
						$sql="SELECT market_name FROM market";
 						$results=mysql_query($sql);
			 						if(mysql_num_rows($results)>0){
												while($rows=mysql_fetch_assoc($results)){	?>

													<option><?php	echo $rows['market_name']; ?></option>

										<?php

							}

						}

 		 ?>
 		 </select>




	    </td>
	 </tr>
	    <td>Username</td>
	    <td><input type='text' name='username'></td>
	 </tr>
	    <td>Password</td>
	    <td><input type='password' name='password'></td>
	 </tr>

	 <tr>
	    <td><input type='submit' name='submit' value='Register'></td>
	    <td><input type='reset' name='reset' value='reset'></td>
	 </tr>
 </table>
</form>
