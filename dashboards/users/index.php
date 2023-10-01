<?php
    include 'navUsers.php';
    include 'thecheck.php';
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
                       <i class="fa fa-envelope fa-fw "></i> Dean's Messages
                    </h1> 
                </div>
            </div>
            <!-- username display ends-->

            <div class="row" style="margin-top: 30px;">
                <!-- dos message -->
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span style="color: white; font-size: 17px;">
                                <i class="fa fa-bell-o fa-fw "></i> Your notice
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
                            <span id="dos_data"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>


    <script>
        $(document).ready(function() {
            // for dos message
            fetch_data(); 

            function fetch_data(){
                var action = "fetch";
                $.ajax({
                    url:"dosUsers.php", 
                    method:"POST", 
                    data:{action:action}, 
                    success:function(data){
                        $('#dos_data').html(data); 
                    }
                })
            }
        });
    </script>
</body>
</html>
