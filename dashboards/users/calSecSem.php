<?php  
    include 'navUsers.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Onos - User-Dashboard</title>

	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/metisMenu/metisMenu.min.css">
	<link rel="stylesheet" type="text/css" href="lib/dist/css/sb-admin-2.css">
	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables-plugins/dataTables.bootstrap.css">
</head>
<body>

	<div id="wrapper">

        <div id="page-wrapper">
            <!-- username display -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <i class="fa fa-bell fa-fw"></i>Second semester academic calendar
                    </h1> 
                </div>
            </div>
            <!-- username display ends-->

            <!-- new items posted -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Messages!</div>
                                </div>
                            </div>
                        </div>
                        <a href="all_dosPosts.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New events!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">3</div>
                                    <div>New tips!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Newly posted items!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- new items posted ends -->

            <div class="row" style="margin-top: 30px;">
                <!-- events -->
                <div class="col-lg-12" style="">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i>Your notice 
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#dosSubscribe">
                                       Subscribe
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="calendarSecPost_messageBody"></span>
                            <br>
                            <div id="display_calendarSecPost"></div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- /.row -->
        </div>


        <!-- Modal for students guide start here -->
       <div class="modal fade" id="dosSubscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       Thank you for subscribing. You will be notified daily whenever an academic calendar for second semester is posted.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



	<script type="text/javascript" src="lib/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="lib/metisMenu/metisMenu.min.js"></script>
	<script type="text/javascript" src="lib/dist/js/sb-admin-2.js"></script>
	<!-- dataTables -->
	<script type="text/javascript" src="lib/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="lib/datatables-plugins/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="lib/datatables-responsive/dataTables.responsive.js"></script>

	<script>
	    $(document).ready(function() {
    
            // second semester calendar 
            $('#calendarSecPost_form').on('submit', function(event){
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                url:"add_calendarSecPost.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                       $('#calendarSecPost_form')[0].reset();
                       $('#calendarSecPost_message').html(data.error);
                       $('#calendarSecPost_id').val('0');
                       load_calendarSecPost();
                    }
                }
                })
               });
            // fetch from database
            load_calendarSecPost();
            function load_calendarSecPost()
           {
                $.ajax({
                    url:"fetch_calendarSecPost.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_calendarSecPost').html(data);
                    }
                })
            }

        });
    </script>
</body>
</html>