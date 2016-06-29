<?php
//show errors.
ini_set('display_errors', 'off');

session_start();//Start a PHP session

ob_start();

//Database connections and database selections
$con = mysql_connect("localhost", "root", "root");	
mysql_select_db("masoko", $con);


//auto-logout after sometime of inactivity
if (isset($_SESSION["id"])) {
    $_SESSION['last_login_timestamp'] = time();
    
  // only if user is logged in perform this check
  if ((time() - $_SESSION['last_login_timestamp']) > 2) {
    header("Location:index.php?q=logout");
    exit;
  } else {
    $_SESSION['last_login_timestamp'] = time();
  }
}

?>