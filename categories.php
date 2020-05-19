<?php 
session_start();
include("admine/include/connection.php") ;
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="be Educated">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
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
				<a href="#"><div>be<span>educated</span></div></a>
			</div>

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">home</a></li>
					<li><a href="#">woman</a></li>
					<li><a href="#">man</a></li>
					
					<li><a href="#">contact</a></li>
				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">


				

				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="cart.php">
						<img src="images/bag.png" alt="">
						<div class="cart_num"><?php echo count($_SESSION['productcart']) ; ?></div>
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
				<li class="menu_mm"><a href="logout.php">logout</a></li>
				<li class="menu_mm"><a href="signup.php">Signup</a></li>
				<!-- <li class="menu_mm"><a href="#">lookbook</a></li>
				<li class="menu_mm"><a href="blog.html">blog</a></li> -->
				<li class="menu_mm"><a href="#contact">contact</a></li>
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
				
				<!-- Language -->
			

				<!-- Currency -->
			

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
					<li><a href="logout.php">logout<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="signup.php">Signup<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<!-- <li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li> -->
				<li><a href="#contact">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
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
					
				echo count($_SESSION['productcart']) ;} else{echo "0";} ?></div>
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
 } }
			 ?>
			<div class="cart_text">bag</div>
			<div class="cart_price">$ <?php echo $sum ?></div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
	 <?php 	$query ="SELECT * FROM categorypro WHERE cat_id=$_GET[cid]";
                           
                            $result =mysqli_query($conn,$query);
                          while( $productsh=mysqli_fetch_assoc($result)){	
                          	echo "<div class='parallax_background parallax-window' data-parallax='scroll' data-image-src= 'admine/uploadcat/{$productsh['cat_image']}' data-speed='0.8'></div>"; }?>
		<div class="home_container">
			<!-- <div class="home_content">
				<div class="home_title">Shop</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Woman</a></li>
						<li>Accessories</li>
					</ul>
				</div>
			</div> -->
		</div>
	</div>

	<!-- Products -->

	<div class="products">

		<!-- Sorting & Filtering -->
		<!-- <div class="products_bar">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="products_bar_content d-flex flex-column flex-xxl-row align-items-start align-items-xxl-center justify-content-start">
								<div class="product_categories">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li class="active"><a href="#">All</a></li>
										<li><a href="#">Hot Products</a></li>
										<li><a href="#">New Products</a></li>
										<li><a href="#">Sale Products</a></li>
									</ul>
								</div>
								<div class="products_bar_side ml-xxl-auto d-flex flex-row align-items-center justify-content-start">
									<div class="products_dropdown product_dropdown_sorting">
										<div class="isotope_sorting_text"><span>Default Sorting</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
										<ul>
											<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Default</li>
											<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Price</li>
											<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Name</li>
										</ul>
									</div>
									<div class="product_view d-flex flex-row align-items-center justify-content-start">
										<div class="view_item active"><img src="images/view_1.png" alt=""></div>
										<div class="view_item"><img src="images/view_2.png" alt=""></div>
										<div class="view_item"><img src="images/view_3.png" alt=""></div>
									</div>
									<div class="products_dropdown text-right product_dropdown_filter">
										<div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
										<ul>
											<li class="item_filter_btn" data-filter="*">All</li>
											<li class="item_filter_btn" data-filter=".hot">Hot</li>
											<li class="item_filter_btn" data-filter=".new">New</li>
											<li class="item_filter_btn" data-filter=".sale">Sale</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
							
							<!-- Product -->
							<?php 
							$query ="SELECT * FROM productpro WHERE cat_id=$_GET[cid]";
                            
                            $result =mysqli_query($conn,$query);
                          while( $productshow=mysqli_fetch_assoc($result)){
						echo 	'<div class="product grid-item hot">
									<div class="product_inner">';
						echo	   '<div class="product_image">';
						echo 		"<img src='admine/uploadproduct/{$productshow['pro_image']}' alt=''height='250' width='250'>  ";
						
						echo			'</div>';
						echo			'<div class="product_content text-center">';
						echo			"<div class='product_title'><a href='product.php?pid={$productshow['pro_id']}'>{$productshow['pro_name']}</a></div>";
						echo			"<div class='product_price'>$ {$productshow['pro_price']}</div>";
						
						echo			'</div>
														</div>	
													</div>';
												}
                                 ?>
		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
	<!-- 	<div class="container">
			<div class="row">
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
			</div>
		</div> -->
	</div>

	<!-- Footer -->

	<?php include("includs/footer.php") ?>
<!-- end footer -->
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
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/categories.js"></script>
</body>
</html>