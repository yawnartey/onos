<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$collegeNoticePost_name = '';
	$collegeNoticePost_content = '';
	if(empty($_POST["collegeNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$collegeNoticePost_name = $_POST["collegeNoticePost_name"];
	}

	if(empty($_POST["collegeNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$collegeNoticePost_content = $_POST["collegeNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO collegeNotice (parent_collegeNoticePost_id, collegeNoticePost, collegeNoticePost_sender_name) VALUES (:parent_collegeNoticePost_id, :collegeNoticePost, :collegeNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_collegeNoticePost_id' => $_POST["collegeNoticePost_id"],
		   ':collegeNoticePost'    => $collegeNoticePost_content,
		   ':collegeNoticePost_sender_name' => $collegeNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>