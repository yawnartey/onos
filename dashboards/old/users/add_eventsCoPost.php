<?php 
	
	include 'dbconnect.php';
	// eventsCoPosts
	$error = '';
	$eventsCoPost_name = '';
	$eventsCoPost_content = '';
	if(empty($_POST["eventsCoPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$eventsCoPost_name = $_POST["eventsCoPost_name"];
	}

	if(empty($_POST["eventsCoPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$eventsCoPost_content = $_POST["eventsCoPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO eventsCo (parent_eventsCoPost_id, eventsCoPost, eventsCoPost_sender_name) VALUES (:parent_eventsCoPost_id, :eventsCoPost, :eventsCoPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_eventsCoPost_id' => $_POST["eventsCoPost_id"],
		   ':eventsCoPost'    => $eventsCoPost_content,
		   ':eventsCoPost_sender_name' => $eventsCoPost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>