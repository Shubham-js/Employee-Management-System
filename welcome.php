<?php
	include "header.php";
?>
<?php
	if (isset($_GET['login'])) {
		if ($_GET['login'] == 'success') {
			echo '<div class="alert alert-success" alert-dismissible">
   						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<strong>Login Done Successfully!!</strong>
				  </div>';
				session_start();
				echo "<h1 class='text-center'>Welcome ".$_SESSION['username']."</h1>";
		}
	}else{
		header("location: lemployer.php");
		exit();
	}

?>
<?php
	include "footer.php";
?>