<?php

	include 'dbconnect.php';

	// events
	$query = "SELECT * FROM notice WHERE parent_noticePost_id = '0' ORDER BY noticePost_id DESC ";

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
	$output .= '
	<h3 class="mb-3 font-bold dark-grey-text wow fadeInRight" data-wow-delay="0.6s">
        <strong>'.$row["noticePost_sender_name"].'</strong>
    </h3>
     <p class="dark-text wow fadeInUp" data-wow-delay="0.7s" style="font-size: 17px;">
        '.$row["noticePost"].'
    </p>
    <p class="wow fadeInUp" data-wow-delay="0.7s">by
        <a class="font-bold dark-grey-text">Onos Team - For News and Events</a>, <span style = "color:#2196f3; font-size:13px; font-weight:bolder;">'.$row["date"].'</span>s
    </p>
    <a class="btn btn-primary btn-md wow fadeInUp" data-wow-delay="0.6s" data-toggle="modal" data-target="#dosMessages">Read more</a>
    <hr class="mb-5">
	';
	}

	echo $output;

?>
