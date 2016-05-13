<link rel="stylesheet" type="text/css" href="css/includes_styles.css" />


<?php
    //A function to check if a user is login, otherwise they will be directed to the login page.
    checklogin();

	$id = $_SESSION['id'];

	$results = mysql_query("select market_id from market_admin where id = '".$id."'");

	$row_m_id=mysql_fetch_assoc($results);
	$mid = $row_m_id['market_id'];



 $sql="SELECT id, fname, sname, street, slot, paid, flag  FROM entrepreneurs where market_id = '".$mid."'";
 $results=mysql_query($sql);
?>


<h1 id="menu-header">
					List of Market Vendors.
					<a href="index.php?q=search_ent" id="search_bar">
					<img src="images/search.png" height="32" /></a>

</h1>

<div id="market-list">

<form name="activate" method="post" action="">

<table class="table table-bordered table-hover">
<tr class="success">
    <th>.<input type="checkbox" id="checkAll"/>All</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Street</th>
    <th>Slot</th>
    <th>Amount Paid</th>
    <th>Status</th>
</tr>

<?php
  if(mysql_num_rows($results)>0)
      {
        //display markets
		while($rows=mysql_fetch_assoc($results))
		  { ?>
          <td><input type="checkbox" name="activation[]" value="<?php echo $rows['id']; ?>"></td><?php echo "
                <td><a href='index.php?q=entpdetails&id=".$rows['id']."'>".$rows['fname']."</a></td>
                <td>".$rows['sname']."</td>
                <td>".$rows['street']."</td>
				<td>".$rows['slot']."</td>
                <td>".$rows['paid']."</td>
                <td>".$rows['flag']."</td></td></tr>";
				}
}else{ echo "<tr class='danger'><td>Sorry, no Vendors found</td></tr>";	}
?>




    </table>

    <input type="button" class="btn btn-success" name="update" value="Activate" onClick="setUpdateAction();">

   <input type="button" class="btn btn-danger" name="deactivate" value="Deactivate"  onClick="setDeleteAction();" />

    </form>
</div>

<script type="text/javascript" src="js/vendor_delete_and_activate.js"></script>


<!--An Option to toggle Checkboxes -->
<script type="text/javascript">
$("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
</script>
