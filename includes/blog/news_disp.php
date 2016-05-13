<?php

$selector = "select * from news";

$query = mysql_query($selector);


?>

<?php  /*When someone is logged on the blog sidebar disappears, 
        and when they logout it comes back*/

if(isset($_SESSION['id'])){ 
    require("includes/blog/news_logged_in.php");                            
    }else{ ?>
        <div class="col-sm-8 col-lg-8 blog">
    <?php 
        require("includes/blog/news_logged_out.php");
    ?>
 </div>
       
    <?php require("includes/blog/blog_sidebar.php");

  } ?>