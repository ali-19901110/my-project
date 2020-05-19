
<?php 
session_start(); 
include("admine/include/connection.php");
	
/*print_r($_SESSION['productcart']);die;*/
/*echo "<pre>";*/
/*print_r($_SESSION['productcart']);die;*/
$productCart =array();

if (isset($_SESSION['productcart'])) {
		
		foreach ($_SESSION['productcart'] as $pro_id) {
		$query  ="SELECT * FROM productpro WHERE pro_id=$pro_id";
		$result =mysqli_query($conn,$query);
		while ($row =mysqli_fetch_assoc($result)) {
		    $productCart[]=$row;
     
		}
	}
}
/*echo die;*/
/*echo "<pre>";*/

/*print_r($productCart[0]);die;*/

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Hamburger -->
			<div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

			<!-- Logo -->
			<div class="header_logo">
				<a href="#"><div>r<span>EADER</span></div></a>
			</div>

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">home</a></li>
					<li><a href="logout.php">woman</a></li>
					<li><a href="#">man</a></li>
					<!-- <li><a href="#">lookbook</a></li>
					<li><a href="#">blog</a></li>
					<li><a href="#">contact</a></li> -->
				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

		

			

				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="cart.php">
						<img src="images/bag.png" alt="">
						<div class="cart_num"><?php if (isset($_SESSION['productcart'])) {
							
						 echo count($_SESSION['productcart']) ; }?></div>
					</a></div>
				</div>

			</div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="menu_top d-flex flex-row align-items-center justify-content-start">

		

			

		</div>
		<div class="menu_search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">home</a></li>
				<li class="menu_mm"><a href="logout.php">Logout</a></li>
				<!-- <li class="menu_mm"><a href="#">man</a></li>
				<li class="menu_mm"><a href="#">lookbook</a></li>
				<li class="menu_mm"><a href="blog.html">blog</a></li>
				<li class="menu_mm"><a href="contact.html">contact</a></li>
				<li class="menu_mm"><a href="logout.php">logout</a></li> -->
				<li class="menu_mm"><a href="signup.php">Signup</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Sidebar -->

	<div class="sidebar">
		
		<!-- Info -->
		<div class="info">
			<div class="info_content d-flex flex-row align-items-center justify-content-start">
				
			
			

			</div>
		</div>

		<!-- Logo -->
		<div class="sidebar_logo">
			<a href="#"><div>r<span>EADER</span></div></a>
		</div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
				<li><a href="index.php">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="logout.php">Logout<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

				<li><a href="signup.php">Signup<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<!-- <li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li> -->
				<li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<!-- <li><a href="#">man<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li> -->

			</ul>
		</nav>

		<!-- Search -->
		<div class="search">
			<form action="#" class="search_form" id="sidebar_search_form">
				<input type="text" class="search_input" placeholder="Search" required="required">
				<button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="cart.php">
				<img src="images/bag.png" alt="">
				<div class="cart_num"><?php if (isset($_SESSION['productcart'])) {
					
				 echo count($_SESSION['productcart']) ; }?></div>
			</a></div>
				<?php
             $sum=0;
             if (isset($_SESSION['productcart'])) {
             	
             
 foreach ($_SESSION['productcart'] as $key=>  $value) {


 	$counter=($_SESSION['productcart'][$key]);
 	$query  ="SELECT * FROM productpro WHERE pro_id=$counter";
		$result =mysqli_query($conn,$query);
		while ($row =mysqli_fetch_assoc($result)) {
			
			$sum+= $row['pro_price'];
             
		    }
 }}
			 ?>
			<div class="cart_text">bag</div>
			<div class="cart_price">$ <?php echo $sum ?></div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">Cart</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.php">Home</a></li>
						<li>Your Cart</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart -->

	<div class="cart_section">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">
							
							<!-- Cart Bar -->
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-start">
									<li>Product</li>
									<li>DESCRIPTION</li>
									<li></li>
									<li>Price</li>
									<li></li>
									<li></li>
								</ul>
							</div>

							<!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">
									<!-- Cart Item -->
                              <?php
                              $sum=0;
                               /*$key=0;*/
                               if ($productCart) {
                               
                               
                                   foreach ($productCart as $key=> $singleproduct) {
                                   /*	echo "<pre>";
                                   	print_r($productCart);die;*/
                                   
                                 
                                   /*	echo $key ;*/
                                   	$sum+=$singleproduct['pro_price'];
                                   
                                   	?>
                                   	
                                  
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<div><div class='product_image'><img src='admine/uploadproduct/<?php echo $singleproduct['pro_image'] ?>' alt=''></div></div>
									<div class='product_name'><a href='product.html'><?php echo $singleproduct['pro_name'] ?></a></div>
																	</div>
										<div class="product_color text-lg-center product_text"><span>Color: </span><?php echo $singleproduct['pro_desc'] ?></div>
												<div class="product_size text-lg-center product_text"><span>Size: </span></div>
										<div class='product_price text-lg-center product_text'><span>Price: </span>$ <?php echo $singleproduct['pro_price'] ?></div>
								 <!-- <div class="product_quantity_container">
											 <div class="product_quantity ml-lg-auto mr-lg-auto text-center">
											<span class="product_text product_num"></span>
											<div class="qty_sub qty_button trans_200 text-center"><span></span></div>
											<div class="qty_add qty_button trans_200 text-center"><span></span></div>
																		</div> 
																	</div>-->
							<?php 
                              
							echo 	"<div class='product_total text-lg-center product_text'><a href='deletitem.php?skey=$key'  class='btn btn-danger'>remove</a></div>" ; ?>
									</li> 
							<?php	/*$key++;*/ }} ;
                                   /*echo key($productCart);*/
								/*echo die;*/ ?>
								</ul>
							</div>

							<!-- Cart Buttons -->
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_continue trans_200"><a href="index.php">continue shopping</a></div>
									<!-- <div class="button button_clear trans_200"><a href="categories.html">clear cart</a></div>
									<div class="button button_update trans_200"><a href="categories.html">update cart</a></div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section_container cart_extra_container">
			<div class="container">
				<div class="row">

					<!-- Shipping & Delivery -->
				<!-- 	<div class="col-xxl-6">
						<div class="cart_extra cart_extra_1">
							<div class="cart_extra_content cart_extra_coupon">
								<div class="cart_extra_title">Coupon code</div>
								<div class="coupon_form_container">
									<form action="#" id="coupon_form" class="coupon_form">
										<input type="text" class="coupon_input" required="required">
										<button class="coupon_button">apply code</button>
									</form>
								</div>
								<div class="shipping">
									<div class="cart_extra_title">Shipping Method</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="shipping_radio" class="shipping_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Next day delivery</span>
											</label>
											<div class="shipping_price ml-auto">$4.99</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="shipping_radio" class="shipping_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Standard delivery</span>
											</label>
											<div class="shipping_price ml-auto">$1.99</div>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="shipping_radio" class="shipping_radio" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Personal Pickup</span>
											</label>
											<div class="shipping_price ml-auto">Free</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div> -->

					<!-- Cart Total -->
					<div class="col-xxl-6">
						<div class="cart_extra cart_extra_2">
							<div class="cart_extra_content cart_extra_total">
								<div class="cart_extra_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto">$<?php echo $sum; ?></div>
									</li>
									<!-- <li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto">Free</div>
									</li> -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">$ <?php echo $sum; ?></div>
									</li>
								</ul>
								<div class="checkout_button trans_200"><a href="check.php">proceed to checkout</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
		<!-- 	<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title_container">
							<div class="newsletter_title">subscribe to our newsletter</div>
							<div class="newsletter_subtitle">we won't spam, we promise!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="your e-mail here" required="required">
								<button class="newsletter_button">submit</button>
							</form>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<!-- Footer -->

<?php include("includs/footer.php") ?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.3/popper.js"></script>
<script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
</body>
</html>