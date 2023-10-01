<?php 
	session_start();
	include 'dbconnect.php';

	$Location = 'dashboards/indexAdmin.php';
	$redirect = 'register.php';
	

		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$college = $_POST['college'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$Role = "Student";
		// echo $name;

		print_r($_POST);

			if (!empty($name) && !empty($username) && !empty($email) && !empty($password) && !empty($cpassword)) 
			{
				if($password == $cpassword)
				{
					$hashedp = md5($password);
					$query = "SELECT * FROM `user` WHERE Username = $username";
					$statement = $connect->prepare($query);
					$statement->execute();
					$result = $statement->fetchAll();
					$count = $statement->rowCount();

					if ($count > 0) {
						header("Location: $redirect");
						// $error .= '<p class="text-danger media-body ml-4">username already exits</p>';
						//redirect
					}else{
						$query = "INSERT INTO `user`(`name`, `Email`, `Username`, `Password`, `Role`, `Class`) VALUES ('$name','$email','$username','$hashedp','$Role','$college'";
						$statement = $connect->prepare($query);
						$statement->execute();

						if ($statement) {
							// $query = "SELECT * FROM `user` WHERE Username = $username";
							// $statement = $connect->prepare($query);
							// $statement->execute();
							echo "Success";
							// if (if above query runs) {
							// 	set sessions here
							// 	header("Location: $Location");
							// }
						}
						
					}
				}else{
					$_SESSION['error'] = "mismatch";
					// header("Location: $redirect");					
				}
			}else{
				$_SESSION['error'] = "empty_fields";
				// header("Location: $redirect");
	}
	
?>