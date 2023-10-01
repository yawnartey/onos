<?php 
	if(isset($_POST["action"])){
		$connect = mysqli_connect("localhost", "root", "", "onos");
		if($_POST["action"] == "fetch"){
			$query = "SELECT * FROM repuhallnotice ORDER BY id DESC";
			$result = mysqli_query($connect, $query); 
			$output = ''; 
			while($row = mysqli_fetch_array($result)){
				$truncate = $row['post_content'];
				$output .=  '
				<div class="media wow fadeIn data-wow-delay="0.8">
					<div class="row">
						<div class="col-md-5">
							<img src="data:image/jpeg;base64, '.base64_encode($row['image']).'" class="img-responsive" style="height:36%; width:100%; "/>
							<center><i><span style="font-size:12px; ">'.$row['image_title'].'</span ></i></center> <br><br>
						</div>
						<div class="col-md-7">
							<span style="font-size:20px; font-weight:bolder;">'.$row['post_title'].'</span >  <hr>
							<span style="font-size:16px;" id="postContent"> '.substr($truncate, 0, 350).' 
								<a href="" data-toggle="modal" data-target="#dosMessages" style="color:blue; text-decoration:none;">read more...</a>
							</span><br>
							<span style = "color:#2196f3; font-size:13px; font-weight:bolder;">Posted on '.$row["date"].'</span> <br> <br>
							<button type="button" name="update" class="btn btn-info update" id="'.$row["id"].'">Update</button>
							<button type="button" name="delete" class="btn btn-danger delete" id="'.$row["id"].'">Remove</button>
						</div>
					</div>
				</div> <hr> <br>

				<div class="modal fade" id="dosMessages" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
			        <div class="modal-dialog" role="document">
			            <div class="modal-content">
			                <div class="modal-body dark-text">
			                	 <center><span style="font-size:20px; font-weight:bold;">'.$row['post_title'].'</span ></center> <hr>
			                    <span style="font-size:16px;" id="postContent"> '.$truncate.'</span> 
			                </div>
			                <div class="modal-footer">
			                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			                </div>
			            </div>
			        </div>
			    </div>
				'; 
			}
			echo $output; 
		}

		if($_POST["action"] == "insert"){
			$file=''; 
			if(!empty($_FILES['image']['tmp_name']) && file_exists($_FILES['image']['tmp_name'])) {
			    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
			}
			$image_title = $_POST["image_title"];
			$post_title = $_POST["post_title"];
			$post_content = $_POST["post_content"];
			$query = "INSERT INTO repuhallnotice(image, image_title, post_title, post_content) VALUES ('$file', '$image_title', '$post_title', '$post_content')"; 
			if(mysqli_query($connect, $query)){
				echo "Message sent";
			}
		}

		if($_POST["action"] == "update"){

			$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
			$image_title = $_POST["image_title"];
			$post_title = $_POST["post_title"];
			$post_content = $_POST["post_content"];
			$query = "UPDATE repuhallnotice SET image='$file', image_title='$image_title', post_title='$post_title', post_content='$post_content' WHERE id='".$_POST["image_id"]."' "; 
			if(mysqli_query($connect, $query)){
				echo "Message updated";
			}
		}

		if($_POST["action"]=="delete"){
			$query = "DELETE FROM repuhallnotice WHERE id='".$_POST["image_id"]."' "; 
			if(mysqli_query($connect, $query)){
				echo "Message deleted";
			}
		}
	}

?>