<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$collegeScienceNoticePost_name = '';
	$collegeScienceNoticePost_content = '';
	if(empty($_POST["collegeScienceNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$collegeScienceNoticePost_name = $_POST["collegeScienceNoticePost_name"];
	}

	if(empty($_POST["collegeScienceNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$collegeScienceNoticePost_content = $_POST["collegeScienceNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO collegeScienceNotice (parent_collegeScienceNoticePost_id, collegeScienceNoticePost, collegeScienceNoticePost_sender_name) VALUES (:parent_collegeScienceNoticePost_id, :collegeScienceNoticePost, :collegeScienceNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_collegeScienceNoticePost_id' => $_POST["collegeScienceNoticePost_id"],
		   ':collegeScienceNoticePost'    => $collegeScienceNoticePost_content,
		   ':collegeScienceNoticePost_sender_name' => $collegeScienceNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>