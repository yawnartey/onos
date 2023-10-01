<?php 
	
	if(isset($_POST["action"])){
		$connect = mysqli_connect("localhost", "root", "", "onos");
		if($_POST["action"] == "fetch"){
			$query = "SELECT * FROM tbl_images ORDER BY id DESC";
			$result = mysqli_query($connect, $query); 
			$output = '
				<table class = "table table-stripped table-bordered">
					<tr>
						<th width = "10%">ID</th>
						<th width = "70%">Image</th>
						<th width = "10%">Change</th>
						<th width = "10%">Remove</th>
					</tr>
			'; 
			while($row = mysqli_fetch_array($result)){
				$output .=  '
					<tr> 
						<td>'.$row["id"].'</td>
						<td>
							<img src="data:image/jpeg;base64, '.base64_encode($row['name']).'" height="60" width="75" class="img-thumbnail" />
						</td>
						<td>
							<button type="button" name="update" class="btn btn-warning btn-xs update" id="'.$row["id"].'">Change</button>
						</td>
						<td>
							<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Remove</button>
						</td>
					</tr>
				'; 
			}
			$output .= '</table>'; 
			echo $output; 
		}

		if($_POST["action"] == "insert"){
			$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
			$query = "INSERT INTO tbl_images(name) VALUES ('$file')"; 
			if(mysqli_query($connect, $query)){
				echo "Items inserted into databases";
			}
		}
	}



?>