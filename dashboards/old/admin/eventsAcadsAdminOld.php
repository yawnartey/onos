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
            <div class="row" style="margin-top: 30px;">
                <!-- events -->
                <div class="col-lg-12" style="">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span style="color: black;font-size: 17px;">
                                <i class="fa fa-graduation-cap   fa-fw"></i> Academic Events
                            </span>
                            
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#postAcadEvent">
                                        Post an academic event
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="eventsAcadsPost_messageBody"></span>
                            <br>
                            <div id="display_eventsAcadsPost"></div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- /.row -->
        </div>

        <!-- Modal for academic events start here -->
        <div class="modal fade" id="postAcadEvent" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="">&times;</span>
                        </button>
                        <h4 class="h2-responsive font-bold modal-title">
                            <center>
                                <span class="" style="color: ;">
                                    <center>You are posting an academic event</center>
                                </span>
                            </center>
                        </h4>  
                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" id="eventsAcadsPost_form">
                           <div class="form-group">
                                <center><label>Title of Message</label></center>
                                <input class="form-control" name="eventsAcadsPost_name" id="eventsAcadsPost_name" required="eventsAcadsPost_name">
                            </div>
                            <div class="form-group">
                                <center><label>Message</label></center>
                                <textarea class="form-control" rows="5" name="eventsAcadsPost_content" id="eventsAcadsPost_content" required="eventsAcadsPost_content"></textarea> 
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="eventsAcadsPost_id" id="eventsAcadsPost_id" value="0">
                                <center>
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                                </center>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Modal for academic event ends here  -->
        
    </div>

	<script>
	    $(document).ready(function() {
    
            // eventsAcads
            $('#eventsAcadsPost_form').on('submit', function(event){
                event.preventDefault();
                $('#postAcadEvent').modal('hide');
                alert("Academic event has been sent");
                var form_data = $(this).serialize();
                $.ajax({
                url:"add_eventsAcadsPost.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                       $('#eventsAcadsPost_form')[0].reset();
                       $('#eventsAcadsPost_message').html(data.error);
                       $('#eventsAcadsPost_id').val('0');
                       load_eventsAcadsPost();
                    }
                }
                })
               });

            // fecth from database
            load_eventsAcadsPost();
            function load_eventsAcadsPost()
           {
                $.ajax({
                    url:"fetch_eventsAcadsPosts.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_eventsAcadsPost').html(data);
                    }
                })
            }

        });
    </script>
</body>
</html>