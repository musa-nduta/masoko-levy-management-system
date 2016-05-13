<?php
	//The below function is used for loggin in the users of the system according to their privileges
	function masoko_login($username, $password) {
		$market_admin = "SELECT * FROM market_admin 
                        WHERE username =  '$username' 
                        AND PASSWORD = MD5('$password')";
        
		$entrepreneurs = "SELECT * FROM entrepreneurs 
                            WHERE id_number =  '$username' 
                            AND flag='activated' 
                            AND PASSWORD = MD5('$password')";
        
        
		$admin = "SELECT * FROM users 
                    WHERE username =  '$username' 
                    AND PASSWORD = MD5('$password')";
		
			
			$ma = mysql_query($market_admin); 
			$en = mysql_query($entrepreneurs);
			$ad = mysql_query($admin);
			
			if(mysql_num_rows($ma)> 0){ //Query for Market Admin
				//Valid user				
				$row = mysql_fetch_assoc($ma);
				$_SESSION['id'] = $row['id'];
				$_SESSION['ma'] = $row['id'];
				
                header("Location: index.php");
				}
				
				
			else if(mysql_num_rows($ad)> 0){ //Query for Admin
				//Valid user				
				$row = mysql_fetch_assoc($ad);
				$_SESSION['id'] = $row['id'];
				$_SESSION['ad'] = $row['id'];
				header("Location: index.php");
				}				
				
				
			else if(mysql_num_rows($en)> 0){ //Query for Market Entrepreneurs
				//Valid user				
				$row = mysql_fetch_assoc($en);
				$_SESSION['id'] = $row['id'];
				$_SESSION['en'] = $row['id'];
				header("Location: index.php");
				}
        
            else { 
                //header("Location: index.php?q=login"); ?>
                <script type="text/javascript">
                   window.location.assign("index.php?q=login");
                  alert("Username and/or Password incorrect.\n\nTry again.");
                </script>

              <?php }}




function upload($image, $path ) {
		$ext = substr(strrchr($_FILES[$image]['name'],'.'), 1);
		$picname = rand().".".$ext;
		$ok_move = move_uploaded_file($_FILES[$image]['tmp_name'], $path.$picname);
				if($ok_move){
				return $picname;	
			}
			else {
				echo "Error: Failed to Upload";
			}
			
	
}







function  checklogin(){
		if(
            !isset($_SESSION['en']) &&
            !isset($_SESSION['ma']) &&
            !isset($_SESSION['ad']) &&
            !isset($_SESSION['id'])
          )
        {
			header("Location: index.php?q=login");
		}

}
?>