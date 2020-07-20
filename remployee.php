<?php
	include 'header.php';
?>

<div class="container ">
			<h3 class="text-center my-3">Employee Registeration form</h3>
			
				<form action="remployee.php" method="POST">
					<div class="form-group col-md-6">
	    				<input type="text" class="form-control" placeholder="Employer name" name="username">
	 				</div>
	 				<div class="form-group col-md-6">
	    				<input type="email" class="form-control" placeholder="Enter Email" name="email">
	 				</div>
	 				<div class="form-group col-md-6">
	    				<input type="password" class="form-control" placeholder="Enter Password" name="password">
	 				</div>
	 				<div class="form-group col-md-6">
	    				<input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
	 				</div>
	 				<div class="form-group col-md-6">
	    				<input type="text" class="form-control" placeholder="Mobile Number" name="mobile">
	 				</div>
	 				<div class="form-group col-md-6">
	    				<select class="col-md-12 py-2" name="emp">
	    					<option>Type of Employment</option>
	    					<option value="Internship">Internship</option>
	    					<option value="Apprenticeship">Apprenticeship</option>
	    					<option value="Trainee">Trainee</option>
	    					<option value="Probation">Probation</option>
	    					<option value="Fulltime Live Project">Fulltime Live Project</option>
	    					<option value="Contractual Placement">Contractual Placement</option>
	    					<option value="Regular Placement">Regular Placement</option>
	    					<option value="Consultant">Consultant</option>
	    				</select>
	 				</div>
	 				<div class="form-group col-md-6">
	    				<select class="col-md-12 py-2" name="emp">
	    					<option>Profile for employment</option>
	    					<option value="Internship">Internship</option>
	    					<option value="Apprenticeship">Apprenticeship</option>
	    					<option value="Trainee">Trainee</option>
	    					<option value="Probation">Probation</option>
	    					<option value="Fulltime Live Project">Fulltime Live Project</option>
	    					<option value="Contractual Placement">Contractual Placement</option>
	    					<option value="Regular Placement">Regular Placement</option>
	    					<option value="Consultant">Consultant</option>
	    				</select>
	 				</div>

	 				
	 				<input type="submit" name="signup-submit" class="col-md-6 btn btn-primary btn-lg" value="Register">
	 			</form>
</div>

<?php
	include 'footer.php';
?>