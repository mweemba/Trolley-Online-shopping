<?php
 include 'sessions.php';
 $user_id=$_SESSION['cif_id'];
 $number_of_product=$_POST['number'];
 $product_id=$_POST['product_id'];
 
$sql="UPDATE `cart` SET `number_of_items`='$number_of_product',`product_total`='$number_of_product'*`product_price`  WHERE `product_id`='$product_id' AND `userid`='$user_id'";
  $recalcu = mysqli_query($conn,$sql);
  $numrows=mysqli_num_rows($recalcu);
if($numrows>0){
	echo 'success';	
}else{
	
	
}
?>