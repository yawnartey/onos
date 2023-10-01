<?php  ?>
<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ONoS - Get all the events and activities happening around you</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/indexStyle.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/logo.png" class="image-circle" sizes="">
    
<!-- BrandFlow script -->
<script>
    (function () {

        var scripts = ["/static/general/bf-core.min.js", "/static/containers/TYV864.js", "/static/general/push-init-code.js"]
              
        for (var i = 0; i < scripts.length; i++) {
            var script = document.createElement("script");
            script.src = "//test.brandflow.net" + scripts[i] + "?ts=" + Date.now() + "#";
            script.async = false;
            document.head.appendChild(script);
        }
    })();
</script>
<!-- BrandFlow script  -->
                                                            
</head>

<body>
    <header>
        <div style="height: 100vh" class="">
            <!-- navbar starts here  -->
            <nav class="navbar navbar-expand-lg navbar-dark indigo  fixed-top scrolling-navbar">
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
                                <a class="nav-link" href="timeTable.php" id="">Time table</a>
                            </li>
                            <li class="nav-item dropdown" id="">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" 
                                aria-haspopup="true" aria-expanded="false">Notice
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">College notices</a>
                                    <a class="dropdown-item" href="#">Department notices</a>
                                    <a class="dropdown-item" href="#">Hall notices</a>
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
            <!-- Navbar ends here -->

            <!-- onload images and texts starts here -->
            <section class="view intro-2 hm-gradient">
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="row flex-center">
                            <div class="col-md-10 col-lg-6 text-center text-md-left margins">
                                <div class="white-text">
                                    <h1 class="h1-responsive font-bold mt-sm-5 wow fadeInLeft" data-wow-delay="0.3s">
                                        Get the ONoS app 
                                    </h1>
                                    <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                    <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                                        Download the ONoS app for safety and accessibility issues for ease of access 
                                        and get the application running here for all your activities and make sure 
                                        you get the app at the play store 
                                    </h6>
                                    <br>
                                    <a  href="" class="btn btn-white dark-grey-text font-bold wow fadeInLeft" data-wow-delay="0.3s">
                                        Download
                                    </a>
                                    <a  href="register.php" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">
                                        Register
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 hidden-md-down wow fadeInRight d-flex justify-content-center" data-wow-delay="0.3s">
                                <img src="img/admin-new.png" alt="" class="img-fluid" style="margin-top: 30%;">
                            </div>  
                        </div>
                    </div>
                </div>
            </section>   
            <!-- onload images and texts ends here -->
        </div>
    </header> 

    <!--DOS section begins here-->
    <div class="container" style="">
        <section class="py-4">
            <h2 class="h1 text-center mb-4 wow fadeInDown" data-wow-delay="0.4s" style="margin-top: 13%;">
                DOS Recents Posts
            </h2>
            <p class="text-center mb-5 pb-5 wow fadeInUp" data-wow-delay="0.4s" style="font-size:21px;">
                You are seeing posts from the Dean of Students of the Kwame Nkrumah University of Science and Technology. 
                All contents of these messages are to be taken serious and to be treated with the utmost importance as you 
                forfiet any of these messages on your own risk.
            </p>
            <p class="text-center" style="margin-top: -5%;">
                <button class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="0.7s" data-toggle="modal" data-target="#dosRecentPosts" id="dosRecentPost">
                    Subscribe to DOS recent posts
                </button>
            </p>
            <!-- first row starts-->
            <div class="row" style="margin-top: 10%;">
                <div class="col-lg-5 col-xl-4 mb-4 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="view overlay hm-white-slight rounded z-depth-1-half">
                        <img src="img/knust2.jpg" class="img-fluid" alt="First sample image" style="height: 227px; width:100%;">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                    <h3 class="mb-3 font-bold dark-grey-text wow fadeInRight" data-wow-delay="0.3s">
                        <strong>This is a DOS message</strong>
                    </h3>
                    <p class="grey-text wow fadeInUp" data-wow-delay="0.5s" style="font-size: 17px;">
                        You are seeing posts from the Dean of Students of the Kwame Nkrumah University of Science and Technology. All contents of these messages are to be taken serious and to be treated with the utmost 
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">by
                        <a class="font-bold dark-grey-text">Onos Team - For DOS</a>, 27/01/2018
                    </p>
                    <a class="btn btn-primary btn-md wow fadeInUp" data-wow-delay="0.7s" data-toggle="modal" data-target="#exampleModal">
                        Read more
                    </a>
                </div> 
            </div>
            <!-- first row ends -->

            <hr class="mb-5">

            <!-- second row begins -->
            <div class="row mt-3" style="margin-top: 10%;">
                <div class="col-lg-5 col-xl-4 mb-4 wow fadeInRight" data-wow-delay="0.5s">
                    <div class="view overlay hm-white-slight rounded z-depth-1">
                        <img src="img/knust_admin.jpg" class="img-fluid" alt="First sample image" style="height: 227px; width:100%;">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                    <h3 class="mb-3 font-bold dark-grey-text wow fadeInLeft" data-wow-delay="0.5s">
                        <strong>This is a DOS message</strong>
                    </h3>
                    <p class="grey-text wow fadeInUp" data-wow-delay="0.5s" style="font-size: 17px;">
                        You are seeing posts from the Dean of Students of the Kwame Nkrumah University of Science and Technology. All contents of these messages are to be taken serious and to be treated with the utmost 
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">by
                        <a class="font-bold dark-grey-text">Onos Team - For DOS</a>, 27/01/2018
                    </p>
                    <a class="btn btn-primary btn-md wow fadeInUp" data-wow-delay="0.7s">Read more</a>
                </div>
            </div>
            <!--second row ends here -->

            <hr class="mb-5">

            <!--third row begins here -->
            <div class="row">
                <div class="col-lg-5 col-xl-4 mb-4 wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="view overlay hm-white-slight rounded z-depth-1">
                        <img src="img/knust3.jpg" class="img-fluid" alt="First sample image" style="height: 227px; width:100%;">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                    <h3 class="mb-3 font-bold dark-grey-text wow fadeInRight" data-wow-delay="0.5s">
                        <strong>This is a DOS message</strong>
                    </h3>
                    <p class="grey-text wow fadeInUp" data-wow-delay="0.7s" style="font-size: 17px;">
                        You are seeing posts from the Dean of Students of the Kwame Nkrumah University of Science and Technology. All contents of these messages are to be taken serious and to be treated with the utmost 
                    </p> 
                    <p class="wow fadeInUp" data-wow-delay="0.9s"> by 
                        <a class="font-bold dark-grey-text">Onos Team - For DOS</a>, 27/01/2018
                    </p>
                    <a class="btn btn-primary btn-md wow fadeInUp" data-wow-delay="0.9s">Read more</a>
                    <div style="padding-left: 4px; margin-top: 30px;">
                        <a href="dos.php">Read more of DOS messages here</a>
                    </div>
                </div> 
            </div>
            <!-- third row ends here -->
            <hr class="mb-5">
        </section>
    </div>
    <!--DOS section ends here-->


    <!-- News and events session begins here -->
    <div class="container" style="margin-top: 5%;">
        <section class="text-center py-4">  
            <h1 class="h1 font-bold text-center mb-5 pt-4 wow fadeInDown" data-wow-delay="0.4s">News and events</h1>
            <p class="text-center mb-5 pb-3 wow fadeInUp" data-wow-delay="0.5s" style="font-size: 21px;">
                You are seeing news and events from Kwame Nkrumah University of Science and Technology. 
                All contents of these messages are to be taken serious and to be treated with the utmost importance as you 
                forfiet any of these messages on your own risk.
            </p>
            <p class="text-center" style="margin-top: -2%;">
                <button class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="0.7s" data-toggle="modal" data-target="#newsAndEvents" id="newsAndEvent">
                    Subscribe to News and Events
                </button>
            </p>
            <!-- colomn 1 begins here -->
            <div class="row" style="margin-top: 10%;">
            <div class="col-lg-4 col-md-12 mb-r wow fadeInLeft" data-wow-delay="0.5s">
                <div class="view overlay hm-white-slight rounded z-depth-2 mb-2">
                    <img src="img/knust2.jpg" class="img-fluid" alt="First sample image" style="height: 232px; width:100%;">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <a href="" class="pink-text wow fadeInUp" data-wow-delay="0.6s">
                    <h6 class="mb-3 mt-4">
                        <i class="fa fa-graduation-cap "></i>
                        <strong> Academics</strong>
                    </h6>
                </a>
                <h4 class="mb-3 font-bold dark-grey-text wow fadeInUp" data-wow-delay="0.7s">
                    <strong>This will be title of the news</strong>
                </h4>
                <p class="wow fadeInUp" data-wow-delay="0.8s">
                    by
                    <a class="font-bold dark-grey-text">ONoS Team</a>, 15/07/2018
                </p>
                <p class="grey-text wow fadeInUp" data-wow-delay="0.9s" style="font-size: 17px;">
                    You are seeing news and events from Kwame Nkrumah University of Science and Technology. 
                    All contents of these messages are to be taken serious and to be treated with the utmost importance as you 
                    forfiet any of these messages on your own risk.
                </p>
                <a class="btn btn-pink btn-rounded btn-md wow fadeInUp" data-wow-delay="1.0s">Read more</a>
            </div>
            <!-- colomn 1 ends here -->

            <!--colomn 2 starts here-->
            <div class="col-lg-4 col-md-6 mb-r">
                <div class="view overlay hm-white-slight rounded z-depth-2 mb-2 wow zoomIn" data-wow-delay="1.5s">
                    <img src="img/knust2.jpg" class="img-fluid" alt="First sample image" style="height: 232px; width:100%;">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <a href="" class="deep-orange-text wow fadeInUp" data-wow-delay="0.6s">
                <h6 class="mb-3 mt-4">
                    <i class="fa fa-map"></i>
                    <strong> Activities</strong>
                </h6>
                </a>
                <h4 class="mb-3 font-bold dark-grey-text wow fadeInUp" data-wow-delay="0.7s">
                    <strong>This will be title of the news</strong>
                </h4>
                <p class="wow fadeInUp" data-wow-delay="0.8s">
                    by
                    <a class="font-bold dark-grey-text">ONoS Team</a>, 15/07/2018
                </p>
                <p class="grey-text wow fadeInUp" data-wow-delay="0.9s">
                    You are seeing news and events from Kwame Nkrumah University of Science and Technology. 
                    All contents of these messages are to be taken serious and to be treated with the utmost importance as you 
                    forfiet any of these messages on your own risk.
                </p>
                <a class="btn btn-deep-orange btn-rounded btn-md wow fadeInUp" data-wow-delay="1.0s">Read more</a>
            </div>
            <!--column 2 ends here-->

            <!--column 3 begins here-->
            <div class="col-lg-4 col-md-6 mb-r">
                <div class="view overlay hm-white-slight rounded z-depth-2 mb-2 wow fadeInRight" data-wow-delay="0.5s">
                    <img src="img/knust2.jpg" class="img-fluid" alt="First sample image" style="height: 232px; width:100%;">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <a href="" class="cyan-text wow fadeInUp" data-wow-delay="0.6s">
                <h6 class="mb-3 mt-4">
                    <i class="fa fa-music "></i>
                    <strong> Entertainment</strong>
                </h6>
                </a>
                <h4 class="mb-3 font-bold dark-grey-text wow fadeInUp" data-wow-delay="0.7s">
                    <strong>This will be the title of the news</strong>
                </h4>
                <p class="wow fadeInUp" data-wow-delay="0.8s">by
                    <a class="font-bold dark-grey-text">ONoS Team</a>, 15/07/2018
                </p>
                <p class="grey-text wow fadeInUp" data-wow-delay="0.9s">
                    You are seeing news and events from Kwame Nkrumah University of Science and Technology. 
                    All contents of these messages are to be taken serious and to be treated with the utmost importance as you 
                    forfiet any of these messages on your own risk.
                </p>
                <a class="btn btn-info btn-rounded btn-md wow fadeInUp" data-wow-delay="1.0s">Read more</a>

            </div>
            <!-- column 3 ends here -->
            </div>
            <div style="padding-left: 4px; margin-top: 5px;">
                <a href="events.php">Read more of news and events here</a>
            </div>
        </section>
        <hr class="mb-5">
    </div>
    <!-- News and events session ends  here -->
            

    <!-- Tips section begins here -->
    <div class="container" style="margin-top: 10%">
        <section class="py-4">
            <!--intro starts here-->
            <h2 class="h1 text-center mb-4 wow fadeInDown" data-wow-delay="0.5s">Tips</h2>
            <p class="text-center mb-5 pb-5 wow fadeInUp" data-wow-delay="0.6s"style="font-size:21px;">
                You are seeing tips from Kwame Nkrumah University of Science and Technology. 
                All contents of these messages are to be taken serious and to be treated with the utmost importance as you 
                forfiet any of these messages on your own risk.
            </p>
            <!-- intro ends here -->

            <!-- row 1 begins here-->
            <div class="row">
                <div class="col-lg-5 col-xl-4 mb-4 wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="view overlay hm-white-slight rounded z-depth-1-half">
                        <img src="img/knust2.jpg" class="img-fluid" alt="First sample image" style="height: 232px; width:100%;">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                    <h3 class="mb-3 font-bold dark-grey-text wow fadeInRight" data-wow-delay="0.6s">
                        <strong>Take note of this</strong>
                    </h3>
                    <p class="grey-text wow fadeInUp" data-wow-delay="0.7s" style="font-size: 17px;">
                        You are seeing news and events from Kwame Nkrumah University of Science and Technology. 
                        All contents of these messages are to be taken serious and to be treated with the utmost importance as you forfiet any of these messages on your own risk.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.7s">by
                        <a class="font-bold dark-grey-text">Onos Team - For News and Events</a>, 27/01/2018
                    </p>
                    <a class="btn btn-primary btn-md wow fadeInUp" data-wow-delay="0.6s">Read more</a>
                </div>
            </div>
            <!-- row 1 ends here -->

            <hr class="mb-5">

            <!--row 2 begins here-->
            <div class="row mt-3">
                <div class="col-lg-5 col-xl-4 mb-4 wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="view overlay hm-white-slight rounded z-depth-1">
                        <img src="img/knust_admin.jpg" class="img-fluid" alt="First sample image" style="height: 232px; width:100%">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                    <h3 class="mb-3 font-bold dark-grey-text wow fadeInRight" data-wow-delay="0.6s">
                        <strong>Take note of this</strong>
                    </h3>
                    <p class="grey-text wow fadeInUp" data-wow-delay="0.7s" style="font-size: 17px;">
                        You are seeing news and events from Kwame Nkrumah University of Science and Technology. 
                        All contents of these messages are to be taken serious and to be treated with the utmost importance as you forfiet any of these messages on your own risk.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.8s">by
                        <a class="font-bold dark-grey-text">Onos Team - For News and Events</a>, 27/01/2018
                    </p>
                    <a class="btn btn-primary btn-md wow fadeInUp" data-wow-delay="0.9s">Read more</a>
                </div>
            </div>
            <!--row 2 ends here -->

            <hr class="mb-5">

            <!--row 3 starts here -->
            <div class="row">
                <div class="col-lg-5 col-xl-4 mb-4 wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="view overlay hm-white-slight rounded z-depth-1">
                        <img src="img/knust3.jpg" class="img-fluid" alt="First sample image" style="height: 232px; width:100%;">
                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                    <h3 class="mb-3 font-bold dark-grey-text wow fadeInRight" data-wow-delay="0.6s">
                        <strong>Take note of this</strong>
                    </h3>
                    <p class="grey-text wow fadeInUp" data-wow-delay="0.7s" style="font-size: 17px;">
                        You are seeing news and events from Kwame Nkrumah University of Science and Technology. 
                        All contents of these messages are to be taken serious and to be treated with the utmost importance as you forfiet any of these messages on your own risk.
                    </p> 
                    <p class="wow fadeInUp" data-wow-delay="0.8s"> by 
                        <a class="font-bold dark-grey-text">Onos Team - For News and Events </a>, 27/01/2018
                    </p>
                    <a class="btn btn-primary btn-md wow fadeInUp" data-wow-delay="0.9s">Read more</a>

                    <div style="padding-left: 4px; margin-top: 30px;">
                        <a href="tips.php">Read more of tips here</a>
                    </div>
                </div>
            </div>
            <!--row 3 ends here-->
            <hr class="mb-5">
        </section> 
    </div>
    <!-- Tips section ends here  -->


    <!-- Modals -->
    <!-- read more for DOS sections -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel" >
                        Reviewing of independent acacdemic board activities in the ongoing elections.
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    This you are seeing posts from the Dean of Students of the Kwame Nkrumah University of Science and Technology. All contents of these messages are to be taken serious and to be treated with the utmost importance as you forfiet any of these messages on your own risk. Then there will be individual activities to be studied, aligned and understood as we proceed to make sure they work well.
                    This you are seeing posts from the Dean of Students of the Kwame Nkrumah University of Science and Technology. All contents of these messages are to be taken serious and to be treated with the utmost importance as you forfiet any of these messages on your own risk. Then there will be individual activities to be studied, aligned and understood as we proceed to make sure they work well.
                    This you are seeing posts from the Dean of Stud
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- for subscribing to dos recent posts -->
     <div class="modal fade" id="dosRecentPosts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel" >
                        <!-- Reviewing of independent acacdemic board activities in the ongoing elections. -->
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Please, you must log in to receive daily messages from the Dean of Stundents 
                </div>
                <div class="modal-footer">
                    <a href="login.php">
                        <button type="button" class="btn btn-success" Xdata-dismiss="modal">Log in</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- for subscribing to news and events -->
    <div class="modal fade" id="newsAndEvents" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel" >
                            <!-- Reviewing of independent acacdemic board activities in the ongoing elections. -->
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Please, you must log in to receive daily news and events
                    </div>
                    <div class="modal-footer">
                        <a href="login.php">
                            <button type="button" class="btn btn-success" Xdata-dismiss="modal">Login</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal ends here -->




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
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">
        // for floating images and texts
        new WOW().init();
    </script>

</body>

</html>
