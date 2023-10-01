<?php 
	
	include 'dbconnect.php';
	// eventsSocialPosts
	$error = '';
	$tipsStudentPost_name = '';
	$tipsStudentPost_content = '';
	if(empty($_POST["tipsStudentPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$tipsStudentPost_name = $_POST["tipsStudentPost_name"];
	}

	if(empty($_POST["tipsStudentPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$tipsStudentPost_content = $_POST["tipsStudentPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO tipsStudent (parent_tipsStudentPost_id, tipsStudentPost, tipsStudentPost_sender_name) VALUES (:parent_tipsStudentPost_id, :tipsStudentPost, :tipsStudentPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_tipsStudentPost_id' => $_POST["tipsStudentPost_id"],
		   ':tipsStudentPost'    => $tipsStudentPost_content,
		   ':tipsStudentPost_sender_name' => $tipsStudentPost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>