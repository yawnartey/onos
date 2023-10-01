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
                        <i class="fa fa-puzzle-piece fa-fw"></i> Social Events
                    </h1> 
                </div>
            </div>
            <!-- username display ends-->
            <div class="row" style="margin-top: 30px;">
                <!-- events -->
                <div class="col-lg-12" style="">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span style="color: white; font-size: 18px;">
                                <i class="fa fa-bell-o fa-fw"></i> Your notice
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#socialEvent">
                                        Subscribe
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="eventsSocial_data"></span>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- /.row -->
        </div>


        <!-- Modal for events start here -->
        <div class="modal fade" id="socialEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       Thank you for subscribing. You will be notified daily whenever a social event is posted. 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal for event ends here  -->


        <!-- /#page-wrapper -->
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
    
            // eventsSocial
           fetch_data(); 

            function fetch_data(){
                var action = "fetch";
                $.ajax({
                    url:"eventsSocialFetch.php", 
                    method:"POST", 
                    data:{action:action}, 
                    success:function(data){
                        $('#eventsSocial_data').html(data); 
                    }
                })
            }

        });
    </script>
</body>
</html>