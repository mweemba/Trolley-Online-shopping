 <?php
  include 'sessions.php';
  
  $cart_session=$_SESSION['session_cart'];
  if($_SESSION['cif_id']){
  $total_query="SELECT SUM(`number_of_items`) as total FROM `cart` WHERE `userid`='$cust_id'";
    
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
					

        echo $row['total'];	
					}	
  }
  else 
  {
	 $total_query="SELECT SUM(`number_of_items`) as total FROM `cart` WHERE `Cart_id`='$cart_session' "; 
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
					

        echo $row['total'];	
					}	
  }		   
						?>