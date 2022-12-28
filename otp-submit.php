<?php ob_start();
session_start();
include"admin/inc/config.php";
$userval="";
if(isset($_REQUEST['loginsubmit']))
{
	
$u="91".$_SESSION["phone"];
$p=$_REQUEST['password'];
$did='1';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://livehealth.in/verifyOTP/app/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('developerId' => '1','username' => $u,'verifyKey' => $p),
));

$response = curl_exec($curl);
curl_close($curl);



$decoded_json = json_decode($response, false);
$code=$decoded_json->code;

if($code==200){
	
				$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL => 'https://livehealth.in/userLoginInternationNumber/',
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => '',
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => true,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => 'POST',
				  CURLOPT_POSTFIELDS => array('username' => $u,'password' => '','isAuthenticated' => '1','developerId' => '1'),
				));

				$response2 = curl_exec($curl);
				curl_close($curl);
				$decoded_json2 = json_decode($response2, false);
                $code2=$decoded_json2->code;
				
				$_SESSION["token"]=$decoded_json2->token;
	            $userval="";header("location:reports.php"); 

	}
else{$userval="Invalid OTP ".". <a href='otp-request.php'><b>Click here to Request new OTP</b></a>";}
}	
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Login || Medical</title>
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

        <style type="text/css">
            .form-control {
    display: block;
    width: 100%;
    height: 52px !important;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143 !important;
       margin: 7px;
    background-color: #f9f8f8 !important;
    }

    .wts {
    background: #302f9a;
    color: white;
    font-size: 18px;
}
   .files {
    display: block;
    width: 100%;
    height: 52px !important;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143 !important;
    background-color: #f9f8f8 !important;
    border: 1px solid #d0c8c8;
    border-radius: 4px;
    margin: 9px !important;
}
.wts1 {
    background: #2c3193;
    width: 100%;
    color: white;
    font-weight: 700;
    border: none;
    font-size: 16px;
	margin: 7px;
}
        </style>
</head>

<body>
     
    <!-- header-start -->
<?php include"inc/header.php"; ?>

    
    
    
    <a href="https://api.whatsapp.com/send?phone=919319933228&text=I want to book my appointment in your lab, Please confirm me accordingly,"> <button class="side-btn"> Book an Appointment</button></a> 
    
    <a href="https://api.whatsapp.com/send?phone=919319933228&text=I want to book my appointment in your lab, Please confirm me accordingly,"><img src="img/what.png" style="position: fixed;z-index: 99999;bottom: 40px; right: 10px; width: 60px;"></a>
    
    
    
    <!-- mobile-menu-area-end -->
    <!-- other-page-top-area-start -->
  
    <!-- other-page-top-area-end -->

<br>
        <center><h4>Login</h4></center>  
<br>


<br>
  <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-4 mt-md-0 col-md-offset-4">
					 <div>
					    <h5><p align="center" style="color:red"><?php echo $userval;?></p></h5>
                        <form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
                            <div class="col-md-12 mt-15">
                             <input type="number" class="form-control" name="mobile" placeholder="Your Phone Number" value="<?php echo $_SESSION["phone"];?>">
                            </div>
                            
                            <div class="col-md-12 mt-15">
                                <input type="text" class="form-control" name="password" placeholder="OTP">
                            </div>
                   
                            <div class="col-md-12 mt-15">
                                 <input class="wts1" type="submit" value="Login" name="loginsubmit"/>
                            </div>  
                        </form>
					</div>	
						
                    </div> 
                </div>  
  </div>

                                  
                                  <br>  
                                   <br>  
                                    <br>                     
                            <!--
                                <div class="mt-3">
                                    <a href="https://api.whatsapp.com/send?phone=919319933228">
                                                   <button type="submit" class="btn btn-hover-fill wts">
                                                    <i class="icon-right-arrow">   
                                                   </i>
                                                    <span>Whatsapp</span>
                                                        <i class="icon-right-arrow"> 
                                 </i></button>

                                    </a>
                                     </-->                  
                    

      <!-- footer-start -->
<?php include"inc/footer.php"; ?>
    <!-- Scripts -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <script src="js/jquery.fancybox.min.js"></script>
   
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
