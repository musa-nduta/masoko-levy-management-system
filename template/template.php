
<!--Styles-->

    <link rel="stylesheet" type="text/css" href="template/styles/layout.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!--End of Styles-->


<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MASOKO LEVY MANAGEMENT SYSTEM</title>


    <!--Scrpts-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--End of Scripts-->

</head>
<body>

<div class="container">
<div class="header">
<?php  //require "template/components/header.php"; ?>
</div>


<!--*******************************************************************
								NAVIGATION MENU
*****************************************************************-->


  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Masoko Levy MS</a>
      </div>
      <div class="navbar-collapse collapse">
            <?php  require "template/components/menu.php"; ?>
      </div>

  </nav>



<?php /*******************************************************************
								CONTENT AND RIGHT-SIDE LINKS
*****************************************************************/		?>
<?php

include "libraries/pager.php";
		if(isset($_SESSION['id'])){ ?>
    <div class="container" style="margin-top: 5em">
        <div class="col-lg-9">
            <?php require $content; ?>
        </div>
            <div class="col-lg-3">
                <?php require "template/components/links.php";?>

                </div>
            </div>

  <?php
    }else{ ?>
    <div class="container" style="margin-top: 5em">
        <div class="col-lg-12">
        <?php require $content; ?>
        </div>


<?php } ?>


<?php /*******************************************************************
								FOOTER
*****************************************************************/ ?>


      <div class="footer">
        <?php require "template/components/footer.php"; ?>
      </div>
    </div>

</body>
</html>
