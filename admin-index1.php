<?php
 session_start();
 $_SESSION['email'] = true;
 include('conn.php'); 
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($con,"SELECT * FROM admin WHERE email='" . $_POST["name"] . "' and password = '". $_POST["password"]."'");
  $row  = mysqli_fetch_array($result);
  if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
 }
	if(is_array($row)) {
  $_SESSION['loggedin']=true;
 // $_SESSION["adminname"] = $row['adminname'];
 //$_SESSION['username']=$row['uname'];

 echo "<script>alert(' Login successfull ');window.location.href = 'admin-home.php';</script>";
  
	} else {
    echo "<script>alert(' Login failed ');window.location.href = 'admin-index1.php';</script>";
	}
 }
 
  ?>



<!DOCTYPE html>
<html lang="en">


<head>
        <title>MCA Admin Page, Mysore</title>
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
        <script src="js/angular-route.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>       
    </head>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100" ng-app='admin-index'>


        <!-- Page Loader
        ===================================== -->


        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>


        



        <!-- Subheader Area
        ===================================== -->
        <header class="bg-grad-stellar ">

            <div class="container">
                <div class="row ">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100"><span class="primary-text">M</span>aster of <span class="primary-text">C</span>omputer <span class="primary-text">A</span>pplications</h3>
                    </div>
                    
                </div>
            </div>

        </header>


        <!-- Blog Area
        ===================================== -->
        <div id="blog" class="pt20 pb50" >
            <div class="container">

                <div class="row" ng-controller='login'>
                    <div class="col-md-9 col-md-push-1 mt25" >
                        <div class="row">
                            <div class="row" style="margin-left:300px" >
                                <!-- table price one start -->
                                <div class="col-md-6 col-sm-6 col-xs-12 hover-float">
                                    <div class="price price-three" ng-show="admin_login_form">
                                        <div class="price-header bg-grad-stellar">
                                            <h4>Admin Login</h4>
                                        </div>
                                        <div class="price-body">
                                            <form action="#" method="post">
                                                <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
                                                <input type="text" name="name" ng-model="name" placeholder=" Enter user Name" class="input-rounded" required>
                                                <br><br>
                                                <input type="password" name="password" ng-model="password" placeholder=" Password" class="input-rounded" required><br>
                                                <br>
                                                
						<div class="price-footer">
                                                    <input type="submit" value="Submit" name="login"   class="button button-pasific" ng-disabled="IsDisabled" ng-click="add_students()"><br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!-- table price one end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <!-- JQuery Core
        =====================================-->
        <script src="assets/js/core/jquery.min.js"></script>    
        <!-- JQuery Main
        =====================================-->
        <script src="assets/js/main/jquery.appear.js"></script>
	<script src="assets/js/main/main.js"></script>

    </body>

<!-- Mirrored from myboodesign.com/pasific/blog-posts-three-left-sb-2col.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2019 02:10:21 GMT -->
</html>