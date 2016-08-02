<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
//checklogin();


mysql_connect("localhost","root","");
mysql_select_db("masoko");

foreach($_POST['activation'] as $item){
mysql_query("UPDATE entrepreneurs SET flag='deactivated' WHERE id='".$item."'");
}
header("Location:../../index.php?q=entlist");


?>
