<link rel="stylesheet" type="text/css" href="css/includes_styles.css" />


<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();


$id = $_SESSION['id'];
	
	$results = mysql_query("select market_id from market_admin where id = '".$id."'");
	
	$row_m_id=mysql_fetch_assoc($results);
	$mid = $row_m_id['market_id'];




if(isset($_POST['search'])){
$index = $_POST['index'];
	
 $sql="SELECT id, id_number, fname FROM entrepreneurs where (fname like '$index' or id_number like '$index') and (market_id='".$mid."')";
 $results=mysql_query($sql);
?>
<h1 id="menu-header">Entrepreneurs found</h1>
<div id="market-list">
<table width="100%" align="center">
<tr>
<td><b>Name</b></td>
<td><b>Username (ID)</b></td>



</tr>

  <?php
  
   if(mysql_num_rows($results)>0)
      {
      	
      	
      	$row_color=0;
      	
        //display markets
		while($rows=mysql_fetch_assoc($results))
		  {
		  	$row_color++;
		  	if($row_color%2==1){
		    echo "<tr bgcolor=#c4c4c4>
		    <td><a href='index.php?q=entpdetails&id=".$rows['id']."'>".$rows['fname']."</a></td>
		    <td>".$rows['id_number']."</td>
		    </tr>";
		 }
		 
		 
		 else {
		    echo "<tr bgcolor=#fff>
		    <td><a href='index.php?q=entpdetails&id=".$rows['id']."'>".$rows['fname']."</a></td>
		     <td>".$rows['id_number']."</td>
		    </tr>";		
		 }
		   }
		} else
        {
          echo "Sorry, no Vendors found";							
		}
   ?>
</table>
</div>
<?php } echo "<br><br><br><br>";  ?>


<form action="index.php?q=entp_search" name="searcher" method="POST">
<table>
	<tr><td colspan="2">Please type in a name or username of the entrepreneur.</td></tr>	
	<tr>
		<td>Search Here: </td>	
		<td><input type="text" name="index" id="index"></td>	
	</tr>
	<tr>
		<td><input type="submit" name="search" id="search" value="Search"></td>	
		<td><input type="reset" name="reset" id="reset" value="Clear"></td>
	</tr>

</table>

</form>