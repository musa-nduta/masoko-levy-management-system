

<?php
            if (isset($_SESSION['en'])) //Check if the User Logging in is an entrepreneur
              {
                $vendor_id = $_SESSION['id'];
                 echo '<ul>
		                  <h3 id="menu-header">Quick Links</h3>
		                  <li><a href="index.php?q=pdetails" >View Your Details</a></li>
		                  <li><a href="index.php?q=update-pdetails" >Edit Personal Details</a></li>
                        <li><a href="index.php?q=payments" >Make Payment</a></li>
                        <li><a href="index.php?q=vendor-payment-report&id='.$vendor_id.'" >Payment History</a></li>
		                  <li><a href="index.php?q=viewm" >View Markets</a></li>
	                  </ul>';

					}


              elseif (isset($_SESSION['ma'])) //Check if the User Logging in is a Market Supervisor
               {

               echo '<ul>
		                  <h3 id="menu-header">Quick Links</h3>
		                  <li><a href="index.php?q=monthly_pay"  >Reports</a></li>
		                  <li><a href="index.php?q=entlist" >Vendors</a></li>
		                  <li><a href="index.php?q=newspost" >Post News</a></li>
		                </ul>';

               }
			   elseif (isset($_SESSION['ad'])) //Check if the User Logging in is an administrator
               {  echo '<ul>
		                  <h3 id="menu-header">Quick Links</h3>
		                  <li><a href="index.php?q=registerm" >Add Market</a></li>
		                  <li><a href="index.php?q=register-ma" >Add Market supervisor</a></li>

	                  </ul>';

			   }
	         else
			 {  echo '<ul>
		               <h3 id="menu-header">Quick Links</h3>
		               <li><a href="index.php?q=viewm" >Get Registered</a></li>
		              </ul>';
	          }
?>
