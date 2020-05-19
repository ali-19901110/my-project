<?php
session_start();
include("admine/include/connection.php");
$id = $_SESSION['customer_id'] ;
$query="SELECT * FROM orderpro where customer_id=$id";
$result=mysqli_query($conn,$query);
$product=mysqli_fetch_assoc($result);

/*echo $query;die;*/
/*echo "<pre>";
print_r($product);die;*/
include("test.php");
?>
<span class="display-4 text-warning">Thanks for choosing our website to shopping</span></br>
<span class="display-4 text-warning">Your Order Number of :<?php echo $product['order_id'] ?></span>

</div>

</header></div></body></html>