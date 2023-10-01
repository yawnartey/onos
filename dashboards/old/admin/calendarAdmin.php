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
                            <span style="font-size: 17px; color: black">
                                <i class="fa fa-calendar fa-fw"></i> First semester academic calendar
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#postCalendarAdmin">
                                        Post an academic calendar
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="calendarPost_messageBody"></span>
                            <br>
                            <div id="display_calendarPost"></div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- /.row -->
        </div>


        <!-- Modal for calendar here -->
        <div class="modal fade" id="postCalendarAdmin" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="">&times;</span>
                        </button>
                        <h4 class="h2-responsive font-bold modal-title">
                            <center>
                                <span class="" style="">
                                    You are posting an academic calendar of first semester 
                                </span>
                            </center>
                        </h4>  
                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" id="calendarPost_form">
                           <div class="form-group">
                                <center><label>Title of Message</label></center>
                                <input class="form-control" name="calendarPost_name" id="calendarPost_name">
                            </div>
                            <div class="form-group">
                                <center><label>Message</label></center>
                                <textarea class="form-control" rows="5" name="calendarPost_content" id="calendarPost_content"></textarea> 
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="calendarPost_id" id="calendarPost_id" value="0">
                                <center>
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                                </center>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Modal for calendar ends here  -->
    </div>
	<script>
	    $(document).ready(function() {
    
            // eventsSocial
            $('#calendarPost_form').on('submit', function(event){
                $("#postCalendarAdmin").modal('hide'); 
                alert("Academic calender have been posted"); 
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                url:"add_calendarPost.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                       $('#calendarPost_form')[0].reset();
                       $('#calendarPost_message').html(data.error);
                       $('#calendarPost_id').val('0');
                       load_calendarPost();
                    }
                }
                })
               });
            load_calendarPost();
            function load_calendarPost()
           {
                $.ajax({
                    url:"fetch_calendarPost.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_calendarPost').html(data);
                    }
                })
            }

        });
    </script>
</body>
</html>