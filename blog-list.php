<?php include"admin/inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Blog List || Medical</title>
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

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
<script>
    $(document).ready(function(){
        // alert("dsa");
      $( "#pre-btn" ).prop( "disabled", true );
      var page = 0;
      var page_num = 1;
        function load1()
        {
            $(".loader").css("display","block");
            // alert(page);
            var id = $("#id").val();
            // alert(id);
             $.ajax({
               url:"ajax/load.php",
               method:"post",
               data:{id:id,page:page},
               success:function(d){
                // alert(d);
                $("#data1").html(d);
                $("#page_num").html(page_num);
                $(".loader").css("display","none")
               }

            });
        }
           $(document).on("click", "#next-btn, #pre-btn", function(){
            
              var btn_name = $(this).attr("id");
              if (btn_name=="next-btn"){
                page++;
                page_num++;
                if (page > 0){
                  $( "#pre-btn" ).prop( "disabled", false );
                }
                // alert(page);  
                load1();
              }
              if (btn_name=="pre-btn"){
                page--;
                page_num--;
                if (page==0){
                  $( "#pre-btn" ).prop( "disabled", true );
                }
                // alert(page);  
                load1();
              }
              
           });
        load1();

    });
</script>


<style>
    .loader {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 999999999;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    text-align: center;
    padding-top: 20%;
    display: none;
}
.loader img {
    width: 70px;
        height: 70px;
}
.single-blog-list {
    margin: 0 0 50px;
    box-shadow: 2px 2px 8px rgba(0,0,0,0.5);
}
.blog-list-content {
    margin-top: 30px;
    padding: 0 10px 0 10px;
}
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
    width: 100%;
}
</style>






</head>

<body>
    <div id="preloader"></div>
  <?php include"inc/header.php"; ?>
    <!-- other-page-top-area-start -->
    <div class="other-page-top-area bg-with-blue">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="other-page-top">
                        <h2 class="opt-title">BLOGS</h2>
                        <ul class="opt-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- other-page-top-area-end -->
    <!-- blogs-area-start -->
    <div class="blogs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="position: relative;">
                    <div class="loader">
                        <img src="s_loader.gif">
                    </div>
                    <div class="blog-list-area" id="data1">
                        


                        
                       
                    </div>
                    <div class="col-md-12">
                        <div class="blog-pagination blog-list-pagination">
                            <ul>
                                <li id="pre-btn"><a class="bp-prev" href="javascript:(void)"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="javascript:(void)">Page<span id="page_num">1</span></a></li>
                                <li id="next-btn"><a class="bp-next" href="javascript:(void)"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- blogs-area-end -->
    <!-- search-doctor-area-start -->
    <div class="search-doctor-area bg-with-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="search-doctor-content">
                        <h4>Help is needed?</h4>
                        <p>Leave phone number and we will call back</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="search-doctor-box">
                        <input type="text" placeholder="Search your doctors">
                        <button>Send phone</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-doctor-area-end -->
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
