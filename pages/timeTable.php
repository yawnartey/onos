<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ONoS - Time table</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/ads.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/logo.png" class="image-circle" sizes="">
</head>
<body>

	<!-- navbar starts here  -->
    <nav class="navbar navbar-expand-lg navbar-dark indigo  fixed-top Xscrolling-navbar" style="">

        <div class="container">
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
                        <a class="nav-link" href="dos.php" id="navHomeText">DOS
                            <!-- <span class="sr-only">(current)</span> -->
                        </a>
                    </li>
                    <li class="nav-item" id="firstNavContent">
                        <a class="nav-link" href="events.php" id="articlesNavText">Events</a>
                    </li>
                    <li class="nav-item" id="firstNavContent">
                        <a class="nav-link" href="tips.php" id="eventsNavText">Tips</a>
                    </li>
                    <li class="nav-item" id="firstNavContent">
                        <a class="nav-link" href="ads.php" id="dealsNavText">Advertisement</a>
                    </li>
                    <li class="nav-item" id="firstNavContent">
                        <a class="nav-link" href="timeTable.php" id="solutionsNavText">Time table</a>
                    </li>
                    <li class="nav-item dropdown" id="">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notices
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">College Notices</a>
                            <a class="dropdown-item" href="#">Department Notices</a>
                            <a class="dropdown-item" href="#">Hall Notices</a>
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
        </div>
    </nav>
    <!-- navbar ends here -->


   <main>
   		<div class="container">
   			<!-- Heading starts here -->
			<div class="row wow fadeIn" data-wow-delay="0.3s" style="margin-top: 5.0%;">
				<div class="col-md-9 mt-5">
					<h3 class="h1-responsive font-bold">
						End of semester examination table
					</h3>
				</div>
	             <div class="col-md-3 mt-5" style="">
	                <!-- <button id="" class="btn btn-success" data-toggle="modal" data-target="#postAnItem">
	                    Post Event
	                </button> -->
	            </div>
			</div>
			<!-- Heading ends here -->
			<hr>

			<!-- subheading starts -->
			<div class="row wow fadeIn" data-wow-delay="0.3s" > 
				<div class="col-md-9 mt-3">
					<h4 class="h4-responsive font-bold">
						College of Engineering
					</h4>
				</div>
			</div>
			<!-- subheading ends -->

			<!-- table starts -->
			<table class="table table-bordered table-hover table-striped" id="dataTables-example">
				<thead>
					<tr>
						<th>Course code</th>
						<th>Course name</th>
						<th>Examiner</th>
						<th>Class</th>
						<th>Number of students</th>
						<th>Room number</th>
						<!-- <th>To print</th>
						<th>Invigilators</th> -->
					</tr>
				</thead>

                <tbody>
                    <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="even gradeC">
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="odd gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td class="center">5.5</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 6</td>
                        <td>Win 98+</td>
                        <td class="center">6</td>
                        <td class="center">A</td>
                    </tr>
                </tbody>
			</table>
			<!-- table ends -->
   		</div>
   </main>








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
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript">
        // for floating images and texts
        new WOW().init();    
    </script>
</body>
</html>