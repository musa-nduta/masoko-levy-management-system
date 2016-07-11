<?php
    $admins_selector = mysql_query("Select * from market_admin");


if(mysql_num_rows($admins_selector)>0){
    while($rows = mysql_fetch_assoc($admins_selector)){
        echo $rows['fname'];
    }
}else 
    echo "Error in query";
?>