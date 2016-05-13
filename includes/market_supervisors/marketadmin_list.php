<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();



 $sql="SELECT * FROM market_admin";
 $results=mysql_query($sql);
?>
<h1>List of Market Admins</h1>
<table>
  <?php
   if(mysql_num_rows($results)>0)
      {
        //display market admins
		while($rows=mysql_fetch_assoc($results))
		  {
		    echo "<tr><td><a href='index.php?q=marketadmin_details&id=".$rows['id']."'>".$rows['fname']."&nbsp;".$rows['lname']."</a></td></tr>";
		   }
		} else
        {
          echo "Sorry, no market admin found";							
		}
   ?>
</table>
