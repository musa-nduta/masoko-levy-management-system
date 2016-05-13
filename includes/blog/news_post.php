<link rel="stylesheet" type="text/css" href="css/inews.css">

<h1>News Posting</h1>

<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();




if(isset($_POST['submit'])){

	$tittle = $_POST['tittle'];		
	$post = $_POST['post'];		
	$image= upload('image',"images/masoko/");		
	$lead = $_POST['lead'];	
    $date = date("Y-m-d");
    $time = date("H:i:s");
	
    
    if(isset($tittle)&&isset($post)&&isset($image)&&isset($lead)){
		$poster = "insert into news (post_date, time, tittle, lead, post, image) values ('$date', '$time',  '$tittle', '$lead', '$post', '$image')";
		
		$query = mysql_query($poster);
		
		if($query){ ?>
				<div class="alert alert-success">
                    <strong>Success!</strong> You have successfully Posted to the blog.
                </div>			
			
    <?php }else { ?>

        <div class="alert alert-danger">
            <strong>Error!</strong> Didn't make a blog post.
        </div>
		
		
	<?php }
    }else{ ?> <div class="alert alert-danger">
            <strong>Error!</strong> Please Fill all the fields in the form.
        </div>
         
       <?php  }}
    ?>





<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="index.php?q=newspost">

<div class="form-group">
  <label class="col-md-3 control-label" for="post">Post Tittle:</label>  
  <div class="col-md-9">
  <input type="text" class="form-control" name="tittle">
   
  </div>
</div> 
    
    
    <div class="form-group">
  <label class="col-md-3 control-label" for="lead">Leading Text:</label>  
  <div class="col-md-9">
  <input type="text" class="form-control" name="lead">
   
  </div>
</div> 

    
<div class="form-group">
  <label class="col-md-3 control-label" for="post">Post Body:</label>  
  <div class="col-md-9">
  <textarea class="form-control" rows="5" name="post"></textarea>
   
  </div>
</div> 
    
    
<div class="form-group">
  <label class="col-md-3 control-label" for="post">Post Image:</label>  
  <div class="col-md-9">
  <input type="file" data-input="true" name="image">
   
  </div>
</div>
    

    <div class="form-group">
        <div class="col-md-offset-4">
        <div class="col-md-4">
            <input type="submit" name="submit" class="btn btn-success" value="POST NEWS"> </div>
        
        
        <div class="col-md-2">
            <input type="reset" class="btn btn-danger" name="reset" value="RESET">
        </div>
    </div>
    </div>
 

</form>