<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$csdepartmentNoticePost_name = '';
	$csdepartmentNoticePost_content = '';
	if(empty($_POST["csdepartmentNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$csdepartmentNoticePost_name = $_POST["csdepartmentNoticePost_name"];
	}

	if(empty($_POST["csdepartmentNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$csdepartmentNoticePost_content = $_POST["csdepartmentNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO csdepartmentNotice (parent_csdepartmentNoticePost_id, csdepartmentNoticePost, csdepartmentNoticePost_sender_name) VALUES (:parent_csdepartmentNoticePost_id, :csdepartmentNoticePost, :csdepartmentNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_csdepartmentNoticePost_id' => $_POST["csdepartmentNoticePost_id"],
		   ':csdepartmentNoticePost'    => $csdepartmentNoticePost_content,
		   ':csdepartmentNoticePost_sender_name' => $csdepartmentNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>