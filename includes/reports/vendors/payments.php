
<?php checklogin(); ?>
<script type="text/javascript" src="js/receipt_modals.js"></script>

<div class="row">
    
    <h1><b>Payment Records</b></h1>
        <table class="table table-bordered table-striped">
        <tr>
                <th>Payment Date</th>
                <th>Amount Paid</th>
                <th>Receipt number</th>
<!--                <th>Receipt File</th>-->
        </tr>

<?php
   
        $id = $_GET['id'];
            
    $payment_report = "SELECT payer_id, 
                              pay_date, 
                              amount_paid,
                              receipt_number, 
                              receipt_file
                        FROM payments
                        WHERE payer_id = '$id'";
    
      
        $report_results = mysql_query($payment_report);
        
            if(mysql_num_rows($report_results)>0){
                while($payment = mysql_fetch_assoc($report_results)){
                        $transaction_number = $payment['pay_date'];
                        $amount_paid = $payment['amount_paid'];
                        $receipt_number = $payment['receipt_number'];
                        $receipt_file = $payment['receipt_file'];
                         ?>


                        <tr>
                        <td><?php echo $transaction_number; ?></td>
                        <td><?php echo $amount_paid; ?></td>
                        <td><?php echo $receipt_number; ?></td>
                        
                            
                                
                            <!-- RECEIPT IMAGE MODALS
                            
                        <td>
                            
                         <!-- Trigger the Modal -->
<!--                                <img id="receipt_image" src="images/masoko/<?php //echo $receipt_file; ?>" alt="Receipt for <?php //echo $payment['pay_date']; ?>" width="200" height="80">-->

                                <!-- The Modal -->
<!--                                <div id="receipt_modal" class="modal">-->

                            

                                  <!-- Modal Content (The Image) -->
<!--                                  <img class="modal-content" id="img01">-->

                                  <!-- Modal Caption (Image Text) -->
<!--                                  <div id="caption"></div>-->
<!--                                </div> -->
                    
<!--                        </td>-->
                        </tr>
            
           


        <?php  }

        }
        else {
                echo mysql_error();
        }

?></table>
    
  
</div>