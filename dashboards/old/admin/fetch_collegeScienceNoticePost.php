<?php

	include 'dbconnect.php';

	// events
	$query = "SELECT * FROM collegeScienceNotice WHERE parent_collegeScienceNoticePost_id = '0' ORDER BY collegeScienceNoticePost_id DESC ";

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
		  		<b>'.$row["collegeScienceNoticePost_sender_name"].'</b>
		  		<span style = "color:#2196f3; font-size:13px;">'.$row["date"].'</span>
		  	</h4>
		  	<p>
		  		'.$row["collegeScienceNoticePost"].'
		  	</p>
				<p>
		  	 	<!-- <button class="btn btn-info btn-sm update" name="update" id="">Update</button> -->
		  	 	<!-- <button class="btn btn-danger btn-sm delete" name="delete" id="">Delete</button> -->
		  	</p><hr>
	  	</div>
	</div>';
	 $output .= get_collegeScienceNoticePost($connect, $row["collegeScienceNoticePost_id"]);
	}

	echo $output;

	function get_collegeScienceNoticePost($connect, $parent_id = 0, $marginleft = 0)
	{
		$query = "
		SELECT * FROM collegeScienceNotice WHERE parent_collegeScienceNoticePost_id = '".$parent_id."'";
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
			    		<b>'.$row["collegeScienceNoticePost_sender_name"].'</b>
			    		<i style = "color:#2196f3; font-size:13px;">'.$row["date"].'</i>
			    	</h6>

				    <p>'.$row["collegeScienceNoticePost"].'</p><br>

				   	<div class="" align="right">
				    	<button type="button" class="btn btn-light-blue reply btn-sm" id="'.$row["collegeScienceNoticePost_id"].'">
				    		Reply to this comment
				    	</button>
				    </div>
			   </div>
		   </div>
		   ';
		   $output .= get_collegeScienceNoticePost($connect, $row["collegeScienceNoticePost_id"], $marginleft);
		  }
		 }
		return $output;
	}

?>
