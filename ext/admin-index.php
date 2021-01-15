

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin</title>        
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
        <script src="js/script1.js" type="text/javascript"></script>
        </head>
        <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100" ng-app='myapp'>
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        <nav class="navbar navbar-pasific navbar-mp navbar-standart megamenu navbar-fixed-top bg-grad-stellar" style="border-bottom:1px solid #fff;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <img src="assets/img/my img/logo.png" alt="logo" width="40px">
                        <span class="primary-text" style="color:#000">M</span>aster of <span class="primary-text">C</span>omputer <span class="primary-text">A</span>pplications
                    </a>
                </div>
                <div class="navbar-collapse collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown megamenu-fw has-dropdown-menu">
                            <a href="index.php" data-toggle="dropdown" class="dropdown-toggle color-light">Home </a>
                        </li>
			<li class="dropdown megamenu-fw has-dropdown-menu">
                            <a href="#/test" data-toggle="dropdown" class="dropdown-toggle color-light">Login </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div id="price" class=" pt85 pb50">
            <div class="container pb50">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center mb50">                        
                        <h1 class="font-size-normal color-light">
                            Sri Jayachamarajendra College of Engineering
			</h1>
                    </div>
                </div>
                <div class="row" style="margin-left:330px" ng-controller='signup'>
                    <div class="col-md-6 col-sm-6 col-xs-12 hover-float">
			<div class="price price-three bg-grad-stellar" ng-show="admin_login_form">
                            <div class="price-header">                                
                                <h4>Admin Login</h4>								
                            </div>
                            <form action="" method="post">
                                <div class="price-body">
                                    <input type="text" name="username" placeholder="Enter Username" class="input-rounded" ng-model="email" ng-keyup='checkUsername()'><br>
                                    <br>
                                    <input type="password" name="password" placeholder="Enter Password" class="input-rounded" ng-model="password"><br>
                                </div>
                                <div class="price-footer">
                                    <input type="submit" value="login"  class="button button-pasific">
                                    <br>
                                    <input type="button" value="Teacher Login" name="admin_login" class="button button-3d" ng-click="showteacher()" style="background-color:#ffcc33">
                                </div>
                            </form>
                        </div>
                        <div class="price price-three bg-grad-stellar" ng-show="teachare_login_form"> 					
                            <div class="price-header">                                
                                <h4>Teacher Login</h4>								
                            </div>
                            <form action="" method="post">
				<div class="price-body">
                                    <input type="text" name="username" placeholder="Enter Username" class="input-rounded" ng-model="username" ng-keyup='checkUsername()'><br>
                                    <div style="color:red"></div><br>
                                    <input type="password" name="password" placeholder="Enter Password" class="input-rounded" ng-model="password"><br>
				</div>
                                <div class="price-footer">
                                    <input type="submit" value="Login" name="login" class="button button-pasific"><br>
                                    <input type="button" value="Admin Login" name="teacher_login" class="button button-3d" ng-click="showadmin()" style="background-color:#ffcc33">
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->
            </div><!-- container end -->
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
            </div>
        </div>
        </body>
</html>





