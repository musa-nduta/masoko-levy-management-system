<?php

$sql="SELECT market_id FROM entrepreneurs where id = '$id'";
    //execute query
    $results=mysql_query($sql);
    
    $rows=mysql_fetch_assoc($results);





$debt = mysql_query("SELECT count(entrepreneurs.id) as debt FROM entrepreneurs WHERE entrepreneurs.id NOT IN (SELECT payments.payer_id FROM payments) and entrepreneurs.market_id = '".$rows['market_id']."' and entrepreneurs.id = '$id'");




//    <div class="alert alert-danger">
//            <strong>Just to Remind you!</strong> You Have have to <a href="index.php?q=payments">pay</a> levy before your account is closed.
//      </div>


?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3>
            <strong>My Account</strong>
        </h3>
    </div>
    
  <div class="panel-body">
    <?php require ("dashboard_content.php"); ?>
  </div>
</div>





    
