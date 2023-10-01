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

            <!-- dos message section -->
            <div class="row" style="margin-top: 30px;">
              <div class="col-lg-12">
                  <div class="panel panel-info">
                      <div class="panel-heading">
                        <span style="font-size: 17px; color: black;">
                          <i class="fa fa-envelope fa-fw"></i> Dean of Students messages
                        </span>  
                          <div class="pull-right">
                              <div class="btn-group">
                                  <button type="button" id="" class="btn btn-primary btn-xs" data-toggle="modal" data-target = "#postMessage">
                                      Post a message
                                  </button>
                              </div>
                          </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <span id="dosPost_messageBody"></span>
                          <br>
                          <div id="display_dosPost"></div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
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
        $('#dosPost_form').on('submit', function(event){
            event.preventDefault();
            $('#dos').modal('hide');
            alert("Social event has been sent");
            var form_data = $(this).serialize();
            $.ajax({
            url:"add_dosMessage.php",
            method:"POST",
            data:form_data,
            dataType:"JSON",
            success:function(data)
            {
                if(data.error != '')
                {
                   $('#dosPost_form')[0].reset();
                   $('#dosPost_message').html(data.error);
                   $('#dosPost_id').val('0');
                   load_dosPost();
                }
            }
            })
           });
          load_dosPost();
          function load_dosPost()
         {
              $.ajax({
                  url:"fetch_dosMessage.php",
                  method:"POST",
                  success:function(data)
                  {
                     $('#display_dosPost').html(data);
                  }
              })
          }
        });
    </script>
</body>
</html>
