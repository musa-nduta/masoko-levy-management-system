<?php
$category=2;
require('../libraries/configurations.php');
require('./fpdf.php');

    
class PDF extends FPDF
{

function customerDetails(){ echo "details";
  /* if(isset($_GET['id'])){
                                    $id_ed = $_GET['id'];
                                    
                                    $orderq = mysql_query("SELECT * FROM order_tbl  WHERE order_id='$id_ed'") or die ('Error order info');

                                    while($rows =mysql_fetch_assoc($orderq)){
                                    
                                      $order_id=$rows['order_id'];
                                      $order_date=$rows['order_date'];
                                      $cust_id = $rows['customer_id'];
                                      $status= $rows['status'];
                                      $amount_paid=$rows['amount_paid'];
                                      $total=$rows['total_cost'];
                                      $custnameq =mysql_query("SELECT * FROM customer_tbl WHERE customer_id ='$cust_id'") or die('Error customer query');
                                      $rows2 = mysql_fetch_assoc($custnameq);
                                       $customer_name=$rows2['f_name'].' '.$rows2['l_name'];
                                        $phone_number=$rows2['phone_number'];
                                        $address=$rows2['address'];
                                        $email=$rows2['email'];
                                        $shipping_address=$rows2['address'];                              
				       
									}
									
									}
									
                       $this->setFont('Arial','B',12);
					   $this->cell(150,12, 'SALES INVOICE',0,0,'C');
					   $this->Ln();
					   $this->setFont('Arial','B',12);
					  
						$this->cell(90,12, 'Customer Details');
						$this->Ln();
						$this->setFont('Arial','',12);
						$this->cell(100,12,'Name: '.$customer_name);
						$this->Ln();
						$this->cell(70,10,'Phone Number: +'.$phone_number);
						$this->Ln();
						$this->Cell(70,12,'Physical Address: P.O BOX '.$address);
						$this->Ln();
						$this->Cell(70,12,'Email Address: '.$email);
						$this->Ln();
						$this->Cell(70,12,'Shipping Address: P.O BOX '.$shipping_address);
						$this->Ln();
						$this->Cell(70,12,'Location: '.$shipping_address);
						$this->Ln(); */
}

function TableItem($header1)
{

echo "item";
    /*     if(isset($_GET['id'])){
                                    $id_ed = $_GET['id'];
    // Column widths
	//('Item#', 'Description','Qty','Unit Price','Line Cost');
	/* $this->SetFillColor(255,0,0);
    
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');  
	
    $w = array(40,70,20,40,25);  
    // Header
    for($i=0;$i<count($header1);$i++)
	    
        $this->Cell($w[$i],9,$header1[$i],1,0,'C');
    $this->Ln();
        $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');

									   $itemquery="SELECT * FROM ordered_item_tbl  WHERE order_id='$id_ed'";
                                       $itemq=mysql_query($itemquery) or die (mysql_error());
                                        while ($itemrow=mysql_fetch_assoc($itemq)) {
                                        $item_id=$itemrow['item_id'];
                                       
                                        $quantity=$itemrow['quantity_odered'];
                                       $itemnameq=mysql_query("SELECT * FROM item_tbl where item_id='$item_id'");
                                        $itemnamerow=mysql_fetch_assoc($itemnameq);
                                        $item_name=$itemnamerow['item_name'];
                                       $item_price=$itemnamerow['price'];
										
										//for cost calculation										
										$total_cost = $quantity * $item_price;  
										
										
										
									$fill = false;

        $this->Cell($w[0],6,$itemrow['item_id'],'LR',0,'C',$fill);
		$this->Cell($w[1],6,$itemnamerow['item_name'],'LR',0,'C',!$fill);
        $this->Cell($w[2],6,$itemrow['quantity_odered'],'LR',0,'C',$fill);
        $this->Cell($w[3],6,$itemnamerow['price'],'LR',0,'C',!$fill);
        $this->Cell($w[4],6,$total_cost,'LR',0,'C',$fill);
        $this->Ln();
        $fill = !$fill;
	
	}				     		
										//grandCost = 0;
										//Error add only two rows
										$total_cost +=$total_cost;
					   
					     
									
   
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
							// Sum of all line cost
						  	$grandTotal = 0;
							$grandTotal += $total_cost;
						 $this->Ln();
						 $this->setY(180);
						$this->setX(160);
						$this->Cell(40,6,'Grand Total: '.$grandTotal);	
      } */
}	  

function footerSign(){ echo "sign";
 
		/*				$this->setY(190);
						$this->setX(120);
						
						$user = $_SESSION['user'];
						$queryUser = mysql_query("SELECT staff_id FROM users_tbl WHERE username = '$user'");
						$rowUser = mysql_fetch_assoc($queryUser); 
					    $staff_id = $rowUser['staff_id'];
						
						$staffnameq =mysql_query("SELECT * FROM staff_tbl WHERE staff_id = '$staff_id'");
						$staffrow = mysql_fetch_assoc($staffnameq);
						$this->Cell(70,12,'Authorized by: '.$staffrow['f_name'].' '.$staffrow['l_name']);
						$this->Ln();
						$this->setY(200);
						$this->setX(120);
						$this->Cell(70,12,'Signature: ..................');
						$this->Ln();
}*/

}}
 
 
$pdf = new PDF();
// Column headings
$header1 = array('Item#', 'Description','Qty','Unit Price','Line Cost');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->customerDetails();
//$pdf->TableItem($header1);
$pdf->footerSign();
$pdf->Output();
?>
