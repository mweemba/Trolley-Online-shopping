<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'sessions.php';
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
            <li><a href='#'>My Information</a></li>
            <li><a href='#'>Addresses</a></li>
            <li><a href='#'>Purchase History</a></li>
             <li><a href='logout.php'>Logout</a></li>
          </ul>";
		  $notsigned1="
		 <button class='btn btn-success dropdown-toggle' data-toggle='dropdown'> Account <?php;echo $firstname;?> <span class='caret'></span></button> 
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