<?php
//checklogin();


?>

<!--A query to return a month of payment-->
<form class="form-horizontal" action="index.php?q=monthly_printable" method="POST" name="month_report" >
    
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
      
      
    <a href="fpdf/monthly_printable"></a>
    
 
<!--Lines to printer-->
        <!--    
        $rows['fname']
        $rows['lname']; 
        -->