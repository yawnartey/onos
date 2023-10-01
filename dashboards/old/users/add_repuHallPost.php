<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$repuHallNoticePost_name = '';
	$repuHallNoticePost_content = '';
	if(empty($_POST["repuHallNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$repuHallNoticePost_name = $_POST["repuHallNoticePost_name"];
	}

	if(empty($_POST["repuHallNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$repuHallNoticePost_content = $_POST["repuHallNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO repuHallNotice (parent_repuHallNoticePost_id, repuHallNoticePost, repuHallNoticePost_sender_name) VALUES (:parent_repuHallNoticePost_id, :repuHallNoticePost, :repuHallNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_repuHallNoticePost_id' => $_POST["repuHallNoticePost_id"],
		   ':repuHallNoticePost'    => $repuHallNoticePost_content,
		   ':repuHallNoticePost_sender_name' => $repuHallNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>