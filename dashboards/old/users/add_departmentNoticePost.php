<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$departmentNoticePost_name = '';
	$departmentNoticePost_content = '';
	if(empty($_POST["departmentNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$departmentNoticePost_name = $_POST["departmentNoticePost_name"];
	}

	if(empty($_POST["departmentNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$departmentNoticePost_content = $_POST["departmentNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO departmentNotice (parent_departmentNoticePost_id, departmentNoticePost, departmentNoticePost_sender_name) VALUES (:parent_departmentNoticePost_id, :departmentNoticePost, :departmentNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_departmentNoticePost_id' => $_POST["departmentNoticePost_id"],
		   ':departmentNoticePost'    => $departmentNoticePost_content,
		   ':departmentNoticePost_sender_name' => $departmentNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>