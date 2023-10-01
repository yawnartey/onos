<?php session_start(); include 'thecheck.php'; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Onos - User-Dashboard</title>

<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../lib/metisMenu/metisMenu.min.css">
<link rel="stylesheet" type="text/css" href="../lib/dist/css/sb-admin-2.css">
<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../lib/datatables-plugins/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="../lib/css/usersStyle.css">

<link rel="shortcut icon" type="image/png" href="logo.png" class="image-circle" sizes="">


<script type="text/javascript" src="../lib/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/metisMenu/metisMenu.min.js"></script>
<script type="text/javascript" src="../lib/dist/js/sb-admin-2.js"></script>
<!-- dataTables -->
<script type="text/javascript" src="../lib/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../lib/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/datatables-responsive/dataTables.responsive.js"></script>


<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" id="ONoS_logo">ONoS</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <!-- navbar right items -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding: 0px;">
                <i class="fa fa-bell fa-fw"></i><i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="" data-toggle="modal" data-target="#subscribe">
                        <i class="fa fa-envelope"></i> Dean of Students messages
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="" data-toggle="modal" data-target="#subscribe">
                        <i class="fa fa-calendar"></i> Events
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="" data-toggle="modal" data-target="#subscribe">
                        <i class="fa fa-edit"></i>  Tips
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="" data-toggle="modal" data-target="#subscribe">
                       <i class="fa fa-comments"></i> The notice board
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i><?php echo ucfirst($_SESSION['username']); ?><i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-folder-open fa-fw"></i> User profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="Logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- sidebar navigation -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" id="sideform" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default sidebar_button" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                </li>
                <li>
                    <a href="index.php" class="side_links"><i class="fa fa-envelope fa-fw"></i>
                        <span style="margin-left: 5px;">DOS messages</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="side_links">
                        <i class="fa fa-calendar fa-fw"></i> 
                        <span style="margin-left: 5px;">Events</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="eventsAcads.php">Academics</a>
                        </li>
                        <li>
                            <a href="eventsSocial.php">Social</a>
                        </li>
                        <li>
                            <a href="eventsCo.php">Co-curriculumn</a>
                        </li>
                    </ul>
                </li>
              <!--   <li>
                    <a href="timeTable.php" class="side_links"><i class="fa fa-table fa-fw"></i> Time table</a>
                </li> -->
                <li>
                    <a href="#" class="side_links"><i class="fa fa-edit fa-fw"></i> Tips<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="tipsStudent.php">Student's guide</a>
                        </li>
                        <li>
                            <a href="tipsExam.php">Examination regulations</a>
                        </li>
                        <li>
                            <a href="tipsSecurity.php">Security tips</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="side_links"><i class="fa fa-sitemap fa-fw"></i>
                        <span style="">The Notice Board</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                       <!--  <li>
                            <a href="#">
                                <span style="">Academic calender</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="calendar.php">First Semester</a>
                                </li>
                                <li>
                                    <a href="calSecSem.php">Second Semester</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="#">
                                <span style="">College notice </span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="collegeNotice.php">
                                        <span style="">College of Engineering</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="collegeScienceNotice.php">
                                        <span style="">College of Science</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="collegeHealthScience.php">
                                        <span style="">College of Health Science</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span style="">Department notices</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="departmentNotice.php">Computer Engineering</a>
                                </li>
                                <li>
                                    <a href="compScienceNotice.php">Computer Science</a>
                                </li>
                                <li>
                                    <a href="optoNotice.php">Optometry</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span style=""> Hall notices </span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="katHall.php">University hall</a>
                                </li>
                                <li>
                                    <a href="indeceHall.php">Independence hall</a>
                                </li>
                                <li>
                                    <a href="repuHall.php">Republic hall</a>
                                </li>
                                <li>
                                    <a href="queensHall.php">Queens hall</a>
                                </li>
                                <li>
                                    <a href="africaHall.php">Africa hall</a>
                                </li>
                                <li>
                                    <a href="unityHall.php">Unity hall</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="side_links"><i class="fa fa-files-o fa-fw"></i> Advertisement<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../electronics.php">Electronics</a>
                        </li>
                        <li>
                            <a href="../gentsWears.php">Wears</a>
                        </li>
                        <li>
                            <a href="../jewellery.php">Jewelleries</a>
                        </li>
                        <li>
                            <a href="../accessories.php">Accessories</a>
                        </li>
                        <li>
                            <a href="../homeAppliances.php">Home appliances</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- sidebar navigation ends-->
</nav>

<!-- subscription modal -->
<div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               Thank you for subscribing. You will be notified daily whenever an item is posted.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
