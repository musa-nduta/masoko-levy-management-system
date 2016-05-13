<link rel="stylesheet" type="text/css" href="css/includes_styles.css" />

<?php
    
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();

?>


<table align="center" >
<tr id="tr"><td><b>Region</td><td><b>District</td></b><td><b>Amount Paid (Tshs.)</b></td></tr>
<?php
$con = mysql_connect("localhost", "root", "root");	
mysql_select_db("masoko", $con);


$query = "SELECT region, district, SUM(paid) FROM entrepreneurs GROUP BY region"; 
	 
$result = mysql_query($query) or die("Did Not find any information");

$row_color = 0;

// Print out result
while($row = mysql_fetch_array($result)){
	$row_color++;
		  	if($row_color%2==1){
		    echo "<tr bgcolor=#c4c4c4><td width='200'>". $row['region']."</td><td width='200'>". $row['district']."</td><td align='center'>".$row['SUM(paid)']."</td></tr>";
	echo "<br />";
}

else {
		    echo "<tr bgcolor=#fff><td width='200'>". $row['region']."</td><td>". $row['district']."</td><td align='center'>".$row['SUM(paid)']."</td></tr>";
	echo "<br />";
}

}




?>
</table>


