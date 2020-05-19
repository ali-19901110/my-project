<?php
/*echo "Thank you for choosing ourwebsit to shopping";*/
session_start();
include("admine/include/connection.php");
  $sum=0;
  $qty=0;

 foreach ($_SESSION['productcart'] as $key=>  $value) {
 	$counter=($_SESSION['productcart'][$key]);
  /*echo $counter;*/
  $qty++;
 	$query  ="SELECT * FROM productpro WHERE pro_id=$counter";
		$result =mysqli_query($conn,$query);
		while ($row =mysqli_fetch_assoc($result)) {
			
			$sum+= $row['pro_price'];
     $id=  $row['pro_name'] ;    
		    }
     }

 /*echo $counter;
  echo $qty;die;*/

$status="under process";
date_default_timezone_set("Asia/Amman");
$date = date('m/d/Y h:i:s a', time());
$customer_id =$_SESSION['customer_id'];

if ($_SESSION['productcart']) {
   $query ="INSERT INTO orderpro(order_date,customer_id,product_id,status,total_price,qty)
  VALUES ('$date',$customer_id,$counter,'$status',$sum,$qty)"; 
  mysqli_query($conn,$query);
 /* echo "111111111111111";*/
}
 
 /* echo $query ;die;*/
 
if ($_SESSION['productcart']) {
unset($_SESSION['productcart']);
 header("location:thanks.php");
}
else
{header("location:checkout.php");}

?>