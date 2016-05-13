<?php

checklogin();
mysql_connect("localhost","root","root");
mysql_select_db("masoko");

if(isset($_POST['agreed']) && isset($_POST['submit']))
{

        $id = $_SESSION['id'];
            if(mysql_query("UPDATE entrepreneurs SET flag='deactivated' WHERE id='".$id."'"))
            {
                session_destroy();
                    header("Location:index.php?q=login");
            }
        else
            {
    
                echo "Please agree on the condition";
                header("Location:index.php?q=pdetails#deactivate"); 
            } 
  } 

?>