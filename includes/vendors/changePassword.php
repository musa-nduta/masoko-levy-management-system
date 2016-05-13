
<?php
//A function to check if a user is login, otherwise they will be directed to the login page.
checklogin();

echo md5("musa");
if(isset($_POST['password']) && isset($_POST['conf_password'])){

$id = $_SESSION['id'];
if(mysql_query("UPDATE entrepreneurs SET password='".md5($_POST['password'])."' WHERE id='".$id."'")){
?>
        <script type="text/javascript">
                alert("Password Changed");
        </script>

<?php 
    header("Location:index.php?q=pdetails"); 
        }else
        {

            echo "Please fill in all data";
            header("Location:index.php?q=pdetails"); 

            } 
          }

?>