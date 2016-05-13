<?php
//show errors.
ini_set('display_errors', 'on');

session_start();//Start a PHP session
$con = mysql_connect("localhost", "root", "root");	
mysql_select_db("masoko", $con);



?>