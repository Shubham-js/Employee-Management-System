<?php
	include 'header.php';
?>
<?php
	$login = false;
   if (isset($_GET['error'])) {
   		if ($_GET['error'] == 'passworderror') {
   			$login=true;
   			echo '<div class="alert alert-danger" alert-dismissible">
   						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<strong>Password Does not Matched!!</strong>
				  </div>';
   		}elseif ($_GET['error'] == 'emptyfield') {
   			echo '<div class="alert alert-danger" alert-dismissible">
   						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<strong>Please fill out the required fields.</strong>
				  </div>';
   		}elseif ($_GET['error'] == 'invalidusername'){
   			echo '<div class="alert alert-danger" alert-dismissible">
   						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<strong>Username should involve only alphabetic characters.</strong>
				  </div>';
   		}elseif ($_GET['error'] == 'invalidnumber') {
   			echo '<div class="alert alert-danger" alert-dismissible">
   						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<strong>Invalid Mobile number.Please Check.</strong>
				  </div>';
   		}elseif ($_GET['error'] == 'invalidemail') {
   			echo '<div class="alert alert-danger" alert-dismissible">
   						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<strong>Please check your Email Format!!!.</strong>
				  </div>';
   		}elseif ($_GET['error'] == 'usernametaken') {
   				echo '<div class="alert alert-danger" alert-dismissible">
   						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<strong>Username Already Taken!!</strong>
				  </div>';
   		}
   }

?>

<div class="container ">
			<h3 class="text-center my-3">Employer Registeration form</h3>
			
				<form action="registeremployer.php"  method="POST">
					<div class="form-group col-md-6">
	    				<input type="text" class="form-control" placeholder="Employer name" value="<?php 
	    					if($login){
	    						echo $_GET['username'];
	    					}
	    				 ?>" name="username">
	 				</div>
	 				<div class="form-group col-md-6">
	    				<input type="text" class="form-control" placeholder="Enter Email" name="email" value="<?php
	    					if($login){
	    						echo $_GET['email'];
	    					}
	    				 ?>" >
	 				</div>
	 				<div class="form-group col-md-6">
	    				<input type="password" class="form-control" placeholder="Enter Password" minlength="6" name="password">
	 				</div>
	 				<div class="form-group col-md-6">
	    				<input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
	 				</div>
	 				<div class="form-group col-md-6">
	    				<input type="number" class="form-control" placeholder="Mobile Number" name="mobile">
	 				</div>
	 				<input type="submit" name="signup-submit" class="col-md-6 btn btn-primary btn-lg" value="Register">
	 			</form>
</div>

<?php
	include 'footer.php';
?>