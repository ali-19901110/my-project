<?php 
session_start();
unset($_SESSION['customer_id']);
/*unset($_SESSION['productcart']);*/

header("location:index.php");

?>