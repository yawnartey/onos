<?php 
	
	if(isset($_POST["actionEvent"])){
		$connect = mysqli_connect("localhost", "root", "", "onos");
		if($_POST["actionEvent"] == "fetch"){
			$query = "SELECT * FROM events ORDER BY id DESC";
			$result = mysqli_query($connect, $query); 
			$output = ''; 
			while($row = mysqli_fetch_array($result)){
				$truncate = $row['event_post_content'];
				$output .=  '
				<div class="media wow fadeIn" data-wow-delay="0.2s">
					<div class = "row">
						<div class="col-md-5">
							<img src="data:image/jpeg;base64, '.base64_encode($row['event_image']).'" class="img-responsive" style="height:250px; width="100%;"/>
							<center><i><span style="font-size:12px; ">'.$row['event_image_title'].'</span ></i> <br><br></center>
						</div>
						<div class="col-md-7">
							<span style="font-size:20px; font-weight:bolder;">'.$row['event_post_title'].'</span >  <hr>
							<span style="font-size:16px;" > '.substr($truncate, 0, 350).' 
								<a href="" data-toggle="modal" data-target="#dosMessages" style="color:blue;">read more..</a>
							</span><br>
							<span style = "color:#2196f3; font-size:13px; font-weight:bolder;">Posted on '.$row["date"].'</span>
								<br> <br>
							<button type="button" name="update" class="btn btn-info update" id="'.$row["id"].'">Update</button>
							<button type="button" name="delete" class="btn btn-danger delete" id="'.$row["id"].'">Remove</button>
						</div>
					</div>
				</div> <hr><br>


				<div class="modal fade" id="dosMessages" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
			        <div class="modal-dialog" role="document">
			            <div class="modal-content">
			                <div class="modal-body dark-text">
			                	 <center><span style="font-size:20px; font-weight:;">'.$row['event_post_title'].'</span ></center> <hr>
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

		if($_POST["actionEvent"] == "insertEvent"){
			$file = addslashes(file_get_contents($_FILES["event_image"]["tmp_name"]));
			$event_image_title = $_POST["event_image_title"];
			$event_post_title = $_POST["event_post_title"];
			$event_post_content = $_POST["event_post_content"];
			$query = "INSERT INTO events(event_image, event_image_title, event_post_title, event_post_content) VALUES ('$file', '$event_image_title', '$event_post_title', '$event_post_content')"; 
			if(mysqli_query($connect, $query)){
				echo "Event posted";
			}
		}

		if($_POST["actionEvent"] == "update"){

			$file = addslashes(file_get_contents($_FILES["event_image"]["tmp_name"]));
			$event_image_title = $_POST["event_image_title"];
			$event_post_title = $_POST["event_post_title"];
			$event_post_content = $_POST["event_post_content"];
			$query = "UPDATE events SET event_image='$file', event_image_title='$event_image_title', event_post_title='$event_post_title', event_post_content='$event_post_content' WHERE id='".$_POST["image_id"]."' "; 
			if(mysqli_query($connect, $query)){
				echo "Events updated";
			}
		}

		if($_POST["actionEvent"]=="delete"){
			$query = "DELETE FROM events WHERE id='".$_POST["image_id"]."' "; 
			if(mysqli_query($connect, $query)){
				echo "Event deleted";
			}
		}
	}



?>