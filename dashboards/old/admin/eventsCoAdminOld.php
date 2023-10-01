<?php  
    include 'navAdmin.php';
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <div id="wrapper" class="sidebar_style">
        <!-- Navigation -->

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
                                 <i class="fa f fa-cubes fa-fw"></i> Co-curricular Events
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#postCoEvent">
                                        Post a co-curricular event
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="eventsCoPost_messageBody"></span>
                            <br>
                            <div id="display_eventsCoPost"></div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>


        <!-- Modal for co events start here -->
        <div class="modal fade" id="postCoEvent" tabindex="-1" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="">&times;</span>
                        </button>
                        <h4 class="h2-responsive font-bold modal-title">
                            <center>
                                <span class="" style="">
                                    You are posting to co-curricular events
                                </span>
                            </center>
                        </h4>  
                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" id="eventsCoPost_form">
                           <div class="form-group">
                                <center><label>Title of Message</label></center>
                                <input class="form-control" name="eventsCoPost_name" id="eventsCoPost_name" required="eventsCoPost_name">
                            </div>
                            <div class="form-group">
                                <center><label>Message</label></center>
                                <textarea class="form-control" rows="5" name="eventsCoPost_content" id="eventsCoPost_content" required="eventsCoPost_content"></textarea> 
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="eventsCoPost_id" id="eventsCoPost_id" value="0">
                                <center>
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                                </center>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Modal for co event ends here  -->
    </div>


    <script>
        $(document).ready(function() {
    
            // eventsCo
            $('#eventsCoPost_form').on('submit', function(event){
                $("#postCoEvent").modal('hide'); 
                alert("Co-curricular event have been sent");
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                url:"add_eventsCoPost.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                       $('#eventsCoPost_form')[0].reset();
                       $('#eventsCoPost_message').html(data.error);
                       $('#eventsCoPost_id').val('0');
                       load_eventsCoPost();
                    }
                }
                })
               });
            load_eventsCoPost();
            function load_eventsCoPost()
           {
                $.ajax({
                    url:"fetch_eventsCoPosts.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_eventsCoPost').html(data);
                    }
                })
            }

        });
    </script>
</body>
</html>