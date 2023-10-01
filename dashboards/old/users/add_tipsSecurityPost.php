<?php 
	
	include 'dbconnect.php';
	// eventsSocialPosts
	$error = '';
	$tipsSecurityPost_name = '';
	$tipsSecurityPost_content = '';
	if(empty($_POST["tipsSecurityPost_name"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Title is required is required</p>';
	}
	else
	{
	 	$tipsSecurityPost_name = $_POST["tipsSecurityPost_name"];
	}

	if(empty($_POST["tipsSecurityPost_content"]))
	{
	 	$error .= '<p class="text-danger media-body ml-4">Message  is required</p>';
	}
	else
	{
	 	$tipsSecurityPost_content = $_POST["tipsSecurityPost_content"];
	}

	if($error == '')
	{
		$query = "INSERT INTO tipsSecurity (parent_tipsSecurityPost_id, tipsSecurityPost, tipsSecurityPost_sender_name) VALUES (:parent_tipsSecurityPost_id, :tipsSecurityPost, :tipsSecurityPost_sender_name)";
		$statement = $connect->prepare($query);
		$statement->execute(
		array(
		   ':parent_tipsSecurityPost_id' => $_POST["tipsSecurityPost_id"],
		   ':tipsSecurityPost'    => $tipsSecurityPost_content,
		   ':tipsSecurityPost_sender_name' => $tipsSecurityPost_name
		  )
		);
		$error = '<label class="text-success"></label>';
	}

	$data = array(
	 'error'  => $error
	);

	echo json_encode($data);
 ?>