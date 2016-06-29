<?php
    //A function to check if a user is login, otherwise they will be directed to the login page.
    checklogin();

    if (isset($_POST['pay'])) {


//SQL QUERIES TO INSERT PAYMENT DATA INTO THE DATABASE

    $payer_id = $_SESSION['id'];
    $pay_date = date("Y-m-d");
    $amount_paid = $_POST['amount'];
    $month_paid_for = $_POST['pay_month'];
    $year_paid_for = $_POST['pay_year'];
    $receipt_number = $_POST['receipt_number'];
    $receipt_file =upload('receipt',"images/masoko/");

        $payment_query = "INSERT INTO payments
                        (payer_id, pay_date, amount_paid, receipt_number, receipt_file, month_paid_for, year_paid_for)
                        VALUES ('$payer_id','$pay_date', '$amount_paid', '$receipt_number',  '$receipt_file', $month_paid_for, $year_paid_for)";

                if(mysql_query($payment_query)){
                       header("Location: index.php?q=afterpay");
                }else {
                        echo "<h2>There is a problem, please contact you market supervisor. </h2>";
                }
        }


//QUERIES TO RETRIEVE PAYMENT INFORMATION FROM THE DATABASE TO BE DISPLAYED BELOW THE PAYMENT FORM.

$get_payments = "SELECT payments.payer_id, entrepreneurs.id, payments.pay_date, payments.amount_paid
                                   FROM payments, entrepreneurs
                                WHERE   payments.payer_id = 'entrepreneurs.id'";
                                ?>




<div class="well">
  <div class="jumbotron">
    <h1 style="font-weight: bolder;">Pay Here!</h1>
    <p style="margin-left:20px; font-size: 2em;">Please be careful when filling the monthly payment form</p>
  </div>


<form class="form-horizontal" name="payment" role="form" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
          <label class="col-md-8 control-label" for="amount">Amount: 200 per day = 6000 per month</label>
        <div class="col-md-6">
            <input type="hidden" class="form-control" name="amount" value="6000" placeholder="Amount in Tshs" data-validation="[NOTEMPTY]">
        </div>
    </div>

    <div class="form-group">
          <label class="col-md-4 control-label" for="receipt_number">Receipt Number</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="receipt_number" placeholder="Enter Receipt Number" data-validation="[NOTEMPTY]">
        </div>
    </div>


    <div class="form-group">
          <label class="col-md-4 control-label" for="receipt">Upload File</label>
        <div class="col-md-6">
              <input type="file" accept="image/*" capture="camera" name="receipt" >
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="receipt"></label>
    </div>

          <div class="form-group">
                <label class="col-md-4 control-label" for="pay_month">Select month to pay for: </label>
                <select class="col-md-6" name="pay_month">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                </select>
          </div>


          <div class="form-group">
                <label class="col-md-4 control-label" for="pay_year">Year: </label>
                <select class="col-md-6" name="pay_year">

<!-- Generating number of years -->
                  <?php $year=2016;
                        while($year>=2016 && $year<=2100)
                        {  ?>
                    <option>
                            <?php echo $year; ?>
                    </option>

                  <?php
                          $year++;
                  }?>

                </select>
          </div>
<!-- End of Year generation -->

<div class="form-group">
      <label class="col-md-6 control-label" for="time">
            Date of Payment:
            <?php echo date("d-m-Y") . "<br>"; ?>
          </label>
  </div>


  <div class="form-group">
      <div class="col-md-6 col-md-offset-4">
          <button type="submit" name="pay" class="btn btn-primary">
              <i class="fa fa-btn fa-sign-in"></i>Click to Pay
          </button>
      </div>
  </div>
  </form>

</div>


