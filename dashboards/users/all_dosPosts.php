<?php
	include 'navUsers.php';
  ?>

<!DOCTYPE html>
<html>
<body>

    <!-- Navigation -->
    <div id="wrapper" class="sidebar_style">
        <div id="page-wrapper">
            <!-- username display -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome user</h1>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-envelope fa-fw"></i> Dean of Students messages
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" id="" data-target="#dosSubscribe">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="dosPost_message"></span>
                            <br>
                            <div id="display_dosPost"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal for subscription -->
            <div class="modal fade" id="dosSubscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           Thank you for subscribing. You will be notified daily whenever an item is posted.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });

         $(document).ready(function(){

            $('#dosPost_form').on('submit', function(event){
                event.preventDefault();
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

           // $(document).on('click', '.reply', function(){
           //      var comment_id = $(this).attr("id");
           //      $('#dosPost_id').val(dosPost_id);
           //      $('#dosPost_name').focus();
           //  });
        });
    </script>
</body>
</html>
