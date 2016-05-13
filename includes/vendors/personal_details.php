<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();

//User Id as a session
$id = $_SESSION['id'];


//Selecting the information from the database to be displayed in the profile
 $sql="SELECT fname, mname, sname, gender, dob, mstatus,	street, pobox, phone, email, market_id, slot, paid
 				FROM entrepreneurs where id = '$id'";


//execute query
$results=mysql_query($sql);
?>

    <!-- Tabs Headers -->
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#details" data-toggle="tab">Personal Details</a></li>
        <li><a href="#password" data-toggle="tab">Change Password</a></li>
        <li><a href="#deactivate" data-toggle="tab">Deactivate Account</a></li>
    </ul>

    <!--Tab Contents-->
    <div class="tab-content">
        <div class="tab-pane fade in active" style="margin-top: 2em" id="details">

            <!--        Personal Details tab content in a table-->
            <table class="table table-bordered table-hover">
                <h1 id="menu-header">My Personal details</h1>

                <form name='del-ent' action='' method='POST'>
                    <?php

                   if(mysql_num_rows($results)>0)
                      {
                        //display markets
                        while($rows=mysql_fetch_assoc($results))
                          { ?>

                        <tr>
                            <td>
                                <?php echo "First Name: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['fname']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php	echo "Middle Name: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['mname']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php	echo "Sir Name: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['sname']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php	echo "Gender: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['gender']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php	echo "Date of Birth: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['dob']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php	echo "Marital Status: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['mstatus']; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <?php	echo "Street: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['street']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php	echo "P.O. BOX: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['pobox']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php	echo "Phone: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['phone']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php	echo "Email: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['email']; ?>
                            </td>
                        </tr>


                        <!-- Retrieving a market name-->
                        <tr>
                            <td>
                                <?php	echo "Market Registered into: "; ?>
                            </td>
                            <td>
                                <?php
                                        $market_name_query=mysql_query("SELECT market_name
                                                                        FROM market
                                                                        WHERE id = '".$rows['market_id']."'");

                                        $name_row=mysql_fetch_assoc($market_name_query);
                                        echo $name_row['market_name'];
                                ?>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <?php	echo "Market Slot Number: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['slot']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php	echo "Amount Paid so far: "; ?>
                            </td>
                            <td>
                                <?php echo $rows['paid']; ?>
                            </td>
                        </tr>




            </table>
            </form>


        </div>

        <div class="tab-pane fade in" style="margin-top: 3em" id="password">


            <form class="form-horizontal" role="form" action="index.php?q=changePass" method="POST">
                <div class="form-group">
                    <label class="col-md-4 control-label">New Password: </label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password" data-validation="[NOTEMPTY]">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="conf_password" data-validation="[NOTEMPTY]">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" name="submitted" class="btn btn-primary" onclick="changePassword();">
                            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                            <i class="fa fa-btn fa-sign-in"></i>Change Password
                        </button>
                    </div>
                </div>

        </div>
            </form>

        <div class="tab-pane fade in" style="margin-top: 2em" id="deactivate">

            <div class="alert alert-danger">
                <div class="glyphicon glyphicon-alert"></div>
                <strong>You should be careful!</strong>
                <p>If you deactivate your account you wont be able to login into the Masoko Levy Management System</p>
            </div>

            <form name="activate" role="form" action="index.php?q=account" method="POST">
                <input type="checkbox" name="agreed">
                <strong>I understand, let me Deactivate my Account. </strong>
                <br>
                <br>


                <input type="submit" name="submit">


            </form>

        </div>
    </div>

    <?php
          }
		}

   ?>
