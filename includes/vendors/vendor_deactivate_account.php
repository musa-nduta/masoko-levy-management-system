<?php

checklogin();
mysql_connect("localhost","root","");
mysql_select_db("masoko");

$id = $_SESSION['id'];



    //query to get the user informations
    $sql="SELECT fname, mname, sname, gender, street, pobox, phone, email, slot
 				FROM entrepreneurs where id = '$id'";
    $results=mysql_query($sql);

    //display markets
    $rows=mysql_fetch_assoc($results);   
    $fname = $rows['fname'];
    $mname = $rows['mname'];
    $sname = $rows['sname'];
    $street = $rows['street'];
    $phone = $rows['phone'];
    $email = $rows['email'];
    $slot = $rows['slot'];
    $reason = $_POST['reason'];

    
    if(mysql_num_rows($results)>0)
    {
        
     
    if(isset($_POST['agreed']) && isset($_POST['submit'])){
           mysql_query("INSERT INTO deactivations (vendor_id, fname, mname, sname, street, phone, email, slot, reason)
           VALUES('$id','$fname','$mname','$sname','$street','$phone','$email','$slot','$reason')") or die(mysql_error);
        
        header("Location:index.php?q=pdetails");
    
    }}



?>