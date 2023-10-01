<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ONos - Register Here</title>
    <link rel="../stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mdb.min.css" rel="stylesheet">
    <link href="../css/registerStyle.css" rel="stylesheet">
    <link href="../css/indexStyle.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../img/logo.png" class="image-circle" sizes="">
	<title></title>
</head>
<body>
	<header>
		<!-- navbar starts here  -->
        <nav class="navbar navbar-expand-lg navbar-dark indigo  fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="../index.php" id="uniconnect"><strong>ONoS</strong></a>

                <!-- collapse button starts -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                <!-- collapse button ends -->

                <!-- collapse contents start-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item" id="firstNavContent">
                            <a class="nav-link" href="dos.php" id="navHomeText">
                                <!-- <span class="sr-only">(current)</span> -->
                            </a>
                        </li>
                        <li class="nav-item" id="firstNavContent">
                            <a class="nav-link" href="events.php" id="articlesNavText"></a>
                        </li>
                        <li class="nav-item" id="firstNavContent">
                            <a class="nav-link" href="index.php" id="eventsNavText" data-offset="90" style="padding-left: 190px;">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item" id="firstNavContent">
                            <a class="nav-link" href="#" id="dealsNavText">Contact us </a>
                        </li>
                    </ul>

                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fa fa-facebook light-green-text-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fa fa-twitter light-green-text-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fa fa-instagram light-green-text-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- collapse contents ends -->
            </div>
        </nav>
        <!-- Navbar ends here -->

        <!-- onload image starts -->
		<section class="view intro-3 hm-indigo-strong">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="d-flex align-items-center">
                        <div class="row flex-center pt-5 mt-3">
                            <div class="col-md-6 text-center text-md-left mb-5">
                                <div class="white-text">
                                    <h1 class="display-4 font-bold wow fadeInLeft" data-wow-delay="0.3s">
                                        Already have an account?
                                    </h1>
                                    <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                    <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                                        Regsitering with ONoS is the best ONoS is the best  ONoS is the best ONoS is the best 
                                        ONoS is the best ONoS is the best ONoS is the best ONoS is the best ONoS is the best 
                                        ONoS is the best 
                                    </h6>
                                    <br>
                                    <a href="login.php" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Login Here
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-5" style="margin-top: 2%;">
                                <!--Form-->
                                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                        <div class="card-body z-depth-2">
                                            <form class="form-control"  action="registerauth.php" method="post"> 
                                            <div class="text-center">
                                                <h3 class="dark-grey-text">
                                                    <strong>
                                                         <i class="fa fa-user-circle"></i> Register
                                                    </strong>   
                                                </h3>
                                                <h5>
                                                    <strong>
                                                        
                                                    </strong>
                                                </h5>
                                                <hr>
                                            </div>
                                            <!-- form begins -->
                                                <div class="md-form">
                                                    <i class="fa fa-user prefix grey-text"></i>
                                                    <input type="text" id="form3" class="form-control " name="name">
                                                    <label for="form3" data-error="incorrect" data-success="right">Name</label>
                                                </div>
                                                <div class="md-form">
                                                    <i class="fa fa-envelope prefix grey-text"></i>
                                                    <input type="text" id="text" class="form-control " name="username">
                                                    <label for="form5" data-error="incorrect" data-success="right">Username</label>
                                                </div>
                                                <div class="md-form">
                                                    <i class="fa fa-envelope prefix grey-text"></i>
                                                    <input type="email" id="email" class="form-control " name="email">
                                                    <label for="form5" data-error="incorrect" data-success="right">Email</label>
                                                </div>
                                                <div class="md-form btn-group">
                                                    <i class="fa fa-graduation-cap prefix grey-text"></i>
                                                    <select class="form-control" name="college" style="margin:20px 0px 0px 47px;">
                                                        <div class="form-group">
                                                            <option value="" disabled selected>Select College</option>
                                                            <option value="collegeOfEngineering" name="">College of Engineering</option>
                                                            <option value="collegeOfScience" name="">College of Science</option>
                                                            <option value="collegeofHealthScience" name="">College of Health Science</option>
                                                        </div>
                                                    </select>   
                                                </div>
                                                <div class="md-form">
                                                    <i class="fa fa-lock prefix grey-text active"></i>
                                                    <input type="password" id="password" class="form-control "  name="password">
                                                    <label for="form6" data-error="incorrect" data-success="right">Password</label>
                                                </div>
                                                <div class="md-form">
                                                    <i class="fa fa-lock prefix grey-text active"></i>
                                                    <input type="password" id="cpassword" class="form-control " name="cpassword">
                                                    <label for="form7" data-error="incorrect" data-success="right">Confirm password</label>
                                                </div>
                                                <div class="text-center">
                                                    <!-- <a href="registerauth.php" class="btn btn-indigo" name="submit">Register</a> -->
                                                    <button class="btn btn-indigo" type="submit">Register</button>
                                                    
                                                </div>
                                                </form>
                                            <!-- form ends -->
                                        </div>
                                    </div>
                                
                                <!--/.Form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
	</header>


	<!-- Footer begins here -->
    <footer class="page-footer center-on-small-only stylish-color-dark rgba-indigo-strong">

        <!--Footer Links-->
        <div class="container">
            <div class="row">

                <!--First column-->
                <div class="col-md-4">
                    <h5 class="title mb-4 mt-3 font-bold"> Some contents will be captured </h5>
                    <p>
                        We are writting something for the ONoS team here and will be simple to reflect on a basic semi-
                        content as they are based upon.
                    </p>
                </div>
                <!--/.First column-->

                <hr class="clearfix w-100 d-md-none">

                <!--Second column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="title mb-4 mt-3 font-bold">An item</h5>
                    <ul>
                        <li><a href="#!">Notice Boards</a></li>
                        <li><a href="#!">College Notices</a></li>
                        <li><a href="#!">Department Notices</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="clearfix w-100 d-md-none">

                <!--Third column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="title mb-4 mt-3 font-bold">An item</h5>
                    <ul>
                        <li><a href="#!">Advertisement</a></li>
                        <li><a href="#!">Campus Groups</a></li>
                        <li><a href="#!">Jobs on Campus</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="clearfix w-100 d-md-none">

                <!--Fourth column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="title mb-4 mt-3 font-bold ">Links</h5>
                    <ul>
                        <li><a href="#!">Settings</a></li>
                        <li><a href="#!">About</a></li>
                        <li><a href="#!">Help</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <ul>
                <li>
                    <h5 class="mb-1">
                    Register for free</h5>
                </li>
                <li><a href="register.php" class="btn btn-danger btn-rounded">Sign up!</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <hr>

        <!--Social buttons-->
        <div class="social-section text-center">
            <ul>
                <li><a class="btn-floating btn-lg"><i class="fa fa-facebook"> </i></a></li>
                <li><a class="btn-floating btn-lg"><i class="fa fa-twitter"> </i></a></li>
                <li><a class="btn-floating btn-lg"><i class="fa fa-google-plus"> </i></a></li>
                <li><a class="btn-floating btn-lg"><i class="fa fa-linkedin"> </i></a></li>
                <li><a class="btn-floating btn-lg"><i class="fa fa-whatsapp"> </i></a></li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                &copy 2018 Copyright: <a href="#">ONoS Team </a>

            </div>
        </div>
        <!--/.Copyright-->
    </footer
    <!-- Footer ends here  -->


 	<!-- SCRIPTS -->
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>

</body>
</html>