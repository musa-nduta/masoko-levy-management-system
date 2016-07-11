function setUpdateAction() {
document.deactivate.action = "includes/vendors/deactivate.php";
document.activate.submit();
}


function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "includes/vendors/delete_user.php";
document.frmUser.submit();
}
}
