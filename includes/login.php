


<?php if (isset($_POST['submitted'])) {

		masoko_login($_POST['username'], $_POST['password']);

} else { ?>



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
		    <div class="well">
    		  <div class="jumbotron">
    		    <h1 style="font-style: italic; color: #0aa; font-weight: bolder;">Login Here!</h1>
    		    <p style="margin-left:20px; color: #f07; font-size: 2em;">Log into the System or get registered</p>
    		  </div>



                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" data-validation="[NOTEMPTY]">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" data-validation="[NOTEMPTY]">

                            </div>

                        </div>

                        <div class="col-lg-offset-6 col-md-offset-6">



                        <!--Erro message for login form-->
                        <p id="message">
                        &nbsp;
                        </p>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" name="submitted" class="btn btn-primary">
                                   <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="index.php?q=passwd_reset">Forgot Your Password?</a>
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
