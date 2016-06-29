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
                       require("includes/vendors/after-pay.php");
                }else {
                        echo "<h2>There is a problem, please contact you market supervisor. </h2>";
                }
        }


//QUERIES TO RETRIEVE PAYMENT INFORMATION FROM THE DATABASE TO BE DISPLAYED BELOW THE PAYMENT FORM.

$get_payments = "SELECT payments.payer_id, entrepreneurs.id, payments.pay_date, payments.amount_paid
                                   FROM payments, entrepreneurs
                                WHERE   payments.payer_id = 'entrepreneurs.id'";
                                ?>
