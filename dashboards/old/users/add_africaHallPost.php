<?php 

	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$africaHallNoticePost_name = '';
	$africaHallNoticePost_content = '';
	if(empty($_POST["africaHallNoticePost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$africaHallNoticePost_name = $_POST["africaHallNoticePost_name"];
	}

	if(empty($_POST["africaHallNoticePost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$africaHallNoticePost_content = $_POST["africaHallNoticePost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO africaHallNotice (parent_africaHallNoticePost_id, africaHallNoticePost, africaHallNoticePost_sender_name) VALUES (:parent_africaHallNoticePost_id, :africaHallNoticePost, :africaHallNoticePost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_africaHallNoticePost_id' => $_POST["africaHallNoticePost_id"],
		   ':africaHallNoticePost'    => $africaHallNoticePost_content,
		   ':africaHallNoticePost_sender_name' => $africaHallNoticePost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>
