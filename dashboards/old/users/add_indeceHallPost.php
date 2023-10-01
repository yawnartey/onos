<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$indeceHallNoticePost_name = '';
	$indeceHallNoticePost_content = '';
	if(empty($_POST["indeceHallNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$indeceHallNoticePost_name = $_POST["indeceHallNoticePost_name"];
	}

	if(empty($_POST["indeceHallNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$indeceHallNoticePost_content = $_POST["indeceHallNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO indeceHallNotice (parent_indeceHallNoticePost_id, indeceHallNoticePost, indeceHallNoticePost_sender_name) VALUES (:parent_indeceHallNoticePost_id, :indeceHallNoticePost, :indeceHallNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_indeceHallNoticePost_id' => $_POST["indeceHallNoticePost_id"],
		   ':indeceHallNoticePost'    => $indeceHallNoticePost_content,
		   ':indeceHallNoticePost_sender_name' => $indeceHallNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>