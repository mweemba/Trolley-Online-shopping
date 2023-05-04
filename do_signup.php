<?php  if($_POST)
            
{
	/*if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		
		echo "The Validation code is incorrect";
	
	}else{*/		
		include 'DBconnect.php';
		
$first_name =$_POST['inputFname'];
$last_name =$_POST['inputLname'];
$username = $_POST['UserName'];
$password = $_POST['inputPassword1'];
$encrypt =crypt($password,"687hghfbs@#$#$%%^^^.plpGVfFf%%%&][][");
$email = $_POST['input_email'];
$cellphone = $_POST['mobile'];
$country = "Zambia";
$level = "2";
$active = "0";
$activation_code =rand(000001,999999);
$cif_gen =rand(000001,999999);
$cif_id="TR".$cif_gen;
$user_id ="";
$rating="0";
$rating="0";
$todaysdate=date('Y-m-d');

  $SQL3 = "INSERT INTO `users`(`username`, `password`, `level`, `date_created`, 
  `cif_id`, `email`, `active`, `activation_code`) VALUES ('$username','$encrypt'
  ,'$level','$todaysdate','$cif_id', '$email','$active','$activation_code');
  INSERT INTO `customer`(`cif_id`, `firs t_name`, `last_name`, `date_of_birth`, 
  `email`, `mobile_number`, `address1`, `address2`, `city_town`, `province`, 
  `genda`, `country`, `date_joined`, `rating`) VALUES ('$cif_id','$first_name','$last_name',
  '','$email','$cellphone','','','','','',
  '','$todaysdate','')";
  
    //$result3= mysqli_query($conn,$SQL3);
   if(!$conn->multi_query($SQL3)){
   
 echo "Your user could not be created, Please correct the errors and try again";
    		
}else {

  echo "success";
    	
  		}
//}

	
	}
	



?> 