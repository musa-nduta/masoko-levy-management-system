<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();






if(isset($_POST['submit']))
{
  /******************** GET AN ID OF THE REGION SELECTED FROM THE FORM *****************/
  $id = $_SESSION['id'];
  $name=$_POST['name'];
  $district=$_POST['name'];
  $street=$_POST['street'];
  $capacity=$_POST['capacity'];
  $free=$_POST['capacity'];
  $description=$_POST['description'];
  $image= upload('image',"images/masoko/");
  $district_name = $_POST['district'];

  $reg="SELECT id FROM district where name = '".$district_name."'";
  $regresults=mysql_query($reg);
  if(mysql_num_rows($regresults)>0)
  $regrows=mysql_fetch_assoc($regresults);
  $district_id = $regrows['id'];

  

  //insert in the table

  $sql="INSERT INTO market(market_name, district_id, street, capacity,free,image,description)
                VALUES ('$name', '$district_id', '$street','$capacity','$free','$image','$description')";


  if(mysql_query($sql))
  {
    Header("Location: index.php?q=success-registerm");
  }else
    {
	  Header("Location: index.php?q=failure-registerm");
	}
}
?>

Add A New Market

<form name="register_market" class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
 
    <div class="form-group">
  <label class="col-md-4 control-label" for="name">Market Name</label>
  <div class="col-md-4">
  <input id="textinput" name="name" type="text" class="form-control input-md" required="required">

  </div>
</div>
    
    
  <div class="form-group">
  <label class="col-md-4 control-label" for="name">District</label>
  <div class="col-md-4">
  <select name="district">
                                <?php
                                        $district = "SELECT name FROM district";

                                                $distric_results = mysql_query($district);

                                                if(mysql_num_rows($distric_results)>0){
                                                        while($district_rows = mysql_fetch_assoc($distric_results)){?>

                                                                <option><?php echo $district_rows['name']; ?></option>
                                        <?php  }
                                } ?>
                 </select>

  </div>
</div>   
    
  
        <div class="form-group">
  <label class="col-md-4 control-label" for="street">Street</label>
  <div class="col-md-4">
  <input id="textinput" name="street" type="text" class="form-control input-md" required="required">

  </div>
</div>      

    
<div class="form-group">
  <label class="col-md-4 control-label" for="capacity">Total Market Slots</label>
  <div class="col-md-4">
  <input id="textinput" name="capacity" type="text" class="form-control input-md" required="required">

  </div>
</div>
    
    
<div class="form-group">
 <label class="col-md-4 control-label">Select a market image</label>
    <div class="col-md-4">
       <input id="image" name="image" type="file" class="file">

  </div>
</div>

 <div class="form-group">
  <label class="col-md-4 control-label" for="name">Description</label>
  <div class="col-md-4">
      
      <textarea class="form-control" name='description' rows="5" id="comment"></textarea>

  </div>
</div>

  
<div class="form-group">
    <div class="col-md-offset-4">
        <div class="col-md-2">
            <input type="submit" name="submit" class="btn btn-default" value="Add Market">
        </div>

        <div class="col-md-2">
            <input type="reset" class="btn btn-danger" name="reset" value="Reset Form">
        </div>
    </div>
    </div>
    
    
    
    
   
</form>
