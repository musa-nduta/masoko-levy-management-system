<link rel="stylesheet" type="text/css" href="css/includes_styles.css" />


<?php
	

if(isset($_POST['search'])){
$index = $_POST['index'];
	
 $sql="SELECT id, name, street FROM market, where street like '$index'";
 $results=mysql_query($sql);
?>
<h1 id="menu-header">List of Markets</h1>
<div id="market-list">
<table width="100%" align="center">
<tr>
<td><b>Name</b></td>
<td><b>Region</b></td>
<td><b>District</b></td>
<td><b>Street</b></td>


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
		    <td><a href='index.php?q=market_details&id=".$rows['id']."'>".$rows['name']."</a></td>
		    <td>".$rows['region']."</td>
		    <td>".$rows['district']."</td>
		    <td>".$rows['street']."</td></tr>";
		 }
		 
		 
		 else {
		    echo "<tr bgcolor=#fff>
		    <td><a href='index.php?q=market_details&id=".$rows['id']."'>".$rows['name']."</a></td>
		     <td>".$rows['region']."</td>
		    <td>".$rows['district']."</td>
		    <td>".$rows['street']."</td></tr>";		
		 }
		   }
		} else
        {
          echo "Sorry, no market found";							
		}
   ?>
</table>
</div>
<?php } echo "<br><br><br><br>";  ?>


<form action="index.php?q=search_market" name="searcher" method="POST">
<table>
	<tr><td colspan="2">Please type in a name, region or a district of the market.</td></tr>	
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