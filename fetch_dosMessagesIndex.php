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
	<span>
        <h3 class="mb-3 font-bold dark-grey-text wow fadeInRight" data-wow-delay="0.3s">
            <strong>'.$row["dosPost_sender_name"].'</strong>
        </h3>
        <p class="dark-text wow fadeInUp" data-wow-delay="0.5s" style="font-size: 17px;">
           '.$row["dosPost"].'
        </p>
        <p class="wow fadeInUp" data-wow-delay="0.6s">by
            <a class="font-bold dark-grey-text">Onos Team - For DOS</a>, <span style = "color:#2196f3; font-size:13px; font-weight:bolder;">'.$row["date"].'</span>
        </p>
        <a class="btn btn-primary btn-md wow fadeInUp" data-wow-delay="0.7s" data-toggle="modal" data-target="#dosMessages">
            Read more
        </a>
        <hr class="mb-5">
    </div> 
	';
	}

	echo $output;

 ?>