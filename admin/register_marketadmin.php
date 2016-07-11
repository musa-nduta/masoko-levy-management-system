

<h1><strong>Register New Market Supervisor</strong></h1>

<form name='register_marketadmin' class="form-horizontal" method='POST' action="index.php?q=process-reg-ma" enctype="multipart/form-data">


    
<!-- password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">First Name</label>
  <div class="col-md-4">
  <input type="text" name="fname" id="fname" class="form-control input-md" required="required">

  </div>
</div>
    
<!-- password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Last Name</label>
  <div class="col-md-4">
  <input type="text" name="lname" id="lname" class="form-control input-md" required="required" >

  </div>
</div> 
    
  
<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="gender" id="gender" value="male" required>
      Male
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="gender" id="gender" value="female">
      Female
    </label>
	</div>
  </div>
</div>

    
<!-- Date input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Date of Birth</label>
  <div class="col-md-4">
  <input id="dob" name="dob" type="date" class="form-control input-md" required="required" placeholder="mm/dd/YYYY" onblur="dobMachine()"><div id="age_error"></div>
  </div>
</div>
    
    
    <!-- Marital status -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Marital Status</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="mstatus" id="radios-0" value="single" required>
      Single
    </label>
	</div>

  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="mstatus" id="radios-1" value="married">
      Married
    </label>
	</div>

      <div class="radio" >
    <label for="radios-1">
      <input type="radio" name="mstatus" id="radios-1" value="divorced">
      Divorced
    </label>
	</div>

      <div class="radio">
    <label for="radios-1">
      <input type="radio" name="mstatus" id="radios-1" value="not-prefer">
      Not Prefer to say
    </label>
	</div>
  </div>
</div>
    
<!-- Market-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Market</label>
  <div class="col-md-4">
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
  </div>
</div>    
    


<!-- password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>
  <div class="col-md-4">
  <input type="text" name="username" id="username" class="form-control input-md" required="required">

  </div>
</div>


<!-- Confirm password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
  <input type="password" name="password" id="password" class="form-control input-md" required="required" onkeyup="passMatch()">

  </div><div id="pass_error"></div>
</div>

<div class="form-group">
    <div class="col-md-offset-4">
        <div class="col-md-2">
            <input type="submit" name="submit" class="btn btn-default" value="Register">
        </div>

        <div class="col-md-2">
            <input type="reset" class="btn btn-danger" name="reset" value="Reset">
        </div>
    </div>
    </div> 
    
    
    

</form>
