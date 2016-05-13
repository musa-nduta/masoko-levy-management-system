<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();


$nameid = $_SESSION['id'];

$sql = "select fname from entrepreneurs where id = '".$nameid."'";

mysql_query($sql);


$name = mysql_fetch_assoc($sql);

echo $name['fname'];

?>