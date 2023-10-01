<?php 
	
	include 'dbconnect.php';
	// eventsSocialPosts
	$error = '';
	$eventsSocialPost_name = '';
	$eventsSocialPost_content = '';
	if(empty($_POST["eventsSocialPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$eventsSocialPost_name = $_POST["eventsSocialPost_name"];
	}

	if(empty($_POST["eventsSocialPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$eventsSocialPost_content = $_POST["eventsSocialPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO eventsSocial (parent_eventsSocialPost_id, eventsSocialPost, eventsSocialPost_sender_name) VALUES (:parent_eventsSocialPost_id, :eventsSocialPost, :eventsSocialPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_eventsSocialPost_id' => $_POST["eventsSocialPost_id"],
		   ':eventsSocialPost'    => $eventsSocialPost_content,
		   ':eventsSocialPost_sender_name' => $eventsSocialPost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>