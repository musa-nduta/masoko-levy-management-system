function deactivateAccount(){
$.ajax({
type: "POST",
url: "includes/vendors/vendor_deactivate_account.php",
success: function(html) {
alert("Account Deactivated1");
}
});
}


function changePassword(){
$.ajax({
type: "POST",
url: "includes/vendors/changePassword.php",
success: function(html) {
alert("Password Changed.");
}
});
}