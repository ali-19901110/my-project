<?php
session_start();
/*echo "hello check ";*/
   if(isset($_SESSION['customer_id'])){
    
    header("location:checkout.php");}
  else{
  
    header("location:signup.php");
}
 ?>