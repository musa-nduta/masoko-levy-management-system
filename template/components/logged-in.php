
<?php

$id = $_SESSION['id'];
$sql="SELECT fname, sname FROM entrepreneurs where id = '$id'";
				$results=mysql_query($sql);


    
		$rows=mysql_fetch_assoc($results);
		 			$fname = $rows['fname'];
		  			$sname = $rows['sname']; 
		
	







if (isset($_SESSION['en'])){ //Check if the User Logging in is an entrepreneur ?>
<ul class="nav navbar-nav">
    <li class="dropdown">
          <a 
             href="#" 
             class="dropdown-toggle" 
             data-toggle="dropdown">
                <?php echo "<strong>".$fname." ".$sname."</strong>"; ?>
              <span class="glyphicon glyphicon-user pull-right"></span>
            </a>
            
        <ul class="dropdown-menu">
            <li>
                <a 
                   href="index.php?q=pdetails">
                        Account Settings 
                    <span class="glyphicon glyphicon-cog pull-right"></span>
                </a>
              </li>
            <li class="divider"></li>
              
            <li>
                <a href="index.php?q=logout">
                        Sign Out 
                    <span class="glyphicon glyphicon-log-out pull-right"></span>
                </a>
            </li>
        </ul>
    </li>
</ul>
    
<?php
}elseif (isset($_SESSION['ma']))
{ //Check if the User Logging in is a Market Supervisor ?>
<ul class="nav navbar-nav">
    <li class="dropdown">
          <a href="#" 
             class="dropdown-toggle" 
             data-toggle="dropdown">
                MARKET SUPERVISOR
              <span class="glyphicon glyphicon-user pull-right"></span>
          </a>
        
          <ul class="dropdown-menu">
            <li>
                <a 
                   href="#">
                        Account Settings 
                    <span class="glyphicon glyphicon-cog"></span>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a 
                   href="index.php?q=logout">
                        Sign Out 
                    <span class="glyphicon glyphicon-log-out pull-right"></span>
                </a>
            </li>
          </ul>
    </li>
</ul>

<?php
}elseif (isset($_SESSION['ad'])){ //Check if the User Logging in is an administrator ?>
    <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMINISTRATOR<span class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?q=logout">Account Settings <span class="glyphicon glyphicon-cog"></span></a></li>
            <li class="divider"></li>
            <li><a href="index.php?q=logout">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>
</ul>

<?php
}else{ ?>
    <ul class="nav navbar-nav">
        <li class="dropdown">
          echo "..";
        </li>
</ul>
<?php } ?>

               