<?php
include 'Dbconnect.php';
session_start();
// error_reporting(0);
$mobile=$_POST['mobile'];
$mobile2 = str_replace(' ', '', $mobile);

$qry="SELECT * FROM `customer` WHERE `mobile_number`='$mobile2'";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0){
echo "exists";
}
else {
echo "does not exist";
}
?>