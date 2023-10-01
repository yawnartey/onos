<?php 
	//edit.php
	include('dbconnect.php');

	$query = "
	SELECT * FROM dosmessage
	WHERE image_id = '".$_POST["image_id"]."'
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();

	foreach($result as $row)
	{
		$file_array = explode(".", $row["image_name"]);
		$output['image_name'] = $file_array[0];
		$output['image_title'] = $row["image_title"];
		$output['post_title'] = $row["post_title"];
		$output['post_content'] = $row["post_content"];
	}

	echo json_encode($output);
?>