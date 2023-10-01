<?php 
	
	include 'dbconnect.php'; 
	// eventsPosts
	$error = '';
	$eventsPost_name = '';
	$eventsPost_content = '';
	if(empty($_POST["eventsPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$eventsPost_name = $_POST["eventsPost_name"];
	}

	if(empty($_POST["eventsPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$eventsPost_content = $_POST["eventsPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO eventsAcads (parent_eventsPost_id, eventsPost, eventsPost_sender_name) VALUES (:parent_eventsPost_id, :eventsPost, :eventsPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_eventsPost_id' => $_POST["eventsPost_id"],
		   ':eventsPost'    => $eventsPost_content,
		   ':eventsPost_sender_name' => $eventsPost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>