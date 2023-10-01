<?php session_start(); include 'thecheck.php'; ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Onos - Admin-Dashboard</title>

    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap-multiselect.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/dist/css/sb-admin-2.css">
    <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/datatables-plugins/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/adminStyle.css">
    <!-- <link rel="stylesheet" href="../lib/bootstrap-select-1.12.4/dist/css/bootstrap-select.min.css"> -->
    <link rel="shortcut icon" type="image/png" href="logo.png" class="image-circle" sizes="">
</head>
<script type="text/javascript" src="../lib/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/bootstrap/js/bootstrap-multiselect.min.js"></script>
<script type="text/javascript" src="../lib/metisMenu/metisMenu.min.js"></script>
<script type="text/javascript" src="../lib/dist/js/sb-admin-2.js"></script>
<!-- <script src="../lib/bootstrap-select-1.12.4/dist/js/bootstrap-select.min.js"></script> -->


<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="indexAdmin.php" id="ONoS_logo">ONoS</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <!-- navbar right items -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding: 0px;">
                <i class="fa fa-bell fa-fw"></i><i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="" data-toggle="modal" data-target="#postMessage">
                        <i class="fa fa-envelope"></i> Dean of Students messages
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="" data-toggle="modal" data-target="#postEvent">
                        <i class="fa fa-calendar"></i> Events
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="" data-toggle="modal" data-target="#postTip">
                        <i class="fa fa-edit"></i>  Tips
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="" data-toggle="modal" data-target="#postNotice">
                       <i class="fa fa-comments"></i> The notice board
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding: 0px;">
                <i class="fa fa-user fa-fw"></i></i><?php echo ucfirst($_SESSION['username']); ?><i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-folder-open fa-fw"></i> Your profile</a>
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
                    <a href="indexAdmin.php" class="side_links"><i class="fa fa-envelope fa-fw"></i>
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
                            <a href="eventsAcadsAdmin.php">Academics</a>
                        </li>
                        <li>
                            <a href="eventsSocialAdmin.php">Social</a>
                        </li>
                        <li>
                            <a href="eventsCoAdmin.php">Extra-curriculur</a>
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
                            <a href="tipsStudentAdmin.php">Student's guide</a>
                        </li>
                        <li>
                            <a href="tipsExamAdmin.php">Examination regulations</a>
                        </li>
                        <li>
                            <a href="tipsSecurityAdmin.php">Security tips</a>
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
                                    <a href="calendarAdmin.php">First Semester</a>
                                </li>
                                <li>
                                    <a href="calSecSemAdmin.php">Second Semester</a>
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
                                    <a href="collegeNoticeAdmin.php">
                                        <span style="">College of Engineering</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="collegeScienceNoticeAdmin.php">
                                        <span style="">College of Science</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="collegeHealthScienceAdmin.php">
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
                                    <a href="departmentNoticeAdmin.php">Computer Engineering</a>
                                </li>
                                <li>
                                    <a href="compScienceNoticeAdmin.php">Computer Science</a>
                                </li>
                                <li>
                                    <a href="optoNoticeAdmin.php">Optometry</a>
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
                                    <a href="katHallAdmin.php">University hall</a>
                                </li>
                                <li>
                                    <a href="indeceHallAdmin.php">Independence hall</a>
                                </li>
                                <li>
                                    <a href="repuHallAdmin.php">Republic hall</a>
                                </li>
                                <li>
                                    <a href="queensHallAdmin.php">Queens hall</a>
                                </li>
                                <li>
                                    <a href="africaHallAdmin.php">Africa hall</a>
                                </li>
                                <li>
                                    <a href="unityHallAdmin.php">Unity hall</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="side_links"><i class="fa fa-files-o fa-fw"></i> Advertisement<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../ads/electronics.php">Electronics</a>
                        </li>
                        <li>
                            <a href="../ads/gentsWears.php">Wears</a>
                        </li>
                        <li>
                            <a href="../ads/jewellery.php">Jewelleries</a>
                        </li>
                        <li>
                            <a href="../ads/accessories.php">Accessories</a>
                        </li>
                        <li>
                            <a href="../ads/homeAppliances.php">Home appliances</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- sidebar navigation ends-->
</nav>
