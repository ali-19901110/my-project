<?php 
session_start();
/*echo "<pre>";*/
echo $_GET['skey'];
/*print_r($_GET[skey] => 0);*/
/*echo $_GET['skey']."<pre>";*/
/*echo $_GET['totaprice'];*/

unset($_SESSION['productcart'][$_GET['skey']]);

header("location:cart.php");


?>