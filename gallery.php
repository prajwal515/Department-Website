<?php

session_start();


?>

<?php
include('conn.php');
$sql = "SELECT * FROM `student`";
$student=0;
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
		
        while($row = mysqli_fetch_array($result)){
			
			$student=$student+1;
	
    }
        
        mysqli_free_result($result);
    } else{
        $student=0;
    }
} else{
    $student=0;
}

//faculty
$sql = "SELECT * FROM `faculty`";
$faculty=0;
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
		
        while($row = mysqli_fetch_array($result)){
			
			$faculty=$faculty+1;
	
    }
        
        mysqli_free_result($result);
    } else{
        $faculty=0;
    }
} else{
    $faculty=0;
}

//gallery
$sql = "SELECT * FROM `gallery`";
$gallery=0;
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
		
        while($row = mysqli_fetch_array($result)){
			
			$gallery=$gallery+1;
	
    }
        
        mysqli_free_result($result);
    } else{
        $gallery=0;
    }
} else{
    $gallery=0;
}


//notification
$image=array();
$sql = "SELECT * FROM `gallery` ORDER BY id DESC";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
		
        while($img = mysqli_fetch_assoc($result)){
			
			$image[]=$img;
	
    }
        
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}




?>



<!DOCTYPE html>
<html lang="en">
     

<head>
        <title>MCA Deportment SJCE, Mysore</title>        
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/img/my img/logo.png">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
        
        <!-- Load Core CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/core/bootstrap-3.3.7.min.css">
        <link rel="stylesheet" href="assets/css/core/animate.min.css">
        
        <!-- Load Main CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/main/main.css">
        <link rel="stylesheet" href="assets/css/main/setting.css">
        <link rel="stylesheet" href="assets/css/main/hover.css">
        
        <!-- Load Magnific Popup CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/magnific/magic.min.css">        
        <link rel="stylesheet" href="assets/css/magnific/magnific-popup.css">              
        <link rel="stylesheet" href="assets/css/magnific/magnific-popup-zoom-gallery.css">
        
        <!-- Load OWL Carousel CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.transitions.css">
        
        
        <link rel="stylesheet" href="assets/css/color/pasific.css">
        
         
        <link rel="stylesheet" href="assets/css/icon/font-awesome.css">
        <link rel="stylesheet" href="assets/css/icon/et-line-font.css">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/angular.min.js" type="text/javascript"></script>
        
        
    </head>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">
	
        
        <!-- Page Loader
        ===================================== -->
		
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <!-- Navigation Area
        ===================================== -->
		
        <nav class="navbar navbar-pasific navbar-mp navbar-standart megamenu navbar-fixed-top" style="border-bottom:1px solid #fff;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="" href="#page-top" style="font-size: 30px">
                        <img src="assets/img/my img/logo.png" alt="logo" width="40px">
                        <b>SJCE</b>
                    </a>
                </div>
        
                <div class="navbar-collapse collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown megamenu-fw has-dropdown-menu"><a href="index.php"  class="dropdown-toggle color-light">Home </a>
                            
                        </li>
                        
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Academics </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown">Time Table</a>
                                    <ul class="dropdown-menu">
                                         <?php 
                                        if(count($time) > 0){
						foreach($time as $k=>$v)
                                                 
						{
                                        ?>
                                        <li><a href="<?php echo $v['file'] ?>" download>Download</a></li>
                                        <?php
                                                }
                                        }
                                        ?>
                                        <li><a href="#time_table_show">Show</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown">Calander Of Event</a>
                                    <ul class="dropdown-menu">
                                        <?php 
                                        if(count($calander) > 0){
						foreach($calander as $k=>$v)
                                                 
						{
                                        ?>
                                        <li><a href="<?php echo $v['file'] ?>" download>Download</a></li>
                                        <?php
                                                }
                                        }
                                        ?>
                                        <li><a href="#calander_show">Show</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown">Syllabus</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="PDF_Files\MCA SYLLABUS.pdf" download>Download</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Examination  </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="http://results.jssstuniv.in/"><i class="fa fa-spinner"></i>Results</a></li>
								<li><a href="shortcode-animations.html"><i class="fa fa-spinner"></i>Internal Markes</a></li>
                            </ul>
                        </li>
                    
                        <li class="dropdown"><a href="#placement" class="dropdown-toggle color-light">Placements </a>
                            
                        </li>
                    
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">About</a>
                            <ul class="dropdown-menu has-submenu" role="menu">
                                <li class="dropdown">
                                    <a href="facultylist.php">Faculties</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#vision">Vision & Mission</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#contact">Contact As</a>    
                                </li>
                            </ul>
                        </li>
                        <li><a href="as" ><i class="fa fa-bell fa-fw color-pasific"></i></a></li>
                        
                    </ul>
                
                </div>
            </div>
        </nav>
        
        
        
        <!-- Subheader Area
        ===================================== -->
        <header class="mt70" style="background-color:#3989C7;">

            <div class="container">
                <div class="row ">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100"><span class="primary-text">M</span>aster of <span class="primary-text">C</span>omputer <span class="primary-text">A</span>pplications</h3>
                    </div>
                    <div class="col-md-6 text-right pt35">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a>
							
                            <li><a href="http://results.jssstuniv.in/">Results</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </header>
        
        
        
        <!-- Blog Area
        ===================================== -->
        <div id="blog" class="pt20 pb50">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-9 col-md-push-3 mt25">
                        <div><center><h1>Gallery</h1></center></div>
                        <div class="row">
                            <?php
					$i=0;
					if(count($image) > 0){
						foreach($image as $k=>$v)
                                                    if($i<21){
						{
							
							?>
                            
                            <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                                <img src="<?php echo $photo=$v['image'];?>" class="img-responsive" height="160px" width="320px" alt="image blog">
                            </div>
                            <?php
                                $i=$i+1;                
                                                }
                                                }
                                        }
                            ?>
                        </div>
                    </div>
                    
                    
                    
                    <!-- Blog Sidebar
                    ===================================== --> 
                    <div id="sidebar" class="col-md-3 col-md-pull-9 mt50 animated" data-animation="fadeInRight" data-animation-delay="250">           
                        
                        
                        <!-- Search
                        ===================================== -->
                        
                        
                        
                        <!-- Categories
                        ===================================== -->
                        <div class="mt1 pr25 clearfix">
                            <h5 class="mt5">
                                MCA Status
                                <span class="heading-divider mt10"></span>
                            </h5>                            
                            <ul class="shop-sidebar pl25">
                                <li class="active">Students<span class="badge badge-pasific pull-right"><?php echo $student; ?></span></li>
                                <li><a href="facultylist.php">Faculty<span class="badge badge-pasific pull-right"><?php echo $faculty;?></span></a></li>
                                <li><a href="gallery.php">Gallery<span class="badge badge-pasific pull-right"><?php echo $gallery;?></span></a></li>
                                <li><a href="#">Sport<span class="badge badge-pasific pull-right"></span></a></li>
                                <li><a href="https://jssstuniv.in/">About Campus</a></li>
                            </ul>
                           
                        </div>
                        
                        
                        
                        
                        
                        <!-- Popular Products
                        ===================================== -->
                        <div class="mt25 pr25 clearfix">
                            <h5 class="mt25">
                                Popular Post
                                <span class="heading-divider mt10"></span>
                            </h5>
                            
                            <div class="blog-sidebar-popular-post-container">
                                <img src="assets/img/blog/img-blog-1.jpg" alt="" class="img-responsive pull-left">
                                <h6><a href="#">Lorem Ipsum Dolor</a></h6>
                                <span class="text-gray">Jan 24th, 2016</span>
                            </div>
                            
                            <div class="blog-sidebar-popular-post-container">
                                <img src="assets/img/blog/img-blog-3.jpg" alt="" class="img-responsive pull-left">
                                <h6><a href="#">nisi ut aliquip</a></h6>
                                <span class="text-gray">Jan 24th, 2016</span>
                            </div>
                            
                            <div class="blog-sidebar-popular-post-container">
                                <img src="assets/img/blog/img-blog-2.jpg" alt="" class="img-responsive pull-left">
                                <h6><a href="#">tempor incididunt</a></h6>
                                <span class="text-gray">Jan 24th, 2016</span>
                            </div>
                                
                        </div>
                        
                        
                        <!-- Archieve
                        ===================================== -->
                        <div class="mt25 pr25 clearfix" id="placement">
                            <br><br>    
                            <h5 class="mt25">
                                Placements
                                <span class="heading-divider mt10"></span>
                            </h5>                            
                            <ul class="shop-sidebar pl25">
                                <li><a href="#">2018-19<span class="badge badge-pasific pull-right">34</span></a></li>
                                <li><a href="#">2017-18<span class="badge badge-pasific pull-right">25</span></a></li>
                                <li><a href="#">2016-17<span class="badge badge-pasific pull-right">50</span></a></li>
                                <li><a href="#">2015-16<span class="badge badge-pasific pull-right">40</span></a></li>
                                <li><a href="#">2014-15<span class="badge badge-pasific pull-right">37</span></a></li>
                                <li><a href="#">2013-14<span class="badge badge-pasific pull-right">43</span></a></li>
                            </ul>
                           
                        </div>
                        
                        
                        
                                                
                        
                    </div>                   
                    
                </div>                
            </div>
        </div>
         
        
        <!-- Newsletter Area
        =====================================-->
        <div id="newsletter" class="bg-dark2 pt50 pb50">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-2">
                        <h4 class="color-light">
                            Newsletter
                        </h4>
                    </div>
                    
                    <div class="col-md-10">
                        <form name="newsletter">
                            <div class="input-newsletter-container">
                                <input type="text" name="email" class="input-newsletter" placeholder="enter your email address">
                            </div>
                            <a href="#" class="button button-sm button-pasific hover-ripple-out">Subscribe<i class="fa fa-envelope"></i></a>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        
        

        <!-- JQuery Core
        =====================================-->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap-3.3.7.min.js"></script>
        
        <!-- Magnific Popup
        =====================================-->
        <script src="assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/magnific-popup/magnific-popup-zoom-gallery.js"></script>
        
        <!-- JQuery Main
        =====================================-->
        <script src="assets/js/main/jquery.appear.js"></script>
        <script src="assets/js/main/isotope.pkgd.min.js"></script>
        <script src="assets/js/main/parallax.min.js"></script>
        <script src="assets/js/main/jquery.countTo.js"></script>
        <script src="assets/js/main/owl.carousel.min.js"></script>
        <script src="assets/js/main/jquery.sticky.js"></script>
        <script src="assets/js/main/ion.rangeSlider.min.js"></script>
        <script src="assets/js/main/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/main/main.js"></script>
        
    </body>

<!-- Mirrored from myboodesign.com/pasific/blog-posts-three-left-sb-2col.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2019 02:10:21 GMT -->
</html>