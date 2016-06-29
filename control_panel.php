<?php
    //A function to check if a user is login, otherwise they will be directed to the login page.
    checklogin();

    if(isset($_SESSION['ad'])){
        echo "Welcome Admin";
        
    }
?>

  
