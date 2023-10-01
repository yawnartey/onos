<?php
	include 'db.php';
	$dosPost_name = $_POST['dosPost_name'];
	$dosPost_content = $_POST['dosPost_content'];
	$dosPost_id = $_POST['dosPost_id'];

	$name = $_FILES['file']['name'];
	$size = $_FILES['file']['size'];
	$temp = $_FILES['file']['tmp_name'];

	$data;
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
		$query = "INSERT INTO `dos_messages`(`parent_dosPost_id`, `dosPost`, `dosPost_sender_name`, `imgLink`, `Title`) VALUES ('$dosPost_id','$dosPost_content','DOS','$imgLink','$dosPost_name')";
		$query_run = mysqli_query($mysqli, $query);
		if ($query_run) {
			header("Location: indexAdmin.php");
		
		}
	}
?>