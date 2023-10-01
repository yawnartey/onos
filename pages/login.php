<?php  ?>
<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ONos - Login Here</title>
    <link rel="../stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mdb.min.css" rel="stylesheet">
    <link href="../css/loginStyle.css" rel="stylesheet">
    <link href="../css/registerStyle.css" rel="stylesheet">
    <link href="../css/indexStyle.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../img/logo.png" class="image-circle" sizes="">
</head>
<body>
	<header>
		<!-- navbar starts here  -->
        <nav class="navbar navbar-expand-lg navbar-dark indigo  fixed-top scrolling-navbar">
            <div class="container">
                <center>
                    <a class="navbar-brand" href="../index.php" id="uniconnect"><strong>ONoS</strong></a>
                </center>

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
                                <!--About Us-->
                            </a>
                        </li>
                        <li class="nav-item" id="firstNavContent">
                            <!--<a class="nav-link" href="#" id="dealsNavText">Contact us </a>-->
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

        <!-- onload section image -->
		<section class="view intro-4 hm-indigo-strong">
	        <div class="full-bg-img">
	            <div class="container flex-center">
	                <div class="d-flex align-items-center">
	                    <div class="row flex-center pt-5 mt-3">
	                        <div class="col-md-6 text-center text-md-left mb-5">
	                            <div class="white-text">
	                                <h1 class="display-4 font-bold wow fadeInLeft" data-wow-delay="0.3s">
                                        Don't have the app?
                                    </h1>
	                                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
	                                <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                                         ONoS is an online instant notification application which eases
                                         access of information by readily circulating all happenings within
                                         KNUST to it's users. 
                                    </h6>
	                                <br>
	                                <a href="register.php" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Download Here!
                                    </a>
	                            </div>
	                        </div>

	                        <div class="col-md-6 col-xl-5">
	                            <!--form starts-->
	                            <div class="card wow fadeInRight" data-wow-delay="0.3s">
	                                <div class="card-body z-depth-2">
                                        <form action="loginauth.php"  method="POST">
    	                                    <div class="text-center">
    	                                        <h3 class="dark-grey-text">
    	                                            <strong>
    	                                            	<i class="fa fa-user-circle"></i> Login
    	                                            </strong>   
    	                                        </h3>
    	                                        <hr>
    	                                    </div>
                                            <div class="md-form">
                                                <i class="fa fa-user prefix grey-text"></i>
                                                <input type="text" id="form3" class="form-control validate" name="Username" required="Username">
                                                <label for="form3">Username</label>
                                            </div>

                                            <div class="md-form">
                                                <i class="fa fa-lock prefix grey-text active"></i>
                                                <input type="password" id="form4" class="form-control validate" name="Password">
                                                <label for="form4" >Password</label>
                                            </div>

                                            <div class="text-center">
                                                <!--<a  href="../dashboards/admin/indexAdmin.php" class="btn btn-indigo wow fadeInLeft" data-wow-delay="0.3s">-->
                                                <!--    Login-->
                                                <!--</a>-->
                                                <button class="btn btn-indigo wow fadeInLeft">Login</button>
                                            </div>    
                                         </form>

                                                <!-- <button class="btn btn-indigo">Login </button> -->
                                                <hr class="hr mb-3 mt-4">

                                                <div class="inline-ul text-center d-flex justify-content-center">
                                                    <a class="" href="#">
                                                        <i class="fa fa-twitter" style="font-size: 25px; padding-right:30%;"></i>
                                                    </a>
                                                    <a class="" href="#">
                                                        <i class="fa fa-facebook" style="font-size: 25px; padding-left: 50%;"> </i>
                                                    </a>
                                                    <a class="" href="#">
                                                        <i class="fa fa-instagram" style="font-size: 25px; padding-left: 80%;"> </i>
                                                    </a>
                                                </div>
                                            </div>
	                                </div>
	                            </div>
	                            <!--form ends-->
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
		
	</header>


	<!-- Footer begins here -->
    <footer class="page-footer center-on-small-only Xstylish-color-dark rgba-indigo-strong">
        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                &copy 2018 Copyright: <a href="#">ONoS Team </a>

            </div>
        </div>
        <!--/.Copyright-->
    </footer>
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