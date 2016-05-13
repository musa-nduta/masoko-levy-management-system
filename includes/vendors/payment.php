<?php
    //A function to check if a user is login, otherwise they will be directed to the login page.
    checklogin();

    if (isset($_POST['pay'])) {


//SQL QUERIES TO INSERT PAYMENT DATA INTO THE DATABASE

    $payer_id = $_SESSION['id'];
    $pay_date = date("Y-m-d");
    $amount_paid = $_POST['amount'];
    $receipt_number = $_POST['receipt_number'];
    $receipt_file =upload('receipt',"images/masoko/");

        $payment_query = "INSERT INTO payments
                                                                    (payer_id, pay_date, amount_paid, receipt_number, receipt_file)
                                            VALUES ('$payer_id','$pay_date', '$amount_paid', '$receipt_number',  '$receipt_file')";

                if(mysql_query($payment_query)){
                        echo "<h2>Thank you for paying a Levy. </h2>";
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
    <h1 style="font-style: italic; color: #0aa; font-weight: bolder;">Pay Here!</h1>
    <p style="margin-left:20px; color: #f07; font-size: 2em;">Please be careful when filling the form</p>
  </div>


<form class="form-horizontal" name="payment" role="form" action="index.php?q=payments" method="POST" enctype="multipart/form-data">
    <div class="form-group">
          <label class="col-md-4 control-label" for="amount">Amount</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="amount" placeholder="Amount in Tshs" data-validation="[NOTEMPTY]">
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
                <label class="col-md-4 control-label" for="pay_month">Payments for the month of: </label>
                <select class="col-md-6" name="pay_month">
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                </select>
          </div>


          <div class="form-group">
                <label class="col-md-4 control-label" for="pay_year">Year: </label>
                <select class="col-md-6" name="pay_year">

<!-- Generating number of years -->
                  <?php $year = 2000;
                        while($year<=2020 && $year>=2000 )
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

<div class="row">
        <table class="table table-striped">
        <tr>
                <th>Payment Number</th>
                <th>Amount Paid</th>
                <th>Receipt number</th>
                <th>Receipt File</th>
        </rt>

        <?php
        // $results = mysql_query($get_payments);
        if(mysql_num_rows($results)>0){
                while($payment = mysql_fetch_assoc($results)){
                        $transaction_number = $payment['pay_date'];
                        $amount_paid = $payment['amount_paid'];
                        $receipt_number = $payment['receipt_number'];
                        $receipt_file = $payment['received_file']; ?>


                        <tr>
                        <td><?php echo $transaction_number; ?></td>
                        <td><?php echo $amount_paid; ?></td>
                        <td><?php echo $receipt_number; ?></td>
                        <td><?php echo $receipt_file; ?></td>
                </tr>


        <?php        }

        }
        else {
                echo mysql_error();
        }

?></table>
</div>
