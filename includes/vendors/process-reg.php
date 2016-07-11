<link rel="stylesheet" type="text/css" href="css/includes_styles.css">

<?php

$min = 100;
$max = 9999;
$idno = rand($min, $max);

	$fname = $_POST['fname'];
	$nat_id = $_POST['nat_id'];
	$mname = $_POST['mname'];
	$sname = $_POST['sname'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];//Month of birth
	$mstatus = $_POST['mstatus'];
	$street = $_POST['street'];
	$pobox = $_POST['pobox'];//Post Office Box number
	$id_number = $idno;
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
        $confpassword = md5($_POST['confpassword']);
	$marketid = $_SESSION['market'];

/************ PULL MARKET DETAILS AND GET THE FULL, OCCUPIED AND FREE VARIABLES **********************/


$sql="SELECT * FROM market WHERE id='$marketid'";
$marketResult=mysql_query($sql);
$marketRow=mysql_fetch_assoc($marketResult);




/************ REGISTER NEW ENTREPRENEUR **********************/
if(isset($_POST['register'])){
    

    //$occupied = $marketRow['occupied'];
$capacity = $marketRow['capacity'];
$market_id = $marketRow['id'];
$reg_date = date("Y/m/d");



$cap_sql = "update market set occupied = 
            market.occupied+1, free = market.capacity-market.occupied where id = '$marketid'" or die(mysql_error());


//    Updating the free and occupied fields in the market details
    mysql_query($cap_sql);
    
    


//Generating Slot Number from random numbers, and determining the capacity of the market and the remained slots
$slot = rand(1, $capacity);

		$query = "insert into entrepreneurs (
											fname,
											mname,
											sname,
											gender,
											dob,
											mstatus,
											street,
											pobox,
											id_number,
											phone,
											email,
											password,
											market_id,
											slot,
                                            reg_date,
                                            nat_id
										)
								values(
										'$fname',
										'$mname',
										'$sname',
										'$gender',
										'$dob',
										'$mstatus',
										'$street',
										'$pobox',
										'$id_number',
										'$phone',
										'$email',
										'$password',
										'$market_id',
										'$slot',
                                        '$reg_date',
                                        '$nat_id'
									    )" or die(mysql_error());
if(mysql_query($query)){
?>

<div id="message">
    <br><?php	echo "Thank you for getting registered.";
	?><br><?php	echo "Your Pin Code is: ".$id_number.".";
	?><br><?php	//echo "You were allocated the market slot number: ".$slot.".";
	?><br><?php echo "Please note the above details for future use.";
	echo "You can login later after activation.";
		?></div><?php

	}
    else {
				echo "Did Not Register, <a href='index.php?q=viewm'>Try again.</a>";
			} 


}
?>



