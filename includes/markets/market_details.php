<?php

$marketid=$_GET['id'];
$sql="SELECT * FROM market WHERE id='$marketid'";
$marketResult=mysql_query($sql);
$marketRow=mysql_fetch_assoc($marketResult);
$_SESSION['market'] = $marketid;




/******************** GET AN ID OF THE DISTRICT *****************/
			$dist="SELECT * FROM district where id = '".$marketRow['district_id']."'";
 						$distresults=mysql_query($dist);
 						if(mysql_num_rows($distresults)>0)
      					{
									$regrows=mysql_fetch_assoc($distresults);
										//	$district_name = $regrows['name'];
										}


?>


<div class="col-lg-5 col-md-12 col-sm-12"><img class="tpad" src='images/masoko/<?php echo $marketRow['image'];?>'height='250' width='100%'></div>

<?php
    if(!isset($_SESSION['id'])){ ?>
        <div class="col-lg-7">

    <?php }else{ ?>
        <div class="col-lg-7 tpad">
    <?php } ?>

<table class="table table-striped">
<tr>
<td width="150px">Name</td>
<td width="150px"><?php echo $marketRow['market_name'];?></td>
</tr>


<tr>
<td width="150px">District</td>
<td width="150px"><?php echo $regrows['name']; ?></td>
</tr>

<tr>
<td width="150px">Street</td>
<td width="150px"><?php echo $marketRow['street'];?></td>
</tr>

<tr>
<td width="150px">Capacity</td>
<td width="150px"><?php echo $marketRow['capacity'];?></td>
</tr>

<tr>
<td width="150px">Occupied</td>
<td width="150px"><?php echo $marketRow['occupied'];?></td>
</tr>

<tr>
<td width="150px">Free</td>
<td width="150px"><?php echo $marketRow['free'];?></td>
</tr>


<tr>
<td>Descriptions</td>
<td><?php echo $marketRow['description'];?></td>

</tr>



<tr><td colspan="3">
    <?php if (isset($_SESSION['id'])){
           echo ""; }
    elseif (isset($_SESSION['ad'])){
	     echo "";
     }
    elseif (isset($_SESSION['ma'])){
	    echo " ";
     }
     else { ?> <a  class="btn btn-md btn-primary" href="index.php?q=register" >Get Registered </a> <?php } ?></td></tr>

</table>
</div>
