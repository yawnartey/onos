<?php
    include 'navAdmin.php';  
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
                    <h1 class="page-header">Welcome admin</h1> 
                </div>
            </div>
            <!-- username display ends-->

            <div class="row" style="margin-top: 30px;">
                <!-- events -->
                <div class="col-lg-12" style="">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span style="color: black; font-size: 17px;">
                                <i class="fa fa-calendar fa-fw"></i> Second semester academic calendar
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#postSecCalendarAdmin">
                                        Post a second semester academic calendar
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


        <!-- Modal for second sem calendar here -->
        <div class="modal fade" id="postSecCalendarAdmin" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <div class="modal-header">
                        <h4 class="h2-responsive font-bold modal-title">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="">&times;</span>
                            </button>
                            <center>
                                <span class="" style="">
                                    You are posting a second semester academic calendar. 
                                </span>
                            </center>
                        </h4>  
                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" id="calendarSecPost_form">
                           <div class="form-group">
                                <center><label>Title of Message</label></center>
                                <input class="form-control" name="calendarSecPost_name" id="calendarSecPost_name">
                            </div>
                            <div class="form-group">
                                <center><label>Message</label></center>
                                <textarea class="form-control" rows="5" name="calendarSecPost_content" id="calendarSecPost_content"></textarea> 
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="calendarSecPost_id" id="calendarSecPost_id" value="0">
                                <center>
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                                </center>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Modal for sec sem cal ends here  -->
    </div>

	<script>
	    $(document).ready(function() {
    
            // eventsSocial
            $('#calendarSecPost_form').on('submit', function(event){
                $("#postCalendarAdmin").modal('hide'); 
                alert("Second semester academic calendar have been posted");
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