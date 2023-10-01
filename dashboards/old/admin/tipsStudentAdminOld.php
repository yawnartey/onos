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
                    <h1 class="page-header">
                        <i class="fa fa-book fa-fw"></i>Students guide
                    </h1> 
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <!-- events -->
                <div class="col-lg-12" style="">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span style="color: black; font-size: 18px;">
                                <i class="fa fa-bell-o fa-fw"></i>Your notice
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#postStudentsTips">
                                        Post a student guide
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="tipsStudentPost_messageBody"></span>
                            <br>
                            <div id="display_tipsStudentPost"></div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- /.row -->
        </div>


        <!-- Modal for students guide start here -->
        <div class="modal fade" id="postStudentsTips" tabindex="-1" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="">&times;</span>
                        </button>
                        <h4 class="h2-responsive font-bold modal-title">
                            <center>
                                <span class="" style="s">
                                    You are posting to student's guide
                                </span>
                            </center>
                        </h4>  
                        
                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" id="tipsStudentPost_form">
                           <div class="form-group">
                                <center><label>Title of Message</label></center>
                                <input class="form-control" name="tipsStudentPost_name" id="tipsStudentPost_name" required="tipsStudentPost_name">
                            </div>
                            <div class="form-group">
                                <center><label>Message</label></center>
                                <textarea class="form-control" rows="5" name="tipsStudentPost_content" id="tipsStudentPost_content" required="tipsStudentPost_content"></textarea> 
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="tipsStudentPost_id" id="tipsStudentPost_id" value="0">
                                <center>
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                                </center>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Modal for event ends here  -->

    </div>


	<script>
	    $(document).ready(function() {
    
            // events
            $('#tipsStudentPost_form').on('submit', function(event){
                $("#postStudentsTips").modal('hide');
                alert("Tips for students have been posted");
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                url:"add_tipsStudentPost.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                       $('#tipsStudentPost_form')[0].reset();
                       $('#tipsStudentPost_message').html(data.error);
                       $('#tipsStudentPost_id').val('0');
                       load_tipsStudentPost();
                    }
                }
                })
               });
            load_tipsStudentPost();
            function load_tipsStudentPost()
           {
                $.ajax({
                    url:"fetch_tipsStudentPosts.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_tipsStudentPost').html(data);
                    }
                })
            }

        });
    </script>
</body>
</html>