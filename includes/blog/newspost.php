<?php



$newsid = $_GET['id'];
$sql="SELECT * FROM news WHERE id='$newsid'";
$newsResult = mysql_query($sql);
$newsRow = mysql_fetch_assoc($newsResult);



echo "<form name='del' action='' method='POST' >"; ?>
<table align="center">
<tr width="800"><td ><h2><?php echo $newsRow['tittle'];?></h2></td></tr>
<tr width="800"><td><?php echo $newsRow['post'];?></td></tr>
<tr><td>


<?php
if(isset($_SESSION['ma'])){
		   	echo "<input type='submit' name='delete' value='Delete Post' /></td></tr>";

				if(isset($_POST['delete'])){

					if(mysql_query("delete from news where id='$id'")){
								echo "<h3>success</h3>";
								header("Location: index.php?q=news_disp");
						}

						else { echo "<h3>failed delete</h3>";}

					}

				}
				else { echo "";}



?>

   </td></tr>
</table>
</form>
