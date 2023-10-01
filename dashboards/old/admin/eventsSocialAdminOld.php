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
                            <span style="color: black; font-size: 17px;">
                                 <i class="fa  fa-puzzle-piece fa-fw"></i> Social Event
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#postSocialEvent">
                                        Post a social event
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="eventsSocialPost_messageBody"></span>
                            <br>
                            <div id="display_eventsSocialPost"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal for social events start here -->
        <div class="modal fade" id="postSocialEvent" data-backdrop="static" data-keyboard="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <div class="modal-header">
                        <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                            <span aria-hidden="true" style="">&times;</span>
                        </button>
                        <h4 class="h2-responsive font-bold modal-title">
                            <center>
                                <span class="" style="">
                                    You are posting to social events
                                </span>
                            </center>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" id="eventsSocialPost_form">
                           <div class="form-group">
                                <center><label>Title of Message</label></center>
                                <input class="form-control" name="eventsSocialPost_name" id="eventsSocialPost_name" required="eventsSocialPost_name">
                            </div>
                            <div class="form-group">
                                <center><label>Message</label></center>
                                <textarea class="form-control" rows="5" name="eventsSocialPost_content" id="eventsSocialPost_content" required="eventsSocialPost_content"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="eventsSocialPost_id" id="eventsSocialPost_id" value="0">
                                <center>
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                                </center>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for social event ends here  -->

    </div>
	<script>
	    $(document).ready(function() {

            // eventsSocial
            $('#eventsSocialPost_form').on('submit', function(event){
                event.preventDefault();
                $('#postSocialEvent').modal('hide');
                alert("Social event has been sent");
                var form_data = $(this).serialize();
                $.ajax({
                url:"add_eventsSocialPost.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                       $('#eventsSocialPost_form')[0].reset();
                       $('#eventsSocialPost_message').html(data.error);
                       $('#eventsSocialPost_id').val('0');
                       load_eventsSocialPost();
                    }
                }
                })
               });
            load_eventsSocialPost();
            function load_eventsSocialPost()
           {
                $.ajax({
                    url:"fetch_eventsSocialPosts.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_eventsSocialPost').html(data);
                    }
                })
            }

        });
    </script>
</body>
</html>
