<?php 
	
	include 'dbconnect.php';
	// eventsPosts
	$error = '';
	$calendarPost_name = '';
	$calendarPost_content = '';
	if(empty($_POST["calendarPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$calendarPost_name = $_POST["calendarPost_name"];
	}

	if(empty($_POST["calendarPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$calendarPost_content = $_POST["calendarPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO calendar (parent_calendarPost_id, calendarPost, calendarPost_sender_name) VALUES (:parent_calendarPost_id, :calendarPost, :calendarPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_calendarPost_id' => $_POST["calendarPost_id"],
		   ':calendarPost'    => $calendarPost_content,
		   ':calendarPost_sender_name' => $calendarPost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>