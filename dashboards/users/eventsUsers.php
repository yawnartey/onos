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
				<div class="media wow fadeIn data-wow-delay="0.8">
					<div class="row">
						<div class="col-md-5">
							<img src="data:image/jpeg;base64, '.base64_encode($row['event_image']).'" class="img-responsive" style="height:37%; width:100%; "/>
							<center><i><span style="font-size:12px; ">'.$row['event_image_title'].'</span ></i></center> <br><br>
						</div>
						<div class="col-md-7">
							<span style="font-size:20px; font-weight:bolder;">'.$row['event_post_title'].'</span >  <hr>
							<span style="font-size:16px;" id="postContent"> '.substr($truncate, 0, 515).' 
								<a href="" data-toggle="modal" data-target="#dosMessages" style="color:blue; text-decoration:none;">read more...</a>
							</span>
							<br><br>
							<span style = "color:#2196f3; font-size:13px; font-weight:bolder;">Posted on '.$row["date"].'</span><br>
						</div>
					</div>
				</div> <hr> <br>

				<div class="modal fade" id="dosMessages" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
			        <div class="modal-dialog" role="document">
			            <div class="modal-content">
			                <div class="modal-body dark-text">
			                	 <center><span style="font-size:20px; font-weight:bold;">'.$row['event_post_title'].'</span ></center> <hr>
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
	}

?>