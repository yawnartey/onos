<?php
	session_start();
	include 'db.php';

	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$hashedP = md5($password);
	// print_r($_POST);
	// echo "imhere";
	if (!empty($username) && !empty($password)) 
	{
		$query = "SELECT * FROM user where Username = '$username' AND Password = '$hashedP'";
		$query_run = mysqli_query($mysqli, $query);

		$resultnum = mysqli_num_rows($query_run);

			if ($resultnum == 1) {
				while($row = $query_run->fetch_assoc())
					{
						$data = $row;
					}
					if (isset($data)) {
						// var_dump($data);
						$_SESSION['id'] = $data["User_id"];
						$_SESSION['username'] = $username;
						$_SESSION['role'] = $data["Role"];
						$_SESSION['class'] = $data["Class"];

						if ($data['Role'] == "student") 
						{

							header("Location: ../dashboards/users/index.php ");
						}elseif ($data['Role'] == "admin")
						{

							header("Location: ../dashboards/admin/indexAdmin.php ");
						}elseif ($data['Role'] == "DOS") {
							header("Location: ../dashboards/admin/indexAdmin.php ");
						}
						
					}
			}else{
				header("Location: login.php");
			}
	}else{
		header("location: login.php");
	}
?>