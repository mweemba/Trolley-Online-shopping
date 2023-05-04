<?php
include 'Dbconnect.php';
session_start();
// error_reporting(0);
$user=$_POST['user'];
//$email='mw33mba@gmil.com';

$qry="SELECT * FROM `users` WHERE `username`='$user'";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0){
echo "exists";
}
else {
echo "does not exist";
}
?>