<?php
    //A function to check if a user is login, otherwise they will be directed to the login page.
    checklogin();
?>
<form name="deactivate_account">
        <label for="amount">Amount</label>
            <input type="text" name="amount" placeholder="Amount in Shillings">

        <label for="receipt">Receipt Image</label>
            <input type="file" name="receipt" >

   <?php echo md5("Payment"); ?>
</form>
