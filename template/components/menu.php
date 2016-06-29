<?php

if((isset($_SESSION['en'])) and (isset($_SESSION['id']))){?>
<ul class="nav navbar-nav">
	<li class="active"><a href="index.php"><div class="glyphicon glyphicon-home"></div></a></li>
	<li><a href="index.php?q=vendor-dashboard">DASHBOARD</a></li>
	<li><a href="index.php?q=viewm">MARKETS</a></li>
	<li><a href="index.php?q=news_disp">NEWS</a></li>
</ul>

<!--Right Nav Buttons -->

<ul class="nav navbar-nav navbar-right"  style="margin-left: 1em; margin-right: 1em">
  <?php  require("template/components/logged-in.php"); ?>
</ul>


<?php }elseif((isset($_SESSION['ma'])) and (isset($_SESSION['id']))){?>
<ul class="nav navbar-nav">
	<li class="active"><a href="index.php"><div class="glyphicon glyphicon-home"></div></a></li>
	<li><a href="index.php?q=viewm">MARKETS</a></li>
	<li><a href="index.php?q=market_supervisor_dashboard">DASHBOARD</a></li>
	<li><a href="index.php?q=news_disp">NEWS</a></li>
</ul>

<!--Right Nav Buttons -->

<ul class="nav navbar-nav navbar-right">
  <?php  require("template/components/logged-in.php"); ?>
</ul>


<?php }elseif((isset($_SESSION['ad'])) and (isset($_SESSION['id']))){?>
<ul class="nav navbar-nav">
	<li class="active"><a href="index.php"><div class="glyphicon glyphicon-home"></div></a></li>
	<li><a href="index.php?q=viewm">MARKETS</a></li>
	<li><a href="index.php?q=panel">ADMINISTRATION</a></li>
	<li><a href="index.php?q=news_disp">NEWS</a></li>
</ul>

<!--Right Nav Buttons -->

<ul class="nav navbar-nav navbar-right">
  <?php  require("template/components/logged-in.php"); ?>
</ul>


<?php }else {?>

<ul class="nav navbar-nav">
    <li class="active"><a href="index.php"><div class="glyphicon glyphicon-home"></div></a></li>
		<li><a href="index.php?q=viewm">MARKETS</a></li>
		<li><a href="index.php?q=news_disp">NEWS</a></li>


</ul>

<!--Right Nav Buttons -->
 <ul class="nav navbar-nav navbar-right">
  <li><a href="index.php?q=login">LOGIN</a></li>
   <li><a href="index.php?q=viewm">REGISTER</a></li>
 </ul>

<?php } ?>
