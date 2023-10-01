<?php 
	
	include 'dbconnect.php';
	// tipsPosts
	$error = '';
	$tipsPost_name = '';
	$tipsPost_content = '';
	if(empty($_POST["tipsPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$tipsPost_name = $_POST["tipsPost_name"];
	}

	if(empty($_POST["tipsPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$tipsPost_content = $_POST["tipsPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO tipsGeneral (parent_tipsPost_id, tipsPost, tipsPost_sender_name) VALUES (:parent_tipsPost_id, :tipsPost, :tipsPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_tipsPost_id' => $_POST["tipsPost_id"],
		   ':tipsPost'    => $tipsPost_content,
		   ':tipsPost_sender_name' => $tipsPost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>