<?php
    include 'navAdmin.php';
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
                <div class="col-lg-12" style="">
                    <h1 class="page-header">
                       <i class="fa fa-envelope fa-fw pull-left"></i> Dean's Messages
                       <?php
                       if($_SESSION['Role'] == "DOS")
                       {?>
                       <button type="button" id="add" class="btn btn-primary pull-right" data-toggle="modal" data-target = "#postMessage">Post a message 
                        </button>                       
                       <?php }else{
                       echo '';
                       }?>

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
                                <i class="fa fa-bell-o fa-fw"></i> Your notifications
                            </span>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <!--<button type="button" id="add" class="btn btn-primary btn-xs" data-toggle="modal" data-target = "#postMessage">-->
                                    <!--    Post a message -->
                                    <!--</button>-->
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <span id="dos_data" class=""></span> 
                            <center>
                                <ul class="pagination pagination-lg">
                                <?php
                                		$connect = mysqli_connect("localhost", "id4654924_onosapp", "qwerty1234567890", "id4654924_onosteam");
    
                                    $q = mysqli_query($connect, "SELECT * FROM `dosmessage`");
                                    $count = mysqli_num_rows($q);
                                    
                                    $a = $count / 5;
                                    $a = ceil($a);
                                    // echo $count;
                                ?>
                                    <?php for ($i = 1; $i <= $a; $i++) {?>
                                        <li><a href="indexAdmin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li> 
                                    <?php } ?>
                                </ul>
                            </center>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>

        <!-- modal for dosMessage -->
        <div class="modal fade" id="dosPost" role="document" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center><h4 class="modal-title"></h4></center>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <form id="dos_form" method="POST" enctype="multipart/form-data">
                            <p style="margin-bottom: 10px;"> 
                                <label>Title of Post:</label>
                                <input class="form-control" name="post_title" id="post_title" rows="3" required="post_title">
                                </input>
                            </p>
                            <p style="margin-bottom: 30px;"> 
                                <label>Post</label>
                                <textarea class="form-control" name="post_content" id="post_content" rows="6" required="post_content"></textarea>
                            </p>
                            <p style="margin-top:30px;">
                                <label>Attach image to your post:</label>
                                <center><input type="file" name="image" id="image" style="margin-left:75px;"> <br></center>
                            </p>
                            <p style=""> 
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <!--<label style="margin-bottom:0px;">Title of Image</label>-->
                                        <!--<input class="form-control" type="text" name="image_title" id="image_title" >-->
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </p><br>
                            <p style="margin-top: 30px;">
                                <input type="submit" name="insert" value="Submit" id="insert" class="btn btn-primary">
                                <input type="hidden" name="action" id="action" value="insert">
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
            // for dos message
            fetch_data(); 
            function fetch_data(){
                var action = "fetch";
                var page = <?php echo $_GET['page']; ?>;
                $.ajax({
                    url:"dos.php", 
                    method:"POST", 
                    data:{action:action, page:page}, 
                    success:function(data){
                        $('#dos_data').html(data);  
                    }
                });
            }
            
            $('#add').click(function(){
                $('#dosPost').modal('show'); 
                $('#dos_form')[0].reset(); 
                $('.modal-title').text("Add message"); 
                $('#image_id').val(''); 
                $('#action').val('insert'); 
                $('#insert').val("Send"); 
            }); 
            $("#dos_form").submit(function(event){
                event.preventDefault(); 
                $('#framework option:selected').each(function(){
                    $(this).prop('selected', false);
                });
                $('#framework').multiselect('refresh'); 
                // alert("Select working"); 
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
                            url:"dos.php", 
                            method:"POST", 
                            data: new FormData(this), 
                            contentType:false, 
                            processData:false, 
                            success:function(data){
                                alert(data); 
                                fetch_data(); 
                                $('#dos_form')[0].reset(); 
                                $('#dosPost').modal('hide'); 
                            }
                        }); 
                    } 
                // }
            });
            // for updating
            $(document).on('click', '.updateDos', function(){
                $('#image_id').val($(this).attr("id")); 
                $('#action').val("updateDos"); 
                $('.modal-title').text("Update Message"); 
                $('#image_title').val();
                $('#post_title').val();
                $('#post_content').val();
                $('#insert').val("Update");
                $('#dosPost').modal("show");  
            });  

            // for deleting
            $(document).on('click', '.deleteDos', function(){
                var image_id = $(this).attr("id"); 
                var action = "deleteDos"; 
                if(confirm("Are you sure you want to remove selected item")){
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
            });
        });
    </script>
</body>
</html>
