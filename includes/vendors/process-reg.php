<link rel="stylesheet" type="text/css" href="css/includes_styles.css">

<?php

$min = 100;
$max = 9999;
$idno = rand($min, $max);

	$fname = $_POST['fname'];
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


$occupied = $marketRow['occupied'];
$free = $marketRow['free'];
$capacity = $marketRow['capacity'];
$market_id = $marketRow['id'];
$occupied = $occupied+1;
$free = $capacity - $occupied;



$cap_sql = "update market set occupied = '$occupied', free = '$free' where id = '$marketid'";



/************ REGISTER NEW ENTREPRENEUR **********************/
if(isset($_POST['register'])){


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
											slot
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
										'$slot'
									    )";
if(mysql_query($query)){

$insert = mysql_query($query);
$capacity = mysql_query($cap_sql);
?>
<div id="message"><?php
	if( $insert && $capacity){
	?><br><?php	echo "Thank you for getting registered.";
	?><br><?php	echo "Your Username is: ".$id_number.".";
	?><br><?php	//echo "You were allocated the market slot number: ".$slot.".";
	?><br><?php echo "Please note the above details for future use.";
	echo "You can login later after activation.";
		}

			else {
				echo "Did Not Register, Try again.";
			} ?>
		</div><?php

	}}
?>
