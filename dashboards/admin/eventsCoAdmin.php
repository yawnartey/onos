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
                    <h1 class="page-header">
                        <i class="fa fa-cubes fa-fw"></i> Co-curricular Events
                    </h1> 
                </div>
            </div>

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
                                    <button type="button" class="btn btn-primary btn-xs" name="add" id="add">
                                        Post a co-curricular event
                                        <span Xclass="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="eventsCo_data"></span>
                        </div>
                    </div>
                </div>   
            </div>
        </div>


        <!-- Modal for co events start here -->
        <div class="modal fade" id="eventsCo" role="document" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center><h4 class="modal-title"></h4></center>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <form id="eventsCo_form" method="POST" enctype="multipart/form-data">
                            <p>
                                <label>Attach image</label>
                                <center><input type="file" name="image" id="image"> <br></center>
                            </p>
                            <p> 
                                <label>Title of Image</label>
                                <input class="form-control" type="text" name="image_title" id="image_title">
                            </p>
                            <p> 
                                <label>Title of Post</label>
                                <textarea class="form-control" name="post_title" id="post_title" rows="3" required="post_title"></textarea>
                            </p>
                            <p> 
                                <label>Post</label>
                                <textarea class="form-control" name="post_content" id="post_content" rows="6" required="post_content"></textarea>
                            </p>
                            <p>
                                <input type="submit" name="insert" value="Submit" id="insert" class="btn btn-primary">
                                <input type="hidden" name="action" id="action" value="insert">
                                <input type="hidden" name="image_id" id="image_id">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for co event ends here  -->
    </div>


    <script>
        $(document).ready(function() {
    
            fetch_data(); 
            function fetch_data(){
                var action = "fetch";
                $.ajax({
                    url:"eventsCo.php", 
                    method:"POST", 
                    data:{action:action}, 
                    success:function(data){
                        $('#eventsCo_data').html(data); 
                        // var readMoreHtml = $("#eventsCo_data").html(data); 
                        // var lessText = readMoreHtml.substr(0, 100); 
                        //   if( readMoreHtml.length>100){
                        //     $("#eventsCo_data").html(lessText).append("..."); 
                        //   }else{
                        //     $("#eventsCo_data").html(readMoreHtml); 
                        // } 
                    }
                })
            }

            $('#add').click(function(){
                $('#eventsCo').modal('show'); 
                $('#eventsCo_form')[0].reset(); 
                $('.modal-title').text("Add Event"); 
                $('#image_id').val(''); 
                $('#action').val('insert'); 
                $('#insert').val("Send"); 
            }); 
            $("#eventsCo_form").submit(function(event){
                event.preventDefault(); 
                var image_name = $('#image').val();
                var image_title = $('#image_title').val(); 
                var post_title = $('#post_title').val();
                var post_content = $('#post_content').val(); 
                if(image_name == ''){
                    alert("You are posting without an image"); 
                    // return false; 
                }
                if(post_title == ''){
                    alert("Please enter title of post");
                    return false; 
                }
                if (post_content == '') {
                    alert ("Please enter content of post");
                    return false; 
                }
                // else{
                //     var extension = $('#image').val().split('.').pop().toLowerCase(); 
                //     if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1){
                //         alert("You are posting without an image");
                //         $('#image_name').val(''); 
                //         return false;
                //     }
                    else{
                        $.ajax({
                            url:"eventsCo.php", 
                            method:"POST", 
                            data: new FormData(this), 
                            contentType:false, 
                            processData:false, 
                            success:function(data){
                                alert(data); 
                                fetch_data(); 
                                $('#eventsCo_form')[0].reset(); 
                                $('#eventsCo').modal('hide'); 
                            }
                        }); 
                    } 
                // }
            });
            // for updating
            $(document).on('click', '.update', function(){
                $('#image_id').val($(this).attr("id")); 
                $('#action').val("update"); 
                $('.modal-title').text("Update Event"); 
                $('#image_title').val();
                $('#post_title').val();
                $('#post_content').val();
                $('#insert').val("Update");
                $('#eventsCo').modal("show");  
            });  

            // for deleting
            $(document).on('click', '.delete', function(){
                var image_id = $(this).attr("id"); 
                var action = "delete"; 
                if(confirm("Are you sure you want to remove selected item")){
                    $.ajax({
                        url:"eventsCo.php", 
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
            });
        });
    </script>
</body>
</html>