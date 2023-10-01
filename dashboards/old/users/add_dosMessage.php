<?php

	include 'dbconnect.php';
	// dosPosts
	$error = '';
	$dosPost_name = '';
	$dosPost_content = '';
	if(empty($_POST["dosPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$dosPost_name = $_POST["dosPost_name"];
	}
	if(empty($_POST["dosPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$dosPost_content = $_POST["dosPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO dos_messages (parent_dosPost_id, dosPost, dosPost_sender_name) VALUES (:parent_dosPost_id, :dosPost, :dosPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_dosPost_id' => $_POST["dosPost_id"],
		   ':dosPost'    => $dosPost_content,
		   ':dosPost_sender_name' => $dosPost_name
		  )
		);
		// $error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>
