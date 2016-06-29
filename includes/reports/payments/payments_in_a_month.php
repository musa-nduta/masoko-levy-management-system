<?php
checklogin();


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
  <input id="date_to" name="date_to" type="date" class="input-group date" required="required" placeholder="mm/dd/YYYY">
  </div>
</div>
    
    <input type="submit" name="submit" value="Generate Report" class="btn btn-success">
      
      
<?php
$date = date("Y-m-d");
    
    $from = $_POST['date_from'];
    $to = $_POST['date_to'];

$payment_report = mysql_query("SELECT SUM(amount_paid) as total from payments WHERE pay_date BETWEEN '$from' and '$to'") or die(mysql_error());
    
    $sum = mysql_fetch_assoc($payment_report);
    
    
    
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
     

    
    if(isset($_POST["submit"])){
    
//  THEN THE CONTENT TO APPEAR ON THE PRINTED DOCUMENT FOLLOWS
    
?> 
    <h1>MASOKO LEVY MANAGEMENT SYSTEM</h1>
    <br><h5>A Levy collection Report from <b><?php echo $from." </b>to<b> ".$to."</b>"; ?></h5>
    
    
     <table class="table table-bordered table-hover" style="width: 70%">
         <tr> <td><b>Market Name: </b></td>
         <td><?php echo $name_row['market_name']; ?></td></tr>
        
         <tr> <td><b>Total paid Levy: </b></td>
         <td><?php echo $sum['total']; ?></td></tr>
    
        <tr> <td><b>Total upaid Levy: </b></td>
         <td><?php echo $sum['total']; ?></td></tr>
         
 
    
    
    
<!--    OCCUPIED, FREE, AND CAPACITY OF THE MARKET-->
  <?php  
    $market_capacity = mysql_query("SELECT capacity, occupied, free from market, market_admin where market.id = market_admin.market_id");
        $results = mysql_fetch_assoc($market_capacity);
    
   ?>
        
    <tr> <td><b>Market Capacity: </b></td>
         <td><?php echo $results['capacity']; ?></td></tr>
         
         <tr> <td><b>Market Capacity: </b></td>
         <td><?php echo $results['occupied']; ?></td></tr> 
         
         
         <tr> <td><b>Market Capacity: </b></td>
         <td><?php echo $results['free']; ?></td></tr>
         
         
         
    </table>    
    
<?php } ?>
    
 
<!--Lines to printer-->
        <!--    
        $rows['fname']
        $rows['lname']; 
        -->