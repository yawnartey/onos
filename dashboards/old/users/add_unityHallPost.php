<?php 

	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$unityHallNoticePost_name = '';
	$unityHallNoticePost_content = '';
	if(empty($_POST["unityHallNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$unityHallNoticePost_name = $_POST["unityHallNoticePost_name"];
	}

	if(empty($_POST["unityHallNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$unityHallNoticePost_content = $_POST["unityHallNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO unityHallNotice (parent_unityHallNoticePost_id, unityHallNoticePost, unityHallNoticePost_sender_name) VALUES (:parent_unityHallNoticePost_id, :unityHallNoticePost, :unityHallNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_unityHallNoticePost_id' => $_POST["unityHallNoticePost_id"],
		   ':unityHallNoticePost'    => $unityHallNoticePost_content,
		   ':unityHallNoticePost_sender_name' => $unityHallNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>