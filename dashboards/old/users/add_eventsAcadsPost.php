<?php 
	
	include 'dbconnect.php';
	// eventsAcadsPosts
	$error = '';
	$eventsAcadsPost_name = '';
	$eventsAcadsPost_content = '';
	if(empty($_POST["eventsAcadsPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$eventsAcadsPost_name = $_POST["eventsAcadsPost_name"];
	}

	if(empty($_POST["eventsAcadsPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$eventsAcadsPost_content = $_POST["eventsAcadsPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO eventsGeneral (parent_eventsAcadsPost_id, eventsAcadsPost, eventsAcadsPost_sender_name) VALUES (:parent_eventsAcadsPost_id, :eventsAcadsPost, :eventsAcadsPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_eventsAcadsPost_id' => $_POST["eventsAcadsPost_id"],
		   ':eventsAcadsPost'    => $eventsAcadsPost_content,
		   ':eventsAcadsPost_sender_name' => $eventsAcadsPost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>