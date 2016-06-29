<h1><b>Account Deactivation Request</b></h1>
<table class="table table-bordered table-condensed table-striped">
    


<?php 
$id = $_GET['id']; 

$request_details="SELECT fname, 
                    mname, 
                    sname, 
                    street, 
                    phone, 
                    email, 
                    slot, 
                    reason
                FROM deactivations
                WHERE vendor_id = $id";


    $detail = mysql_fetch_assoc(mysql_query($request_details));
                                
        
?>

    
    <tr>
        <td class="col-md-6 col-sm-6">
            First name: 
        </td>
        
       
        <td class="col-md-6 col-sm-6">
            <?php echo $detail['fname']; ?> 
        </td>
        
    </tr>
    
    
    
    <tr>
        <td class="col-md-6 col-sm-6">
            Middle name: 
        </td>
        
       
        <td class="col-md-6 col-sm-6">
            <?php echo $detail['mname']; ?> 
        </td>
        
    </tr>
    
    
    
    <tr>
        <td class="col-md-6 col-sm-6">
            Sirname: 
        </td>
        
       
        <td class="col-md-6 col-sm-6">
            <?php echo $detail['sname']; ?> 
        </td>
        
    </tr>
    
    
    
    
    <tr>
        <td class="col-md-6 col-sm-6">
            Phone: 
        </td>
        
       
        <td class="col-md-6 col-sm-6">
            <?php echo $detail['phone']; ?> 
        </td>
        
    </tr>
    
    
    <tr>
        <td class="col-md-6 col-sm-6">
            Email: 
        </td>
        
       
        <td class="col-md-6 col-sm-6">
            <?php echo $detail['email']; ?> 
        </td>
        
    </tr>
    
    
    <tr>
        <td class="col-md-6 col-sm-6">
            Slot Number: 
        </td>
        
       
        <td class="col-md-6 col-sm-6">
            <?php echo $detail['slot']; ?> 
        </td>
        
    </tr>
    
    
    <tr>
        <td class="col-md-6 col-sm-6">
            Reason for Deactivation: 
        </td>
        
       
        <td class="col-md-6 col-sm-6">
            <?php echo $detail['reason']; ?> 
        </td>
        
    </tr>
</table>