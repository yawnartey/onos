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

            <div class="row" style="margin-top: 30px;">
                <!-- dos message -->
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span style="color: black; font-size: 17px;">
                                <i class="fa fa-envelope fa-fw "></i> Dean of Students messages
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" name="add" id="add">
                                        Post a message
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                           <!--  <span id="dosPost_messageBody"></span>
                            <br>
                            <div id="display_dosPost"></div> -->
                            <span id="image_data"></span>
                        </div>
                    </div>
                </div>

                <!-- events -->
                <div class="col-lg-12" style="margin-top: 50px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           <span style="color: black; font-size: 17px;">
                                <i class="fa fa-edit fa-fw"></i>General Events
                           </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#postEvent">
                                        Post an event
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="eventsPost_messageBody"></span>
                            <br>
                            <div id="display_eventsPost"></div>
                        </div>
                    </div>
                </div>


                <!-- tips -->
                <div class="col-lg-12" style="margin-top: 50px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                             <span style="color: black; font-size: 17px;" class="panel_header_texts">
                                <i class="fa fa-edit fa-fw"></i> General Tips
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#postTip">
                                        Post a tip
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="panel-body">
                                <span id="tipsPost_messageBody"></span>
                                <br>
                            <div id="display_tipsPost"></div>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- the notice board -->
                <div class="col-lg-12" style="margin-top: 50px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span style="color: black; font-size: 17px;">
                                <i class="fa fa-edit fa-fw"></i>Notice board
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#postNotice">
                                        Post to Notice board
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="panel-body">
                                <span id="noticePost_messageBody"></span>
                                <br>
                                <div id="display_noticePost"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>

        <!-- modal for images -->
        <div class="modal fade" id="imageModal" role="document" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        Add image
                    </h4>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <form id="image_form" method="POST" enctype="multipart/form-data">
                        <p>
                            <label>Add an image</label>
                            <center><input type="file" name="image" id="image"> <br></center>
                        </p>
                        <p> 
                            <label>Title of Image</label>
                            <input class="form-control" type="text" name="image_title" id="image_title">
                        </p>
                        <p> 
                            <label>Title of Post</label>
                            <textarea class="form-control" name="post_title" id="post_title" rows="3"></textarea>
                        </p>
                        <p> 
                            <label>Post</label>
                            <textarea class="form-control" name="post_content" id="post_content" rows="6"></textarea>
                        </p>
                        <p>
                            <input type="submit" name="insert" value="Submit" id="insert" class="btn btn-info">
                            <input type="hidden" name="action" id="action" value="insert">
                            <input type="hidden" name="image_id" id="image_id">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>



    </div>
    </div>

	<script>
	    $(document).ready(function() {
            fetch_data(); 

            function fetch_data(){
                var action = "fetch";
                $.ajax({
                    url:"dos.php", 
                    method:"POST", 
                    data:{action:action}, 
                    success:function(data){
                        $('#image_data').html(data); 
                    }
                })
            }

            $('#add').click(function(){
                $('#imageModal').modal('show'); 
                $('#image_form')[0].reset(); 
                $('#modal-title').text("Add Items"); 
                $('#image_id').val(''); 
                $('#action').val('insert'); 
                $('#insert').val("Insert"); 
            }); 
            $("#image_form").submit(function(event){
                event.preventDefault(); 
                var image_name = $('#image').val();
                var image_title = $('#image_title').val(); 
                var post_title = $('#post_title').val();
                var post_content = $('#post_content').val(); 
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
                    var extension = $('#image').val().split('.').pop().toLowerCase(); 
                    if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg', 'mp4', 'mp3']) == -1){
                        alert("Invalid image file");
                        $('#image_name').val(''); 
                        return false;
                    }else{
                        $.ajax({
                            url:"dos.php", 
                            method:"POST", 
                            data: new FormData(this), 
                            contentType:false, 
                            processData:false, 
                            success:function(data){
                                alert(data); 
                                fetch_data(); 
                                $('#image_form')[0].reset(); 
                                $('#imageModal').modal('hide'); 
                            }
                        }); 
                    }
                }
            });

            // for updating
            $(document).on('click', '.update', function(){
                $('#image_id').val($(this).attr("id")); 
                $('#action').val("update"); 
                $('.modal-title').text("Update Items"); 
                $('#image_title').val();
                $('#image_description').val();
                $('#insert').val("Update");
                $('#imageModal').modal("show");  
            });  

            // for deleting
            $(document).on('click', '.delete', function(){
                var image_id = $(this).attr("id"); 
                var action = "delete"; 
                if(confirm("Are you sure you want to remove this items from database?")){
                    $.ajax({
                        url:"dos.php", 
                        method:"POST", 
                        data:{image_id:image_id, action:action},
                        success:function(data){
                            alert(data); 
                            fetch_data(); 
                        }
                    })
                }else{
                    return false; 
                }
            })

       




        // events
        $('#eventsPost_form').on('submit', function(event){
            event.preventDefault();
            $('#postEvent').modal('hide');
            alert("Events have been sent");
            var form_data = $(this).serialize();
            $.ajax({
            url:"add_eventsPost.php",
            method:"POST",
            data:form_data,
            dataType:"JSON",
            success:function(data)
            {
                if(data.error != '')
                {
                   $('#eventsPost_form')[0].reset();
                   $('#eventsPost_message').html(data.error);
                   $('#eventsPost_id').val('0');
                   load_eventsPost();
                }
            }
            })
           });
            load_eventsPost();
            function load_eventsPost()
           {
                $.ajax({
                    url:"fetch_eventsPosts.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_eventsPost').html(data);
                    }
                })
            }

        // tips
        $('#tipsPost_form').on('submit', function(event){
            event.preventDefault();
            $('#postTip').modal('hide');
            alert("Tips have been sent");
            var form_data = $(this).serialize();
            $.ajax({
            url:"add_tipsPost.php",
            method:"POST",
            data:form_data,
            dataType:"JSON",
            success:function(data)
            {
                if(data.error != '')
                {
                   $('#tipsPost_form')[0].reset();
                   $('#tipsPost_message').html(data.error);
                   $('#tipsPost_id').val('0');
                   load_tipsPost();
                }
            }
            })
           });
            load_tipsPost();
            function load_tipsPost()
           {
                $.ajax({
                    url:"fetch_tipsPosts.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_tipsPost').html(data);
                    }
                })
            }

        // notice
        $('#noticePost_form').on('submit', function(event){
            event.preventDefault();
            $('#postNotice').modal('hide');
            alert("Notice have been sent");
            var form_data = $(this).serialize();
            $.ajax({
            url:"add_noticePost.php",
            method:"POST",
            data:form_data,
            dataType:"JSON",
            success:function(data)
            {
                if(data.error != '')
                {
                   $('#noticePost_form')[0].reset();
                   $('#noticePost_message').html(data.error);
                   $('#noticePost_id').val('0');
                   load_noticePost();
                }
            }
            })
           });
            load_noticePost();
            function load_noticePost()
           {
                $.ajax({
                    url:"fetch_noticePost.php",
                    method:"POST",
                    success:function(data)
                    {
                       $('#display_noticePost').html(data);
                    }
                })
            }
        });
    </script>
</body>
</html>
