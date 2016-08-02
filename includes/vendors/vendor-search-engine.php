<!--JQuery script for Making the market list rows clickable  -->
<script type="text/javascript">
$(document).ready(function($) {
    $(".table-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>


<!--Cursor when selecting markets  -->
<style type="text/css">
.table-row{
cursor:pointer;
}
</style>

<?php


mysql_connect("localhost","root","");
mysql_select_db("masoko");

$sql="SELECT id, market_name, district_id, street FROM market";
$results=mysql_query($sql);
$rows=mysql_fetch_assoc($results);



$keyword = $_POST['search'];
$district_query = "SELECT name, market_name, street FROM district, market WHERE name LIKE '".$keyword."%' AND market.district_id = district.id";
$market_query = "SELECT market_name, name, street FROM market, district WHERE market_name LIKE '".$keyword."%' AND market.district_id = district.id";

$district_results = mysql_query($district_query);
$market_results = mysql_query($market_query);



if(mysql_num_rows($district_results)>0)
{
    while($district = mysql_fetch_array($district_results))
    { ?><table class="table table-striped table-bordered">
    <tr><th>Market Name</th><th>Market District</th><th>Street</th></tr>
    <tr class="table-row" data-href="index.php?q=market_details&id=<?php echo $rows['id'] ?>">
        <td><?php echo $district['market_name']; ?></td>
        <td><?php echo $district['name']; ?></td>
        <td><?php echo $district['street']; ?></td>
    </tr></table><?php
    }
}

elseif(mysql_num_rows($market_results)>0)
{
    while($market = mysql_fetch_array($market_results))
    {?><table class="table table-striped table-bordered">
    <tr><th>Market Name</th><th>Market District</th><th>Street</th></tr>
    <tr class="table-row" data-href="index.php?q=market_details&id=<?php echo $rows['id']; ?>">
        <td><?php echo $market['market_name']; ?></td>
        <td><?php echo $market['name']; ?></td>
        <td><?php echo $market['street']; ?></td>
    </tr></table><?php
    }
}
else
{
?><div class="alert alert-danger">
  <strong>Ooops!</strong> There is no data found based on your search.
</div><?php
}

?>
