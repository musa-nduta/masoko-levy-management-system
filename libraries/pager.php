<?php

$q = (isset($_GET['q']))? $_GET['q'] : '';
//$id = (isset($_GET['id']))? $_GET['id'] : '';



switch($q){
	case 'login':
				$content="includes/login.php";
				break;
    
    case 'supv_list':
				$content="admin/list_admins.php";
				break;

	case 'register':
				$content="includes/vendors/register.php";
				break;

	case 'process-reg':
				$content="includes/vendors/process-reg.php";
				break;

	case 'registerm':
				$content="includes/markets/register_market.php";
				break;
    
    case 'success-registerm':
				$content="includes/markets/success_market_reg.php";
				break; 
    
    case 'failure-registerm':
				$content="includes/markets/failure_market_reg.php";
				break;
    

	case 'proc-update-pdetails':
				$content="includes/vendors/proc-update-pdetails.php";
				break;


	case 'register-ma':
				$content="admin/register_marketadmin.php";
				break;
    
    case 'contact-admin':
				$content="admin/contacts.php";
				break;

	case 'process-reg-ma':
				$content="admin/process-reg-ma.php";
				break;

	case 'viewm':
				$content="includes/markets/market_list.php";
                break;

	case 'market_details':
				$content="includes/markets/market_details.php";
				break;

	case 'pdetails':
				$content="includes/vendors/personal_details.php";
				break;
        
    case 'vendor-dashboard':
				$content="template/components/dashboards/vendors/vendor_dashboard.php";
				break;

        case 'payments':
				$content="includes/vendors/payment.php";
				break;
        
        case 'proc_payments':
				$content="includes/vendors/proc_payment.php";
				break;
						
		case 'process-upd':
				$content="includes/vendors/process-upd.php";
				break;

		case 'update-pdetails':
				$content="includes/vendors/update_personal_details.php";
				break;

		case 'search_market':
				$content="includes/markets/market_search.php";
				break;

		case 'search_ent':
				$content="includes/vendors/ent_search.php";
				break;


		case 'entlist':
				$content="includes/vendors/ent_list.php";
				break;

		case 'paid':
				$content="includes/vendors/total_paid.php";
				break;

		case 'entp_search':
				$content="includes/vendors/entp_search.php";
				break;


		case 'entpdetails':
				$content="includes/vendors/ent_personal_details.php";
				break;

		case 'newspost':
				$content="includes/blog/news_post.php";
				break;

	case 'news_disp':
				$content="includes/blog/news_disp.php";
                break;

	case 'news':
				$content="includes/blog/newspost.php";
				break;

	case 'welcome_ma':
				$content="includes/market_supervisors/welcome_ma.php";
				break;

		case 'welcome_en':
				$content="includes/vendors/welcome_en.php";
				break;

		case 'welcome_ad':
				$content="includes/welcome_ad.php";
				break;

		case 'name':
				$name="includes/vendors/names.php";
				break;

        case 'passwd_reset':
				$content="includes/password_reset.php";
				break;

        case 'account':
				$content="includes/vendors/vendor_deactivate_account.php";
				break;

        case 'panel':
				$content="control_panel.php";
				break;
        case 'changePass':
				$content="includes/vendors/changePassword.php";
				break;
        
        case 'afterpay':
				$content="includes/vendors/after_pay.php";
				break;
        
        case 'market_supervisor_dashboard':
                $content="template/components/dashboards/market_supervisor/market_supervisor_dashboard.php";
				break;
        
        
//        Deactivation Requests
        case 'deactivates':
				$content="includes/market_supervisors/deactivation_requests.php";
				break;
        
//        Deactivation Requests
        case 'deactivations':
				$content="includes/vendors/deactivation.php";
				break;
        
        
//        Reporting

        case 'vendor-payment-report':
				$content="includes/reports/vendors/payments.php";
				break;
        
        case 'reports':
				$content="includes/reports/markets/reports.php";
				break;
    
        case 'monthly_pay':
				$content="includes/reports/payments/payments_in_a_month.php";
				break;



	case 'logout':
				unset($_SESSION['id']);
				unset($_SESSION['en']);
				unset($_SESSION['ma']);
				unset($_SESSION['da']);
				unset($_SESSION['ra']);
				unset($_SESSION['ad']);
				session_unset();
				$content="includes/home.php";
				break;

	default:
		$content = "includes/home.php";
    ?>
       <!--Hidding the Links on the right when on the home page-->
        <style type="text/css">
            .col-lg-3{display:none;}
        </style>

    <?php
        break;

	}
?>
