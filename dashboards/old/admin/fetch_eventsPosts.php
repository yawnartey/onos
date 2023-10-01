<?php

	include 'dbconnect.php';
	// events
	$query = "SELECT * FROM eventsAcads WHERE parent_eventsPost_id = '0' ORDER BY eventsPost_id DESC ";

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
		  		<b>'.$row["eventsPost_sender_name"].'</b>
		  		<span style = "color:#2196f3; font-size:13px;">'.$row["date"].'</span>
		  	</h4>
		  	<p>
		  		'.$row["eventsPost"].'
		  	</p>
				<p>
		  	 	<!-- <button class="btn btn-info btn-sm update" name="update" id="">Update</button> -->
		  	 	<!-- <button class="btn btn-danger btn-sm delete" name="delete" id="">Delete</button> -->
		  	</p><hr>
	  	</div>
	</div>';
	 $output .= get_eventsPost($connect, $row["eventsPost_id"]);
	}

	echo $output;

	function get_eventsPost($connect, $parent_id = 0, $marginleft = 0)
	{
		$query = "
		SELECT * FROM eventsAcads WHERE parent_eventsPost_id = '".$parent_id."'";
		$output = '';
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		$count = $statement->rowCount();
		if($parent_id == 0)
		{
		    $marginleft = 0;
		}
		else
		{
		    $marginleft = $marginleft + 48;
		}
		if($count > 0)
		{
		  foreach($result as $row)
		{
		   $output .= '
		   <div class="media wow fadeIn" data-wow-delay="0.2s" style="margin-left:'.$marginleft.'px">
		   		<div>
			    	<h6 class="media-heading font-bold dark-grey-text">
			    		<b>'.$row["eventsPost_sender_name"].'</b>
			    		<i style = "color:#2196f3; font-size:13px;">'.$row["date"].'</i>
			    	</h6>

				    <p>'.$row["eventsPost"].'</p><br>

				   	<div class="" align="right">
				    	<button type="button" class="btn btn-light-blue reply btn-sm" id="'.$row["eventsPost_id"].'">
				    		Reply to this comment
				    	</button>
				    </div>
			   </div>
		   </div>
		   ';
		   $output .= get_eventsPost($connect, $row["eventsPost_id"], $marginleft);
		  }
		 }
		return $output;
	}

?>
