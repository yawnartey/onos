<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$collegeHealthScienceNoticePost_name = '';
	$collegeHealthScienceNoticePost_content = '';
	if(empty($_POST["collegeHealthScienceNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$collegeHealthScienceNoticePost_name = $_POST["collegeHealthScienceNoticePost_name"];
	}

	if(empty($_POST["collegeHealthScienceNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$collegeHealthScienceNoticePost_content = $_POST["collegeHealthScienceNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO collegeHealthScienceNotice (parent_collegeHealthScienceNoticePost_id, collegeHealthScienceNoticePost, collegeHealthScienceNoticePost_sender_name) VALUES (:parent_collegeHealthScienceNoticePost_id, :collegeHealthScienceNoticePost, :collegeHealthScienceNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_collegeHealthScienceNoticePost_id' => $_POST["collegeHealthScienceNoticePost_id"],
		   ':collegeHealthScienceNoticePost'    => $collegeHealthScienceNoticePost_content,
		   ':collegeHealthScienceNoticePost_sender_name' => $collegeHealthScienceNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>