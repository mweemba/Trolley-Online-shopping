<!--Designed by Fabian Shamano fabianshamano@yahoo.com-->
<!DOCTYPE php PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xphp1/DTD/xphp1-transitional.dtd"><head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Cars Online</title>
<link href="css/boot_strap/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="fonts/font-awesome.min.css"/>

<link rel="stylesheet" href="css/Themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/slideShow.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/sliderStyles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/Phones.css" media="screen and (min-width: 0px)" />
<link rel="stylesheet" href="css/phablets.css" media="screen and (min-width: 640px)" />
<link rel="alternate stylesheet" href="css/Basic.css" media="screen and (min-width: 640px)" title="basic" />
<link rel="stylesheet" href="css/Tablets.css" media="screen and (min-width: 860px)" title="advanced" />
<link rel="stylesheet" href="css/Themes/HomeStyle.css" media="screen and (min-width: 1120px)" title="advanced"/>
<link rel="stylesheet" href="css/Laptops.css" media="screen and (min-width: 1120px)" title="advanced"/>
<link rel="stylesheet" href="css/Monitors.css" media="screen and (min-width: 1450px)" title="advanced" />

    <!--this is your favicon-->    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <!--google analytics here-->
        
    <!--insert custom fonts here-->
     
     <!--[if lt IE 9]>
     	<script src="http//php5shim.ggolecode.com/svn/trunk/php5.js"></script>
     <![endif]-->

    <!-- Bootstrap -->

    <!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="scripts/boot_strap/php5shiv.min.js"></script>
      <script src="scripts/boot_strap/respond.min.js"></script>
    <![endif]-->

<style>
#parallaxLayer1 {
	background:url(images/Backgrounds/background1.jpg) no-repeat center;
	background-size:cover;
}

</style>
</head>
        
<body onload="set_style_from_cookie()">

<div id="loader-wrapper">
    <div id="loader"></div>
    	<h17><span><img src="images/lightbox/prev.png"></span> More Options</h17>
        <div class="txt">
            <p class="txt-perc">0%</p>
            <div class="progress"><span></span></div>
        </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

  <header>
  	<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
    	<div class="container">
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            	<a href="#" class="navbar-brand animated fadeInDownBig"><img src="images/logo.png"/></a>
            </div><!--end navbar-header-->
            <div class="collapse navbar-collapse animated fadeInDownBig" id="menu">
            	<ul class="nav navbar-nav">
                	<li class="active"><a href="#">Home</a></li>
                    <li><a href="AboutUs.php">About</a></li>
                    <li><div class="dropdown">
                    		<button class="btn btn-default dropdown-toggle navbar-btn" type="button" data-toggle="dropdown">Brands
                            </button>
                        
                    		<ul class="dropdown-menu">
    <li><a href="pages/Audi.php">Audi (10)</a></li> 
    <li><a href="pages/BMW.php">BMW (10)</a></li>
    <li><a href="pages/CAM.php">CAM (10)</a></li>
    <li><a href="pages/Chevrolet.php">Chevrolet (10)</a></li> 
    <li><a href="pages/Citroen.php">Citroen (10)</a></li>
    <li><a href="pages/Daihatsu.php">Daihatsu (10)</a></li>
    <li><a href="pages/Fiat.php">Fiat (10)</a></li>
    <li><a href="pages/Ford.php">Ford (10)</a></li>
    <li><a href="pages/GWM.php">GWM (10)</a></li>
    <li><a href="pages/Honda.php">Honda (10)</a></li>
    <li><a href="pages/hyundai.php">hyundai (10)</a></li>
    <li><a href="pages/Isuzu.php">Isuzu (203)</a></li>
    <li><a href="pages/KIA.php">KIA (13)</a></li>
    <li><a href="pages/Mazda.php">Mazda (10)</a></li>
    <li><a href="pages/Mercedes.php">Mercedes (10)</a></li>
    <li><a href="pages/Mitsubishi.php"> Mitsubishi (20)</a></li>
    <li><a href="pages/Nissan.php">Nissan (10)</a></li>
    <li><a href="pages/Opel.php">Opel (18)</a></li>
    <li><a href="pages/Peugeot.php">Peugeot (19)</a></li>
    <li><a href="pages/Renault.php">Renault (5)</a></li>                     
    <li><a href="pages/Subaru.php">Subaru (10)</a></li>
    <li><a href="pages/Suzuki.php">Suzuki (10)</a></li>
    <li><a href="pages/Toyota.php">Toyota (10)</a></li>
    <li><a href="pages/Volkswagen.php">VW (10)</a></li>
    <li><a href="pages/Volvo.php">Volvo (10)</a></li>
                            </ul>
                        </div><!--end dropdown-->
                    </li>
                    <li><a href="ContactUs.php">Contact Us</a></li>
                    <li><div class="dropdown">
                    		<button class="btn btn-default dropdown-toggle navbar-btn" type="button" data-toggle="dropdown">Login
                            </button>
                        
                    		<ul class="dropdown-menu loginDropdown">
                                <li>Profile</li> 
                                <li>Logs</li>
                                <li>Logout</li>
                            </ul>
                        </div><!--end dropdown-->
                    </li>
                </ul>
            </div><!--end collapse navbar-collapse-->
        </div><!--end container-->
    </div><!--end navbar-->
  </header>

<div id="aniSidebar">

<div id="cpBtn" onclick="toggleCP()">
  <div></div>
  <h6>Menu</h6>
  <div></div>
</div><!--End cpBtn-->

<div id="cp"><br/><br/>

	<ul id="aniMenu">
    
    <h13>Change Theme:</h13>

    <div id="altStyles">
    <form>
<input type="submit" onclick="switch_style('advanced');return false;" name="theme" value="Advanced Theme" id="advanced" />
<input type="submit" onclick="switch_style('basic');return false;" name="theme" value="Basic Theme" id="basic" />
	</form>
	</div><!--end altStlyes-->
    
    <br/><br/><br />

    <br />
                      
    
   <div class="aniSearch"><h14>ADVANCED SEARCH:</14>
   	<form action="./results.html" method="get">
    	
   		<h3>Brand & Model</h3>
        <div class="input">
        <input type="text" name="brand" placeholder="Car Brand" id="From" /> - <input type="text" placeholder="Car Model" name="model" id="To" />
        </div>

   		<h3>Condition & Location</h3>
        <div class="input">
        <input type="text" name="Condition" placeholder="Condition" id="From" /> - <input type="text" name="Location" placeholder="Location" id="To" />
        </div>
       
   		<h3>Body Type & Colour</h3>
        <div class="input">
        <input type="text" name="Body Type" placeholder="Body Type" id="From" /> - <input type="text" name="Colour" placeholder="Colour" id="To" />
        </div>
        
   		<h3>Year</h3>
        <div class="input">
        <input type="text" name="year" placeholder="Min Year" id="From" /> - <input type="text" placeholder="Max Year" name="year" id="To" />
        </div>
        
   		<h3>Mileage
</h3>
        <div class="input">
        <input type="text" name="Mileage
" placeholder="Min Mileage
" id="From" /> - <input type="text" name="Mileage
" placeholder="Max Mileage
" id="To" />
        </div>
        
   		<h3>Price</h3>
        <div class="input">
        <input type="text" name="price" placeholder="Min Price" id="From" /> - <input type="text" name="price" placeholder="Max Price" id="To" />
        </div>
        
   		<h3>Transmission & Fuel Type</h3>
        <div class="input">
        <input type="text" name="Transmission" placeholder="Transmission" id="From" /> - <input type="text" name="fuel" placeholder="Fuel Type" id="To" />
        </div>
        
   		<h3>Displacement</h3>
        <div class="input">
        <input type="text" name="Displacement" placeholder="Min Displacement" id="From" /> - <input type="text" name="price" placeholder="Max Displacement" id="To" />
        </div>
                        
    	<input type="submit" value="search (10)" id="search" />
    </form>
    
   </div><!--end aniSearch-->
   
   <br/>    

   </ul><!--aniMenu-->
  </div><!--End cp-->
  </div><!--End aniSidebar-->

<div id="wrapper" onClick="toggleCPOut()">
	    
	<div id="links">
        	<ul id="links">
                    <li><img src="images/facebook2.png" alt "" ></li>
                    <li><img src="images/twitter2.png" alt "" ></li>
            </ul>        
    </div>
	<div id="container">
	  
      <div id="gap"></div>	    	

            <div id="header">
              <div id="sliderSlot" class="slider-wrapper theme-default">
                <div id="slider" class="slideShow">
<img src="images/slide1.jpg" data-thumb="images/slide1.jpg" alt="" />
<img src="images/slide2.jpg" data-thumb="images/slide2.jpg" alt="" />
<img src="images/slide3.jpg" data-thumb="images/slide3.jpg" alt="" />
<img src="images/slide4.jpg" data-thumb="images/slide4.jpg" alt="" />
<img src="images/slide5.jpg" data-thumb="images/slide5.jpg" alt="" />
<img src="images/slide6.jpg" data-thumb="images/slide6.jpg" alt="" />
<img src="images/slide7.jpg" data-thumb="images/slide7.jpg" alt="" />
<img src="images/slide8.jpg" data-thumb="images/slide8.jpg" alt="" />
<img src="images/slide9.jpg" data-thumb="images/slide9.jpg" alt="" />
<img src="images/slide10.jpg" data-thumb="images/slide10.jpg" alt="" />
				</div>
             </div>
                
                
                <div class="logo"><div id="parallaxWrapper"><div id="parallaxLayer1"></div></div></div>
                  <div id="logoWrapper">
                	<div class="logopic"><img src="images/logo.png" /></div>
                	<div class="search">
                    	<form action="./results.php" method="get">
                        <input type="text" name="input" />
                        <input type="submit" value="search" id="search" />
                        </form>
                    </div>
                  </div><!--end logoWrapper-->
                
                <div style="clear:both"></div>
                    
            </div><!--end header-->
            
            <div id="content">
            
            	<div class="sidebar">
                	<div class="sidebar1">
                
                        <div id="sidebarToggle">Show/Hide Brands</div>
                        
                        <ul id="menu">
                            <li><a href="pages/Audi.php">Audi <br> (10)</a></li> 
                            <li><a href="pages/BMW.php">BMW <br> (10)</a></li>
                            <li><a href="pages/CAM.php">CAM <br> (10)</a></li>
                            <li><a href="pages/Chevrolet.php">Chevrolet <br> (10)</a></li> 
                            <li><a href="pages/Citroen.php">Citroen <br> (10)</a></li>
                            <li><a href="pages/Daihatsu.php">Daihatsu <br> (10)</a></li>
                            <li><a href="pages/Fiat.php">Fiat <br> (10)</a></li>
                            <li><a href="pages/Ford.php">Ford <br> (10)</a></li>
                            <li><a href="pages/GWM.php">GWM <br> (10)</a></li>
                            <li><a href="pages/Honda.php">Honda <br> (10)</a></li>
                            <li><a href="pages/hyundai.php">hyundai <br> (10)</a></li>
                            <li><a href="pages/Isuzu.php">Isuzu <br> (203)</a></li>
                            <li><a href="pages/KIA.php">KIA <br> (13)</a></li>
                            <li><a href="pages/Mazda.php">Mazda <br> (10)</a></li>
                            <li><a href="pages/Mercedes.php">Mercedes <br> (10)</a></li>
                            <li><a href="pages/Mitsubishi.php"> Mitsubishi <br> (20)</a></li>
                            <li><a href="pages/Nissan.php">Nissan <br> (10)</a></li>
                            <li><a href="pages/Opel.php">Opel <br> (18)</a></li>
                            <li><a href="pages/Peugeot.php">Peugeot <br> (19)</a></li>
                            <li><a href="pages/Renault.php">Renault <br> (5)</a></li>                     
                            <li><a href="pages/Subaru.php">Subaru <br> (10)</a></li>
                            <li><a href="pages/Suzuki.php">Suzuki <br> (10)</a></li>
                            <li><a href="pages/Toyota.php">Toyota <br> (10)</a></li>
                            <li><a href="pages/Volkswagen.php">VW <br> (10)</a></li>
                            <li><a href="pages/Volvo.php">Volvo <br> (10)</a></li>
                        </ul>
                        <div style="clear:both"></div>
                    </div><!--end sidebar1-->       

                    <div class="sidebar2">
                        <ul id="menu2">
                            <li><a href="pages/Audi.php">Audi <br> (10)</a></li> 
                            <li><a href="pages/BMW.php">BMW <br> (10)</a></li>
                            <li><a href="pages/CAM.php">CAM <br> (10)</a></li>
                            <li><a href="pages/Chevrolet.php">Chevrolet <br> (10)</a></li> 
                            <li><a href="pages/Citroen.php">Citroen <br> (10)</a></li>
                            <li><a href="pages/Daihatsu.php">Daihatsu <br> (10)</a></li>
                            <li><a href="pages/Fiat.php">Fiat <br> (10)</a></li>
                            <li><a href="pages/Ford.php">Ford <br> (10)</a></li>
                            <li><a href="pages/GWM.php">GWM <br> (10)</a></li>
                            <li><a href="pages/Honda.php">Honda <br> (10)</a></li>
                            <li><a href="pages/hyundai.php">hyundai <br> (10)</a></li>
                            <li><a href="pages/Isuzu.php">Isuzu <br> (203)</a></li>
                            <li><a href="pages/KIA.php">KIA <br> (13)</a></li>
                            <li><a href="pages/Mazda.php">Mazda <br> (10)</a></li>
                            <li><a href="pages/Mercedes.php">Mercedes <br> (10)</a></li>
                            <li><a href="pages/Mitsubishi.php"> Mitsubishi <br> (20)</a></li>
                            <li><a href="pages/Nissan.php">Nissan <br> (10)</a></li>
                            <li><a href="pages/Opel.php">Opel <br> (18)</a></li>
                            <li><a href="pages/Peugeot.php">Peugeot <br> (19)</a></li>
                            <li><a href="pages/Renault.php">Renault <br> (5)</a></li>                     
                            <li><a href="pages/Subaru.php">Subaru <br> (10)</a></li>
                            <li><a href="pages/Suzuki.php">Suzuki <br> (10)</a></li>
                            <li><a href="pages/Toyota.php">Toyota <br> (10)</a></li>
                            <li><a href="pages/Volkswagen.php">VW <br> (10)</a></li>
                            <li><a href="pages/Volvo.php">Volvo <br> (10)</a></li>                                
                        </ul>
                        <div style="clear:both"></div>
                    </div><!--end sidebar2-->
					
                </div><!--end sidebar-->    
                
                <div class="adds">
                	<div id="carSelect">
                    	<a>125,000 cars</a>
                    	<span>
                            <div class="orderBy">Order By</div>
                        	<ul class="orderList">
                            	<li class="listItem">Price</li>
                                	<ul class="orderOption">
                                    	<li>Assending</li>
                                    	<li>Desending</li>
                                	</ul>
                                <hr> 
                            	<li class="listItem">Year</li>
                                	<ul class="orderOption">
                                    	<li>Assending</li>
                                    	<li>Desending</li>
                                	</ul>
                                <hr>
                            	<li class="listItem">Mileage
</li>
                                	<ul class="orderOption">
                                    	<li>Assending</li>
                                    	<li>Desending</li>
                                	</ul>
                        	</ul>
						</span>
                    </div><!--end carSelect-->
                    
                    <div style="clear:both"></div>

                        <a href="pages/CarView/ChevroletView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleNew1"></div> 
                        		<div class="HandleNew2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (6).jpg" alt="" />    
                        			<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>
                        		</div><!--end carPic-->
                        		<div class="NewTag"><h7>New</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$250,000</h1></div>
                        	</div><!--end priceWrapper-->
                  		
                        
                  		</div><!--end carSlot-->
						</a>
                        
                        <a href="pages/CarView/ChevroletView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleTop1"></div> 
                        		<div class="HandleTop2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (9).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="TopTag"><h7>Top Seller</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$375,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>

                        <a href="pages/CarView/BMWView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleSpecial1"></div> 
                        		<div class="HandleSpecial2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (8).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="SpecialTag"><h8>Special</h8></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$120,000</h1></div>
                        	</div><!--end itemWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/MercedesView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleSold1"></div> 
                        		<div class="HandleSold2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (7).jpg" alt="" />
                                    <h11>
                                    <h12>
                                    <p>Audi TT Quatro</p>
                                    <p2>Sorry This car Has Been Sold</p2>
                                    </h12>
                                    </h11>    
                        		</div><!--end carPic-->
                        		<div class="SoldTag"><h7>Sold</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,250,000</h1></div>
                        	</div><!--end itemWrapper-->
                            
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/ChevroletView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleNew1"></div> 
                        		<div class="HandleNew2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (14).jpg" alt="" />    
                        			<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>
                        		</div><!--end carPic-->
                        		<div class="NewTag"><h7>New</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>

                        <a href="pages/CarView/MazdaView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleTop1"></div> 
                        		<div class="HandleTop2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (5).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="TopTag"><h7>Top Seller</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>

                        <a href="pages/CarView/MitsubishiView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleSpecial1"></div> 
                        		<div class="HandleSpecial2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (4).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="SpecialTag"><h8>Special</h8></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end itemWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/RenaultView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleSold1"></div> 
                        		<div class="HandleSold2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (3).jpg" alt="" />
                                    <h11>
                                    <h12>
                                    <p>Audi TT Quatro</p>
                                    <p2>Sorry This car Has Been Sold</p2>
                                    </h12>
                                    </h11>    
                        		</div><!--end carPic-->
                        		<div class="SoldTag"><h7>Sold</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end itemWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/CitroenView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleNew1"></div> 
                        		<div class="HandleNew2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (2).jpg" alt="" />    
                        			<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>
                        		</div><!--end carPic-->
                        		<div class="NewTag"><h7>New</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/BMWView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleTop1"></div> 
                        		<div class="HandleTop2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (1).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="TopTag"><h7>Top Seller</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/ToyotaView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleSpecial1"></div> 
                        		<div class="HandleSpecial2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (15).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="SpecialTag"><h8>Special</h8></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end itemWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/ToyotaView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleSold1"></div> 
                        		<div class="HandleSold2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (12).jpg" alt="" />
                                    <h11>
                                    <h12>
                                    <p>Audi TT Quatro</p>
                                    <p2>Sorry This car Has Been Sold</p2>
                                    </h12>
                                    </h11>    
                        		</div><!--end carPic-->
                        		<div class="SoldTag"><h7>Sold</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end itemWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/IsuzuView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleNew1"></div> 
                        		<div class="HandleNew2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (13).jpg" alt="" />    
                        			<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>
                        		</div><!--end carPic-->
                        		<div class="NewTag"><h7>New</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/HyundaiView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleTop1"></div> 
                        		<div class="HandleTop2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (11).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="TopTag"><h7>Top Seller</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/HondaView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleSpecial1"></div> 
                        		<div class="HandleSpecial2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (10).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="SpecialTag"><h8>Special</h8></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end itemWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>

                        <a href="pages/CarView/MazdaView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="carPic">
                            		<img src="images/Samples/car (20).jpg" alt="" />    
                        			<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>
                        		</div><!--end carPic-->
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/MitsubishiView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="carPic">
                            		<img src="images/Samples/car (17).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>
                        
                        <a href="pages/CarView/MercedesView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="carPic">
                            		<img src="images/Samples/car (14).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end itemWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>

                        <a href="pages/CarView/ChevroletView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleNew1"></div> 
                        		<div class="HandleNew2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (6).jpg" alt="" />    
                        			<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>
                        		</div><!--end carPic-->
                        		<div class="NewTag"><h7>New</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$250,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>

                        <a href="pages/CarView/ChevroletView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleTop1"></div> 
                        		<div class="HandleTop2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (9).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="TopTag"><h7>Top Seller</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$375,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>

                        <a href="pages/CarView/BMWView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleSpecial1"></div> 
                        		<div class="HandleSpecial2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (18).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="SpecialTag"><h8>Special</h8></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$120,000</h1></div>
                        	</div><!--end itemWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>

                        <a href="pages/CarView/SubaruView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleSold1"></div> 
                        		<div class="HandleSold2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (3).jpg" alt="" />
                                    <h11>
                                    <h12>
                                    <p>Audi TT Quatro</p>
                                    <p2>Sorry This car Has Been Sold</p2>
                                    </h12>
                                    </h11>    
                        		</div><!--end carPic-->
                        		<div class="SoldTag"><h7>Sold</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,250,000</h1></div>
                        	</div><!--end itemWrapper-->
                            
                  		</div><!--end carSlot-->
                        </a>

                        <a href="pages/CarView/ChevroletView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleNew1"></div> 
                        		<div class="HandleNew2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (19).jpg" alt="" />    
                        			<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>
                        		</div><!--end carPic-->
                        		<div class="NewTag"><h7>New</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>


                        <a href="pages/CarView/SubaruView.php">
                        <div class="carSlot">
                        
                        	<div id="itemWrapper">
                        		<div class="HandleTop1"></div> 
                        		<div class="HandleTop2"></div>
                        		<div class="carPic">
                            		<img src="images/Samples/car (5).jpg" alt="" />    
									<h5><h9>Audi TT Quatro</h9><br><br>
                                    <h15>
                                    Year	:	2015<br><br>
                                    Mileage	:	200000 km<br>
                                    </15>
									</h5>                        		
                            	</div><!--end carPic-->
                        		<div class="TopTag"><h7>Top Seller</h7></div>
                        	</div><!--end itemWrapper-->
                        	<div id="priceWrapper">
                        		<div class="PriceHandle"></div>
                            	<div class="price"><h1>$1,200,000</h1></div>
                        	</div><!--end priceWrapper-->
                  
                  		</div><!--end carSlot-->
                        </a>

                <div style="clear:both"></div>
                  
                </div><!--end add-->

              <div id="more">
                	<ul>
                        <li><a><<</a></li>
                        <li><a><</a></li>
                    	<li><a>1</a></li>
                        <li><a>2</a></li>
                        <li><a>3</a></li>
                        <li><a>></a></li>
                        <li><a>>></a></li>
                    </ul>
                </div>
              
   	  	</div><!--end contentWrapper-->
               
    </div><!--end container-->
    
    <div id="footer"></div>
	<div id="footerWrapper"><h10><p>Designed by Fabian Shamano<br />fabianshamano@yahoo.com</p></h10>
    
    	<div id="linksBottom">
        	<ul id="linksBottom">
            	<li><img src="images/facebook2.png" alt "" ></li>
                <li><img src="images/twitter2.png" alt "" ></li>
            </ul>        
    	</div><!--end linksBottom-->
    
    </div> 

	<div id="liveChatWrapper">
        <div id="chatToggle" onclick="toggleChat()">
            <div id="show-hide-chat">Live Chat (1)</div>
        </div><!--end chatToggle-->
        <div id="liveChat">
            <div id="chatHeader">Live Chat <span onclick="toggleChat()">X</span></div>
            <div id="chatHistory">
                <div class="msgToClient">
                    <div class="icon"><img src="images/operator.png"/></div>
                    <div style="clear:both"></div>
                    <div class="msgBox">Hi, Cars Online here how can we help you? Would you like to know more about how to make a purchase and the processing
                    </div><!--end msgBox-->
                </div><!--msgToClient-->
                
                <div class="msgFromClient">
                    <div class="icon"><img src="images/client.png"/></div>
                    <div style="clear:both"></div>
                    <div class="msgBox">Hi. I would like to know more about how to make a purchase and the processing
                    </div><!--end msgBox-->
                </div><!--msgFromClient-->
                
                <div class="msgToClient">
                    <div class="icon"><img src="images/operator.png"/></div>
                    <div style="clear:both"></div>
                    <div class="msgBox">Hi, Cars Online here how can we help you? Would you like to know more about how to make a purchase and the processing
                    </div><!--end msgBox-->
                </div><!--msgToClient-->
                
                <div class="msgFromClient">
                    <div class="icon"><img src="images/client.png"/></div>
                    <div style="clear:both"></div>
                    <div class="msgBox">Hi. I would like to know more about how to make a purchase and the processing
                    </div><!--end msgBox-->
                </div><!--msgFromClient-->
                
            </div><!--chatHistory-->
            <form action="" method="">
                <textarea class="message" type="text" name="input" placeholder="Message" id="chatMessage" ></textarea>
                <input type="submit" value="Send" id="chatSend" />
            </form>

        </div><!--end liveChat-->
	</div><!--end liveChatWrapper-->

</div><!--end wrapper-->

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="scripts/boot_strap/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="scripts/boot_strap/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="jquery.slideShow.js"></script>
	<script type="text/javascript" src="scripts/preloader/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="scripts/styleSwitch.js"></script>
</body>

</php>
<!--Designed by Fabian Shamano fabianshamano@yahoo.com-->