    <header>
 <div class="header-top-area" id="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="header-top-left">
                            <p class="htl-reservation">

                                <i><a href="https://goo.gl/maps/qjJM2B58xXoPGjAH7" class="fa fa-map-marker"></a></i>A-64 Dwarka, Sec-7 (Beside. ICICI Bank)</p>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-xs-12">
                        <div class="header-top-left">
                            <a href="https://livehealth.in/login"><p class="htl-reservation"><i class="fa fa-mobile fam"></i>9319933228, 8920635474, 011-49538574</p></a>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-xs-12">
                        <div class="header-top-left">
                            <p class="htl-reservation">
                  <span>  <span style="color: yellow">4.9  </span>
                          <i class="fa fa-star str"></i>
                          <i class="fa fa-star str"></i>
                          <i class="fa fa-star str"></i>
                          <i class="fa fa-star str"></i>
                          <i class="fa fa-star str"></i> 
                          </span> &nbsp; 1,900  Google reviews
                          <!--
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            1,100 GOOGLE REVIEWS</p>
                            </-->
                        </p></div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="header-top-right">
						 
                            <ul class="htr-social">
                                <li><a href="https://api.whatsapp.com/send?phone=919319933228"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://www.facebook.com/Galaxy-Imaging-Path-Lab-100577128208586/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/galaxyimaginglab2020/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <div class="htr-search">
                                 <div class="box12">
                                           <button  class="gap22 day-button" onclick="window.location.href='otp-request.php'"> 
                                            <p class="fg">Use your mobile no.Given during registration as login id and create OTP and use it as your password.</p>Download Report</button>
                                       </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="container-fluid">
           
                <div class="row">
                
                    <div class="col-xs-4">
                        <div class="logo">
                            <a href="index.php"><img src="img/logo galaxy1.jpg" alt=""></a>
                        </div>
                    </div>
                
                    <div class="col-xs-8">
                        <div class="menu hidden-sm hidden-xs">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="index.php#health-package1">Health packages</a></li>
                                     <li><a href="javascript:(void)">Services</a>
                                        <ul class="menu-dropdown">

                                            <li><a href="ct-scan.php">CT Scan </a></li>
                                            <li><a href="5d-ultrasound.php">5D Ultrasound &amp; Color Doppler </a></li>
                                            <li><a href="fetal-echo.php">Fetal Echo </a></li>
                                            <li><a href="digital-xray.php">Digital X-ray </a></li>
                                            <li><a href="hsg.php">HSG </a></li>
                                            <li><a href="laboratory.php">Laboratory </a></li>
                                            <li><a href="digital-mamo.php">Digital Mammography </a></li>
                                            <li><a href="opg-xray.php">OPG Digital X-ray </a></li>
                                            <li><a href="cardiology.php">Cardiology Tests </a></li>
                                            <li><a href="neurology.php">Neurology Tests </a></li> 
                                        </ul>
                                    </li>
                                    
                                    <li><a href="gallery.php">Gallery</a></li>
                                    
                                    <li><a href="panel.php">Our Panel</a></li>
                                    
                                  <!-- <li class="report"><a href="https://livehealth.in/login" target="_blank">Download Report</a></li> 
                                    <li class="report">
                                        <div class="box12">
                                           <button  class="gap22 day-button" onclick="window.location.href='https://livehealth.in/login'" target="_blank"> 
                                            <p class="fg">Use your mobile no.Given during registration as login id and create OTP and use it as your password.</p>Download Report</button>
                                       </div>
                                    </li>
									-->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
        <!-- mobile-menu-area-start -->
    <div class="mobile-menu-area visible-xs visible-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile_menu">
                        <nav id="mobile_menu_active">
                            <ul>
                                <li><a href="index.php">Home</a>
                                    
                                </li>
                                <li><a href="about-us.php">About us</a></li>
                                <li><a href="index.php#health-package1">Health packages</a></li>
                                
                                  <li><a href="javascript:(void)">SERVICES</a>
                                        <ul class="menu-dropdown">
                                            <?php 

$select = mysqli_query($con,"select * from service ");
while ($row =  mysqli_fetch_array($select)) { ?>
                                            <li><a href="service-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?> </a></li>
<?php } ?>
                                            <!-- <li><a href="service-details.php">5D Ultrasound & Color Doppler</a></li>
                                            <li><a href="service-details.php">Fetal Echo </a></li>
                                            <li><a href="service-details.php">Digital X-ray </a></li>
                                            <li><a href="service-details.php">HSG </a></li>
                                            <li><a href="service-details.php">Laboratory </a></li>
                                            <li><a href="service-details.php">Digital Mammography </a></li>
                                            <li><a href="service-details.php">Dental X-ray </a></li>
                                            <li><a href="service-details.php">Cardiology Tests </a></li>
                                            <li><a href="service-details.php">Neurology Tests </a></li> -->
                                        </ul>
                                    </li>
                               
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="#reachs">Reach us</a></li>
                                 <li class="report">
                                  
                                  <div class="box12">
								  <a href="otp-request.php" target="_blank">
                                   <button class="gap22" > 
                                    <p class="fg">Use your mobile no.Given during registration as login id and create OTP and use it as your password. </p>Download Report</button>
                                    </a>  
                                      
                                       </div>
                                  </li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area-end -->