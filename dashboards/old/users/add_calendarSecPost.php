<?php 
	
	$connect = new PDO('mysql:host=localhost; dbname=onos', 'root', ''); 
	// eventsPosts
	$error = '';
	$calendarSecPost_name = '';
	$calendarSecPost_content = '';
	if(empty($_POST["calendarSecPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$calendarSecPost_name = $_POST["calendarSecPost_name"];
	}

	if(empty($_POST["calendarSecPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$calendarSecPost_content = $_POST["calendarSecPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO calendarSec (parent_calendarSecPost_id, calendarSecPost, calendarSecPost_sender_name) VALUES (:parent_calendarSecPost_id, :calendarSecPost, :calendarSecPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_calendarSecPost_id' => $_POST["calendarSecPost_id"],
		   ':calendarSecPost'    => $calendarSecPost_content,
		   ':calendarSecPost_sender_name' => $calendarSecPost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>