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
    echo "Record saved";
  }else
    {
	  echo "record not saved";
          echo mysql_error();
          echo $_POST['district'];
	}
}
?>


<form name="register_market" method="POST" action="" enctype="multipart/form-data">
 <table>
     <th>
	    Add A New Market
	 </th>
	 <tr>
	    <td>Name</td>
	    <td><input type='text' name="name"></td>
	 </tr>

         <tr>
           <td>District</td>
           <td>
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
           </td>
        </tr>

	 <tr>
	    <td>Street</td>
	    <td><input type='text' name='street'></td>
	 </tr>

	 <tr>
	    <td>Capacity</td>
	    <td><input type='text' name='capacity'></td>
	 </tr>
	 <tr>
	    <td>Image</td>
	    <td><input type='file' name='image'></td>
	 </tr>
	 <tr>
	    <td>Description</td>
	    <td><textarea name='description'></textarea></td>
	 </tr>
	 <tr>
	    <td><input type='submit' name='submit' value='Add'></td>
	 </tr>
 </table>
</form>
