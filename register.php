<?php include 'includes/level1/Top_side_plain.php'?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	<form class="form-horizontal"  id="registrationForm" action="register.php" name="registrationForm" method="post"  onSubmit="return FormValidate();">
		<h4>Your personal information</h4>
				
		 <div class="control-group">
			<label class="control-label" for="User Name">User Name <sup><font color="red">*</font></sup></label>
			<div class="controls">
			  <input type="text" name="UserName" id="UserName" placeholder="User Name" onkeyup="useridvalidation()" required ><span id="UserNameValid"></span>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup><font color="red">*</font></sup></label>
		<div class="controls">
		  <input type="text" name="input_email" id="input_email" placeholder="Email" onkeyup="ValidateEmail()" required > <span id="emailValid"><span>
		</div>
	  </div>
     <div class="control-group">
		<label class="control-label" for="input_email">Re-enter Email <sup><font color="red">*</font></sup></label>
		<div class="controls">
		  <input type="text" id="re_enter_email" name="re_enter_email" placeholder="Re-enter email" onkeyup="checkBothEmail()" required ><span id="veryfyBoth"><span>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup><font color="red">*</font></sup></label>
		<div class="controls">
		  <input type="password" name="inputPassword1" id="inputPassword1" placeholder="Password" onkeyup="passidvalidation()"required ><span id="passwordValidate"><span>
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="inputPassword2">Password Confirm <sup><font color="red">*</font></sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword2" onkeyup="checkBothpasswords()" placeholder="Re-enter Password" required ><span id="checkbothpass"><span>
		</div>
	  </div>
		
	

	<!--<div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>	-->
		<div class="control-group">
			<label class="control-label" for="inputFname">First Name <sup><font color="red">*</font></sup></label>
			<div class="controls">
			  <input type="text" name="inputFname" id="inputFname" placeholder="First Name" required >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputLname">Last Name <sup><font color="red">*</font></sup></label>
			<div class="controls">
			  <input type="text" name="inputLname" id="inputLname" placeholder="Last Name" required />
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone <sup><font color="red">*</font></sup></label>
			<div class="controls">
			  <input type="text"  name="mobile" id="mobile" placeholder="Mobile Phone" onkeyup="CellNumberValid()" required /><span id="mobileValidate"><span> 
			</div>
		</div>
			<div class="control-group">
			<label class="control-label" for="mobile">GPS Coordinates <sup><font color="red">*</font></sup></label>
			<div class="controls">
			  <input type=""  name="gps" id="gps" placeholder="Mobile Phone"  required /><span id="dpsresponse"><span> 
			</div>
		</div>
		<div class="control-group">
		<a href="tac.php">Click to read terms and condition</a>
			
			<div class="controls">
			  
			</div>
		</div>
		<div class="control-group">
		<div class="controls">
		Validation code<img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <span><input id="captcha_code" name="captcha_code" type="text"><span>
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'><u>here</u></a> to refresh
		</div>
	</div>
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input id="btn-submit" name="btn-submit" class="btn btn-large btn-success" type="submit" value="Register" required  />
			</div>
		</div>
<div id="formResponse"></div>		
	</form>
	<?php  if(isset($_POST['btn-submit'])){
            
{
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		
		echo "The Validation code is incorrect";
	
	}else{		
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
  INSERT INTO `customer`(`cif_id`, `first_name`, `last_name`, `date_of_birth`, 
  `email`, `mobile_number`, `address1`, `address2`, `city_town`, `province`, 
  `genda`, `country`, `date_joined`, `rating`) VALUES ('$cif_id','$first_name','$last_name',
  '','$email','$cellphone','','','','','',
  '','$todaysdate','')";
  
    //$result3= mysqli_query($conn,$SQL3);
   if(!$conn->multi_query($SQL3)){
   
 echo "Your user could not be created, Please correct the errors and try again";
    		
}else {
$to = $email;
$subject = "Trolley.co.zm confirmation code";
echo $txt = "Dear!".$first_name."\n. Click on the link <a href='wwww.trolley.co.zm/signupconfirm.php'>Here</a> and enter your confirmation code:".$activation_code."to complete registration" ;
$headers = "From: infor@trolley.co.zm";
mail($to,$subject,$txt,$headers);
  echo '<script>window.location = "signupconfirm.php.";</script>';
  		}
//}

	
	}
	
}
}

?> 
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<?php include 'includes/level1/footer.php';?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	<script src="scripts/validations.js"></script>
	<!--<script src="scripts/signup.js"></script>
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>