<?php
 session_start();
error_reporting(0);
$user=$_POST['username'];
$pass=$_POST['password'];
//$user="mweemba";
//$pass="gifted";
// $ewncryptedpass=crypt($pass);
 
 
 if($user){
    
    if($pass){
        require('Dbconnect.php');
	 $qr="SELECT * FROM `users` WHERE `username`='$user' OR email='$user'";
		
        $query=mysqli_query($conn,$qr);
        $numrows=mysqli_num_rows($query);
        if ($numrows==1){
            
            $row=mysqli_fetch_assoc($query);
            $dbuser=$row['username'];
            $dbpass = $row['password'];
            $dbactive=$row['active'];
            $dblevel=$row['level'];
            $cust_id=$row['cif_id'];
            
            if(hash_equals($dbpass, crypt($pass, $dbpass))){
			  
                if($dbactive==1){
                    if($dblevel==1){
                        $cart=$_SESSION['session_cart'];
                        $_SESSION['cif_id']=$cust_id;
                        $_SESSION['username']=$dbuser;
                        $_SESSION['level']=$dblevel;
						
                        if($_SESSION['session_cart']){
							
						$sql2="UPDATE `cart` SET `userid`='$cust_id' WHERE `Cart_id`='$cart'";	
						$query=mysqli_query($conn,$sql2);
                      						
						}		
                   echo 'success';
                    }
                    elseif($dblevel==2){
                    $cart=$_SESSION['session_cart'];
                        $_SESSION['cif_id']=$cust_id;
                        $_SESSION['username']=$dbuser;
                        $_SESSION['level']=$dblevel;
					
                       $sql2="UPDATE `cart` SET `userid`='$cust_id' WHERE `Cart_id`='$cart'";	
						$query=mysqli_query($conn,$sql2);
                       							
					echo 'success';  
                  }
              
                    }
                    else
                
                echo "you must activate your account to login";
                
                }else
            
            echo "You did not enter the correct password..";
            }else
            
            echo "Your user name was not found...<br> please sign up to have access";
            
               }else
    
    echo "you need to enter a password..";
       
       
       
       
    }else
       echo "you did not enter a username..";
 
 
 //}
 
  
      

?>   