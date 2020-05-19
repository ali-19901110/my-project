<?php
 /*session_start();*/
 include("admine/include/connection.php");
 
 /*$sum=0;
 foreach ($_SESSION['productcart'] as $key=>  $value) {
 	$counter=($_SESSION['productcart'][$key]);
 	$query  ="SELECT * FROM productpro WHERE pro_id=$counter";
		$result =mysqli_query($conn,$query);
		while ($row =mysqli_fetch_assoc($result)) {
			foreach ($row as $key => $value) {
				echo $key."<pre>";
			}

			echo "<pre>";
			print_r($row);
            echo $row['pro_id']."<pre>";
           if ($row['pro_id']==$row['pro_id']) {
           	echo "1";
           	echo"22";
           }
            for ($i=0; $i  $row['pro_id']; $i++) { 
            	$sum+= $row['pro_price'];
            }
			$sum+= $row['pro_price'];
             
		    }
 } echo $sum."<pre>";*/
  
  $sum=0;
  if (isset($_SESSION['productcart'])) {
  
  
 foreach ($_SESSION['productcart'] as $key=>  $value) {
 	$counter=($_SESSION['productcart'][$key]);
 	$query  ="SELECT * FROM productpro WHERE pro_id=$counter";
		$result =mysqli_query($conn,$query);
		while ($row =mysqli_fetch_assoc($result)) {
			
			$sum+= $row['pro_price'];
             
		    }
 }
}
  else{
 	 $sum=0;
 }/*echo $sum."<pre>";*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>aStar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
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
				<a href="#"><div>r<span>EADER</span></div></a>
			</div>

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">home</a></li>
					<li><a href="logout.php">logout</a></li>
					<li><a href="signup.php">Signup</a></li>
				<!-- 	<li><a href="#">lookbook</a></li>
					<li><a href="#">blog</a></li> -->
					<li><a href="#">contact</a></li>
				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

				<!-- Language -->
				<div class="info_languages has_children">
					<div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">english</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
				

			

				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="cart.html">
						<img src="images/bag.png" alt="">
						<div class="cart_num"><?php if (isset($_SESSION['productcart'])) {
							
						 echo  count($_SESSION['productcart']) ; }?>
						</div>
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
				<li class="menu_mm"><a href="contact.html">contact</a></li>
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
				<li><a href="logout.php">logout<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="signup.php">Signup<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<!-- <li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li> -->
				<li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
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
					
				 echo count($_SESSION['productcart']) ;} else { echo "0";} ?></div>
			</a></div>
			<div class="cart_text">bag</div>
			<div class="cart_price">$ <?php echo $sum ; ?></div>
		</div>
	</div>

