<?php
	include 'header.php';
?>
<?php
	if (isset($_GET['signup'])) {
		if ($_GET['signup'] == 'success') {
			echo '<div class="alert alert-success" alert-dismissible">
   						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<strong>Registration Done Successfully!!Please Login to Continue..</strong>
				  </div>';
		}
	}
	
?>


	<div class="container">
		<label class="lead">To Login Click on button :</label><br>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open</button>
  <!-- The Modal -->
	  <div class="modal fade" id="myModal">
	    <div class="modal-dialog modal-md">
	      <div class="modal-content">
	      
	        <!-- Modal Header -->
	        <div class="modal-header">
	          <h4 class="modal-title" style="margin-left: auto;">Employer Login</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        
	        <!-- Modal body -->
	        <div class="modal-body">
	          		<form action="loginemployer.php" method="POST">
		 				<div class="form-group col-md-6">
		    				<input type="email" class="form-control" placeholder="Enter Email" name="email" required>
		 				</div>
		 				<div class="form-group col-md-6">
		    				<input type="password" class="form-control" placeholder="Enter Password" name="password" required>
		 				</div>
		 				<div class="modal-footer">

				          <button class="btn btn-secondary" name="lsubmit">Login</button>
				          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        </div>
		 			</form>
	        </div>
	        
	        <!-- Modal footer -->
	        
	        <a href="remployer.php" class="btn btn-lg btn-info">Dont have an account->Register</a>
	        <a href="#" class="btn btn-lg btn-danger">Forgot password</a>
	        
	      </div>
	    </div>
	  </div>
	  
</div>




<?php
	include 'footer.php';
?>