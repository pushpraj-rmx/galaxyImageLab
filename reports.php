<?php ob_start();
session_start();
include"admin/inc/config.php"; 
$userToken2=$_SESSION["token"];


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://livehealth.in/userReportListUpdated/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
 CURLOPT_POSTFIELDS => 'userToken='.$userToken2,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//var_dump($response);


$decoded_json = json_decode($response, true);
$code=$decoded_json['code'];

if($code==200){$userval="Welcome User";}
else{$userval="Invalid Username or Password";}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Reports || Medical</title>
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

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

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
    width: 125px;
    color: white;
    font-weight: 700;
    border: none;
    font-size: 16px;
    margin-top: 9px;
    margin-left: -57px;
        </style>
</head>

<body>
    
    <!-- header-start -->
<?php include"inc/header.php"; ?>

    
    
    
    <a href="https://api.whatsapp.com/send?phone=919319933228&text=I want to book my appointment in your lab, Please confirm me accordingly."> <button class="side-btn"> Book an Appointment</button></a> 
    
    <a href="https://api.whatsapp.com/send?phone=919319933228&text=I want to book my appointment in your lab, Please confirm me accordingly."><img src="img/what.png" style="position: fixed;z-index: 99999;bottom: 40px; right: 10px; width: 60px;"></a>
    
    
    
    <!-- mobile-menu-area-end -->
    <!-- other-page-top-area-start -->
    <div class="other-page-top-area-c bg-with-blue">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="other-page-top">
                        <h2 class="opt-title">Reports</h2>
                        <ul class="opt-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Reports</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- other-page-top-area-end -->

<br>
        <center><h4><?php echo $userval;?> - Download Reports</h4></center>  
		
<br>
<br>
  <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 mt-4 mt-md-0">
					  <table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col" style="width:5%">S.No</th>
							  <th scope="col">Reports Details</th>
							  
							   <th scope="col">Sample Date</th>
							    <th scope="col">Reports Date</th>
							  <th scope="col" style="width:5%">Download</th>
							</tr>
						  </thead>
						  <tbody>
						  
						  <?php 
						  

						  
						  echo "<br>";
						  $customers = $decoded_json['data'];
						  $i=1;
						  foreach($customers as $customer) {
								?>
									  <tr>
							  <th scope="row"><?php echo $i;?></th>
							  <td>
							  <?php $v=$customer['userDetailsId'];
							   echo $v['fullName']."(".$customer['sex'] .") - ";  echo $customer['reportName'];?>
							  </td>
							   <td><?php echo $customer['sampleDate'];?></td>
							    <td><?php echo $customer['reportDate'];?></td>
							  <td><a href="https://livehealth.in/mobileReportPDF/?userToken=<?php echo $userToken2;?>&userReportId=<?php echo $customer['userReportId'];?>" target="_blank"><i class="fa fa-download fa-2x"></i></a></td>
							</tr>
									<?php  $i++; }  ?>
							
							
						
						  </tbody>
						</table>
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
   
   
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
