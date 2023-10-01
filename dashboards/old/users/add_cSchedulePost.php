<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$cScheduleNoticePost_name = '';
	$cScheduleNoticePost_content = '';
	$cScheduleNoticePost_date = ''; 

	// title of message
	if(empty($_POST["cScheduleNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$cScheduleNoticePost_name = $_POST["cScheduleNoticePost_name"];
	}

	// message
	if(empty($_POST["cScheduleNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$cScheduleNoticePost_content = $_POST["cScheduleNoticePost_content"];
	}

	// date
	if(empty($_POST["cScheduleNoticePost_date"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Due date is required</p>';
	}
	else
	{
	 	$cScheduleNoticePost_date = $_POST["cScheduleNoticePost_date"];
	}

	// if no errors
	if($error == '')
	{
		$query = "INSERT INTO cScheduleNotice (parent_cScheduleNoticePost_id, cScheduleNoticePost, cScheduleNoticePost_sender_name, cScheduleNoticePostDate) VALUES (:parent_cScheduleNoticePost_id, :cScheduleNoticePost, :cScheduleNoticePost_sender_name, :cScheduleNoticePostDate)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_cScheduleNoticePost_id' => $_POST["cScheduleNoticePost_id"],
		   ':cScheduleNoticePost'    => $cScheduleNoticePost_content,
		   ':cScheduleNoticePostDate' => $cScheduleNoticePost_date, 
		   ':cScheduleNoticePost_sender_name' => $cScheduleNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>