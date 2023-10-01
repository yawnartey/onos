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
                    <h1 class="page-header">Welcome User</h1> 
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <!-- events -->
                <div class="col-lg-12" style="">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Your Schedule
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#postSchedule">
                                        Add your schedule
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="cScheduleNoticePost_messageBody"></span>
                            <br>
                            <div id="display_cScheduleNoticePost"></div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>


        <!-- Modal for computer science department starts here -->
        <div class="modal fade" id="postSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   <div class="modal-header">
                        <h4 class="h2-responsive font-bold modal-title">
                            <center>
                                <span class="" style="color: red;">
                                    Customise your schedule.
                                </span>
                            </center>
                        </h4>  
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" id="cScheduleNoticePost_form">
                           <div class="form-group">
                                <label>Title of Schedule</label>
                                <input class="form-control" name="cScheduleNoticePost_name" id="cScheduleNoticePost_name" required="cScheduleNoticePost_name">
                            </div>
                            <div class="form-group">
                                <label>Schedule content</label>
                                <textarea class="form-control" rows="5" name="cScheduleNoticePost_content" id="cScheduleNoticePost_content" required="cScheduleNoticePost_content"></textarea> 
                            </div>
                            <!-- due date -->
                            <div class="form-group">
                                <label>Date Due</label>
                                <input class="form-control" type="text" name="cScheduleNoticePost_date" id="cScheduleNoticePost_date" required="cScheduleNoticePost_date">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="cScheduleNoticePost_id" id="cScheduleNoticePost_id" value="0">
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
    
            // optoNotice
            $('#cScheduleNoticePost_form').on('submit', function(event){
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                url:"add_cSchedulePost.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                       $('#cScheduleNoticePost_form')[0].reset();
                       $('#cScheduleNoticePost_message').html(data.error);
                       $('#cScheduleNoticePost_id').val('0');
                       load_cScheduleNoticePost();
                    }
                }
                })
               });
            // fetch message from database
            load_cScheduleNoticePost();
            function load_cScheduleNoticePost()
           {
                $.ajax({
                    url:"fetch_cSchedulePost.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_cScheduleNoticePost').html(data);
                    }
                })
            }


            //updating an iteme
            $(document).on('click', '.update', function(){
                var user_id = $(this).attr("id");
                $.ajax({
                    url:"fetch_single.php",
                    method:"POST",
                    data:{user_id:user_id},
                    dataType:"json",
                   success:function(data)
                   {
                        $('#userModal').modal('show');
                        $('#first_name').val(data.first_name);
                        $('#last_name').val(data.last_name);
                        $('.modal-title').text("Edit User");
                        $('#user_id').val(user_id);
                        $('#user_uploaded_image').html(data.user_image);
                        $('#action').val("Edit");
                        $('#operation').val("Edit");
                   }
                  })
             });

        });
    </script>
</body>
</html>