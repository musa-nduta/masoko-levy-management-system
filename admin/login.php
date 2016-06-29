
<?php if (isset($_POST['submitted'])) {
	
		masoko_login($_POST['username'], $_POST['password']);
			
} else { ?>


<link rel="stylesheet" type="text/css" href="css/includes_styles.css" />
<div id="login">
<form method="POST" action="index.php?q=login-admin">
    <table align="center">
	
        <tr>
            <td>username</td><td><input type="text" id="credentials" name="username" size="20" /></td>
        </tr>
        <tr><td>Password</td><td><input type="password" id="credentials" name="password" size="20" /></td>
            
        </tr>
        <tr>
            <td><input type="submit" name="submitted" value="submit" /></td>  
            <td><input type="reset" name="reset" /></td>
        </tr>
        
    </table> 
    
    
   
</form>

</div>
<?php } // end of form ?>