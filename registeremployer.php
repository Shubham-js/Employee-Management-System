<?php
	if (isset($_POST['signup-submit'])) {
			include "connection.php";
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			$mobile = $_POST['mobile'];
			
			if (empty($username) || empty($email) || empty($password) || empty($cpassword) || empty($mobile)) {
				header("location: remployer.php?error=emptyfield");
			}
			elseif($password != $cpassword){
				header("Location: remployer.php?error=passworderror&username=".$username."&email=".$email);
				exit();
			}elseif (!preg_match("/^[a-zA-Z]/",$username)) {
				header("Location: remployer.php?error=invalidusername&email=".$email);
				exit();
			}elseif (!preg_match('/^[0-9]{10}+$/', $mobile)) {
				header("Location: remployer.php?error=invalidnumber");
				exit();
			}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: remployer.php?error=invalidemail&username=".$username);
				exit();
			}else{
				$sql = "SELECT * FROM `remployer` WHERE name='$username';";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_num_rows($result);
				if ($row > 0) {
					header("location: remployer.php?error=usernametaken");
					exit();
				}else{
					$password = password_hash($password, PASSWORD_DEFAULT);
					$sql = "INSERT INTO `remployer` (`id`, `name`, `email`, `password`, `mobile`) VALUES (NULL, '$username', '$email', '$password', '$mobile');";
					$result = mysqli_query($conn,$sql);
					if ($result) {
						header("location: lemployer.php?signup=success");
						exit();
					}else{
						header("location: remployer.php?signup=error");
						exit();
					}
				}
			}
	}

	
	

?>