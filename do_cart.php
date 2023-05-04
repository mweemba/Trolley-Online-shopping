<?php 
include 'sessions.php';
$numberof_items = $_POST['numberofprod'];
if($cart_session){
include 'DBconnect.php';
$id="";	

$price = $_POST['price'];
$cart_id = $cart_session;
$product_id = $_POST['productid'];
$cartTotal =$price * $numberof_items;
$sql4="SELECT * FROM `cart` WHERE `Product_id`='$product_id' AND `Cart_id`='$cart_session'";
$result3= mysqli_query($conn,$sql4);
$numrows=mysqli_num_rows($result3);
if($numrows<1){
  $SQL3 = "INSERT INTO `cart`(`id`, `Cart_id`, `Product_id`, `userid`, `number_of_items`, `product_price`, `product_total`) VALUES
 ('$id','$cart_id','$product_id','$cust_id','$numberof_items','$price','$cartTotal')";
    $result3= mysqli_query($conn,$SQL3);
   if(mysqli_affected_rows($conn)<1){
 echo "A session could not be added due to some problem, please ty again";
    		
}else {
  echo "success";
  		}
  }
 else{
	 $Sql4="UPDATE `cart` SET `number_of_items`=`number_of_items`+'$numberof_items',`product_total`=`product_total`+'$cartTotal' WHERE `Product_id`='$product_id' AND `Cart_id`='$cart_session'"; 
	  $result3= mysqli_query($conn,$Sql4);
	  echo "success";
 }
}
  else{
	  $cart_sesstion_id=rand(000001,999999);
	  $_SESSION['session_cart']=$cart_sesstion_id;
	  $cart_session =$_SESSION['session_cart'];
	 include 'DBconnect.php';
$id="";	
$price = $_POST['price'];
$cart_id = $cart_session;
$cartTotal =$price * $numberof_items;
$product_id = $_POST['productid'];
$sql4="SELECT * FROM `cart` WHERE `Product_id`='$product_id' AND `Cart_id`='$cart_session'";
$result5= mysqli_query($conn,$sql4);
$numrows=mysqli_num_rows($result5);
if($numrows<1){
  $SQL3 = "INSERT INTO `cart`(`id`, `Cart_id`, `Product_id`, `userid`, `number_of_items`, `product_price`,`product_total`)
  VALUES ('$id','$cart_id','$product_id','$cust_id','$numberof_items','$price','$cartTotal')";
  $result3= mysqli_query($conn,$SQL3); 
  echo 'success';
  }
  else {
	 $Sql4="UPDATE `cart` SET `number_of_items`=`number_of_items`+'$numberof_items',`product_total`=`product_total`+'$cartTotal' WHERE `Product_id`='$product_id' AND `Cart_id`='$cart_session'"; 
	  $result3= mysqli_query($conn,$Sql4);
	  echo 'success';
  }
  }
   
?>