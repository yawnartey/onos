<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$katHallNoticePost_name = '';
	$katHallNoticePost_content = '';
	if(empty($_POST["katHallNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$katHallNoticePost_name = $_POST["katHallNoticePost_name"];
	}

	if(empty($_POST["katHallNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$katHallNoticePost_content = $_POST["katHallNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO katHallNotice (parent_katHallNoticePost_id, katHallNoticePost, katHallNoticePost_sender_name) VALUES (:parent_katHallNoticePost_id, :katHallNoticePost, :katHallNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_katHallNoticePost_id' => $_POST["katHallNoticePost_id"],
		   ':katHallNoticePost'    => $katHallNoticePost_content,
		   ':katHallNoticePost_sender_name' => $katHallNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>