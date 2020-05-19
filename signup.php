
<?php
session_start();
include("admine/include/connection.php");
if (isset($_POST['signup'])) {
  /*echo "1111";die;*/
  #fitch data from webForm
   $name    = $_POST["name"];
   $email   = $_POST["email"];
   $pass    = $_POST["psw"];
   $mob  = $_POST["mobile"];
   $address= $_POST["address"];
  
    
  //perform query
  $query ="INSERT INTO customerpro(customer_name,customer_email,customer_password,mobile,address)
  VALUES ('$name','$email','$pass','$mob','$address')";
  mysqli_query($conn,$query);



}


if(isset($_POST['login'])){
/* echo "222222";die;*/
    $emaill=$_POST['emaill'];
    $passs=$_POST['passwordd'];
    
    $query="SELECT * from customerpro  where customer_email = '$emaill' AND customer_password='$passs'";
    $result=mysqli_query($conn,$query);
    $customerset=mysqli_fetch_assoc($result);

   /* echo "<pre>";
    print_r($adminset);die;*/

    if(isset($customerset['customer_id'])){
    $_SESSION['customer_id']=$customerset['customer_id'];
    header("location:checkout.php");}
  else{
   $error= " user not found";
   /* header("location:signup.php");*/
}
}




    
 

/*header("location:signup.php");*/
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signup.css">
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
 <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <title></title>
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
        <!--   <li><a href="#">lookbook</a></li>
          <li><a href="#">blog</a></li>
          <li><a href="#">contact</a></li> -->
        </ul>
      </nav>

      <!-- Header Extra -->
      <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

      

     

        <!-- Cart -->
        <div class="cart d-flex flex-row align-items-center justify-content-start">
          <div class="cart_icon"><a href="cart.html">
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
        <li class="menu_mm"><a href="blog.html">blog</a></li>
        <li class="menu_mm"><a href="contact.html">contact</a></li> -->
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
      <a href="index.php"><div>r<span>EADER</span></div></a>
    </div>

    <!-- Sidebar Navigation -->
    <nav class="sidebar_nav">
      <ul>
        <li><a href="index.php">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        <li><a href="logout.php">logout<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        <li><a href="signup.php">Signup<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
     <!--    <li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
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
        <div class="cart_num"><?php echo count($_SESSION['productcart']) ; ?></div>
      </a></div>

          <?php
             $sum=0;
 foreach ($_SESSION['productcart'] as $key=>  $value) {
  $counter=($_SESSION['productcart'][$key]);
  $query  ="SELECT * FROM productpro WHERE pro_id=$counter";
    $result =mysqli_query($conn,$query);
    while ($row =mysqli_fetch_assoc($result)) {
      
      $sum+= $row['pro_price'];
             
        }
 }
       ?>
      <div class="cart_text">bag</div>
      <div class="cart_price">$ <?php echo $sum ?></div>
    </div>
  </div>
 



<form  action="" method="post">
      
       
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="Email" name="emaill" class="form-control" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="passwordd" class="form-control" placeholder="Password">
        </div>
          <?php
          if(isset($error))
              {echo "<div class='alert alert-danger' >$error</div>";}
                          ?>
      <button type="submit"  name="login">Sign in</button>
    </form>
  






<form action="" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label  ><b>Name</b></label>
    <input class="ml-2" type="text" placeholder="Enter Name" name="name" required> 
<br>
    <label ><b>Email</b></label>
    <input class="ml-2" type="text" placeholder="Enter Email" name="email" required>
<br>
   <label ><b>Mobile</b></label>
    <input class="ml-2" type="text" placeholder="Enter Mobile" name="mobile" required>
<br>
   <label ><b>Address</b></label>
    <input class="ml-2" type="text" placeholder="Enter Address" name="address" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input class="ml-2" type="password" placeholder="Enter Password" name="psw" required>
<br>
<!--     <label for="psw-repeat"><b>Repeat Password</b></label>
    <input class="ml-2" type="password" placeholder="Repeat Password" name="psw-repeat" required>
<br> -->
 <!--    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
<br> -->
<!--     <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
 -->
    <div class="clearfix">
      
      <button type="submit"  name="signup">Sign Up</button>
    </div>
  </div>
</form>


  
</div>






    
</body>
</html>

