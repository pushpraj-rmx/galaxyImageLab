<?php include"admin/inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Service Details || Medical</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">

		
</head>

<body>
    <div id="preloader"></div>
    <!-- header-start -->
<?php include"inc/header.php"; ?>
    <!-- header-end -->

    <!-- other-page-top-area-start -->
    <div class="other-page-top-area bg-with-blue">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="other-page-top">
                        <h2 class="opt-title">SERVICES</h2>
                        <ul class="opt-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Services Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- other-page-top-area-end -->
    <!-- service-details-area-start -->
    <div class="service-details-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5 col-xs-12">
                    <div class="si-department">
                        <h3 class="sid-title">Services :-</h3>
                        <ul class="sid-list">
                            
<?php
$select = mysqli_query($con,"select * from service ");
while ($row =  mysqli_fetch_array($select)) { ?>
                            <li><a href="service-details.php?id=<?=$row['id']; ?>"><?=$row['title']; ?> <i class="fa fa-angle-right"></i></a></li>
<?php } ?>
<!-- 
                            <li><a href="#">5D Ultrasound & Color Doppler <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Fetal Echo <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Digital X-ray <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">HSG <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Laboratory <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Digital Mammography <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Dental X-ray <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Cardiology Tests <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Neurology Tests <i class="fa fa-angle-right"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="service-details">


<?php
$select = mysqli_query($con,"select * from service where id='$_REQUEST[id]' ");
$row =  mysqli_fetch_array($select);

?>




                        <div class="where-we">
                            <h2 class="sdetails-title"><?=$row['title'] ?> :-</h2>
                            <p class="sdetails-text"><?=$row['decs']; ?></p>
                            
                        </div>
						
						<a href="#" class="booknow"> Book Now</a>
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-details-area-end -->

    <!-- footer-start -->
<?php include"inc/footer.php"; ?>
    <!-- Scripts -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
