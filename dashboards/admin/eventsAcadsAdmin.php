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
                        <i class="fa fa-graduation-cap fa-fw"></i> Academic Events
                    </h1> 
                </div>
            </div>
            <div class="row" style="">
                <div class="col-lg-12" style="margin-top: 50px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <span style="color: white; font-size: 18px;">
                                <i class="fa fa-bell-o fa-fw"></i> Your notice
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" id="addEvent" name="addEvent">
                                        Post an Academic Event.
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="event_data"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>

        <!-- Modal for academic events start here -->
        <div class="modal fade" id="eventsPost" role="document" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center><h4 class="modal-title"></h4></center>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <form id="events_form" method="POST" enctype="multipart/form-data">
                            <p>
                                <label>Attach an image</label>
                                <center><input type="file" name="event_image" id="event_image"> <br></center>
                            </p>
                            <p> 
                                <label>Title of Image</label>
                                <input class="form-control" type="text" name="event_image_title" id="event_image_title">
                            </p>
                            <p> 
                                <label>Title of Post</label>
                                <textarea class="form-control" name="event_post_title" id="event_post_title" rows="3"></textarea>
                            </p>
                            <p> 
                                <label>Post</label>
                                <textarea class="form-control" name="event_post_content" id="event_post_content" rows="6"></textarea>
                            </p>
                            <p>
                                <input type="submit" name="insertEvent" value="Submit" id="insertEvent" class="btn btn-primary">
                                <input type="hidden" name="actionEvent" id="actionEvent" value="insertEvent">
                                <input type="hidden" name="image_id" id="image_id">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

	<script>
	    $(document).ready(function() {
    
        load_data(); 
        function load_data(){
            var actionEvent = "fetch";
            $.ajax({
                url:"events.php", 
                method:"POST", 
                data:{actionEvent:actionEvent}, 
                success:function(data){
                    $('#event_data').html(data); 
                }
            })
        }
        $('#addEvent').click(function(){
            $('#eventsPost').modal('show'); 
            $('#events_form')[0].reset(); 
            $('.modal-title').text("Add Event"); 
            $('#image_id').val(''); 
            $('#actionEvent').val('insertEvent'); 
            $('#insertEvent').val("Send"); 
        }); 
        $("#events_form").submit(function(event){
            event.preventDefault(); 
            var image_name = $('#event_image').val();
            var image_title = $('#event_image_title').val(); 
            var post_title = $('#event_post_title').val();
            var post_content = $('#event_post_content').val(); 
            if(image_name == ''){
                alert("Please select image"); 
                return false; 
            }
            if(post_title == ''){
                alert("Please enter title of post");
                return false; 
            }
            if (post_content == '') {
                alert ("Please enter content of post");
                return false; 
            }
            else{
                var extension = $('#event_image').val().split('.').pop().toLowerCase(); 
                if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg', 'mp4', 'mp3']) == -1){
                    alert("Invalid image file");
                    $('#image_name').val(''); 
                    return false;
                }else{
                    $.ajax({
                        url:"events.php", 
                        method:"POST", 
                        data: new FormData(this), 
                        contentType:false, 
                        processData:false, 
                        success:function(data){
                            alert(data); 
                            load_data(); 
                            $('#events_form')[0].reset(); 
                            $('#eventsPost').modal('hide'); 
                        }
                    }); 
                }
            }
        });

        // for updating
        $(document).on('click', '.update', function(){
            $('#image_id').val($(this).attr("id")); 
            $('#actionEvent').val("update"); 
            $('.modal-title').text("Update Event"); 
            $('#image_title').val();
            $('#post_title').val();
            $('#post_content').val();
            $('#insertEvent').val("Update");
            $('#eventsPost').modal("show");  
        });  

        // for deleting
        $(document).on('click', '.delete', function(){
            var image_id = $(this).attr("id"); 
            var actionEvent = "delete"; 
            if(confirm("Are you sure you want to remove this events from database?")){
                $.ajax({
                    url:"events.php", 
                    method:"POST", 
                    data:{image_id:image_id, actionEvent:actionEvent},
                    success:function(data){
                        alert(data); 
                        load_data(); 
                    }
                })
            }else{
                return false; 
            }
        })

        });
    </script>
</body>
</html>