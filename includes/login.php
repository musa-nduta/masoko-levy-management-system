


<?php if (isset($_POST['submitted'])) {

		masoko_login($_POST['username'], $_POST['password']);

} else { ?>



    <div class="row" style="margin-top: 4em; ">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
		    <div class="well">
    		  <div class="row">
<!--    		    <h2 style="font-weight: bolder;">Login Here!</h2>-->
    		    <p style="margin-left:20px; font-size: 2em;">Log into the System or get registered</p>
    		  </div>



                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Pin Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" required>

                            </div>

                        </div>

                        <div class="col-lg-offset-6 col-md-offset-6">



                        <!--Erro message for login form-->
                        <p id="message">
                        &nbsp;
                        </p>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-3">
                                <button type="submit" name="submitted" class="btn btn-primary">
                                   <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>
                            </div>
                            
                            <div class="col-md-6">
                                <button type="reset" name="reset" class="btn btn-danger">
                                   <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
                                    <i class="fa fa-btn fa-sign-in"></i>Re-enter credentials
                                </button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!--<script type="text/javascript" src="js/login.js" ></script>-->
