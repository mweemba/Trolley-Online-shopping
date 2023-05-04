<?php include 'includes/level1/Top_side_plain.php'?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ <small><?php if($_SESSION['cif_id']){
  $total_query="SELECT SUM(`number_of_items`) as total FROM `cart` WHERE `userid`='$cust_id'";
    
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
					
        echo $row['total'];	
					}	
  }
  elseif($cart_session)
  {$total_query="SELECT SUM(`number_of_items`) as total FROM `cart` WHERE `Cart_id`='$cart_session' "; 
 $product = mysqli_query($conn,$total_query);
                    while ($row = mysqli_fetch_array($product)) {
					
        echo $row['total'];	
					}	
  }
else
echo "0";	
?> Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
	
	<?php 
	
	if(!$_SESSION['cif_id']){
	echo '<table class="table table-bordered">
		<tr><th> I AM ALREADY REGISTERED  </th></tr>
		 <tr> 
		 <td>
			<form class="form-horizontal" id="loginform" method="post" onsubmit="return false">
				<div class="control-group">
				  <label class="control-label" for="inputUsername">Username</label>
				  <div class="controls">
					<input  type="text" id="inputEmail1" placeholder="Email" required >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="inputPassword1">Password</label>
				  <div class="controls">
					<input type="password" id="inputPassword1" placeholder="Password"required >
				  </div>
				</div>
				<div class="control-group">
				  <div class="controls">
					<button class="btn" id="loginButton">Sign in</button> OR <a href="register.html" class="btn">Register Now!</a>
				  </div>
				</div>
				<div class="control-group">
					<div class="controls">
					  <a href="forgetpass.html" style="text-decoration:underline">Forgot password ?</a>
					</div>
				</div>
			</form>
			<div id="loginResponse"></div>
		  </td>
		  </tr>
	</table>';
	
	}
	
	?>		
			
	<table class="table table-bordered table-striped" id="summerytable">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity/Update</th>
				  <th>Price</th>
                  <th>Discount</th>
                  <th>Tax</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
			  <?php 
			  //$username=$_SESSION['username'];
			  if($_SESSION['cif_id']){
				  $TotalTx="";
				  $Totaldiscount="";
			  $prod_sql="SELECT * FROM `cart` INNER JOIN `product_pictures` ON `cart`.`product_id`=`product_pictures`.`product_id` INNER JOIN `products` 
			  ON  `cart`.`product_id`=`products`.`product_id` WHERE `cart`.`userid` ='$cust_id';";
			          $GrandTotal="";
						$product = mysqli_query($conn,$prod_sql);
						
                    while ($row1 = mysqli_fetch_array($product)) {
				
			  ?>
			  
			  <tr>
                  <td> <img width="60" src="admin/pages/product/uploads/<?php echo $row1['thumbnail'];?>" alt=""/></td>
                  <td><?php  echo $row1['product_name'];?><br/>Color : black, Material : metal</td>
				  <td>
				
					<div class="input-append"><input type="number" onkeyup="recalculateCart(<?php  echo $row1['product_id'];?>,this)"  onchange="recalculateCart(<?php  echo $row1['product_id'];?>,this)" class="span1" value="<?php  echo $row1['number_of_items'];?>" style="max-width:34px"  placeholder="1" id="appendedInputButtons" size="16" type="text"><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
				  </td>
                  <td>ZMK <?php  echo $row1['price']; ?> </td>
                  <td>ZMK<?php  echo $discount=$row1['Discount']*$row1['number_of_items'];?> </td>
                  <td>ZMK <?php  echo $tax= $row1['Tax']*$row1['number_of_items'];?> </td>
                  <td>ZMK <?php  echo $row1['product_total']-$discount+$tax;?> </td>
				  <?php
				  $TotalTx=+$tax;
				  $Totaldiscount=+$discount;
                  $GrandTotal=+ $row1['product_total']-$discount+$tax;
				   
				  ?>
                </tr>
			 
			  <?php }
			  }?>
			  
			  
	
                <tr>
                  <td colspan="6" style="text-align:right">SubTotal: </td>
                  <td> ZMK <?php echo $GrandTotal;?></td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right">Total Discount:	</td>
                  <td> ZMK <?php echo $Totaldiscount ?></td>
                </tr>
                 <tr>
                  <td colspan="6" style="text-align:right">Total Tax </td>
                  <td>ZMK <?php echo $TotalTx; ?>
</td>
                </tr>
				<tr>
                  <td colspan="6" style="text-align:right">Service Charge:</td>
                  <td> ZMK <?php echo $service=$GrandTotal * 0.10; ?> </td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right"><strong><!--TOTAL ($228 - $50 + $31)=--> </strong></td>
                  <td class="label label-important" style="display:block"> <strong> ZMK <?php echo $GrandTotal + $service; ?>  </strong></td>
                </tr>
				</tbody>
            </table>
		
		
          <!--  <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<form class="form-horizontal">
				<div class="control-group">
				<label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
				<div class="controls">
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="btn"> ADD </button>
				</div>
				</div>
				</form>
				</td>
                </tr>
				
			</tbody>
			</table>-->
			
			<table class="table table-bordered table-striped"">
			 <tr><th>Delivery Address </th></tr>
			 <tr> 
			 <td>
				<form class="form-horizontal">
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Select address </label>
					<div class="controls">
					  <Select type="text"  id="currentAddress" placeholder="Country" onchange="deliveryAdress()">
					<?php  
					 $customerid=$_SESSION['cif_id'];
				$address_sql="SELECT * FROM `addresses` WHERE `cif_id`='$customerid'";
					 
				$adresses = mysqli_query($conn,$address_sql);
                    while ($addressRow = mysqli_fetch_array($adresses)) {
						?>
					  <option value="<?php echo $addressRow['Address_id'];?>"><?php echo $addressRow['Line1']; echo $addressRow['Line2']; echo $addressRow['Town'];?></option>
					<?php }?>
					  </select>
					</div>
				  </div>
				  <div  class="alert alert-info" id="deliveryAddress" align="center">
					<?php $customerid=$_SESSION['cif_id'];
					$address_sql="SELECT * FROM `addresses` WHERE `cif_id`='$customerid' AND `DefaultAdress`='Yes'";
				$adresses = mysqli_query($conn,$address_sql);
                    while ($addressRow = mysqli_fetch_array($adresses)) {
						?>
					  <div><h5><?php echo $addressRow['Line1']; ?></h5></div>
					  <div><h5><?php echo $addressRow['Line 2'];?></h5></div>
					  <div><h5><?php echo $addressRow['Town'];?></h5></div>
					  <div><h5><?php echo $addressRow['Country'];?></h5></div>
					<?php }?>
				  </div>
				   <h4>If you buy now, Estmated Delivery Time is: <?php 
				   date_default_timezone_set("Africa/Harare");
				   echo date("h:i:sa");?> </h4>
				  <div class="control-group">
					<div class="controls">
					 <a href="DeliverAddresses.php" class="btn btn-large"> Add Another Address </a>
					  
					</div>
				  </div>
				</form>				  
			  </td>
			  </tr>
            </table>		
	<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php include 'includes/level1/footer.php';?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	<script src="scripts/login_confirm.js"></script>
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	<script src="scripts/addcart.js"></script>
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