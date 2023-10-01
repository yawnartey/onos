<?php 
	
	include 'dbconnect.php'; 
	// eventsPosts
	$error = '';
	$queensHallNoticePost_name = '';
	$queensHallNoticePost_content = '';
	if(empty($_POST["queensHallNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$queensHallNoticePost_name = $_POST["queensHallNoticePost_name"];
	}

	if(empty($_POST["queensHallNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$queensHallNoticePost_content = $_POST["queensHallNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO queensHallNotice (parent_queensHallNoticePost_id, queensHallNoticePost, queensHallNoticePost_sender_name) VALUES (:parent_queensHallNoticePost_id, :queensHallNoticePost, :queensHallNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_queensHallNoticePost_id' => $_POST["queensHallNoticePost_id"],
		   ':queensHallNoticePost'    => $queensHallNoticePost_content,
		   ':queensHallNoticePost_sender_name' => $queensHallNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>