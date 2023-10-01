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
	<h4 class="mb-3 font-bold dark-grey-text wow fadeInUp" data-wow-delay="0.7s">
        <strong>'.$row["eventsPost_sender_name"].'</strong>
    </h4>
    <p class="wow fadeInUp" data-wow-delay="0.8s">
        by
        <a class="font-bold dark-grey-text">ONoS Team</a>, <span style = "color:#2196f3; font-size:13px; font-weight:bolder;">'.$row["date"].'</span>
    </p>

    <p class="dark-text wow fadeInUp" data-wow-delay="0.9s" style="font-size: 17px;">
      	'.$row["eventsPost"].'
    </p>
    <a class="btn btn-cyan btn-rounded btn-md wow fadeInUp" data-wow-delay="1.0s" data-toggle="modal" data-target="#dosMessages">
    	Read more
    </a>
    <hr class="mb-5">
	'
	;
	 // $output .= get_eventsPost($connect, $row["eventsPost_id"]);
	}

	echo $output;

?>
