<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$optodepartmentNoticePost_name = '';
	$optodepartmentNoticePost_content = '';
	if(empty($_POST["optodepartmentNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$optodepartmentNoticePost_name = $_POST["optodepartmentNoticePost_name"];
	}

	if(empty($_POST["optodepartmentNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$optodepartmentNoticePost_content = $_POST["optodepartmentNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO optodepartmentNotice (parent_optodepartmentNoticePost_id, optodepartmentNoticePost, optodepartmentNoticePost_sender_name) VALUES (:parent_optodepartmentNoticePost_id, :optodepartmentNoticePost, :optodepartmentNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_optodepartmentNoticePost_id' => $_POST["optodepartmentNoticePost_id"],
		   ':optodepartmentNoticePost'    => $optodepartmentNoticePost_content,
		   ':optodepartmentNoticePost_sender_name' => $optodepartmentNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>