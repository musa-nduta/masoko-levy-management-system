<link rel="stylesheet" type="text/css" href="css/includes_styles.css">
<head>
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript" src="js/phone.js"></script>
<script type="text/javascript" src="js/number.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
</head>



<form class="form-horizontal" action="index.php?q=process-reg" method="POST" name="registration" 
      onsubmit="return ( validate() && dobMachine() && passMatch() )">
    
<fieldset>

<!-- Form Name -->
<legend>Market Registration Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">First Name</label>
  <div class="col-md-4">
  <input id="textinput" name="fname" type="text" class="form-control input-md" required="required">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mname">Middle Name</label>
  <div class="col-md-4">
  <input id="textinput" name="mname" type="text" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sname">SirName</label>
  <div class="col-md-4">
  <input id="textinput" name="sname" type="text" class="form-control input-md" required="required">

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



<div class="form-group">
  <label class="col-md-4 control-label" for="pobox">P.O BOX</label>
  <div class="col-md-4">
  <input id="pobox" name="pobox" type="text" class="form-control input-md" placeholder="eg: 2736, Dodoma" >

  </div>
</div>
    
    
<div class="form-group">
  <label class="col-md-4 control-label" for="nat_id">CITIZEN ID CARD NUMBER: </label>
  <div class="col-md-4">
  <input id="nat_id" name="nat_id" type="text" class="input-medium bfh-phone form-control input-md" placeholder="eg. 12544332-61677-98721-73" data-format="dddddddd-ddddd-ddddd-dd" required="required">

  </div>
</div>
    

<div class="form-group">
  <label class="col-md-4 control-label" for="box">E-Mail</label>
  <div class="col-md-4">
  <input id="email" name="email" type="email" class="form-control input-md" required="required">

  </div>
</div>



<!-- phone input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone Number</label>
  <div class="col-md-4">
  <input type="text" name="phone" id="phone" class="input-medium bfh-phone form-control input-md" data-format="+255-(ddd) ddd ddd" required="required">

  </div>
</div>

    <!-- phone input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="street">Street</label>
  <div class="col-md-4">
  <input type="text" name="street" id="street" class="form-control input-md" required="required">

  </div>
</div>

<!-- password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
  <input type="password" name="password" id="password" class="form-control input-md" required="required" onkeyup="passMatch()">

  </div>
</div>


<!-- Confirm password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confpassword">Confirm Password</label>
  <div class="col-md-4">
  <input type="password" name="confpassword" id="confpassword" class="form-control input-md" required="required" onkeyup="passMatch()">

  </div><div id="pass_error"></div>
</div>
    
    
    

<div class="form-group">
    <div class="col-md-offset-4">
        <div class="col-md-2">
            <input type="submit" name="register" class="btn btn-default" value="Register">
        </div>

        <div class="col-md-2">
            <input type="reset" class="btn btn-danger" name="reset" value="Reset">
        </div>
    </div>
    </div>

</fieldset>
</form>

