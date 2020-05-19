
<?php 
session_start();
include("admine/include/connection.php") ;
$sum=0;
/*echo "<pre>";
print_r($_SESSION['productcart']);die;*/
	if (isset($_SESSION['productcart'])) {
		
 foreach ($_SESSION['productcart'] as $key=>  $value) {

 	$counter=($_SESSION['productcart'][$key]);
 	$query  ="SELECT * FROM productpro WHERE pro_id=$counter";
		$result =mysqli_query($conn,$query);
		while ($row =mysqli_fetch_assoc($result)) {
			
			$sum+= $row['pro_price'];
             
		    }}
 }
  /*echo $sum."<pre>";*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Beeducated</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Be educated">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
					<li><a href="logout.php">logout</a></li>
					<li><a href="signup.php">Signup</a></li>
					<!-- <li><a href="#">lookbook</a></li> -->
					<!-- <li><a href="#">blog</a></li> -->
					<li><a href="#contact">contact</a></li>
				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

				<!-- Language -->
			

				<!-- Currency -->
			

				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="cart.html">
						<img src="images/bag.png" alt="">
						<div class="cart_num"><?php if (isset($_SESSION['productcart'])) {
							
						 echo count($_SESSION['productcart']) ; } ?></div>
					</a></div>
				</div>

			</div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="menu_top d-flex flex-row align-items-center justify-content-start">

			

			<!-- Currency -->
		

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
				<!-- <li class="menu_mm"><a href="#">lookbook</a></li> -->
				<!-- <li class="menu_mm"><a href="blog.html">blog</a></li> -->
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
				<!-- <li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li> -->
				<!-- <li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li> -->
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
			<div class="cart_text">bag</div>

			<div class="cart_price">$ <?php echo $sum;  ?></div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
			<?php	$query="SELECT * FROM categorypro ";
                   $result=mysqli_query($conn,$query);
                   
                   while($catset=mysqli_fetch_assoc($result)){ ?>
				<div class="owl-item">
				<?php echo	"<div class='background_image' style='background-image:url(admine/uploadcat/{$catset['cat_image']})'></div>"; ?>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<!-- <div class="home_discount_num">20</div> -->
								<!-- <div class="home_discount_text">Discount on the</div> -->
							</div>
						<?php echo	 "<div class='home_title'>{$catset['cat_name']}</div>" ; ?>
						<?php echo	"<div class='button button_1 home_button trans_200'><a href='categories.php?cid={$catset['cat_id']}'>Shop NOW!</a></div>" ?>
						</div>
					</div>
				</div>
         <?php }    ?>
				<!--  Slide  -->
			

				<!--  Slide  -->
			<!-- 	<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
						</div>
					</div>
				</div> -->

			</div>
				
			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/prev.png" alt=""></div></div>
			<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/next.png" alt=""></div></div>

		</div>
	</div>

	<!-- Boxes -->
	
	<div class="boxes">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<?php 
                      
                   $query="SELECT * FROM categorypro ";
                   $result=mysqli_query($conn,$query);
                   
                   while($catset=mysqli_fetch_assoc($result)){
                   echo '<div class="col-lg-4 box_col">';
					echo   '<div class="box">';
					echo   "<div class='box_image'><img src='admine/uploadcat/{$catset['cat_image']}' alt='' width='350' height='180'></div>";
					echo	"<div class='box_title trans_200'><a href='categories.php?cid={$catset['cat_id']}'>{$catset['cat_name']}</a></div>";
					echo	'</div>';
					echo '</div>';
				           }
					?>
					<!-- Box -->
					

					<!-- Box 
					
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/box_2.jpg" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">eyewear collection</a></div>
						</div>
					</div>

					 Box 
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/box_3.jpg" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">basic pieces</a></div>
						</div>
					</div>-->

				</div>
			</div>
		</div>
	</div>

	<!-- Categories -->

	<!-- <div class="categories">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="categories_list_container">
							<ul class="categories_list d-flex flex-row align-items-center justify-content-start">
								<li><a href="categories.html">new arrivals</a></li>
								<li><a href="categories.html">recommended</a></li>
								<li><a href="categories.html">best sellers</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Products -->

	<div class="products">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
							
							

							<!-- Product 
							<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_8.jpg" alt="">
										<div class="product_tag">sale</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">denim men shirt</a></div>
										<div class="product_price">$43.99<span>RRP 64.40</span></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>-->

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<!-- <div class="container">
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
<script src="js/custom.js"></script>
</body>
</html>