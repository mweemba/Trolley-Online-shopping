<?php 
 include 'sessions.php';
$customerid=$_SESSION['cif_id'];
  $select=$_POST['currentAddress'];
					$address_sql="SELECT * FROM `addresses` WHERE `Address_id`= '$select'";
				$adresses = mysqli_query($conn,$address_sql);
				$numrows=mysqli_num_rows($adresses);
        if ($numrows==1){
                    while ($addressRow = mysqli_fetch_array($adresses)) {
						?>
					  <div><h5><?php echo $addressRow['Line1']; ?></h5></div>
					  <div><h5><?php echo $addressRow['Line 2'];?></h5></div>
					  <div><h5><?php echo $addressRow['Town'];?></h5></div>
					  <div><h5><?php echo $addressRow['Country'];?></h5></div>
					<?php }
					
		}else
		echo "The address is not found";	
		?>