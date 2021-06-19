<?php
//to check whether user is logged in or not
if(!isset($_SESSION['user']))
{
    //user not login
    $_SESSION['no-login-message'] = "<div class='error'> Please Login to access the admin panel.</div>";
    
    header('location:'.SITEURL.'admin/login.php');
}
?>