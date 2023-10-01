<?php

	include 'dbconnect.php';

	// dosmessages
	$query = "SELECT * FROM dos_messages WHERE parent_dosPost_id = '0' ORDER BY dosPost_id DESC ";

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
	$output .= '
	<div class="media wow fadeIn" data-wow-delay="0.2s">
	 	<div class="media-body ml-4">
		  	<h4 class="media-heading font-bold dark-grey-text">
		  		<b>'.$row["dosPost_sender_name"].'</b>
		  		<span style = "color:#2196f3; font-size:13px;">'.$row["date"].'</span>
		  	</h4>
		  	<p>
		  		'.$row["dosPost"].'
		  	</p><hr>
	  	</div>
	</div>';
	}
	echo $output;

?>
