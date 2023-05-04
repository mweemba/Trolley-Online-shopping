<?php
//error_reporting(E_ALL ^ E_NOTICE);
include 'sessions.php';
$product_id =$_GET['product_id'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome! <strong><?php echo $firstname;?></strong></div>
	<div class="span6">
	<div class="pull-right">
		
		<span class="btn btn-mini">Checkout</span>
		
		<span class="btn btn-mini" id="cartTotal" >ZMK<?php if($_SESSION['cif_id']){
  $total_query="SELECT SUM(`product_total`) as total FROM `cart` WHERE `userid`='$cust_id'";
    
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
        echo $row['total'];	
					}	
  }elseif($cart_session) {
 $total_query="SELECT SUM(`product_total`) as total FROM `cart` WHERE `Cart_id`='$cart_session' "; 
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
					

        echo $row['total'];	
					}	
  }		
else{
	echo '00.0';
}  
  ?></span>
		
		<a href="product_summary.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [<span id="cartQuanity"><?php if($_SESSION['cif_id']){
  $total_query="SELECT SUM(`number_of_items`) as total FROM `cart` WHERE `userid`='$cust_id'";
    
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
					
        echo $row['total'];	
					}	
  }
  elseif($cart_session)
  {$total_query="SELECT SUM(`number_of_items`) as total FROM `cart` WHERE `Cart_id`='$cart_session' "; 
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
					
        echo $row['total'];	
					}	
  }
else
echo "0";	

?></span>] Itemes in your cart </span> </a> 
	<div class='btn-group'>
          
          <?php
		  $signed1="
		  <button class='btn btn-success dropdown-toggle' data-toggle='dropdown'>My Account<span class='caret'></span></button>
		  <ul class='dropdown-menu'>
            <li><a href='EditProfile.php'>My Information</a></li>
            <li><a href='#'>Addresses</a></li>
            <li><a href='#'>Purchase History</a></li>
             <li><a href='logout.php'>Logout</a></li>
          </ul>";
		  $notsigned1="
		 <button class='btn btn-success dropdown-toggle' data-toggle='dropdown'>Account <?php;echo $firstname;?> <span class='caret'></span></button> 
		  <ul class='dropdown-menu'>
            <li><a href='register.php'>Sighnup</a></li>
            <li><a href='#'>Sign</a></li>
            
          </ul>
		  ";
		  if($cust_id){
	 echo $signed1;
	 }
	 else{
	 echo $notsigned1;
	 }
		  ?>
        </div><!-- /btn-group -->
	</div></div>
	
	
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.php" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	<li class=''><a href='special_offer.php'>Specials Offer</a></li>
	 <li class=''><a href='normal.php'>Delivery</a></li>
	 <li class=''><a href='contact.php'>Contact</a></li>
	 <li class=''>
	 <form action='login.php'>
	 <?php if($cust_id){
	 echo "<a href='logout.php' role='button' style='padding-right:0'><span class='btn btn-warning'>Logout</span></a>";
	 }
	 else{
	 echo "<a href='login.php' role='button' style='padding-right:0'><span class='btn btn-large btn-success'>Login</span></a>";
	 }
		  ?>
	 </form>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			</form>		
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png" alt="cart"><span id = "cart_number">
		<?php if($_SESSION['cif_id']){
  $total_query="SELECT SUM(`number_of_items`) as total FROM `cart` WHERE `userid`='$cust_id'";
    
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
					
        echo $row['total'];	
					}	
  }
  elseif($cart_session)
  {$total_query="SELECT SUM(`number_of_items`) as total FROM `cart` WHERE `Cart_id`='$cart_session' "; 
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
					
        echo $row['total'];	
					}	
  }		   
  else 
  {echo '0';}?>
</span> Items in your cart<span  id="total" class="badge badge-warning pull-right">ZMK 
		<?php if($_SESSION['cif_id']){
  $total_query="SELECT SUM(`product_total`) as total FROM `cart` WHERE `userid`='$cust_id'";
    
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
        echo $row['total'];	
					}	
  }elseif($cart_session) {
 $total_query="SELECT SUM(`product_total`) as total FROM `cart` WHERE `Cart_id`='$cart_session' "; 
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
					

        echo $row['total'];	
					}	
  }		
else{
	echo '00.0';
}  
  ?></span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			
			<li class="subMenu"><a> GLOCERIES [230]</a>
				<ul >
				<li><a class="active" href="products.php"><i class="icon-chevron-right"></i>Meat(100) </a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Cleaning Urgent s (30)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Drinks(80)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul>
			</li>
			<li class="subMenu open"><a> ELECTRONICS [230]</a>
				<ul style="display:none">
				<li><a class="active" href="products.php"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> CLOTHES [840] </a>
			<ul style="display:none">
				<li><a href="products.php"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
				<li><a href="products.php"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
				<ul style="display:none">
				<li><a href="products.php"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="products.php"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li>
			<li><a href="products.php">HEALTH & BEAUTY [18]</a></li>
			<li><a href="products.php">SPORTS & LEISURE [58]</a></li>
			<li><a href="products.php">BOOKS & ENTERTAINMENTS [14]</a></li>
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Panasonic</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222 </a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222 </a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>