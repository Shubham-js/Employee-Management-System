<?php
	if(isset($_POST['lsubmit'])){
		include "connection.php";
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql= "SELECT * FROM `remployer` WHERE email='$email' ";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_num_rows($result);
		if ($row > 0) {
			while ($row1 = mysqli_fetch_assoc($result)) {
					if (password_verify($password, $row['password'])) {
						session_start();
						$_SESSION['username'] = $row1['name'];
						header("location: welcome.php?login=success&id=".$row1['id']);
						exit();
					}else{
							echo '<div class="alert alert-danger" alert-dismissible">
   						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<strong>Invalid Credentials!!</strong>
				  			</div>';
					}
			}
			}
			
		}
	else{
		header("location: lemployer.php");
		exit();
	}
?>