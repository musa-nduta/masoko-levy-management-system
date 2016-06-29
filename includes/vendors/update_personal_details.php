<link rel="stylesheet" type="text/css" href="css/includes_styles.css" />

<head>
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript" src="js/phone.js"></script>
<script type="text/javascript" src="js/number.js"></script>
</head>


<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();


$id = $_SESSION['id'];
$sql="SELECT fname, mname, sname, gender, dob, mstatus, street, pobox, phone, email FROM entrepreneurs where id = '$id'";
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

?>


<h2>You can only change the information below, otherwise you should contact your Market supervisor</h2>

<hr style="height: 2px;
    								background-color:#555;
    								margin-top: 20px;
    								margin-bottom: 20px;
    								width: 75%;">



  <form class="form-horizontal" role="form" action="index.php?q=proc-update-pdetails" method="POST" name="updatepdetails" onsubmit="js/forms.js">

	<!-- Marital status -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="mstatus">Marital Status</label>
	  <div class="col-md-4">
	  <div class="radio">
	    <label for="radios-0">
	      <input type="radio" name="mstatus"  value="single" required="required">
	      Single
	    </label>
		</div>

	  <div class="radio">
	    <label for="radios-1">
	      <input type="radio" name="mstatus"  value="married">
	      Married
	    </label>
		</div>

	      <div class="radio">
	    <label for="radios-1">
	      <input type="radio" name="mstatus"  value="divorced">
	      Divorced
	    </label>
		</div>

	      <div class="radio">
	    <label for="radios-1">
	      <input type="radio" name="mstatus"  value="not-prefer">
	      Not Prefer to say
	    </label>
		</div>
	  </div>
	</div>



	<div class="form-group">
	  <label class="col-md-4 control-label" for="upd_pobox">P.O BOX</label>
	  <div class="col-md-4">
	  <input id="upd_pobox" name="upd_pobox" type="text" class="form-control input-md" required="required"  value="<?php echo $pobox; ?>">

	  </div>
	</div>

	<div class="form-group">
	  <label class="col-md-4 control-label" for="email">E-Mail</label>
	  <div class="col-md-4">
	  <input id="email" name="email" type="email" class="form-control input-md" value="<?php echo $email; ?>" required="">

	  </div>
	</div>



	<!-- phone input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="phone">Phone Number</label>
	  <div class="col-md-4">
	  <input type="text" name="phone" id="phone" class="input-medium bfh-phone form-control input-md" value="<?php echo $phone; ?>"data-format="+255-(ddd) ddd ddd" required="required">

	  </div>
	</div>

	    <!-- phone input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="street">Street</label>
	  <div class="col-md-4">
	  <input type="text" name="street" id="street" class="form-control input-md" value="<?php echo $street; ?>" required="required">

	  </div>
	</div>



<input class=btn-default type="submit" name="update" value="UPDATE">

</form>
