<?php 
	if(isset($_POST["action"])){
		$connect = mysqli_connect("localhost", "root", "", "onos");
		if($_POST["action"] == "fetch"){
			$query = "SELECT * FROM dosmessage ORDER BY id DESC";
			$result = mysqli_query($connect, $query); 
			$output = ''; 
			while($row = mysqli_fetch_array($result)){
				$truncate = $row['post_content'];
				$output .=  '
				<div class="media wow fadeIn data-wow-delay="0.8">
					<div class="row">
						<div class="col-md-5">
							<img src="../admin/img'.$row["image"].'"  class="img-responsive" style="height:36%; width:100%; "/>
							<center><i><span style="font-size:12px; ">'.$row['image_title'].'</span ></i></center> <br><br>
						</div>
						<div class="col-md-7">
							<span style="font-size:20px; font-weight:bolder;">'.$row['post_title'].'</span >  <hr>
							<span style="font-size:16px;" id="postContent"> '.substr($truncate, 0, 350).' 
								<a href="" data-toggle="modal" data-target="#dosMessages" style="color:blue; text-decoration:none;">read more...</a>
							</span>
							<br>
							<span style = "color:#2196f3; font-size:13px; font-weight:bolder;">Posted on '.$row["date"].'</span><br> <br>
						</div>
					</div>
				</div> <hr> <br>

				<div class="modal fade dosMessages" id="dosMessages" tabindex="-1" role="dialog">
			        <div class="modal-dialog" role="document">
			            <div class="modal-content">
			                <div class="modal-body dark-text">
			                	 <center><span style="font-size:20px; font-weight:bold;">'.$row['post_title'].'</span ></center> <hr>
			                    <span style="font-size:16px;" id=""> '.$truncate.'</span> 
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
			// $file=''; 
			// if(!empty($_FILES['image']['tmp_name']) && file_exists($_FILES['image']['tmp_name'])) {
			//     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
			// }
			// $image_title = $_POST["image_title"];
			// $post_title = $_POST["post_title"];
			// $post_content = $_POST["post_content"];
			// $query = "INSERT INTO dosmessage(image, image_title, post_title, post_content) VALUES ('$file', '$image_title', '$post_title', '$post_content')"; 
			// if(mysqli_query($connect, $query)){
			// 	echo "Message sent";
			// }

			$image_title = $_POST['image_title'];
			$post_title = $_POST['post_title'];
			$post_content = $_POST['post_content'];
			

			$name = $_FILES['image']['name'];
			$size = $_FILES['image']['size'];
			$temp = $_FILES['image']['tmp_name'];

			$destination = 'img/';
			
			$fileExt = explode('.', $name);
			$imgExt = strtolower(end($fileExt));

			$allowExt = array('jpg', 'jpeg', 'png', 'gif');

			$newFilename = time().'_'.rand(1000,9999).'.'.$imgExt;

			$imgLink = $destination.$newFilename;
			if (in_array($imgExt, $allowExt)) {
				if ($size < 5000000) {
					move_uploaded_file($temp, $imgLink); 
				}else{
					$error = '<p class="text-danger media-body ml-4">file is too big</p>';
				}
			}else{
				$error = '<p class="text-danger media-body ml-4">select a valid file</p>';
			}
			if (!isset($error)) {
				$query = "INSERT INTO `dosmessage`(`image`, `image_title`, `post_title`, `post_content`) VALUES ('$imgLink','$image_title','$post_title','$post_content')";
				$query_run = mysqli_query($connect, $query);
				if ($query_run) {
					header("Location: indexAdmin.php");
				
				}
			}
		}

		if($_POST["action"] == "updateDos"){
			$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
			$image_title = $_POST["image_title"];
			$post_title = $_POST["post_title"];
			$post_content = $_POST["post_content"];
			$query = "UPDATE dosmessage SET image='$file', image_title='$image_title', post_title='$post_title', post_content='$post_content' WHERE id='".$_POST["image_id"]."' "; 
			if(mysqli_query($connect, $query)){
				echo "Message updated";
			}
		}

		if($_POST["action"]=="deleteDos"){
			$query = "DELETE FROM dosmessage WHERE id='".$_POST["image_id"]."' "; 
			if(mysqli_query($connect, $query)){
				echo "Message deleted";
			}
		}
	}

?>