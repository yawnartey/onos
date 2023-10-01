<?php  
    include 'navUsers.php';
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div id="wrapper" class="sidebar_style">
        
        <div id="page-wrapper">
            <!-- username display -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <i class="fa fa-bell-o fa-fw"></i> All Notifications
                    </h1> 
                </div>
            </div>
            <!-- username display ends-->

            <!-- new items posted -->
            <!-- <div class="row">
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
            </div> -->
            <!-- new items posted ends -->

            <div class="row" style="margin-top: 30px;">
                <!-- dos message -->
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span style="color: black; font-size: 18px;">
                                <i class="fa fa-envelope fa-fw"></i> Dean of Students messages
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#subscribe">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="dosPost_message"></span>                                                      
                            <br>
                            <div id="display_dosPost"></div>
                        </div>
                    </div>
                </div>
            </div>   

            <!-- events -->
            <div class="row">
                <div class="col-lg-12" style="margin-top: 50px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span style="color: black; font-size: 18px;">
                                <i class="fa fa-edit fa-fw"></i> General Events
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#subscribe">
                                        Subscribe
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="panel-body">
                                <span id="eventsPost_messageBody"></span>
                            </div>   
                            <br>
                            <div id="display_eventsPost"></div>
                        </div>
                            
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>   

            <!-- tips -->
            <div class="row">    
                <div class="col-lg-12" style="margin-top: 50px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span style="color: black; font-size: 18px;">
                                <i class="fa fa-edit fa-fw"></i> Tips
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#subscribe">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="panel-body">
                                <span id="tipsPost_messageBody"></span>
                                <br>
                            <div id="display_tipsPost"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>  
            </div>    

            <!-- the notice board -->
            <div class="row">    
                <div class="col-lg-12" style="margin-top: 50px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span style="color: black; font-size: 18px;">
                                <i class="fa fa-sitemap fa-fw"></i> The notice board
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#subscribe">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                         <div class="panel-body">
                            <div class="panel-body">
                                <span id="noticePost_messageBody"></span>
                                <br>
                                <div id="display_noticePost"></div>
                            </div>
                        </div>    
                    </div>
                </div>  
            </div>
            <!-- /.row -->
        </div>
    </div>


	<script>
	    $(document).ready(function() { 
	        $('#dataTables-example').DataTable({
	            responsive: true
	        }); 

            // dos
            $('#dosPost_form').on('submit', function(event){
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                url:"add_dosMessage.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                       $('#dosPost_form')[0].reset();
                       $('#dosPost_message').html(data.error);
                       $('#dosPost_id').val('0');
                       load_dosPost();
                    }
                }
                })
               });
            load_dosPost();
            function load_dosPost()
           {
                $.ajax({
                    url:"fetch_dosMessage.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_dosPost').html(data);
                    }
                })
            }

            // events
            $('#eventsPost_form').on('submit', function(event){
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                url:"add_eventsPost.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                       $('#eventsPost_form')[0].reset();
                       $('#eventsPost_message').html(data.error);
                       $('#eventsPost_id').val('0');
                       load_eventsPost();
                    }
                }
                })
            });
            load_eventsPost();
            function load_eventsPost()
           {
                $.ajax({
                    url:"fetch_eventsPosts.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_eventsPost').html(data);
                    }
                })
            }



        // tips
        $('#tipsPost_form').on('submit', function(event){
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
            url:"add_tipsPost.php",
            method:"POST",
            data:form_data,
            dataType:"JSON",
            success:function(data)
            {
                if(data.error != '')
                {
                   $('#tipsPost_form')[0].reset();
                   $('#tipsPost_message').html(data.error);
                   $('#tipsPost_id').val('0');
                   load_tipsPost();
                }
            }
            })
           });
            load_tipsPost();
            function load_tipsPost()
           {
                $.ajax({
                    url:"fetch_tipsPosts.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_tipsPost').html(data);
                    }
                })
            }

        // notice
        $('#noticePost_form').on('submit', function(event){
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
            url:"add_noticePost.php",
            method:"POST",
            data:form_data,
            dataType:"JSON",
            success:function(data)
            {
                if(data.error != '')
                {
                   $('#noticePost_form')[0].reset();
                   $('#noticePost_message').html(data.error);
                   $('#noticePost_id').val('0');
                   load_noticePost();
                }
            }
            })
           });
            load_noticePost();
            function load_noticePost()
           {
                $.ajax({
                    url:"fetch_noticePost.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_noticePost').html(data);
                    }
                })
            }
        });
    </script>
</body>
</html>