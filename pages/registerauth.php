<?php 
	session_start();
	require 'db.php';

	$destination = '../dashboards/admin/indexAdmin.php';
	$redirect = 'register.php';
	

		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$college = $_POST['college'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$Role = "Student";
		// $hashedP = md5($password);
		// echo $name;

		// print_r($_POST);

			if (!empty($name) && !empty($username) && !empty($email) && !empty($password) && !empty($cpassword)) 
			{
				if ($password == $cpassword) {
						$query = "SELECT * FROM 'user' WHERE Username = $username";
						$result = mysqli_query($mysqli, $query);
						$raw = mysqli_num_rows($result);
						if ($raw > 0) {
							header("Location: $redirect");
						}else{
							$hashedP = md5($password);
							$query = "INSERT INTO `user`(`name`, `Email`, `Username`, `Password`, `Role`, `Class`) VALUES ('$name','$email','$username','$hashedP','student', '$college')";
							$query_run = mysqli_query($mysqli, $query);
							if ($query_run) {

								$query = "SELECT User_id, Role, Class FROM `user` WHERE Username = '$username'";
								$query_run = mysqli_query($mysqli, $query);

								while($row = $query_run->fetch_assoc())
								{
									$data = $row;
								}
								if (isset($data)) {
									var_dump($data);
									// $_SESSION['id'] = $data["User_id"];
									// $_SESSION['username'] = $Username;
									// $_SESSION['role'] = $data["Role"];
									// $_SESSION['class'] = $data["Class"];
								}
							}
						}
					}else{
						header("Location: $redirect");		
					}
			}else{
				header("Location: $redirect");
			}
?>