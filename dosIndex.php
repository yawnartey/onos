<?php 
	if(isset($_POST["action"])){
		$connect = mysqli_connect("localhost", "root", "", "onos");
		if($_POST["action"] == "fetch"){
			$query = "SELECT * FROM dosmessage ORDER BY id DESC";
			$result = mysqli_query($connect, $query); 
			$output = ''; 
			while($row = mysqli_fetch_array($result)){
				$output .=  '
				<div class="media">
					<div class="row">
						<div class="col-lg-5 col-xl-5 mb-4 " >
		                    <div class="view overlay hm-white-slight rounded z-depth-1-half">
		                        <img src="data:image/jpeg;base64, '.base64_encode($row['image']).'" class="img-responsive img-rounded img-fluid" style="height:260px; width:100%"/>
		                    </div>
		                </div>

						<div class="col-lg-7 col-xl-6 ml-xl-4 mb-4" style="margin-top:; ">
		                    <h3 class="mb-3 font-bold dark-grey-text">
		                        <strong>'.$row['post_title'].' </strong>

		                    </h3>
		                    <p class="dark-text dosItems" style="font-size: 17px;">
		                        '.$row['post_content'].'
		                    </p>

		                    <p>
		                    	<a class="btn btn-cyan btn-rounded btn-md" data-toggle="modal" data-target="#dosMessages">Read more
								</a>
		                    </p>

		                    <p >Posted on 
		                        <a class="font-bold" style="color:#4285F4;"> '.$row["date"].' </a>
		                    </p> <hr style="margin-bottom:100px;">
		                </div> 
					</div>
				</div> 
				'; 
			// shorten($row['post_content'], 200);	
			}
			echo $output; 
		}
	}


	function shorten($output, $length){
		if(strlen($output)<=$length){
			echo $row['post_content']; 
		}else{
			$youtube = substr($output, 0, $length). '..'; 
			// echo $youtube;
		}
	}


?>