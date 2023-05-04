<?php 
session_start();
$pictureId=$_SESSION['picture_id'];
$product_id=$_SESSION['product_id'];

if($_POST)
            
{
	/*if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		
		echo "The Validation code is incorrect";
	
	}else{*/		
		include '../../../DBconnect.php';
;		
$picture =$_POST['picture'];
$filename =$_POST['filename'];

$sql="UPDATE `product_pictures` SET  `$picture`='$filename' WHERE `product_id`='$product_id'";
 $result3= mysqli_query($conn,$sql);
   if(mysqli_affected_rows($conn)<1){
 echo "A session could not be added due to some problem, please ty again";
    		
}else {
  echo "success";
  		}
	}