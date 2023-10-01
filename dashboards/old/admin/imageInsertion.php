<?php  
	// include 'navAdmin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../lib/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../lib/metisMenu/metisMenu.min.js"></script>
	<script type="text/javascript" src="../lib/dist/js/sb-admin-2.js"></script>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/dist/css/sb-admin-2.css">
    <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/datatables-plugins/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/adminStyle.css">
    <link rel="shortcut icon" type="image/png" href="logo.png" class="image-circle" sizes="">
</head>
<body>
	<div class="container" style="margin-top: 100px">
		<center>
			<div class="pull-right">
				<div class="btn-group">
                    <button type="button" name="add" id="add" class="btn btn-success">
                        Add
                    </button>
				</div>
			</div>
			<div id="image_data">
				
			</div>
		</center>
	</div>	


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
							<label>Tile of Image</label>
							<input class="form-control" type="text" name="image_title" id="image_title">
						</p>
						<p>	
							<label>Description of Image</label>
							<textarea class="form-control" name="image_description" id="image_description" rows="5"></textarea>
						</p>
						<p>
							<input type="submit" name="insert" value="Submit" id="insert" class="btn btn-info">
							<input type="hidden" name="action" id="action" value="insert">
							<input type="hidden" name="image_id" id="image_id">
						</p>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
					
	        fetch_data(); 

	        function fetch_data(){
	            var action = "fetch";
	            $.ajax({
	                url:"action.php", 
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
	            var title = $('#image_title').val(); 
	            var description = $('#image_description').val();  
	            if(image_name == ''){
	                alert("Please select image"); 
	                return false; 
	            }
	            if(title == ''){
	            	alert("Please enter title");
	            	return false; 
	            }
	            if (description == '') {
	            	alert ("Please enter description");
	            	return false; 
	            }
	            else{
	                var extension = $('#image').val().split('.').pop().toLowerCase(); 
	                if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1){
	                    alert("Invalid image file");
	                    $('#image_name').val(''); 
	                    return false;
	                }else{
	                    $.ajax({
	                        url:"action.php", 
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
	        			url:"action.php", 
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

		});
	</script>
</body>
</html>