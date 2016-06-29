<script type="text/javascript">
        $(document).ready(function($)
        {
            $(".table-row").click(function() {
                window.document.location =$(this).data("href"); });
          });
  </script>

<!--Cursor when selecting a message  -->
<style type="text/css">
      .table-row{cursor:pointer; }
</style>


<!--Sql Quesries-->
<?php
 //query to get the user informations
    $pull_requests="SELECT deactivations.fname, 
                    deactivations.mname, 
                    deactivations.sname, 
                    deactivations.street, 
                    deactivations.phone, 
                    deactivations.email, 
                    deactivations.slot, 
                    deactivations.reason, 
                    entrepreneurs.id
                FROM deactivations, entrepreneurs 
                where vendor_id = entrepreneurs.id";
?>

<h1>Deactivation Requests</h1>

<table class="table table-bordered table-condensed table-striped table-hover">
<tr>
    <th><b>First Name</b></th>
    <th><b>Middle Name</b></th>
    <th><b>SirName</b></th>
    <th><b>Slot</b></th>
</tr>





<?php

$results=mysql_query($pull_requests);

//display markets
if(mysql_num_rows($results)>0){
    while($rows=mysql_fetch_assoc($results)){   
    $fname = $rows['fname'];
    $vendor_id = $rows['id'];
    $mname = $rows['mname'];
    $sname = $rows['sname'];
    $street = $rows['street'];
    $phone = $rows['phone'];
    $email = $rows['email'];
    $slot = $rows['slot'];
    $reason = $rows['reason'];

?>

<tr class="table-row" data-href="index.php?q=deactivations&id=<?php echo $vendor_id; ?>">
    <td><?php echo $fname ?></td>
    <td><?php echo $mname ?></td>
    <td><?php echo $sname ?></td>
    <td><?php echo $slot ?></td>

</tr>

<?php
         }}
?>
</table>