<!DOCTYPE html>
<html lang="en">


<head>
        <title>MCA Admin Home Page</title>
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
        <script src="js/script2.js" type="text/javascript"></script>
        
    </head>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100" ng-app='myapp'>


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
                    <a class="" style="font-size: 30px" href="#page-top">
                        <img src="assets/img/my img/logo.png" alt="logo" width="40px" height="auto">
                        SJCE
                    </a>
                </div>

                <div class="navbar-collapse collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown megamenu-fw has-dropdown-menu"><a href="index.php" data-toggle="dropdown" class="dropdown-toggle color-light">Home </a>

                        </li>

                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Academics </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#">Time Table	</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Download</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Calander Of Event</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-grid-fullwidth-3col.html">Download</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Syllubes</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-masonry-1.html">Download</a></li>

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

                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Placements </a>

                        </li>

                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">About</a>
                            <ul class="dropdown-menu has-submenu" role="menu">
                                <li class="dropdown">
                                    <a href="#">Faculties</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Vision & Mission</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Contact As</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="admin-index1.php">Logout</a></li>
                    </ul>

                </div>
            </div>
        </nav>



        <!-- Subheader Area
        ===================================== -->
        <header class="bg-grad-stellar mt70">

            <div class="container">
                <div class="row ">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100"><span class="primary-text">M</span>aster of <span class="primary-text">C</span>omputer <span class="primary-text">A</span>pplications</h3>
                    </div>
                    <div class="col-md-6 text-right pt35">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a>

                            <li><a href="http://results.jssstuniv.in/">Results</a></li>

                        </ul>
                    </div>
                </div>
            </div>

        </header>


        <!-- Blog Area
        ===================================== -->
        <div id="blog" class="pt20 pb50" >
            <div class="container">

                <div class="row" ng-controller='add'>
                    <div class="col-md-9 col-md-push-2 mt25" >
                        <div class="row">
                            
                            
                            <div class="row" style="margin-left:330px" >
                                <!-- table price one start -->
                                <div class="col-md-10 col-sm-6 col-xs-12 hover-float">
                                    <div class="price price-three" ng-show="add_student">
                                        <div class="price-header bg-grad-stellar">
                                            <h4>REGISTER STUDENT</h4>
                                        </div>
                                        <div class="price-body">
                                            <form action="add_stud.php" method="post" enctype="multipart/form-data">
                                                <input type="text" name="name" ng-model="name"   placeholder=" Enter Full Name" class="input-rounded" pattern="[A-Za-z]{1,15}" title="please enter alphabets only" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" name="fathername" ng-model="f_name" placeholder=" Enter Father Name" class="input-rounded" pattern="[A-Za-z]{1,15}" title="please enter alphabets only" required><br>
                                                <br>
						<input type="text" name="mothername" ng-model="m_name" placeholder=" Enter Mother Name" class="input-rounded" pattern="[A-Za-z]{1,15}" title="please enter alphabets only" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="date" name="dob" ng-model="dob" placeholder="" class="input-rounded" required><br>
                                                <br>
						<input type="radio" name="gender" ng-model="gender" value="male" class="input-rounded" required>Male
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="gender" ng-model="gender" value="female" class="input-rounded" required>Female<br>
                                                <br>
						<input type="number" name="aadher" ng-model="aadher" placeholder=" Enter Aadher Number" class="input-rounded" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="number" name="phone_no" ng-model="phone_no" placeholder=" Mobile:+91-xxx-xxx-xxxx" class="input-rounded" pattern="[1-9]{1}[0-9]{9}" maxlength="10" title="Please enter numbers only with maximum 10" required><br>
                                                <br>
						<input type="text" name="quali" ng-model="quali" placeholder=" Previous Qualification" class="input-rounded" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="number" name="marks" ng-model="marks" placeholder=" Previous Degree Marks" class="input-rounded" maxlength="10" required><br>
                                                <br>
						<input type="text" name="branch" ng-model="branch" placeholder=" Branch" class="input-rounded" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="number" name="fee" ng-model="fee" placeholder=" Fee" class="input-rounded" maxlength="10" required><br>
                                                <br>
						<input type="text" name="email" ng-model="email" ng-keyup='checkemail()' placeholder=" Email id" class="input-rounded" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter email like something@gmail.com" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" name="pass" ng-model="pass" placeholder=" Password" class="input-rounded" maxlength="10" required><br>
                                                <br>
                                                <div ng-class="addClass(unamestatus)" style="color: red;">{{ unamestatus }}</div>
                                                <br>
						<input type="text" name="sem" ng-model="sem" placeholder=" Enter Semester" class="input-rounded" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" name="usn" ng-model="usn" ng-keyup='checkusn()' placeholder="Enter usn number" class="input-rounded" required><br>
                                                <br>
                                                <div ng-class="addClass1(unamestatus1)" style="color: red;">{{ unamestatus1 }}</div>
                                                <br>
                                                <textarea rows="4" cols="40" placeholder="Address" name="addr" ng-model="addr" required></textarea><br>
                                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<center>
						<input type="file" name="myimage" placeholder=" Photo" class="input-rounded" required><br>
						</center>
						<div class="price-footer">
                                                    <input type="submit" value="Submit"   class="button button-pasific" ng-disabled="IsDisabled" ng-click="add_students()"><br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!-- table price one end -->
                                </div>
                            </div>
                            <div class="row" style="margin-left:330px" >
                                <!-- table price one start -->
                                <div class="col-md-10 col-sm-6 col-xs-12 hover-float">
                                    <div class="price price-three " ng-show="add_faculty">
                                        <div class="price-header bg-grad-stellar ">
                                            <h4>REGISTER FACULTY</h4>
                                        </div>
                                        <div class="price-body">
                                            <form action="add_facu.php" method="post" enctype="multipart/form-data">
                                                <input type="text" name="username"  placeholder=" Enter Full Name" class="input-rounded" pattern="[A-Za-z]{1,15}" title="please enter alphabets only" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" name="fathername" placeholder=" Enter Father Name" class="input-rounded" pattern="[A-Za-z]{1,15}" title="please enter alphabets only" required><br>
                                                <br>
                                                <input type="text" name="mothername" placeholder=" Enter Mother Name" class="input-rounded" pattern="[A-Za-z]{1,15}" title="please enter alphabets only" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="date" name="dob" placeholder="" class="input-rounded" required><br>
                                                <br>
						<input type="radio" name="gender" value="male" class="input-rounded"required>Male
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="gender" value="female" class="input-rounded" required>Female<br>
                                                <br>
						<input type="text" name="job_desc" placeholder=" Job Discription" class="input-rounded" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="number" name="phone_no" placeholder=" Mobile:+91-xxx-xxx-xxxx" class="input-rounded" pattern="[1-9]{1}[0-9]{9}" maxlength="10" title="Please enter numbers only with maximum 10"><br>
                                                <br>
						<input type="text" name="expriences" placeholder=" Expriences" class="input-rounded"required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" name="emial" placeholder=" Email id" class="input-rounded" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter email like something@gmail.com" required><br>
                                                <br>
						<input type="text" name="password" placeholder=" Password" class="input-rounded" maxlength="10" required>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="test" name="read_more" placeholder="Web Site Link" class="input-rounded"><br>
                                                <br>
                                                <textarea rows="2" cols="20" placeholder=" Qualification" name="qualification" required></textarea>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <textarea rows="2" cols="20" placeholder="Address" name="address" required></textarea><br>
                                                <br>
                                                
                                                <textarea rows="4" cols="52" placeholder=" About" name="about" required></textarea>
                                                
                                                
                                                <h5>Upload photo</h5>
                                                
                                                <center>
                                                    <input type="file" name="photo" placeholder=" Photo" class="input-rounded" required><br>
						</center>
						<div class="price-footer">
                                                    <input type="submit" value="Submit"  class="button button-pasific"><br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!-- table price one end -->
                                </div>
                            </div>



                            <div class="row" style="margin-left:330px" >
                                <!-- table price one start -->
                                <div class="col-md-8 col-sm-6 col-xs-12 hover-float">
                                    <div class="price price-three" ng-show="update_notification">
                                        
                                        <div class="price-header bg-grad-stellar">
                                            <h4>Update Notification </h4>
                                        </div>
                                        <div class="price-body">
                                            <form action="add_notification.php" method="post" enctype="multipart/form-data">
                                                <input type="text" name="header" placeholder=" Notification Header" class="input-rounded" required><br>
                                                <br>
                                                <textarea rows="6" cols="30" name="about" placeholder="About Notification" class="input-rounded" required></textarea>
                                                <br>
                                                <h5>Select Image</h5>
                                                <center>
                                                <input type="file" name="image" class="input-rounded" required>
                                                </center>
                                                <div class="price-footer">
                                                    <input type="submit" value="Upload"  class="button button-pasific"><br>
                                                </div>
                                            </form>
                                        </div>
                                        <br><br>
                                        <div class="price-header bg-grad-stellar">
                                            <h4>Update Marquee Notification </h4>
                                        </div>
                                        <div class="price-body">
                                            <form action="add_noti.php" method="post" enctype="multipart/form-data">
                                                <input type="text" name="header" placeholder=" Notification Header" class="input-rounded" required><br>
                                                <br>
                                                <input type="test" name="link" placeholder="Page link" class="input-rounded" required><br>
                                                <br>
                                                
                                                <div class="price-footer">
                                                    <input type="submit" value="Upload"  class="button button-pasific"><br>
                                                </div>
                                            </form>
                                        </div>
                                        <br><br>
                                    </div>
                                <!-- table price one end -->
                                </div>
                            </div>
                            
                            
                            <div class="row" style="margin-left:330px" >
                                <!-- table price one start -->
                                <div class="col-md-8 col-sm-6 col-xs-12 hover-float">
                                    <div class="price price-three " ng-show="update_COE">
                                        <div class="price-header bg-grad-stellar">
                                            <h4>Update Calander Of Event</h4>
                                        </div>
                                        <div class="price-body">
                                            <form action="add_calander.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                <center>
                                                    <label><h4>Select your new file</h4></label><br>
                                                <input type="file" name="calander" placeholder=" Enter Username" class="input-rounded"><br>
                                                </center>
                                                </div>
                                                
                                                
                                                <div class="price-footer">
                                                    <input type="submit" value="login"  class="button button-pasific"><br>
                                                </div>
                                            </form>
                                        </div>
                                        <br><br>
                                        <div class="price-header bg-grad-stellar">
                                            <h4>Update Time Table</h4>
                                        </div>
                                        <div class="price-body">
                                            <form action="add_time_table.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                <center>
                                                    <label><h4>Select your new file</h4></label><br>
                                                <input type="file" name="time_table" placeholder=" Enter Username" class="input-rounded"><br>
                                                </center>
                                                </div>
                                                
                                                
                                                <div class="price-footer">
                                                    <input type="submit" value="login"  class="button button-pasific"><br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!-- table price one end -->
                                </div>
                            </div>
                            <div class="row" style="margin-left:330px" >
                                <!-- table price one start -->
                                <div class="col-md-8 col-sm-6 col-xs-12 hover-float">
                                    <div class="price price-three " ng-show="update_gallery">
                                        <div class="price-header bg-grad-stellar">
                                            <h4>Update Gallery Photes</h4>
                                        </div>
                                        <div class="price-body">
                                            <form action="add_gallery.php" method="post" enctype="multipart/form-data">
                                                <center>
                                                <input type="file" name="image" class="input-rounded"><br>
                                                </center>
                                                <br>
                                                
                                                <div class="price-footer">
                                                    <input type="submit" value="login"  class="button button-pasific"><br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!-- table price one end -->
                                </div>
                            </div>
                            <div class="row" style="margin-left:330px" >
                                <!-- table price one start -->
                                <div class="col-md-8 col-sm-6 col-xs-12 hover-float">
                                    <div class="price price-three " ng-show="update_placements">
                                        <div class="price-header bg-grad-stellar">
                                            <h4>Update Gallery Photes</h4>
                                        </div>
                                        <div class="price-body">
                                            <form action="add_gallery.php" method="post" enctype="multipart/form-data">
                                                <center>
                                                <input type="file" name="image" class="input-rounded"><br>
                                                </center>
                                                <br>
                                                
                                                <div class="price-footer">
                                                    <input type="submit" value="login"  class="button button-pasific"><br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!-- table price one end -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Blog Sidebar
                    ===================================== -->
                    <div id="sidebar" class="col-md-3 col-md-pull-9 mt50 animated" data-animation="fadeInRight" data-animation-delay="250">
                        <!-- Categories
                        ===================================== -->
                        <div class="mt25 pr25 clearfix">
                            <h5 class="mt25">
                                MCA Status
                                    <span class="heading-divider mt10"></span>
                            </h5>
                            <ul class="shop-sidebar pl25">
                                <li class="active"><a  href ng-click="show_stud()">Add Students</a></li>
                                <li><a href="#" ng-click="show_facu()">Add Faculty</a></li>
                                <li><a href="#" ng-click="show_noti()">Update notifiaction</a></li>
                                
                                <li><a href="#" ng-click="show_coe()">Update Calander Of Event  &<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Time Table</a></li>
                                <li><a href="#" ng-click="show_gry()">Upload Gallery Photes</a></li>
                                
                                    
                                
                            </ul>
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