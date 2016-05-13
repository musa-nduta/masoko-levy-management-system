<link rel="stylesheet" type="text/css" href="css/includes_styles.css" />


<!--JQuery script for Making the market list rows clickable  -->
<script type="text/javascript">
        $(document).ready(function($)
        {
            $(".table-row").click(function() {
                window.document.location =$(this).data("href"); });
          });
  </script>

<!--Cursor when selecting markets  -->
<style type="text/css">
      .table-row{cursor:pointer; }
</style>


<div id="market-list">

<table class="table table-bordered table-condensed table-striped table-hover">
<tr>
<th><b>Name</b></th>
<th><b>District</b></th>
<th><b>Street</b></th>


</tr>
  <?php




 $sql="SELECT id, market_name, district_id, street FROM market";
 $results=mysql_query($sql);

   if(mysql_num_rows($results)>0)
      {
		while($rows=mysql_fetch_assoc($results))
		  {

		/******************** GET AN ID OF THE DISTRICT *****************/
			$dist="SELECT * FROM district where id = '".$rows['district_id']."'";
 						$distresults=mysql_query($dist);
 						if(mysql_num_rows($distresults)>0)
      					{
									$regrows=mysql_fetch_assoc($distresults);
											$district_name = $regrows['name'];
										} ?>


                <tr class="table-row" data-href="index.php?q=market_details&id=<?php echo $rows['id'] ?>">
                    <td><?php echo $rows['market_name'] ?></td>
                    <td><?php echo $district_name ?></td>
                    <td><?php echo $rows['street'] ?></td>
                </tr>

	<?php	 }
		   }
		 else
        {
          echo "Sorry, no market found";
		}   ?>
</table>
</div>
