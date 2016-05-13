
// Form validation code will come here.
function validate()
{
 	
	var fname = document.forms["registration"]["fname"].value; 
	var mname = document.forms["registration"]["mname"].value; 
	var sname = document.forms["registration"]["sname"].value; 
	var district = document.forms["registration"]["district"].value; 
	var region = document.forms["registration"]["region"].value; 
	var street = document.forms["registration"]["street"].value; 
	var confpassword = document.forms["registration"]["confpassword"].value; 
	var password = document.forms["registration"]["password"].value;
	var checkmail = document.forms["registration"]["email"].value;
  	var atpos = checkmail.indexOf("@");
   var dotpos = checkmail.lastIndexOf(".");
   

	
 
   if( fname =="")
   {
     alert( "Please provide your first name!" );
     document.registration.fname.focus() ;
     return false;
   }
   
   
   if( mname =="")
   {
     alert( "Please provide your middle name!" );
     document.registration.mname.focus() ;
     return false;
   }
   
   if( sname =="")
   {
     alert( "Please provide your surname!" );
     document.registration.sname.focus() ;
     return false;
   }
   
   
	var gender = document.getElementsByName("gender");
                
       if ((gender[0].checked == false) && (gender[1].checked == false)){
             alert("Please Select Gender.");
             return false;
                } 	
                
    
    
    var mstatus = document.getElementsByName("mstatus");
                      
       if ((mstatus[0].checked == false) && (mstatus[1].checked == false) && (mstatus[2].checked == false) && (mstatus[3].checked == false)) {
             alert("Please Select Marital Status.");
             return false;
                }
      
   if( street == "" )
   {
     alert( "Please enter your street!" );
     document.registration.street.focus() ;
     return false;
   }
   
   if( password != confpassword )
   {
     alert( "Your Passwords does not match!" );
     document.registration.password.focus() ;
     return false;
   }
   
   if(atpos < 1 || dotpos < atpos+2 || dotpos+2 >= checkmail.length){ 
       alert("Please enter a correct email")
       document.registration.email.focus();
       return false;
   }
   
   
  
   return( true );
}








