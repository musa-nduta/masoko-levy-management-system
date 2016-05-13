


    <section>
        <h3 class="tpad">
		<div class="alert alert-info">
  			<strong> Click on the market to register into</strong>
		</div>
	</h3>
        <div class="input-group input-group-lg tpad">
            <span class="input-group-addon glyphicon glyphicon-search"></span>
            <form method="post" action="">
                <input type="text" class="form-control input-lg" name="search" id="search" placeholder="Type here to Search a market to get registered into">
            </form>
        </div>
    </section>



<div class="row" style="padding-top: 3%">
    <div id="result">
    <?php require 'includes/markets/whole_market_list.php'; ?>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function(){
   $('#search').keyup(function(){
       var txt = $(this).val();
       if(txt != '')
           {
               $.ajax({
                   url: "includes/vendors/vendor-search-engine.php",
                   method: "post",
                   data: {search:txt},
                   dataType: "text",
                   success: function(data)
                   {
                       $('#result').html(data);
                   }
               });
           }

   });
});

</script>
