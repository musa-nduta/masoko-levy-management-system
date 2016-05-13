

function validate(){
	
	var fname = document.forms["registration"]["fname"].value; 
	var lname = document.forms["registration"]["lname"].value; 
	var region = document.forms["registration"]["region"].value; 
	var dob = document.forms["registration"]["dob"].value; 
	var fname = document.forms["registration"]["fname"].value; 
	var username = document.forms["registration"]["username"].value; 

  
  if( fname ==""){
     alert( "Please provide your first name!" );
     document.registration.fname.focus() ;
     return false;
   }
  
   if( lname ==""){
     alert( "Please provide your Last name!" );
     document.registration.lname.focus();
     return false;
   }
   
   if( dob ==""){
     alert( "Please provide your Date of birth!" );
     document.registration.dob.focus();
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
 
   
   if( region == "" )
   {
     alert( "Please select your region!" );
     document.registration.region.focus() ;
     return false;
   }
   
   if( username == "" )
   {
     alert( "Please enter your username!" );
     document.registration.username.focus() ;
     return false;
   }
   
   
   
   
   
 return( true );
 

   



}