<?php 
	
	include 'dbconnect.php';
	// eventsSocialPosts
	$error = '';
	$tipsExamPost_name = '';
	$tipsExamPost_content = '';
	if(empty($_POST["tipsExamPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$tipsExamPost_name = $_POST["tipsExamPost_name"];
	}

	if(empty($_POST["tipsExamPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$tipsExamPost_content = $_POST["tipsExamPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO tipsExam (parent_tipsExamPost_id, tipsExamPost, tipsExamPost_sender_name) VALUES (:parent_tipsExamPost_id, :tipsExamPost, :tipsExamPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_tipsExamPost_id' => $_POST["tipsExamPost_id"],
		   ':tipsExamPost'    => $tipsExamPost_content,
		   ':tipsExamPost_sender_name' => $tipsExamPost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>