<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$noticePost_name = '';
	$noticePost_content = '';
	if(empty($_POST["noticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$noticePost_name = $_POST["noticePost_name"];
	}

	if(empty($_POST["noticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$noticePost_content = $_POST["noticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO notice (parent_noticePost_id, noticePost, noticePost_sender_name) VALUES (:parent_noticePost_id, :noticePost, :noticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_noticePost_id' => $_POST["noticePost_id"],
		   ':noticePost'    => $noticePost_content,
		   ':noticePost_sender_name' => $noticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>