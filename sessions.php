<?php
session_start();
error_reporting(0);
include 'Dbconnect.php';
$cust_id=$_SESSION['cif_id'];
//$dbuser=$_SESSION['user'];
$dblevel=$_SESSION['level'];
$cart_session=$_SESSION['session_cart'];

        $query="SELECT * FROM `customer` WHERE `cif_id`='$cust_id'";
      
      $q1=mysqli_query($conn,$query)or die(mysqli_error());
        
        
            while ($row = mysqli_fetch_array($q1)) {
            
            $firstname=$row['first_name'];
           
            $semail = $row['email'];
            
            }


?> 