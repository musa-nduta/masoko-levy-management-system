<?php
checklogin();

//Hii ni function ya kuonesha tarehe na timezones tu, ukiitoa tarehe zinasumbua
date_default_timezone_set("Africa/Dar_es_salaam");  




//Database connections and database selections, Kumbuka kubadili password/username
$con = mysql_connect("localhost", "root", "");	
mysql_select_db("masoko", $con);

?>

<!--A query to return a month of payment-->
<form class="form-horizontal" action="" method="POST" name="month_report" >
    
    <!-- Date input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date_from">From:</label>
  <div class="col-md-4">
  <input id="date_from" name="date_from" type="date" class="form-control input-md" required="required" placeholder="mm/dd/YYYY" >
  </div>
</div>

    
    
<div class="form-group">
  <label class="col-md-4 control-label" for="date_to">To:</label>
  <div class="col-md-4">
  <input id="date_to" name="date_to" type="date" class="form-control input-md" required="required" placeholder="mm/dd/YYYY">
  </div>
</div>
    
    <input type="submit" name="submit" value="Generate Report" class="btn btn-success">
      
</form>   







<?php

$date = date("Y-m-d");
    
    $from = $_POST['date_from'];
    $to = $_POST['date_to'];


    
    
    
    /*
        PRINTING AREA,
        Here we are starting with the content or facts to print
        We start with selecting the market name of the market admin.
        
    
    */
    $id = $_SESSION['id'];
    
    $sql="SELECT fname, lname, market_id FROM market_admin where id = '$id'";
    
    //execute query
    $results=mysql_query($sql);
    
    $rows=mysql_fetch_assoc($results);
    
     $market_name_query=mysql_query("SELECT market_name FROM market WHERE id = '".$rows['market_id']."'");

     $name_row=mysql_fetch_assoc($market_name_query);
     
        
   echo $rows['market_id']; 

//
//$payment_report = mysql_query("SELECT SUM(amount_paid) as total from payments WHERE pay_date BETWEEN '$from' and '$to'") or die(mysql_error());
//    
//    $sum = mysql_fetch_assoc($payment_report);
    
    
  
   //$date = date("Y-m-d");
    

$payment_report = mysql_query("SELECT COALESCE(SUM(amount_paid),0) as total from payments WHERE pay_date BETWEEN '$from' and '$to' and payer_market_id = '".$rows['market_id']."'" ) or die(mysql_error());

    
$sum = mysql_fetch_assoc($payment_report);


//if($sum['total']=="") echo $sum['total']=0 else { echo $sum['total']; }
        

        
//    Total unpaid amount for a certain range of time  
        
    $unpaid = mysql_query("SELECT count(entrepreneurs.id) as unpaid FROM entrepreneurs WHERE entrepreneurs.id NOT IN (SELECT payments.payer_id FROM payments) and entrepreneurs.market_id = '".$rows['market_id']."'");

$unpay = mysql_fetch_assoc($unpaid);
$unpaid_tshs = $unpay['unpaid']*6000; //6000 is the total payment in a month per vendor.
?>
  


  <?php  if(isset($_POST["submit"])){
    
//  THEN THE CONTENT TO APPEAR ON THE PRINTED DOCUMENT FOLLOWS
    
?> 
<div id="printableArea" style="text-align: center;">


<div class="col-lg-2"><img src="image/logo.png" width="120px" height="120px"></div>
        <h1 col-lg-10>MASOKO LEVY MANAGEMENT SYSTEM</h1>
    <br><h4>A Levy collection Report from <b><?php echo $from." </b>to<b> ".$to."</b>"; ?></h4>
    
    
      
     <table class="table table-bordered table-hover" col-lg-12>
         <tr> <td><b>Market Name: </b></td>
         <td><?php echo $name_row['market_name']; ?></td></tr>
        
         <tr> <td><b>Total paid Levy: </b></td>
         <td><?php echo $sum['total'] ?></td></tr>
    
        <tr> <td><b>Total unpaid Levy: </b></td>
         <td><?php echo $unpaid_tshs; ?></td></tr>
         
 
    
    
    
<!--    OCCUPIED, FREE, AND CAPACITY OF THE MARKET-->
  <?php  
    $market_capacity = mysql_query("SELECT capacity, occupied, free from market, market_admin where market.id = market_admin.market_id");
        $results = mysql_fetch_assoc($market_capacity);
    
   ?>
        
    <tr> <td><b>Total Market Slots: </b></td>
         <td><?php echo $results['capacity']; ?></td></tr>
         
         <tr> <td><b>Total Occupied Slots: </b></td>
         <td><?php echo $results['occupied']; ?></td></tr> 
         
         
         <tr> <td><b>Total Free Slots: </b></td>
         <td><?php echo $results['free']; ?></td></tr>
         
         
         
    </table>  
    
    <?php echo "Authorized by: .........................................";
            echo "<br>Signature: ............................................................";
            echo "<br>Date: ............................................................";
        ?>
        
</div>

<input type="button" class="btn btn-primary" onclick="printDiv('printableArea')" value="PRINT REPORT" />

<?php } ?>
        
   <script type="text/javascript">     
function printDiv(printableArea) {
     var printContents = document.getElementById("printableArea").innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
  
</script>
