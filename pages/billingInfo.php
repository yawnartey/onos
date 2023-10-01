<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ONoS - Billing information</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/ads.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/logo.png" class="image-circle" sizes="">
</head>
<body>
	<!-- navbar starts here  -->
    <nav class="navbar navbar-expand-lg navbar-dark indigo  fixed-top Xscrolling-navbar" style="">

        <!-- <div class="container"> -->
            <a class="navbar-brand" href="index.php" id="uniconnect"><strong>ONoS</strong></a>

            <!-- collapse button starts -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <!-- collapse button ends -->

            <!-- collapse contents start-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" id="firstNavContent">
                        <a class="nav-link" href="#" id="navHomeText">About Us
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item" id="firstNavContent">
                        <a class="nav-link" href="dos.php" id="articlesNavText">DOS</a>
                    </li>
                    <li class="nav-item" id="firstNavContent">
                        <a class="nav-link" href="events.php" id="eventsNavText">Events</a>
                    </li>
                    <li class="nav-item" id="firstNavContent">
                        <a class="nav-link" href="tips.php" id="dealsNavText">Tips</a>
                    </li>
                    <li class="nav-item" id="firstNavContent">
                        <a class="nav-link" href="ads.php" id="solutionsNavText">Advertisement</a>
                    </li>
                    <li class="nav-item dropdown" id="">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contacts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">+233 50 142 8776</a>
                            <a class="dropdown-item" href="#">onos.team@gmail.com</a>
                            <a class="dropdown-item" href="#">www.teamonos.com</a>
                        </div>
                    </li>
                </ul>

                <!-- search starts -->
                <ul class="navbar-nav">
                    <form class="form-inline" id="searchForm">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </ul>
                <!-- search ends -->

            </div>
            <!-- collapse contents ends -->
        <!-- </div> -->
    </nav>
    <!-- Navbar ends here -->


    <!-- Main body starts here -->
    <main class="">
    		
	    <div class="container">
	    	<div class="row">
	    		<!-- <div class="col-lg-6"></div> -->
	    	
		    	<div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
			        <div class="widget-wrapper" style="margin-top: 8%;">
			            <br>
			            <!-- <div class="list-group">
			                <a href="ads.php" class="list-group-item active">
			                    <h4 class="h4-responsive font-bold mb-2">Categories:</h4>
			                </a>
			                <a href="electronics.php" class="list-group-item">Electronics</a>
			                <a href="#" class="list-group-item">Wears</a>
			                <a href="#" class="list-group-item">Jewellery</a>
			                <a href="#" class="list-group-item">Accessories</a>
			                <a href="#" class="list-group-item">Home appliances</a>
			            </div> -->
			        </div>
			        <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
			            <h4 class="h4-responsive font-bold">Your delivery and payment details:</h4>
			            <br>
			            <div class="card">
			                <div class="card-body">
			                    <!-- <p>
			                        <strong>Subscribe to our newsletter</strong>
			                    </p> -->
			                    <!-- <p>Once a week we will send you a summary of the most useful news</p> -->
			                    <div class="md-form">
			                        <i class="fa fa-user prefix grey-text"></i>
			                        <input type="text" id="form1" class="form-control">
			                        <label for="form1">Your name</label>
			                    </div>
			                    <div class="md-form">
			                        <i class="fa fa-envelope prefix grey-text"></i>
			                        <input type="text" id="form2" class="form-control">
			                        <label for="form2">Your email</label>
			                    </div>
			                    <div class="md-form">
			                        <i class="fa fa-envelope prefix grey-text"></i>
			                        <input type="text" id="form3" class="form-control">
			                        <label for="form3">Region</label>
			                    </div>
			                    <div class="md-form">
			                        <i class="fa fa-envelope prefix grey-text"></i>
			                        <input type="text" id="form4" class="form-control">
			                        <label for="form4">Town</label>
			                    </div>
			                    <div class="md-form">
			                        <i class="fa fa-envelope prefix grey-text"></i>
			                        <input type="text" id="form5" class="form-control">
			                        <label for="form5">Active address</label>
			                    </div>
			                    <div class="md-form">
			                        <i class="fa fa-envelope prefix grey-text"></i>
			                        <input type="text" id="form6" class="form-control">
			                        <label for="form6">Phone Number(s)</label>
			                    </div>

			                    <button class="btn btn-info btn-md">Submit</button>
			                </div>
			            </div>
			        </div>
		        </div>
		        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
			        <div class="widget-wrapper" style="margin-top: 8%;">
			            <br>
			        </div>
			        <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
			            <h4 class="h4-responsive font-bold">Select Quantity:</h4>
			            <br>
			            <div class="card">
			                <div class="card-body">
			                    <div class="">
			                    	<p>Quantity selector will be here</p>
			                    </div>
			                    <div class="">
			                    	<p>Total amount will be here</p>
			                    </div>
			                </div>
			            </div>
			        </div>
		        </div>

		        
	        </div>
	    </div>
    </main>
    <!-- Main body ends here -->

    <div class="" style="margin-top: 100px;">
    	
    </div>








    <!-- Footer begins here -->
    <footer class="page-footer center-on-small-only Xstylish-color-dark rgba-indigo-strong">

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

    </footer>
    <!-- Footer ends here  -->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <script>
        new WOW().init();
    </script>

</body>
</html>