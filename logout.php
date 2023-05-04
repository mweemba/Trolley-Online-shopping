<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$cust_id=$_SESSION['cif_id'];
$dbuser=$_SESSION['user'];
$dblevel=$_SESSION['level'];

?>


  <?php 
  
  if ($cust_id){
    session_destroy();
    
    header("location:index.php");
  }else 
  
  echo '<h1 align=center>You are not logged in</h1>';
  
  ?>;
 

