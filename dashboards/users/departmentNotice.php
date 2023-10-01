<?php  
    include 'navUsers.php';
?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

	<div id="wrapper">

        <div id="page-wrapper">
            <!-- username display -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <i class="fa fa-laptop fa-fw"></i>Department of Computer Engineering
                    </h1> 
                </div>
            </div>
            <!-- username display ends-->

            

            <div class="row" style="margin-top: 30px;">
                <!-- events -->
                <div class="col-lg-12" style="">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <span style="color: white; font-size: 18px">
                                <i class="fa fa-bell-o fa-fw"></i> Your notice
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#dosSubscribe">
                                       Subscribe
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="department_data"></span>
                           
                        </div>
                    </div>
                </div>   
            </div>
            <!-- /.row -->
        </div>


        <!-- Modal for students guide start here -->
       <div class="modal fade" id="dosSubscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       Thank you for subscribing. You will be notified daily whenever Department of Computer Engineeiring notice is posted
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<script>
	    $(document).ready(function() {
    
            // college of health science post
             // security tip
            fetch_data(); 

            function fetch_data(){
                var action = "fetch";
                $.ajax({
                    url:"department.php", 
                    method:"POST", 
                    data:{action:action}, 
                    success:function(data){
                        $('#department_data').html(data); 
                    }
                })
            }

        });
    </script>
</body>
</html>