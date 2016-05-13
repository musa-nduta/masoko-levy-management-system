<?php
if(mysql_num_rows($query)>0)
      {
		while($rows=mysql_fetch_assoc($query))
		  { ?>


            <section>
                <h1><?php  echo "<a href='index.php?q=news&id=".$rows['id']."'>".$rows['tittle']."</a>"; ?></h1>
                <p class="lead"><?php echo $rows['lead']; ?></p>
                <hr>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $rows['post_date']." ".$rows['time']; ?></p>
                <hr>

                <?php $path = "images/masoko/".$rows['image'];?>
                    <img src="<?php echo $path; ?>" class="img-responsive">
                <hr>
                <p><?php echo $rows['post']; ?></p>
                <!-- Button ya read more hapa -->
                <hr>
            </section>
<?php }}else
        {
          echo "<h3>Blog is Empty!</h3>";
		} ?>
